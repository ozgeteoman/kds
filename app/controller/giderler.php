<?php



if (post("submit")){

    $calisanlar_g = post("calisanlar");
    $depo_kira_g = post("depo_kira");
    $fatura_g = post("fatura");
    $araclar_g = post("araclar");
    $odeme_t=post("odeme_tr");
    @$toplam=$calisanlar_g+$depo_kira_g+$araclar_g+$fatura_g;
    if(!$calisanlar_g){
        $error= "Çalışanlar requesti olmadı"; 
    }

    elseif(!$depo_kira_g){
        $error= "Depo kira requesti olmadı";
    }


    elseif(!$araclar_g){
        $error= "Araçlar requesti olmadı";
    }


    elseif(!$fatura_g){
        $error= "Fatura requesti olmadı";
    }


    elseif(!$odeme_t){
        $error= "Ödeme tarih requesti olmadı"; 
    }

else{
   //insert komutu ile veritabanımıza yazırırız. 
    
    $query = $db->prepare("INSERT INTO odemeler SET 
    calisanlar = ?,
    depo_kira = ?,
    araclar = ?,
    fatura = ?,
    odeme_tarihi=?,
    toplam=?");
    $giderler = $query->execute(array(
         $calisanlar_g, $depo_kira_g,$araclar_g, $fatura_g,$odeme_t,$toplam
    ));
    if ( $giderler ){
        $succes= "İşleminiz Gerçekleştirildi";
    }
    else{
        $error= " kayıt yapılamadı ";
    }}


}
/*else{
    die("veritabanı bağlantısı yok");
}*/



 //viewdeki giderleri buraya çağırırız.
require view('giderler');?>