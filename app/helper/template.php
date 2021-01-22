<?php    /*link yapısını kolaylaştıracak şeyler.*/
 
function site_url($url = false)
{
    return URL . '/' . $url;
}

function public_url($url = false)
{
    return URL . '/public/' . $url;
}

function view_url($viewName){
    return PATH . '/app/view/' . $viewName . '.php';}



