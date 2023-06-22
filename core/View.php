<?php
namespace Core  ;

class View {
 public static  function render($url,$input=[],$category_name=[]) {
    $filename  = ROOT.DS.$url  ;
    if (file_exists($filename) ){ 
    extract($input) ;
    extract($category_name) ;
    include $filename ;
    } 
    else {
      View::render("app/view/main/404.php");
    }
 }
}
