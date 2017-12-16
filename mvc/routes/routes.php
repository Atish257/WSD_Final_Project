<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:25 PM
 */

class routes
{

    public static function getRoutes()
    {
        //bellow adds routes to your program, routes match the URL and request method with the controller and method.
        //You need to follow this pattern to add new URLS
        //You should improve this function by making functions to create routes in a factory. I will look for this when grading

        //I also use object for the route because it has data and it's easier to access.

        $routes[] = self::create('GET','show','homepage','homepageController','show');
        $routes[] = self::create('POST','create','homepage','homepageController','create');

        //This is an examole of the post for tasks to show a task
        //GET METHOD index.php?page=tasks&action=show
       /*$route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';*/
        $routes[] = self::create('GET','show','tasks','tasksController','show');

        //This is an examole of the post for tasks to list tasks.  See the action matches the method name.
        //you need to add routes for create, edit, and delete
        //GET METHOD index.php?page=tasks&action=all

        /*$route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';*/
        $routes[] = self::create('GET','all','tasks','tasksController','all');
        //GET METHOD index.php?page=accounts&action=all
//https://web.njit.edu/~kwilliam/mvc/index.php?page=accounts&action=all

        /*$route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'all';*/
        $routes[] = self::create('GET','all','accounts','accountsController','all');
        //GET METHOD index.php?page=accounts&action=show

        /*$route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';*/
        $routes[] = self::create('GET','show','accounts','accountsController','show');

        //This goes in the login form action method
        //GET METHOD index.php?page=accounts&action=login


        /*$route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';*/
        $routes[] = self::create('POST','login','accounts','accountsController','login');

        //YOU WILL NEED TO ADD MORE ROUTES

        /*$route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';*/
        $routes[] = self::create('POST','delete','tasks','tasksController','delete');


        /*$route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'delete';*/
        $routes[] = self::create('POST','delete','accounts','accountsController','delete');

        /*$route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit';*/
        $routes[] = self::create('GET','edit','accounts','accountsController','edit');

        /*$route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'save';*/
        $routes[] = self::create('POST','save','accounts','accountsController','save');

        /*$route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'save';*/
        $routes[] = self::create('POST','save','tasks','tasksController','save');
        //this is the route for the reg form
        /*$route = new route();
        $route->http_method = 'GET';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'register';*/
        $routes[] = self::create('GET','register','accounts','accountsController','register');
        //this handles the reg post to create the user
        /*$route = new route();
        $route->http_method = 'POST';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';*/
        $routes[] = self::create('POST','register','accounts','accountsController','store');


        return $routes;
    }

    public static function create($http_method,$action,$page,$controller,$method) {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
        return $route;
    }
}

//this is the route prototype object  you would make a factory to return this

class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}