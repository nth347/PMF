<?php

namespace App\Controllers;

use \Core\View;

/**
 * Post controller
 *
 * PHP version 7.4
 */
class Home extends \Core\Controller
{
    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        echo "(before) ";
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        // View::render('Home/index.php', ['name'    => 'nth347', 'colours' => ['red', 'green', 'blue']]);
        View::renderTemplate('Home/index.html', ['name' => 'nth347', 'colours' => ['red', 'green', 'blue']]);
    }
}