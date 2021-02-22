<?php
  unset($_COOKIE["getgear_user_password"]);
  setcookie("getgear_user_password", "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Get Gear</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="lockscreen-content">
      <div class="logo">
        <h1>Get Gear</h1>
      </div>
      <div class="lock-box">
        <span id="avator"></span>
        <h4 class="text-center user-name"></h4>
        <p class="text-center text-muted">Account Locked</p>
        <form class="unlock-form" action="index.php">
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input id="user_password" class="form-control" type="password" placeholder="Password" autofocus>
          </div>
          <div class="form-group btn-container">
            <button id="unlock" class="btn btn-primary btn-block" type="submit"><i class="fa fa-unlock fa-lg"></i>UNLOCK </button>
          </div>
        </form>
        <p><a href="page-login.php">Use another account.</a></p>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script type="text/javascript">
      /////////////////////////////////////////
      $(document).ready(function () {
        var data_string='action=getProfile';
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              data = JSON.parse(html);
              $(".text-center user-name").html(data.name);
              if (data.avator==null) {
                var image1 = '../classes/fileload/user.png';
                var htm = ['<img style="max-width: 150px" class="rounded-circle user-image" src='+image1+' alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
              }else{
                var htm = ['<img style="max-width: 150px" class="rounded-circle user-image" src="../classes/fileload/'+data.avator+'" alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
              }
            }
          });
      });
      ////////////////////////////////////////
      $('#unlock').click(function(){
          var data_string='action=unlock&password='+document.getElementById('user_password').value;
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              if(html=="true"){
                window.location.href = "./";
              }else{
                $.notify({
                title: "Error : ",
                message: "Wrong password!",
                icon: 'fa fa-error' 
                },{
                  type: "info"
                });
              }
            }
          });
          return false;
         });
    </script>
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>