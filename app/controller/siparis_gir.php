<?php
$musteriler = $db->query("SELECT * FROM musteriler", PDO::FETCH_ASSOC); 
$urun_kayit = $db->query("SELECT * FROM urun_kayit", PDO::FETCH_ASSOC);

if (post("submit")){
    $musteri_ad =  post("musteri_ad");
    $urun = post("urun"); 
    $miktar = post("miktar");
    $birimfiyat = post("birimfiyat");
    $siptarih = post("siptarih");
    $birim = $db->query("SELECT birim FROM urun_kayit WHERE urun_id = '{$urun}'")->fetch(PDO::FETCH_ASSOC);

    if (!$musteri_ad){
        $error= "Musteri Adı seçmediniz";
    }

    elseif (!$urun){
        
        $error= "Urun seçmediniz";
    }

    elseif (!$miktar){
        
        $error= "Bir Miktar Belirtin";
    }

    elseif (!$birimfiyat){
        $error= "Lütfen bir fiyat belirtin";
    }

    elseif (!$siptarih){
        $error= "Lütfen bir tarih belirtin";
    }


else{

$query = $db->prepare("INSERT INTO siparisler SET
musteri_id = ?,
urun_id = ?,
miktar = ?,
birim_fiyat=?,
birim=?,
siparis_tarihi=?");
$insert = $query->execute(array(
     $musteri_ad, $urun,$miktar,$birimfiyat,implode($birim),$siptarih        
));
if ( $insert ){
    $succes= "Sipariş başarıyla eklendi !";
}
else{
    $error="Bir Hata Oluştu";
}
}
}

else{

}


require view('siparis_gir'); //viewdeki siparis_giri sayfaya dahil ettim
?>
<link rel="stylesheet" type="text/css" href="<?=  public_url("styles/giris.css")  ?>"> 


