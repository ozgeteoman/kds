<?php

$id=route("1"); //sileceğimiz Kullanıcının idsini link kısmından çektik. 

$query = $db->prepare("DELETE FROM musteriler WHERE musteri_id = :id");
$delete = $query->execute(array(
   'id' => $id
));

header('Location:'. URL .'/kayit_musteri'); //Kayit musteriye geri gönderdik.