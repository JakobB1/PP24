<?php

class App
{
    public static function start()
    {
        //echo '<pre>';
        //print_r($_SERVER);
        //echo '</pre>';
        $route = Request::getRoute();
        //echo $route;

        $parts = explode('/',$route);

        //echo '<pre>';
        //print_r($parts);
        //echo '</pre>';

        $class='';
        if(!isset($parts[1]) || $parts[1]===''){
            $class='Index';
        }else{
            $class=ucfirst($parts[1]);
        }
        $class .= 'Controller';
        //echo $class;

        $method='';
        if(!isset($parts[2]) || $parts[2]===''){
            $method='index';
        }else{
            $method=$parts[2];
        }

        //echo $class . '->' . $method . '();';

        if(class_exists($class) && method_exists($class,$method)){
            $instance = new $class();
            $instance->$method();
        }else{
            //
            echo $class . '->' . $method . '() does not exist';
        }

        //$controller = new IndexController();
        //$controller->index();

    }
}