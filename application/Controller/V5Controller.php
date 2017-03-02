<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

class V5Controller//home
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        //php stuff
        $myClass = new accountClass();
        // load views
        require APP . 'view/_myTemplates/header.php';
        require APP . 'view/myContent/index.php';
        require APP . 'view/_myTemplates/footer.php';
    }
}
