<!-- İnit dosyası içinde classlar, helper dosyaları yani yardımcı dosyalar vs çağrılır sonra init dosyasını indexte çağırırız ve tüm dosyalarımıza init.php dahil edilmiş olur. Session vsde  burda tutulur -->
<?php

session_start();
ob_start();//oturumu başlat.

function loadClasses($className)//classes klasörü altındaki tüm sınıfları sayfaya yükletme
{
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}
spl_autoload_register('loadClasses');//classes klasörü altındaki dosyalara
     // loadclasses(isim) yazdığımız isimli clası ekler. 

$config = require __DIR__ . '/config.php';

try {
    $db = new PDO('mysql:host=' . $config['db']['host']  .';charset=utf8' . ';dbname=' . $config['db']['name'], $config['db']['user']);
} catch (PDOException $e){
    die($e->getMessage()); //burdaki değişkenler config içinden alındı.
}

/*----------------------------------------------------------------------------*/
foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){
    require $helperFile; 
}//Helper Dosyası içindeki her şeyi sayfaya dahil ettim.
