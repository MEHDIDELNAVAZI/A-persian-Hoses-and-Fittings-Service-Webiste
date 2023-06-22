<?php

namespace  Core;

class  Routing
{
  public  $params = [];
  public function router($url)
  {
    ##somtime thr user put / at the end of the routing system for example /home/
    ##we want to remoce that / from the end of the url 
    $url = trim($url, "/");
    include "routing_map.php";
    foreach ($map as $route) {
      if (preg_match($route['pattern'], $url, $match)) {

        if (isset($match['athen'])) {
          if ($route['init'] != "") {
            $match = array_merge($match, $route['init']);
          }
        }
        if (count($match) <= 3) {
          $match = array_merge($match, $route['init']);
        }
        break;
      }
    }

    ##we have to analise the url and seperate  url to controller and action
    ## it means  at first the name of the controller  the classname and after that the action tht 
    ## should run due to the url action 
    ## for example  :  home/add_order  the controller  is home and the  action is add_order 
    ## we have 3  types  if we have just one section  like  home 
    ## or we have 2section like home/add_order  
    ## or 3 or more section 
    if (isset($match['params'])) {
      $this->params = explode("/", $match['params']);
    }

    if (empty($match['athen'])) {
      $controller = $this->classmaker(($match['controller']));
      $controller = 'app\\controller\\' . $controller;
    } else {

      if ($match['athen'] == "admin") {
        $controller = $this->classmaker(($match['controller']));
        $controller = 'app\\controller\\admin\\' . $controller;
      }
      if ($match['athen'] == "search") {
        $controller = $this->classmaker(($match['controller']));
        $controller = 'app\\controller\\search\\' . $controller;
      }
      if ($match['athen'] == "ajax") {
        $controller = $this->classmaker(($match['controller']));
        $controller = 'app\\controller\\ajax\\' . $controller;
      }
      if ($match['athen'] == "product") {
        $controller = $this->classmaker(($match['controller']));
        $controller = 'app\\controller\\product\\' . $controller;
      }
    }


    if (class_exists($controller, true)) {
      $class_ins = new  $controller($this->params);
      $action = $this->mathod_maker($match['action']);

      if (method_exists($class_ins, $action)) {
        $class_ins->$action();
      } else {
        View::render("app/view/main/404.php");
      }
    } else {
      View::render("app/view/main/404.php");
    }
  }

  private function  classmaker($class_name)
  {
    $class_name = str_replace("-", " ", $class_name);
    return str_replace(" ", '', ucwords($class_name));
  }

  private function mathod_maker($method)
  {
    $method = str_replace("-", " ", $method);
    return str_replace(" ", '', ucwords($method));
  }
}
