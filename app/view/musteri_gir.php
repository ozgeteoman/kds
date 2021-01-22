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
                            <input type="text" class="form-control" name="adi" placeholder="Ad / Soyad " value=""  required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tel" onkeypress="return isNumberKey(event)"  placeholder="Telefon" value="" required="required"/>
                        </div>
                        <div class="form-group">
                            <input type="email"  name="mail" class="form-control" placeholder="E-posta" value=""  required="required" />
                        </div>
                         <div class="form-group">
                            <select type="text"  name="il" class="form-control" placeholder="İl" value="" required="required" >
                            <?php $iller = $db->query("SELECT * FROM iller", PDO::FETCH_ASSOC);?>
                            <option value="0">Bir İl Seçiniz</option>
                            <?php foreach($iller as $value=>$il): ?>
                         <option value="<?=$il['il_id']?>"><?=$il["il_adi"]?></option>
                       <?php endforeach; ?>
                            </select>
                        </div>
                         <div class="form-group">
                            <select type="text"  name="ilce" class="form-control" placeholder="İlçe" value="" required="required" >
                            <option value="0">Bir İlçe Seçiniz</option>
                            <?php $ilceler = $db->query("SELECT * FROM ilceler", PDO::FETCH_ASSOC);?>
                            <?php foreach($ilceler as $value=>$ilce): ?>
                         <option value="<?=$ilce['ilce_id']?>"><?=$ilce["ilce_ad"]?></option>
                       <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                              <select type="text"  name="adres" class="form-control" placeholder="Adres" value="" required="required" >
                            <option value="0">Bir adres Seçiniz</option>
                            <?php $adresler = $db->query("SELECT * FROM adresler", PDO::FETCH_ASSOC);?>
                            <?php foreach($adresler as $value=>$adres): ?>
                         <option value="<?=$adres['adres_id']?>"><?=$adres["adres_ad"]?></option>
                       <?php endforeach; ?>
                        </select>
                        </div>
                       
                        <div class="form-group">
                              <input type="date" class="form-control" name="tarih" placeholder="Doğum Tarihi" value=""  required="required"  />
                        </div>
                        
                        <div class="form-group">
                            <input type="password" name="sifre" class="form-control" placeholder="Parola" value=""  required="required" />
                        </div>
                        <div class="form-group">
                            <li id="li-gender" class="gender">
                              <span class="cinsiyet">Cinsiyet</span></br>
                                <label  class="radio control-inline cinsiyet">
                                  <input type="radio" name="cinsiyet" required="required" class="gender cinsiyet" data-msg-required="Lütfen cinsiyetinizi belirtiniz." value="2"> Kadın</label>
                                <label  class="radio control-inline cinsiyet">
                                  <input type="radio"  name="cinsiyet" required="required" class="gender cinsiyet" data-msg-required="Lütfen cinsiyetinizi belirtiniz." value="1"> Erkek</label>
                                </li>
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