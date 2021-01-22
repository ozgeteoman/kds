<?php

class User { 

    public static function Login($data) 
    {
        $_SESSION['admin_id'] = $data['admin_id'];
        $_SESSION['admin_email'] = $data['admin_email'];
      }


    public static function userExist($email, $admin_id = '@@') 
    {
        global $db;
        $query = $db->prepare('SELECT * FROM admins WHERE admin_id = :admin_id || admin_email = :admin_email');
        $query->execute([
            'admin_id' => $admin_id,
            'admin_email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function Register($data) 
    {
        global $db;
        $query = $db->prepare('INSERT INTO musteriler SET
         ad_soyad = :adi, telefon = :tel, e_posta = :mail ,adres = :adres, 
         dogum_tarihi = :tarih, parola = :sifre, il_id= :il ,ilce_adi = :ilce,
          cinsiyet= :cinsiyet');
        return $query->execute($data);
    }
  
    
}



