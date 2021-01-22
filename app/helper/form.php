<?php

function post($name)
{
    if (isset($_POST[$name])){
        if (is_array($_POST[$name]))
            return array_map(function($item){
                return htmlspecialchars(trim($item));
            }, $_POST[$name]);
        return htmlspecialchars(trim($_POST[$name]));
    }
}/* $_POST[] metodunu post() şeklinde bir
fonksiyona çevirdim bununla birlikte artık get işlemi yapmama  gerek kalmayacak. */




if(@$_SESSION["admin_id"]){ 
    $misafirid=$_SESSION["admin_id"];
    }// Giriş yapmış kullanıcının idsini $misafirid şeklinde almamıza yarar 