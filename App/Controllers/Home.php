<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\FrontController
{
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }
}
