<!--Giriş İşlemi -->
<?php 
$giris_mail=post("giris_mail");
$giris_pass=post("giris_pass");

if (post('submit')){

    if (!$giris_mail){//Eğer Giriş Yap butonuna basılmışsa bu kodlar çalışır
        $error= 'Lütfen E posta Yazınız.';
    } elseif (!$giris_pass){
        $error='Lütfen şifrenizi girin.';
    } else {
        // üye var mı kontrol et
        $row = User::userExist($giris_mail);
        if ($row){
            // parola kontrolü yap
  
            if ($giris_pass==$row['admin_sifre']){
                $succes= 'Başarıyla giriş yaptınız, yönlendiriliyorsunuz.';
                User::Login($row);

                header('Refresh:2;url=' . site_url());

            } else {
                $error='Şifreniz hatalı, lütfen kontrol edin!';
            }

        } else {
            $error='Bu E-postaya Sahip Biri Bulunamadı';
        }

    }
   
}
require view('admin_giris');

