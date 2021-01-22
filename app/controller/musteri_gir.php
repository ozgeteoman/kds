<?php

if (post('submit')){//Eğer kayıt ol butonuna basılmışsa bu kodlar çalışır


    $adi=post("adi");
    $tel=post("tel");
    $mail=post("mail");
    $il=post("il");
    $ilce=post("ilce");
    $sifre=post("sifre");
    $adres=post("adres");
    $tarih=post("tarih");
    $cinsiyet=post("cinsiyet");

    if (!$adi){
        $error= 'Lütfen adınızı  yazın.';
    } elseif (!$mail){
        $error= 'Lütfen e-posta adresinizi yazın.';
    } 
    elseif (!$tel){
        $error= 'Lütfen telefon numaranızı Boş Bırakmayınız.';
    } 
 elseif (!$il OR !$ilce){
    $error= 'Lütfen İl Ve İlçeyi belirtin';
    } 
    elseif (!$sifre){
        $error= 'Lütfen Bir Şifre belirtin';
    } 
 elseif (!$cinsiyet){
    $error= 'Lütfen Bir Şifre belirtin';
    } 

elseif (!$tarih){
    $error= 'Lütfen Doğum Tarihi belirtin';
    } 
    elseif (!$adres){
        $error= 'Lütfen adres belirtin';
    } 

      else {
            // üyeyi ekle
            $result = User::Register([ //Classlarda oluşturduğum registeri burda kullandım. böylece basit şekilde giriş yapmış oluyoruz.
                'adi' =>  $adi,
                 'tel' => $tel,
                 'mail' => $mail,
                 'adres' => $adres,
                 'tarih' =>  $tarih,
                 'sifre' => $sifre,
                 'il' => $il,
                 'ilce' => $ilce,      
                'cinsiyet' =>  $cinsiyet
            ]);


     
if($result){

    $succes= 'Müşteri başarıyla eklendi...';


}}}
 require view('musteri_gir'); //viewdeki ürün_girisini sayfaya dahil ettik
 ?>
 <link rel="stylesheet" type="text/css" href="<?=  public_url("styles/giris.css")  ?>">