<?php require view_url('static/header');?>
         <div id="content">
            <br/>
            
          <BR>

                <hr >

            <div class="row">

                <div class="col col-sm-12 col-md-6 " >
                    <div class="card text-left" style="width: 200%;">
                        <?php
                            
                            $sorgu = $db->query("SELECT * FROM musteriler ")->fetchAll(PDO::FETCH_ASSOC);
                        
                            echo "<table class='table' >";
                            echo "<thead class='bg-warning'>";
                            echo "<tr >";
                            echo "<th scope='col' style='padding-left:3%;'>AD SOYAD</th>";
                            echo "<th scope='col' style='padding-left:2.5%;'>TELEFON</th>";
                            echo "<th scope='col' style='padding-left:7%;'>E-POSTA</th>";
                            echo "<th scope='col' style='padding-left:4%;'>İL</th>";
                            echo "<th scope='col' style='padding-left:10%;'>ADRES</th>";
                            echo "<th scope='col' style='padding-left:2%;'>SİL</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            
                           
                            foreach ($sorgu as $value => $row) {

                                echo "<td style='text-transform: uppercase;padding-left:2%;'>".$row["ad_soyad"]."</td>";
                                echo "<td style='padding-left:2%;' >".$row["telefon"]."</td>";
                                echo "<td style='padding-left:3%;'>".$row["e_posta"]."</td>";
                                 echo "<td style='padding-left:3%;'>". implode($db->query("SELECT il_adi FROM iller WHERE il_id = '{$row["il_id"]}'")->fetch(PDO::FETCH_ASSOC))."</td>";  
                                 echo "<td style='padding-left:3%;'>".implode($db->query("SELECT adres_ad FROM adresler WHERE adres_id = '{$row["adres"]}'")->fetch(PDO::FETCH_ASSOC))."</td>";  
                                 echo '<td ><a href ="'.  site_url("kullanici_sil") ."/" .$row["musteri_id"]  .'"onclick="return uyari();"><button type="button" class="btn btn-danger btn-lg">Sil</button></a></td>';
                                echo "</tr>";
                                echo "</tr>";
                       
                                     }
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
<script language="JavaScript">
function uyari() {
if (confirm("KAYDI SİLMEK İSTEDİĞİNİZE EMİN MİSİNİZ?"))
   return true;
else 
   return false;
}
</script>

