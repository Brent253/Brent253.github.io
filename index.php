<?php
/*
session_start();
include_once("db.php");
*/
//Require the autoload file
require_once('vendor/autoload.php');
//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
     $view = new View;
    echo $view->render('view/home.html');
  }
);

         //Define a route to the about page
    $f3->route('GET /about', function() {
                $view = new View;
                //Route to about.html
                echo $view->render('view/about.html');
            }
    );

        //Define a route to blog page
    $f3->route('GET /blog', function() {
                $view = new View;
                //Route to blog.html
                echo $view->render('view/blog.html');
            }
    );
    
         //Define a route to create an account
    $f3->route('GET /projects', function() {
                $view = new View;
                //Route to projects.html
                echo $view->render('view/projects.html');
            }
    );

//Run fat free
$f3->run();
