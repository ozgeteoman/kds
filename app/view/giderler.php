<?php require view_url('static/header') ?>

    <div id="content">
        <br/>
        <h6 class="alert alert-secondary">Aylık Olarak Ödemeler</h6>
        <hr >

        <div class="row">
           	<div class="col-md-12 col-sm-12">
		    	<ul class="nav nav-tabs" role="tablist" id="myTab">
			        <li role="presentation" class="active">
			        </li>
		    	</ul>


    		    <div class="tab-content">
        		    <div role="tabpanel" class="tab-pane active" id="home">
        		    	<div class="col-sm-12 col-md-12 ">
                            <div class="card text-left">
                                <form action="" method="post">
                                <?php if(isset($succes)):?> <h3 style="color:green;"> <?=$succes ?></h3> <?php endif;?> <!--Burda hata mesajımızı gösterttik.-->
                                    <?php if(isset($error)):?> <h3 style="color:red;"> <?=$error ?></h3> <?php endif;?><!--Burda olumlu mesajımızı gösterttik.-->
                                        <div class="form-group">
                                        
                                            <label for="soyad" class="text-uppercase urun-form"></i>Çalışan Ödemelerİ</label>
                                            <input type="text" class="form-control urun-kisisel"  onkeypress="return isNumberKey(event)" name="calisanlar">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"></i>Depo Kİra Ödemelerİ</label>
                                            <input type="text" class="form-control urun-kisisel"   onkeypress="return isNumberKey(event)" name="depo_kira">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"></i>Araç Ödemelerİ</label>
                                            <input type="text" class="form-control urun-kisisel"  onkeypress="return isNumberKey(event)"  name="araclar">
                                        </div>
                        
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form" ></i>Fatura Ödemelerİ</label>
                                            <input type="text" class="form-control urun-kisisel"  onkeypress="return isNumberKey(event)" name="fatura">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"></i>Ödeme Tarİhİ</label>
                                            <input type="date" class="form-control urun-kisisel"  name="odeme_tr">
                                            
                                        </div>
                                        <input type="submit" class="btn btn-secondary" name="submit"  value="KAYDET" />
                                        
                                        
                                    </form>
                            </div>
        		    	</div>
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

           
                $('[data-toggle="tooltip"]').tooltip();

        });

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}


    </script>

</body>

</html>