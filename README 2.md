## Documentation

This comprehensive documentation explains the file and directory structure of a simple BPL MVC-based application, along with the usage of relevant classes and methods. It includes examples and explanations for each component.

### File and Directory Structure

- `index.php`: The entry point of the BPL MVC application.
- `BaseModel.php`: The base model class for interacting with the database.
- `BaseController.php`: The base controller class for handling requests and views.
- `db_object.php` and `Db.class.php`: Classes for database access (MysqliDb DAL).
- `routes.php`: Defines the routes for mapping URLs to controller methods.
- `.htaccess`: Configuration file for URL rewriting and routing.
- `views/`: Directory for view files.
- `controllers/`: Directory for controller class files.
- `models/`: Directory for model class files.

### `index.php`

The `index.php` file serves as the entry point for the BPL MVC application. It handles the initialization, route handling, and request dispatching.

```php
<?php
session_start();
require_once "BaseController.php";
require_once "BaseModel.php";

// Include all model class files
try {
    foreach (glob(__DIR__ . '/models/*.php') as $model_file) {
        require_once $model_file;
    }
} catch (Throwable $e) {
    $error = $e->getMessage();
    exit();
}

// Define the routes
require_once "routes.php";

// Handle the current request
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri = $uri_parts[0];

// Loop through the defined routes to find a matching one
foreach ($routes as $prefix => $handler) {
    // Check if the route is a prefix with multiple routes or a single route
    if (is_array($handler)) {
        // Handle routes for this prefix
        $uri_prefix = rtrim($prefix, '/');
        $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
        $uri = $uri_parts[0];

        if (strpos($uri, $uri_prefix) === 0) {
            // Remove the prefix from the URI
            $uri = substr($uri, strlen($uri_prefix));
            if ($uri === false || empty($uri)) {
                $uri = '/';
            }

            // Loop through routes for this prefix
            foreach ($handler as $route => $handler) {
                // Replace placeholders with regex patterns to match dynamic parts
                $route_regex = str_replace('/', '\/', $route);
                $route_regex = preg_replace('/:(\w+)/', '(?P<$1>[^\/]+)', $route_regex);
                $route_regex = '/^' . $route_regex . '$/';

                // Check if the current URI matches the route pattern
                if (preg_match($route_regex, $uri, $matches)) {
                    $handler_parts = explode('@', $handler);
                    $controller = $handler_parts[0];
                    $method = $handler_parts[1];

                    // Load the controller and call the appropriate method with the dynamic parts as arguments
                    require_once('controllers/' . $controller . '.php');
                    $controller_instance = new $controller();
                    $args = array_intersect_key($matches, array_flip(array_filter(array_keys($matches), 'is_string')));
                    $controller_instance->$method(...$args);
                    exit();
                }
            }
        }
    } else {
        // Handle the route directly
        $route_regex = str_replace('/', '\/', $prefix);
        $route_regex = preg_replace('/:(\w+)/', '(?P<$1>[^\/]+)', $route_regex);
        $route_regex = '/^' . $route_regex . '$/';

        // Check if the current URI matches the route pattern
        if (preg_match($route_regex, $_SERVER['REQUEST_URI'], $matches)) {
            $handler_parts = explode('@', $handler);
            $controller = $handler_parts[0];
            $method = $handler_parts[1];

            // Load the controller and call the appropriate method with the dynamic parts as arguments
            require_once('controllers/' . $controller . '.php');
            $controller_instance = new $controller();
            $args = array_intersect_key($matches, array_flip(array_filter(array_keys($matches), 'is_string')));
            $controller_instance->$method(...$args);
            exit();
        }
    }
}

// Display a 404 error page if no matching route was found
header('HTTP/1.0 404 Not Found');
echo '404 Not Found';
```

The `index.php` file contains the following sections:

1. Starting a session to enable session functionality.
2. Requiring the `BaseController.php` and `BaseModel.php` files.
3. Including all model class files using `glob()` to match files in the `models/` directory.
4. Defining the routes by including the `routes.php` file.
5. Handling the current request by parsing the URI, looping through the defined routes, and finding a matching route.
6. If a matching route is found, the associated controller and method are loaded, and the method is called with any dynamic parts from the URL passed as arguments.
7. If no matching route is found, a 404 error page is displayed.

### `BaseModel.php`

The `BaseModel` class serves as the base model class for interacting with the database. It extends the `BaseController` class to utilize its methods.

```php
<?php
require_once "Db.class.php";

class BaseModel extends BaseController
{
    public $db;

    function __construct()
    {
        parent::__construct();
        $this->db = new MysqliDb("localhost", "root", "your_new_password", "internworld");
    }
}
```

The `BaseModel` class contains the following:

1. Requiring the `Db.class.php` file for database access.
2. Defining the `BaseModel` class that extends the `BaseController` class.
3. Creating a `$db` property to hold an instance of the `MysqliDb` class.
4. Implementing the constructor that initializes the `$db` property with the database connection details.

### `BaseController.php`

