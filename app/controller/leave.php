<?php
session_destroy();
header('Location:' . URL . "/". 'admin_giris');  //session ile giriş yapmış kişinin bilgileri silinir ve giris_kayita yönlendirilir.

