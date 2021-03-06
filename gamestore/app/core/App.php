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

        $parameter=null;
        if(!isset($parts[3]) || $parts[3]===''){
            $parameter=null;
        }else{
            $parameter=$parts[3];
        }

        //echo $class . '->' . $method . '();';

        if(class_exists($class) && method_exists($class,$method)){
            $instance = new $class();
            if($parameter==null){
                $instance->$method();
            }else{
                $instance->$method($parameter);
            }
            
        }else{
            //
            $view = new View();
            $view->render('error404',[
                'whatisnotthere' =>$class . '->' . $method
            ]);
            
        }

        //$controller = new IndexController();
        //$controller->index();

    }

    public static function config($key)
    {
        $config = include BP_APP . 'configuration.php';
        return $config[$key];
    }

    public static function authorized()
    {
        if(isset($_SESSION) && isset($_SESSION['authorized'])){
            return true;
        }

        return false;
    }
}