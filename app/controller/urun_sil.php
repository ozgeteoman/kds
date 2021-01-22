<?php

$id=route("1"); //silinecek kullanıcının idsini link kısmından çektik. 

$query = $db->prepare("DELETE FROM urun_kayit WHERE urun_id = :id");
$delete = $query->execute(array(
   'id' => $id
));

header('Location:'. URL .'/urun_guncel'); //urun_guncelleye geri gönderdik.