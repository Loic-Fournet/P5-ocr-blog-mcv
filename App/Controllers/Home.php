<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\FrontController
{
    public function indexAction()
    {
        var_dump("test8");
        View::renderTemplate('Home/index.html');
    }
}
