<?php require view_url('static/header') ?>

         <div id="content">
            <br/>
            <BR>
          
                <hr >

            <div class="row">

                <div class="col col-sm-12 col-md-6 " >
                    <div class="card text-left" style="width: 200%;">
                        <?php
                            $sorgu = $db->query("SELECT * FROM urun_kayit ")->fetchAll(PDO::FETCH_ASSOC);
                            echo "<table class='table' >";
                            echo "<thead class='bg-warning'>";
                            echo "<tr >";
                            echo "<th scope='col' style='padding-left:4%;'>ÜRÜN ADI</th>";
                            echo "<th scope='col' style='padding-left:7%;'>FİYATI</th>";
                            echo "<th scope='col' style='padding-left:3%;'>STOK</th>";
                            echo "<th scope='col'style='padding-left:8%;'>GÜNCELLE</th>";
                            echo "<th scope='col' style='padding-left:6%;'>SİL</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";


                            foreach ($sorgu as $key => $row) {
                                echo "<td style='text-transform: uppercase;padding-left:4%;'>".$row["urun_ad"]."</td>";
                                
                                echo "<td style='padding-left:8%;' >".$row["fiyat"]." <i class='fas fa-lira-sign'></i></td>";

                                echo "<td style='padding-left:3%;'>".$row["stok"]." <b>".$row["birim"]."</b> </td>";

                                echo '<td style="padding-left:7%;"><a href="' . site_url("urun_guncelle"). "/" .$row["urun_id"]  .'" onclick="return uyari2();"><button type="button" class="btn btn-info btn-lg">Güncelle</button></a></td>';

                                echo '<td style="padding-left:5%;"><a href="' . site_url("urun_sil"). "/" .$row["urun_id"]  .'"onclick="return uyari();"><button type="button" class="btn btn-secondary btn-lg">Sil</button></a></td>';
                    
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
 
if (confirm("Bu kaydı silmek istediğinize emin misiniz?"))
   return true;
else 
   return false;
}
</script>

<script language="JavaScript">
function uyari2() {
 
if (confirm("Bu kaydı güncellemek istediğinize emin misiniz?"))
   return true;
else 
   return false;
}
</script>