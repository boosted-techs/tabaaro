<?php
class HomeController extends BaseController
{
    function index()
    {
        $this->view->render("home");
    }

    function contactUs()
    {
        $this->view->render("contact");
    }
    function about()
    {
        $this->view->render("about");
    }

    function digital()
    {
        $this->view->render("programs/digital");
    }

    function women()
    {
        $this->view->render("programs/women");
    }
    function girl_child()
    {
        $this->view->render("programs/girl_child");
    }
    function nutriotion()
    {
        $this->view->render("programs/nutriotion");
    }
    function about_us()
    {
        $this->view->render("about-us");
    }
    function get_involved()
    {
        $this->view->render("get-involved");
    }
    function donate()
    {
        $this->view->render("donate");
    }
    function projects()
    {
        $this->view->render("projects/project");
    }

    function donate_list()
    {
        $this->view->render("donate_list");
    }

    function our_team()
    {
        $this->view->render("our_team");
    }

    function shop()
    {
        $this->view->render("shop");
    }

    function health_program()
    {
        $this->view->render("programs/health_progam");
    }
    function cleanWater()
    {
        $this->view->render("programs/clean-water");
    }

    function youthMentorship()
    {
        $this->view->render("programs/youth-mentorship");
    }
    function sendEmail()
    {
        print_r($_POST);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $e = "no-reply@sympathyafrica.org";
        $pwd = "?[k*oBuAcwEg";
    }

    function volunteer (){
        print_r($_POST);
    }
}
