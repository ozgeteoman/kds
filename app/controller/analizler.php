<?php require view_url('static/header') ?>
   

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     <?php 
    
  
    $sql = "SELECT cinsiyetler.cinsiyet as ad,count(musteriler.musteri_id) as miktar FROM 
    musteriler INNER JOIN cinsiyetler ON musteriler.cinsiyet = cinsiyetler.cinsiyet_id      GROUP BY musteriler.cinsiyet";
    $res = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);;
   
    $miktar="SELECT urun_kayit.stok as miktar,urun_ad AS ad,sum(siparisler.miktar) as siparis FROM siparisler,urun_kayit WHERE siparisler.urun_id=urun_kayit.urun_id
GROUP BY urun_kayit.urun_id  ";

$mik = $db->query($miktar)->fetchAll(PDO::FETCH_ASSOC);;

    $kategori = "SELECT sum(siparisler.birim_fiyat*siparisler.miktar) as fiyat,kategori.kategori_adi as ad  FROM siparisler,urun_kayit,kategori WHERE siparisler.urun_id=urun_kayit.urun_id and urun_kayit.kategori_id=kategori.kategori_id GROUP BY kategori.kategori_id order by fiyat asc";
    $kat = $db->query($kategori)->fetchAll(PDO::FETCH_ASSOC);;

    $gelir = "SELECT sum(siparisler.birim_fiyat*siparisler.miktar) as fiyat,urun_kayit.urun_ad as ad FROM siparisler,urun_kayit WHERE siparisler.urun_id=urun_kayit.urun_id  GROUP BY urun_kayit.urun_id ";
    $gel = $db->query($gelir)->fetchAll(PDO::FETCH_ASSOC);;

    $urun = "SELECT sum(siparisler.birim_fiyat*siparisler.miktar) as fiyat,urun_kayit.urun_ad as ad FROM siparisler,urun_kayit,kategori WHERE siparisler.urun_id=urun_kayit.urun_id AND kategori.kategori_id=urun_kayit.kategori_id AND kategori.kategori_adi='meyve' GROUP BY urun_kayit.urun_id  order by fiyat asc";
    $urun = $db->query($urun)->fetchAll(PDO::FETCH_ASSOC);;

    $gider = "SELECT Concat(MonthName(odeme_tarihi),' ',Year(odeme_tarihi)) as donem, sum(odemeler.toplam) as 'adet' From odemeler Group By Year(odeme_tarihi), Month(odeme_tarihi)
Order By odeme_tarihi";
    $gdr = $db->query($gider)->fetchAll(PDO::FETCH_ASSOC);;

    $gelir=" SELECT concat(MonthName(siparis_tarihi),' ',Year(siparis_tarihi)) as ay , sum(siparisler.miktar*siparisler.birim_fiyat) as'kar' FROM siparisler GROUP BY Year(siparis_tarihi), Month(siparis_tarihi)  ";
    $trh= $db->query($gelir)->fetchAll(PDO::FETCH_ASSOC);;

    $giderY = "SELECT Concat(Year(odeme_tarihi)) as donem, sum(odemeler.toplam) as 'adet' From odemeler Group By Year(odeme_tarihi)
Order By odeme_tarihi";
    $gdrYil = $db->query($giderY)->fetchAll(PDO::FETCH_ASSOC);


    $gelirYil=" SELECT concat(Year(siparis_tarihi)) as yil , sum(siparisler.miktar*siparisler.birim_fiyat) as'kar' FROM siparisler GROUP BY Year(siparis_tarihi)";
    $Glryil= $db->query($gelirYil)->fetchAll(PDO::FETCH_ASSOC);


    $stok ="SELECT guncellenen_urun.fiyat as eski,urun_kayit.fiyat as yeni ,urun_kayit.urun_ad as ad FROM urun_kayit,guncellenen_urun WHERE urun_kayit.urun_ad=guncellenen_urun.urun_ad";
    $stk = $db->query($stok)->fetchAll(PDO::FETCH_ASSOC);;

    $musteri="SELECT sum(siparisler.miktar) as siparis,musteriler.ad_soyad as ad FROM siparisler,musteriler WHERE siparisler.musteri_id=musteriler.musteri_id GROUP BY musteriler.musteri_id";
    $musteri=$db->query($musteri)->fetchAll(PDO::FETCH_ASSOC);


    $ilad="SELECT count(musteriler.il_id) as musteriler,iller.il_adi as ad FROM iller,musteriler WHERE iller.plaka=musteriler.il_id GROUP BY iller.plaka";
    $il=$db->query($ilad)->fetchAll(PDO::FETCH_ASSOC);
    
    $ilcead = "SELECT ilceler.ilce_ad as ad,count(musteriler.musteri_id) as miktar FROM 
    musteriler INNER JOIN ilceler ON musteriler.ilce_adi = ilceler.ilce_id      GROUP BY musteriler.ilce_adi";
    $ilce = $db->query($ilcead)->fetchAll(PDO::FETCH_ASSOC);;

     ?>

