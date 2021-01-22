<?php require view_url('static/header') ?>
    <div id="content">
        <br/>
        <BR>
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
                                    <div class="form-group urun-konum">
                                    <?php if(isset($error)):?> <h3 style="color:red"> <?= $error ?></h3>   <?php endif;?> <!--Burda hata mesajımızı gösterttik.-->
                                    
                                    <?php if(isset($succes)):?> <h3 style="color:green"> <?= $succes ?></h3>   <?php endif;?><!--Burda olumlu mesajımızı gösterttik.-->
                                        <label for="ad" class="text-uppercase urun-form"></i>Ürün Adı</label>
                                        
                                            <input type="text" class="form-control urun-kisisel" name="urun_ad">
                                    </div>
                                    <div class="form-group">
                                        <label for="ad" class="text-uppercase urun-form"></i>Kategorİ</label>
                                        <select class="form-control urun-kisisel" id="sel1" name="kategori">
                                            <option value="0">Kategori Seçiniz</option>
                                            <option value="1">SEBZE</option>
                                            <option value="2">MEYVE</option>
                                            <option value="3">KURU BAKLAGİL</option>
                                            <option value="4">KAHVALTILIK</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="ad" class="text-uppercase urun-form"></i>Fİyat</label>
                                            <input type="text" class="form-control urun-kisisel" name="urun_fiyat">
                                    </div>

                                    <div class="form-group">
                                        <label for="ad" class="text-uppercase urun-form"></i>Stok</label>
                                        <input type="text" class="form-control urun-kisisel kg" name="stok">

                                    <div class="form-group">
                                        <label for="ad" class="text-uppercase urun-form"></i>Bİrİm</label>
                                
                                        <select class="form-control urun-kisisel"  name="birim">
                                            <option value="0">Birim Seçiniz</option>
                                            <option value="kg">Kilogram</option>
                                            <option value="adet">Adet</option>
                                            <option value="lt">Litre</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-secondary" value="KAYDET" />
                                    </div>
                            	</form>
                            </div>
        		    	</div>
        			</div>    
                                </form>
                            </div>
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
    </script>
</body>

</html>