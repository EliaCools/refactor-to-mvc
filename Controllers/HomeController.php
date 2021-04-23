<?php


class HomeController
{

    public function render(array $GET, array $POST): void
    {


        $_POST['title'] = "home";

        require 'View/homepage.php';

    }


}