</head>
          
        <!-- icerik -->
         <div id="content">
            <br/><BR>
            
        
                <hr >
                <br>


              <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div id="iller" style="margin-bottom: 55px;" ></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="ilceler" style="margin-bottom: 55px;" ></div>
                </div>
                
                <div class="col-sm-12 col-md-6">
                    <div id="linechart" style="margin-bottom: 55px;" ></div>
                </div>
                
                <div class="col-sm-12 col-md-6">
                    <div id="stk" style="margin-bottom: 55px;"></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="urunchart" style="margin-bottom: 55px;" ></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="donutchart" style="margin-bottom: 55px;" ></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="trh" style="margin-bottom: 55px;"></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="gdr" style="margin-bottom: 55px;"></div>
                </div>

                <div class="col-sm-12 col-md-6">
                <div id="Glryil" style="margin-bottom: 55px;"></div>
                </div> 

                <div class="col-sm-12 col-md-6">
                    <div id="gdrYil" style="margin-bottom: 55px;"></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="piechart" style="margin-bottom: 55px;"></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="musteri" style="margin-bottom: 55px;" ></div>
                </div>
            </div>
        </div>
    </div>

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




  <!-- İLLERE GÖRE SATIŞ ORANI -->
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['', ''],

          <?php
foreach ($il as $key => $row) {

                echo "['".$row["ad"]."',".$row["musteriler"]."],";
            }

          ?>
        ]);

        var options = {
          title: 'İLLERE GÖRE SATIŞ ORANI',
          is3D: true,
          height:350,
          width:620,
          backgroundColor:'#ececec'

        };

        var chart = new google.visualization.PieChart(document.getElementById('iller'));

        chart.draw(data, options);
      }
    </script>



  <!-- İLÇELERE GÖRE SATIŞ ORANI -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['', ''],

          <?php
foreach ($ilce as $key => $row) {

                echo "['".$row["ad"]."',".$row["miktar"]."],";
            }

          ?>
        ]);

        var options = {
          title: 'İLÇELERE GÖRE SATIŞ ORANI',
          is3D: true,
          height:350,
          width:620,
          backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('ilceler'));

        chart.draw(data, options);
      }
    </script>

    <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Ürünler', 'Stok Miktarı', 'Sipariş Miktarı'],

          <?php

foreach ($mik as $key => $row) {
                echo "['".$row["ad"]."',".$row["miktar"].",".$row["siparis"]."],";
            }

          ?>
            ]);

            var options = {title: 'STOK - SİPARİŞ MİKTARI',
            height:350,
            width:620,
            backgroundColor:'#ececec',
            vAxis:{title:"Ürün"},
            hAxis:{title:"Miktar"}

        }; 

            var chart = new google.visualization.BarChart(document.getElementById('linechart'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>



  <!-- ÜRÜNLERİN AYLIK FİYAT DEĞİŞİMİ -->
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Eski Fiyat',"Yeni Fiyat"],
          <?php

foreach ($stk as $key => $row) {
                echo "['".$row["ad"]."',".$row["eski"].",".$row["yeni"]."],";
            }

          ?>

        ]);

        var options = {
          title: 'ÜRÜNLERİN FİYAT DEĞİŞİMİ',
          height:350,
          width:620,
          backgroundColor:'#ececec',
          curveType: 'function',
          legend: { position: 'bottom' },
          vAxis:{title:"TL"}
        };

        var chart = new google.visualization.LineChart(document.getElementById('stk'));

        chart.draw(data, options);
      }
    </script>



  <!-- ÜRÜNLERE GÖRE AYLIK GELİR ORANI -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kadın', 'Erkek'],

          <?php

