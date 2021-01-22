<?php require view_url('static/header') ?>

         <div id="content">
            <br/>
            <BR>
          
                <hr >

<?php


    $id=route("1");
    $sorgu =$db->query("SELECT * FROM urun_kayit WHERE urun_id = '{$id}'")->fetchAll(PDO::FETCH_ASSOC);

foreach ($sorgu as $key => $row) {
        $urun_id = $row["urun_id"];
        $urun_ad = $row["urun_ad"];
        $urun_fiyat = $row["fiyat"];
        $urun_stok = $row["stok"];

echo'
       <form action="" method="POST">
                    <div class="form-group urun-konum">
                        <label for="ad" class="text-uppercase urun-form"><i ></i>Ürün Adı</label>
                        <input type="text" class="form-control urun-kisisel" value = "'.$urun_ad.'" name="urun_ad">
                    </div>

                    <div class="form-group">
                        <label for="soyad" class="text-uppercase urun-form"><i ></i>Fİyatı</label>
                        <input type="text" class="form-control urun-kisisel" placeholder="TL " value = "'.$urun_fiyat.'" name="urun_fiyat">
                    </div>

                    <div class="form-group">
                        <label for="soyad" class="text-uppercase urun-form"><i ></i>Stok Mİktarı</label>
                        <input type="text" class="form-control urun-kisisel kg" placeholder="kg/adet/lt " value = "'.$urun_stok.'" name="urun_mik">
                    </div><br>

                    <div class="form-group">
                        <input type="submit" name="submit"  class="btn btn-secondary" value="KAYDET" /> 
                    </div>
                </form>
               <br><hr>'
	;}?>

<?php 
if(post("submit")){
	$ad = post("urun_ad");
	$fiyat =post("urun_fiyat");
    $miktar = post("urun_mik");
    $query = $db->prepare("UPDATE urun_kayit SET
    urun_ad = :yeni_ad, fiyat = :yeni_fiyat, stok=:yenistok 
    WHERE  urun_id = :id");
    $update = $query->execute(array(
        "yeni_ad" => $ad,
        "yeni_fiyat" => $fiyat,
        "yenistok" => $miktar,
        "id" => $id
    ));
    if ( $update ){
         print "güncelleme başarılı!";
         header("Location:" . site_url('urun_guncel'));
    }
	else{
		echo "Ürün Güncellemesi Gerçekleşmedi ";
	}



}


?> 


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

           
                $('[data-toggle="tooltip"]').tooltip()
           

        });
    </script>
 </body>
 </html>