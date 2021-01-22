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
                            <?php  if(isset($error)):  ?> <h3 style=color:red;><?= $error ?></h3>    <?php endif; ?>
                                <?php  if(isset($succes)):  ?> <h3 style=color:green;><?= $succes ?></h3>    <?php endif; ?>
                            <form action="" method="POST" autocomplete="off">





                        <div class="form-group">
                     
                            <select  class="form-control" name="musteri_ad" placeholder="Ad / Soyad "   required="required" >
                            <option value="0">Sipariş Veren Müşteri</option>
                            <?php  foreach($musteriler as $key => $musteri): ?>
                            <option value="<?=$musteri['musteri_id']?>"><?=$musteri['ad_soyad']?></option>
                            <?php  endforeach; ?>
                            </select>
                        </div>
          
                            <select  class="form-control" name="urun" placeholder="Ad / Soyad "  required="required" >
                            <option value="0">Aldığı Ürün</option>
                            <?php  foreach($urun_kayit as $key => $urun): ?>
                            <option value="<?=$urun['urun_id']?>"><?=$urun['urun_ad']?> - (<?= $urun['birim']  ?>)     </option>
                            <?php  endforeach; ?>
                            </select>
                            <br>
                        <div class="form-group">
                            <input type="text"  name="miktar" class="form-control" placeholder="Aldığı Miktar" value=""  required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text"  name="birimfiyat" class="form-control" placeholder=" Birim Fiyatı" value=""  required="required" />
                        </div>
                        Sipariş Tarihi
                        <div class="form-group">
                              <input type="date" class="form-control" name="siptarih"  value=""  required="required"  />
                        </div>
                                      



                        <div class="form-group">
                          <input type="submit" class="btn btn-secondary" name="submit"  value="KAYDET" />
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


    //İnput ile sadece sayı girişi yapma
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}


    </script>
</body>

</html>