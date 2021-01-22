<?php

require __DIR__ . '/app/init.php';//İnit.phpyi sayfamıza dahil ettik init.php içindeki tüm classlar fonksiyonlar değişkenler ve veritabanı bağlantımızı yaptık bu sayede.

$route = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));
/*Route işlemini yani link kısmımızı düzenledik. Bizim link kısmımız localhost/a/b şeklinde  route("0") yazarsak a'yi alırız 
route("1") yazarsak byi alırız. Bu sayede düzgün bi link yapısına sahip oluruz bu arada normalde $route[0] diye yazılır fakat biz yazdığımız yardımcı fonksiyon ile bunu basitleştirip route("0") şeklinde getirdik.  */



if (isset($misafirid)){//Eğer Kullanıcının id'si varsa yani giriş yapmışsa aşağıdaki işlemleri yap

if (!route(0)){
    $route[0] = 'admin';//Route(0) yoksa yani link kısmımız sadece www.localhost şeklindeyse o zaman admin sayfasına yönlendir.
}
elseif(route(0) =='admin_giris') {//Eğer route("0")==giris_kayita eşitse yani localhost/giris_kayit ise bunu admin yap yani localhost/admin yap böylece giriş yapmış kullanıcı tekrardan giriş sayfasına gidemez.
	 $route[0] = 'admin';

}
elseif (route(0)=='index') {//Eğer  index sayfasına dönmek isterlerse onları admin paneline yönlendir. yani route("0") index olursa route("0")ı admin yap yani localhost/admin
	$route[0] = 'admin';
}


}
else{ $route[0] = 'admin_giris';//Eğer Kullanıcının id'si yoksa yani giriş yapmamışsa onu siteye girdirtme route(0)ı giris_kayit yap yani localhost/giris_kayit oldu.
}

require controller(route(0)); //app/controller içindeki dosyalara gir ve ordan route(0)da ne varsa onu getir yani route(0) adminse app/controller/admin.phpyi getir. 