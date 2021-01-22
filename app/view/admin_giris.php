<!DOCTYPE html>
<html lang="tr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
<link href="<?= public_url("styles/bootstrap.min.css") ?>" rel="stylesheet" id="bootstrap-css"><!--PHP-->
<script src="<?= public_url("script/bootstrap.min.js") ?>"></script><!--PHP-->
<script src="<?= public_url("script/jquery.min.js") ?>"></script><!--PHP-->
  <title>Admin Girişi</title><!--PHP-->

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="<?= public_url("styles/stylelog.css") ?>"> 
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        
        <h3  class="login">Yönetici Girişi</h3>

        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span><!--PHP-->
          <span><i class="fab fa-google-plus-square"></i></span><!--PHP-->
          <span><i class="fab fa-twitter-square"></i></span><!--PHP-->
        </div>
      </div>
      <div class="card-body">
        <form action="" method="post">

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="email" class="form-control"  name="giris_mail"  required="required" placeholder="E-posta">
            
          </div>
       
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="cursor:pointer;"onclick="showpass()"><i class="fas fa-key passs"></i></span>
            </div>
            <input type="password" class="form-control pass" placeholder="Parola "  name="giris_pass"  required="required">
          </div>
          <div class="row align-items-center remember">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Giriş" class="btn float-right login_btn">
          </div>
        </form>

      </div>

                
            <div class="d-flex justify-content-center">
        </div>
                <?php if(isset($error)):    ?> <div class="error"> <?= $error  ?> </div> </h3> <?php endif;    ?>
        <?php if(isset($succes)):    ?> <div class="succes"> <?= $succes  ?> </div> </h3> <?php endif;    ?>
      </div>
    </div>
  </div>
</div>
</body>
<style>
  .error{padding:20px; color:white;    font-size:20px; margin:5px;  background-color:#f44336; opacity: 0.83;       }
.succes{padding:20px; color:white;    font-size:20px; margin:5px;  background-color:#4CAF50; opacity: 0.83;       }
  @media (max-width:350px) {
  


</style>
<script>
var pass=document.querySelector(".pass");
var passs=document.querySelector(".passs");
var pass2=document.querySelector(".pass2");
var passs2=document.querySelector(".passs2");
 function showpass(){
if(pass.type=="password"){
pass.type="text";
passs.className= "fas fa-lock";
}
else{
pass.type="password";
passs.className= "fas fa-key";}} 
</script>
</html>










