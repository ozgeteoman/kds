
<!--Header dosyamız bunu tüm dosyalarımızın içine çektik-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Organik Pazarı | Admin</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= public_url("styles/admin-panel.css") ?>"><!--css dosyamızı dahil ederiz.-->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    

</head>

            
            <body>

   <!-- mobile haeader nav  -->
    <nav class="navbar navbar-expand-lg navs-shadow d-block d-lg-none  sticky-top">
        <div class="row">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Menü Küçült</span>
            </button>
            <h4 class="text-white">Organik Pazarı | Admin</h4>
        </div>
    </nav>
  
    <div class="wrapper">
        <div id="main">
        <nav class="navbar navbar-expand-lg navs-shadow sticky-top d-none d-lg-block">
                <div class="container-fluid"><h4 class="text-white">Organik Pazarı | Admin</h4>
                        <ul class="nav navbar-nav ml-auto text-white">
                            <li class="nav-item">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"data-toggle="tooltip" data-placement="bottom" title="Çıkış Yap" href="<?= site_url('leave')?>"><i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                </div>
            </nav>
            <!-- Sidebar  -->
    <nav id="sidebar">
        <ul class="list-unstyled components">
           	<li>
                <div class="row">
          	       <img src="<?= public_url("images/ciftci.png") ?>" class=" mx-auto" style="border: 2px solid;width: 100px; margin-top: 25px; height: 100px;padding: 5px; margin-bottom: 0px;"/>
                </div>
            </li>
            <div class="row">
                <p class="mx-auto">Organik Pazarı</p>
            </div>
            <br />
            <li <?php if(route(0)=='admin'): ?> class="active"<?php endif; ?> >  
            
                <a href="<?= site_url('admin')?>">Ana Sayfa</a>
            </li>
  
            <li <?php if(route(0)=='kayit_musteri'): ?> class="active"<?php endif; ?>>  <!--Route(0) kayit_musteriye eşitse yani linkin 
            localhost/kayit_musteri şeklindeyse aktivleştir-->
            
                <a href="<?= site_url('kayit_musteri')?>">Müşteriler</a>
            </li>
            <li <?php if(route(0)=='siparisler'): ?> class="active"<?php endif; ?>> 
            
                <a href="<?= site_url('siparisler')?>">Siparişler</a>
            </li>
            
            <li <?php if(route(0)=='urun_guncel'): ?> class="active"<?php endif; ?> > 
            
                <a href="<?= site_url('urun_guncel')?>">Ürün Güncelleme</a>
            </li>
            <li <?php if(route(0)=='urun_girisi'): ?> class="active"<?php endif; ?> > 
            
                <a href="<?= site_url('urun_girisi')?>">Ürün Girişi</a>
            </li>
            <li <?php if(route(0)=='musteri_gir'): ?> class="active"<?php endif; ?> > 
            
                <a href="<?= site_url('musteri_gir')?>">Müşteri Girişi </a>
            </li>
            <li <?php if(route(0)=='siparis_gir'): ?> class="active"<?php endif; ?> > 
            
            <a href="<?= site_url('siparis_gir')?>">Sipariş Girişi </a>
        </li>

            <li  <?php if(route(0)=='giderler'): ?> class="active"<?php endif; ?>> 
            
                <a href="<?= site_url('giderler')?>">Giderler</a>
            </li>
            <li <?php if(route(0)=='analizler'): ?> class="active"<?php endif; ?>> 
            
                <a href="<?= site_url('analizler')?>">Analizler</a>
            </li>
            
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="<?= site_url('leave')?>" class="cıkıs">Çıkış</a>
            </li>
        </ul>
    </nav>