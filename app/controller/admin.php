<?php require view_url('static/header');

$toplamgiderr= $db->query("SELECT SUM(toplam) FROM odemeler ")->fetch(PDO::FETCH_ASSOC);
$toplamgider=implode("",$toplamgiderr ); //Gelen ögenin sadece gider olan kısmı

$toplamgelirr= $db->query("SELECT SUM(miktar*birim_fiyat) FROM siparisler ")->fetch(PDO::FETCH_ASSOC);

$toplamgelir=implode(" ",$toplamgelirr ); //Gelen ögenin sadece gelir olan kısmı


?>


         <div id="content">
            <br/>
            <BR>
            <div class="card admin-card">
            <section class="dashboard-counts section-padding">
                <div class="container-fluid">
                  <div class="row">
                  <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                    
                        <div class="name"><h5 class="text-uppercase ust-baslik">TOPLAM GELİRLER</h5>
                          <div class="count-number"><?= $toplamgelir  ?> "TL"</div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                        <div class="name"><h5 class="text-uppercase ust-baslik">TOPLAM GİDERLER</h5>
                          <div class="count-number"><?= $toplamgider  ?> "TL"</div>
                        </div>
                      </div>
                    </div>
                
                    

                    <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                        <div class="name"><h5 class="text-uppercase ust-baslik"> BEKLEYEN SİPARİŞLER</h5>
                             <h6 class="orta-baslik">
                             <?php
                             $siparis = $db->query("SELECT * from siparisler
                             ")->rowCount();
                            echo "$siparis";
                          
                            ?>
                            </h6>
                         
                             
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>

                <hr >



            <div class="row">

                
                <div class="col-sm-12 col-md-6" style="margin-bottom: 5%; margin-top: 1.7%;">
                    <div class="card" style="margin-bottom: 0.3%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 36%; color: #000000;">DÖVİZ KURLARI</h4>
                    </div>
                    <div class="card text-left">
                <?php
                            $connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
                            $usd_buying = $connect_web->Currency[0]->BanknoteBuying;
                            $usd_selling = $connect_web->Currency[0]->BanknoteSelling;

                            $euro_buying = $connect_web->Currency[3]->BanknoteBuying;
                            $euro_selling = $connect_web->Currency[3]->BanknoteSelling;
            
                            $gbp_buying = $connect_web->Currency[4]->BanknoteBuying;
                            $gbp_selling = $connect_web->Currency[4]->BanknoteSelling;

                            echo "<table class='table'>";
                            echo "<thead class='bg-warning'>";
                            echo "<tr>";
                            echo "<th scope='col' style='padding-left:16%;'></i>DÖVİZ ALIŞ</th>";
                            echo "<th scope='col'></i>DÖVİZ SATIŞ</th>";
                             echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";


                            echo "<tr>";
                            echo "<td ><i class='fas fa-euro-sign' ></i><span style ='color:#510808; margin-right:17px;'> EURO :</span> <label> ".$euro_buying."</label></td>";
                            echo "<td>"  .$euro_selling."</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td><i class='fas fa-dollar-sign'></i><span style ='color:#510808; margin-right:14px;'> ABD DOLARI :</span> <label>".$usd_buying."</label></td>";
                            echo "<td>".$usd_selling."</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td><i class='fas fa-pound-sign'></i><span style ='color:#510808; margin-right:14px;'> İNG STERLİNİ :</span> <label>".$gbp_buying."</label></td>";
                            echo "<td>".$gbp_selling."</td>";
                            echo "</tr>";
                            echo "</table>";

                            ?>
                            </div>
                </div>

               
                <div class="col-sm-12 col-md-6" style="margin-bottom: 5%; margin-top: 1.7%;">
                    <div class="card" style="margin-bottom: 0.3%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 18%; color: #000000;">YILLIK VE AYLIK ENFLASYON ORANLARI</h4>
                    </div>
                    <div class="card text-left">
                        <?php
                            function getir($baslangic, $son, $cekilmek_istenen)
{
    @preg_match_all('/' . preg_quote($baslangic, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $cekilmek_istenen, $m);
    return @$m[1];
}

$url = "https://www.tcmb.gov.tr/wps/wcm/connect/TR/TCMB+TR/Main+Menu/Istatistikler/Enflasyon+Verileri/Tuketici+Fiyatlari";
$cekilen_veri = file_get_contents($url);
$ay = getir('<td style="height: 20px; width: 120px;">',"</td>",$cekilen_veri);
$yıl=getir('<td style="text-align: center; width: 140px;">',"</td>",$cekilen_veri);
$tufe=getir('<td style="text-align: center;">',"</td>",$cekilen_veri);
                            echo "<table class='table'>";
                            echo "<thead class='bg-warning'>";
                            echo "<tr>";
                            echo "<th scope='col'style='margin-left:10px;' >   <i class='far fa-calendar-alt'></i></th>";
                            echo "<th scope='col' ><i class='fas fa-percent'></i> YILLIK ENFLASYON</th>";
                            echo "<th scope='col'><i class='fas fa-percent'></i> AYLIK ENFLASYON</th>";
                             echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            echo "<td > ".$ay[0]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[0]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[0]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[1]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[1]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[1]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[2]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[2]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[2]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[3]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[3]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[3]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[4]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[4]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[4]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[5]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[5]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[5]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[6]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[6]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[6]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[7]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[7]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[7]."</td>";
                            echo "</tr>";
                            echo "</table>";

                        ?>



                    </div>
                </div>


            </div>
        </div>


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