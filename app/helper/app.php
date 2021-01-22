<?php

function controller($controllerName){ 
    $controllerName = strtolower($controllerName);
    return PATH . '/app/controller/' . $controllerName . '.php';
}//Bu fonksiyon ile controller klasörü altındaki ögelere erişebiliriz

function view($viewName){
    return PATH . '/app/view/' . $viewName . '.php';
}//Bu fonksiyon ile view klasörü altındaki ögelere erişebiliriz 

function route($index) 
{
    global $route;
    return isset($route[$index]) ? $route[$index] : false;
}//url yönlendirmesi yapmak için kullanılırız