foreach ($gel as $key => $row) {

                echo "['".$row["ad"]."',".$row["fiyat"]."],";
            }

          ?>
        ]);

        var options = {
          title: 'ÜRÜNLERE GÖRE AYLIK GELİR ORANI',
          is3D: true,
          height:350,
          width:620,
          backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('urunchart'));

        chart.draw(data, options);
      }
    </script>



  <!-- KATEGORİLERE GÖRE YILLIK GELİR ORANI -->
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          <?php
foreach ($kat as $key => $row) {
  echo "['".$row["ad"]."',".$row["fiyat"]."],";
       
            }
          ?>
        ]);

        var options = {
          pieHole: 0.4,
          title: 'KATEGORİLERE GÖRE GELİR ORANI',
          is3D: true,
          height:350,
          width:620,
          backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>



  <!-- AYLARA GÖRE GELİRLER -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Gelir'],
          <?php

foreach ($trh as $key => $row) {

                echo "['".$row["ay"]."',".$row["kar"]."],";
            }

          ?>

        ]);

        var options = {
          title: 'AYLARA GÖRE GELİRLER',
          height:350,
          width:620,
          backgroundColor:'#ececec',
          curveType: 'function',
          legend: { position: 'bottom' },
          vAxis:{title:"TL"}
        };

        var chart = new google.visualization.LineChart(document.getElementById('trh'));

        chart.draw(data, options);
      }
    </script>



  <!-- AYLARA GÖRE GİDERLER -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Gider'],
          <?php
foreach ($gdr as $key => $row) {
 
                echo "['".$row["donem"]."',".$row["adet"]."],";
            }

          ?>

        ]);

        var options = {
          title: 'AYLARA GÖRE GİDERLER',
          height:350,
          width:620,
          backgroundColor:'#ececec',
          curveType: 'function',
          legend: { position: 'bottom' },
          vAxis:{title:"TL"}
        };

        var chart = new google.visualization.LineChart(document.getElementById('gdr'));

        chart.draw(data, options);
      }
    </script>


  <!-- YILLARA GÖRE GELİRLER -->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Gelir'],
          <?php

foreach ($Glryil as $key => $row) {

                echo "['".$row["yil"]."',".$row["kar"]."],";
            }

          ?>

        ]);

        var options = {
          title: 'YILLARA GÖRE GELİRLER',
          height:350,
          width:620,
          backgroundColor:'#ececec',
          curveType: 'function',
          legend: { position: 'bottom' },
          vAxis:{title:"TL"}
        };

        var chart = new google.visualization.LineChart(document.getElementById('Glryil'));

        chart.draw(data, options);
      }
    </script>

      <!-- YILLARA GÖRE GİDERLER -->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Gider'],
          <?php
foreach ($gdrYil as $key => $row) {
 
                echo "['".$row["donem"]."',".$row["adet"]."],";
            }



          ?>

        ]);

        var options = {
          title: 'YILLARA GÖRE GİDERLER',
          height:350,
          width:620,
          backgroundColor:'#ececec',
          curveType: 'function',
          legend: { position: 'bottom' },
          vAxis:{title:"TL"}
        };

        var chart = new google.visualization.LineChart(document.getElementById('gdrYil'));

        chart.draw(data, options);
      }
    </script>



  <!-- CİNSİYET DAĞILIMI -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kadın', 'Erkek'],

          <?php 
foreach ($res as $key => $row) {

                echo "['".$row["ad"]."',".$row["miktar"]."],";
            }

          ?>
        ]);

        var options = {
          title: 'CİNSİYET DAĞILIMI',
          is3D: true,
          height:350,
          width:620,
          backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>



  <!-- MÜŞTERİLERİN YILLIK ÜRÜN ALIM ORANI -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kadın', 'Erkek'],

          <?php
foreach ($musteri as $key => $row) {

                echo "['".$row["ad"]."',".$row["siparis"]."],";
            }

          ?>
        ]);

        var options = {
          title: 'MÜŞTERİLERİN ÜRÜN ALIM ORANI',
          is3D: true,
          height:350,
          width:620,
          backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('musteri'));

        chart.draw(data, options);
      }
    </script>

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

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