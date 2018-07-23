<?php

class Route
{
    private $routes;
    private $controllers_dir = 'controllers/';
    private $model;
    private $url;

    public function __construct()
    {
        $routesPath = ROOT.DS.'config'.DS.'routes.php';
        $this->routes = require ($routesPath);
        $this->url = parse_url(strtolower(trim($_SERVER['REQUEST_URI'],'')));
        $this->model = new ModelActive();

        if (!isset($_SESSION['name'])) {
            $remove_User = new ModelActive();
            $change_Menu = new ModelMenu();

            $remove_User->removeUser();
            $change_Menu->updateItemList(false);

        }

        if (!empty($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/' ) {
            if ($this->url['path'] != '/registration' && $this->model->getUser() != true) {
                $this->url['path'] = '/authorization';
            }
        }

    }

    public function run() {
        if ($this->url) {
            if(file_exists($this->controllers_dir.$this->routes[$this->url['path']] . '.php')) {

                require $this->controllers_dir.$this->routes[$this->url['path']] . '.php'; //controllers/ControllerProductsrollerProducts.php

                $controllerClass = new $this->routes[$this->url['path']](); // new ControllerProducts();

                if(method_exists($controllerClass,'fetch')) {
                    print $controllerClass->fetch();
                } else {
                    Route::Error404();
                }
            }  else {
                Route::Error404();
            }
        }
    }

    public function Error404()
    {
        require $this->controllers_dir.'Error404.php';
        $controllerError = new Error404();

        if(method_exists($controllerError,'fetch')) {
            print $controllerError->fetch();
        } else {
            Route::Error404();
        }
    }
}