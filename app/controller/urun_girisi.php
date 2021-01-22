<?php

if (post("submit")){
	$urun =  post("urun_ad");
	$kategori = post("kategori");
	$urun_fiyat = post("urun_fiyat");
	$stok = post("stok");
	$birimi = post("birim");
	if (!$urun){
		$error= "Ürün adı Girilmedi.";
	}

	elseif (!$kategori){
		
		$error= "Kategori türü Girilmedi";
	}


	elseif (!$urun_fiyat){
		
		$error= "Ürün fiyatı Girilmedi";
	}

	elseif (!$stok){
		$error= "Ürün miktarı Girilmedi";
	}

	elseif (!$birimi){
		$error= "Birim türü Girilmedi";
	}


else{

$query = $db->query("SELECT * FROM urun_kayit WHERE urun_ad = '{$urun}'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
    $error="Böyle bi kayıt zaten mevcut.";}

	else{

$query = $db->prepare("INSERT INTO urun_kayit SET
urun_ad = ?,
fiyat = ?,
birim = ?,
stok=?,
kategori_id=?");
$insert = $query->execute(array(
     $urun, $urun_fiyat,$birimi,$stok,$kategori
));
if ( $insert ){
    $succes= "Ürün Girişi Başarılı!";
}
else{
	$error="Bir Hata Oluştu";
}


	}
}
}

else{

}


require view('urun_girisi'); //viewdeki ürün_girisini sayfaya dahil ettik
?>


