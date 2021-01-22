<?php require view_url('static/header') ?>


         <div id="content">
            <br/>
            <BR>
          
                <hr >

<br>
            <div class="row">

                <div class="col col-sm-12 col-md-6 " >
                    <div class="card text-left" style="width: 200%;">
                        <?php 
                        
                        $siparis= $db->query("SELECT * FROM siparisler INNER JOIN musteriler ON siparisler.musteri_id = musteriler.musteri_id
                       INNER JOIN urun_kayit ON siparisler.urun_id = urun_kayit.urun_id ")->fetchAll(PDO::FETCH_ASSOC); 
                                                   
                    
                        
                            echo "<table class='table' >";
                            echo "<thead class='bg-warning'>";
                            echo "<tr >";
                            echo "<th scope='col'>AD SOYAD</th>";
                            echo "<th scope='col'>TELEFON</th>";
                            echo "<th scope='col' >ÜRÜN</th>";
                            echo "<th scope='col' >MİKTAR</th>";
                            echo "<th scope='col' >TUTAR</th>";
                            echo "<th scope='col' >SİPARİŞ TARİHİ</th>";
                            echo "<th scope='col' >TEDARİK</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            foreach ($siparis as $key => $row) {
                                echo "<td style='text-transform: uppercase;'>".$row["ad_soyad"]."</td>";
                                echo "<td  >".$row["telefon"]." </td>";
                                echo "<td style='font-size:13px;'> ".$row["urun_ad"]."</td>";
                                echo "<td style='text-transform: uppercase;'>".$row["miktar"]." <b>".$row["birim"]."</b></td>";
                                echo "<td  >".$row["miktar"]*$row["birim_fiyat"]. " <i class='fas fa-lira-sign'></i></td>";
                                echo "<td >".$row["siparis_tarihi"]. "</td>";
                                echo "<td>
                                  <h6 style='color:#707070; cursor:pointer;'><input type='checkbox' data-msg-required='Onay / İptal ' value='onay'>Gönder</h6>
                                  <h6 style='color:#f90606;cursor:pointer;'><input type='checkbox' data-msg-required='Onay / İptal ' value='onay'> İptal Et</h6>
                                  </td>";
                                echo "</tr>";
                                     }
                            echo "</table>";
                                                ?>
 
                    </div>
                </div>
        </div>
</div>

    <!-- jQuery CDN -->
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