The `BaseController` class serves as the base controller class for handling requests and views. It provides various methods for common tasks.

```php
<?php
class BaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function render($view_file, $data = array())
    {
        $this->view->render($view_file, $data);
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit();
    }

    protected function input($name, $default = null)
    {
        return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $default;
    }

    protected function get($name, $default = null)
    {
        return isset($_GET[$name]) ? $_GET[$name] : $default;
    }

    protected function post($name, $default = null)
    {
        return isset($_POST[$name]) ? $_POST[$name] : $default;
    }

    protected function load_helper($helper_name)
    {
        $helper_class = ucfirst($helper_name);
        $this->load->register

($helper_class, 'helpers/' . $helper_name . '.php');
        return new $helper_class();
    }

    protected function load_library($library_name)
    {
        $library_class = ucfirst($library_name);
        $this->load->register($library_class, 'libraries/' . $library_name . '.php');
        return new $library_class();
    }

    protected function is_post_request()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    protected function is_get_request()
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    protected function redirect_with_error($url, $error_message)
    {
        $_SESSION['error_message'] = $error_message;
        header("Location: $url");
        exit();
    }

    public function clean_input($input)
    {
        if (empty($input))
            return false;
        $search = array(
            '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
            '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
            '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
            '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
        );
        $output = preg_replace($search, '', $input);
        $output = htmlspecialchars($output);  // Convert special characters to HTML entities
        return $output;
    }
}
```

The `BaseController` class contains the following methods:

- `__construct()`: The constructor that initializes the `$view` property with a new instance of the `View` class.
- `render($view_file, $data = array())`: Renders the specified view file with the given data.
- `redirect($url)`: Redirects the user to the specified URL.
- `input($name, $default = null)`: Retrieves the value of a request parameter (`$_REQUEST`) by name, with an optional default value if the parameter is not found.
- `get($name, $default = null)`: Retrieves the value of a GET parameter (`$_GET`) by name, with an optional default value if the parameter is not found.
- `post($name, $default = null)`: Retrieves the value of a POST parameter (`$_POST`) by name, with an optional default value if the parameter is not found.
- `load_helper($helper_name)`: Loads a helper file and returns an instance of the helper class.
- `load_library($library_name)`: Loads a library file and returns an instance of the library class.
- `is_post_request()`: Checks if the current request method is POST.
- `is_get_request()`: Checks if the current request method is GET.
- `redirect_with_error($url, $error_message)`: Redirects the user to the specified URL and stores an error message in the session.
- `clean_input($input)`: Sanitizes input by removing potential malicious code.

### `View` Class

The `View` class is responsible for rendering view files.

```php
<?php
class View
{
    protected $data = array();

    public function __construct()
    {
    }

    public function render($view_file, $data = array(), $use_smarty = false)
    {
        extract($data);
        $file_path = 'views/' . $view_file . '.php';
        if (file_exists($file_path)) {
            require_once $file_path;
        } else {
            echo "View not found: " . $view_file;
        }
    }
}
```

The `View` class contains the following methods:

- `__construct()`: The constructor for the `View` class.
- `render($view_file, $data = array(), $use_smarty = false)`: Renders the specified view file with the given data. It uses `extract()` to make the data available as variables within the view file. If the view file does not exist, an error message is displayed.

### `routes.php`

The `routes.php` file defines the routes for mapping URLs to controller methods.

```php
<?php
if (!defined('APPLICATION_LOADED') || !APPLICATION_LOADED) {
    die(json_encode(array("status" => "fail", "code" => "503", "message" => "Invalid request")));
}

$routes = array(
    "/" => "HomeController@login",
    "/dashboard" => "HomeController@index",
);
```

The `routes.php` file contains an array named `$routes` that defines the routes. Each route consists of a URL pattern as the array key and a string indicating the controller and method to handle the request.

### `.htaccess`

The `.htaccess` file is used for URL rewriting and routing in the application.

```apacheconf
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>
	<Files .env>
       Order allow,deny
       Deny from all
    </Files>

    <Files laravel.log>
       Order allow,deny
       Deny from all
    </Files>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

The `.htaccess` file contains Apache configuration directives for URL rewriting and routing. It enables the use of clean URLs and ensures that all requests are routed through the `index.php` file.

## Example Usage

To demonstrate the usage of the BPL BPL MVC application, let's consider an example scenario where we have a `HomeController` responsible for handling requests related to the home page.

### `HomeController`

The `HomeController` class extends the `BaseController` class and handles requests for the home page.

```php
<?php
class HomeController extends BaseController
{
    public function login()
    {
        // Logic for handling the login page
        $this->render('login');
    }

    public function index()
    {
        // Logic for handling the dashboard page
        $this->render('dashboard');
    }
}
```

In this example, the `HomeController` class contains two methods:

- `login()`: Handles the request for the login page. It can perform any necessary login-related logic and renders the `login` view.
- `index()`: Handles the request for the dashboard page. It can perform any necessary logic for the dashboard and renders the `dashboard` view.

### View Files

The `views/` directory contains the view files associated with the `HomeController`:

- `login.php`: The view file for the login page.
- `dashboard.php`: The view file for the dashboard page.

You can create these view files in the `views/` directory and customize them according to your application's requirements.

To run the BPL MVC application:

1. Set up a web server (e.g., Apache)

 with PHP support.
2. Configure the web server to point to the directory containing the BPL MVC application files.
3. Access the application through the defined routes or by directly visiting the associated URLs (e.g., `http://localhost/`, `http://localhost/dashboard`).

When a user accesses the home page (`/`), the `HomeController@login` method is called, and the `login` view is rendered. Similarly, when the user accesses the dashboard page (`/dashboard`), the `HomeController@index` method is called, and the `dashboard` view is rendered.

### Example 1: Adding Data to Database from POST Request

```php
// HomeController.php
class HomeController extends BaseController
{
    public function addPost()
    {
        if ($this->is_post_request()) {
            $title = $this->clean_input($this->post('title'));
            $content = $this->clean_input($this->post('content'));

            // Validate the input

            // Create a new instance of the PostModel
            $postModel = $this->load_model('PostModel');

            // Add the post to the database
            $postModel->addPost($title, $content);

            $this->redirect('/posts');
        } else {
            $this->redirect('/'); // Redirect to an error page or home page
        }
    }
}
```

### Example 2: Updating Data in the Database

```php
// HomeController.php
class HomeController extends BaseController
{
    public function updatePost($postId)
    {
        if ($this->is_post_request()) {
            $title = $this->clean_input($this->post('title'));
            $content = $this->clean_input($this->post('content'));

            // Validate the input

            // Create a new instance of the PostModel
            $postModel = $this->load_model('PostModel');

            // Update the post in the database
            $postModel->updatePost($postId, $title, $content);

            $this->redirect('/posts');
        } else {
            $this->redirect('/'); // Redirect to an error page or home page
        }
    }
}
```

### Example 3: Retrieving Data from the Database

```php
// HomeController.php
class HomeController extends BaseController
{
    public function viewPost($postId)
    {
        // Create a new instance of the PostModel
        $postModel = $this->load_model('PostModel');

        // Retrieve the post from the database
        $post = $postModel->getPost($postId);

        // Pass the post data to the view
        $this->render('post', ['post' => $post]);
    }
}
```

### Example 4: Deleting Data from the Database

```php
// HomeController.php
class HomeController extends BaseController
{
    public function deletePost($postId)
    {
        // Create a new instance of the PostModel
        $postModel = $this->load_model('PostModel');

        // Delete the post from the database
        $postModel->deletePost($postId);

        $this->redirect('/posts');
    }
}
```

In these examples, the `HomeController` class is used to handle the corresponding actions. It interacts with the `PostModel` class to perform database operations such as adding, updating, retrieving, and deleting data. You can replace `'PostModel'` with the appropriate model class name in each example.

Remember to define the necessary routes in the `routes.php` file to map these actions to the respective controller methods.
Certainly! Here's an example implementation of the `PostModel` class to demonstrate the database operations mentioned in the previous examples:

```php
// PostModel.php
class PostModel extends BaseModel
{
    public function addPost($title, $content)
    {
        // Insert a new post into the "posts" table
        $data = array(
            'title' => $title,
            'content' => $content
        );
        $this->db->insert('posts', $data);
    }

    public function updatePost($postId, $title, $content)
    {
        // Update an existing post in the "posts" table
        $data = array(
            'title' => $title,
            'content' => $content
        );
        $this->db->where('id', $postId);
        $this->db->update('posts', $data);
    }

    public function getPost($postId)
    {
        // Retrieve a single post from the "posts" table
        $this->db->where('id', $postId);
        return $this->db->getOne('posts');
    }

    public function deletePost($postId)
    {
        // Delete a post from the "posts" table
        $this->db->where('id', $postId);
        $this->db->delete('posts');
    }
}
```

In this example, the `PostModel` class extends the `BaseModel` class, which provides access to the database using the `MysqliDb` class. The `PostModel` class defines the following methods:

- `addPost($title, $content)`: Inserts a new post into the `posts` table by creating an associative array of data and using the `insert()` method provided by `MysqliDb`.
- `updatePost($postId, $title, $content)`: Updates an existing post in the `posts` table by creating an associative array of data, specifying the `id` of the post using the `where()` method, and using the `update()` method provided by `MysqliDb`.
- `getPost($postId)`: Retrieves a single post from the `posts` table by specifying the `id` of the post using the `where()` method and using the `getOne()` method provided by `MysqliDb`.
- `deletePost($postId)`: Deletes a post from the `posts` table by specifying the `id` of the post using the `where()` method and using the `delete()` method provided by `MysqliDb`.

Make sure to include the `PostModel.php` file in your application and adjust the database table name and column names as per your specific setup.

With this `PostModel` implementation, you can now use the `addPost()`, `updatePost()`, `getPost()`, and `deletePost()` methods in the `HomeController` class to interact with the database and perform the desired operations.
