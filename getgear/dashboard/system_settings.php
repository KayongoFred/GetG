<?php
  if ($_COOKIE["getgear_user_email"] && $_COOKIE["getgear_user_password"]) {
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Get Gear</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Get Gear</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

<ul class="app-nav">
        <!--Notification Menu-->
        <li class="dropdown" onclick="clearNotifications()"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have no new notifications yet.</li>
            <div class="app-notification__content">
              
            </div>
            <li class="app-notification__footer"><a href="orders_data.php">See all notifications.</a></li>
          </ul>
        </li>
      </ul>

    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
          <span id="avator"></span>
        <div>
          <p class="app-sidebar__user-name"></p>
          <p class="app-sidebar__user-designation">System Administrator</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="create_post.php"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Add Item</span></a></li>
        <li><a class="app-menu__item" href="orders_data.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Orders</span></a></li>
        <li><a class="app-menu__item" href="requests.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Requests</span></a></li>
        <li><a class="app-menu__item" href="items.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Items</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="system_settings.php"><i class="icon fa fa-circle-o"></i> System Settings</a></li>
            <li><a class="treeview-item" href="category_settings.php"><i class="icon fa fa-circle-o"></i> Category Settings</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-th-list"></i> All Users</a></li>
            <li><a class="treeview-item" href="table-data-table.php?subject=administrators"><i class="icon fa fa-th-list"></i> Administrators</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="page-lockscreen.php"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Lock</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-cog"></i> System Settings</h1>
          <p>Modify System Settings from here.......</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">System Settings</a></li>
        </ul>
      </div>
      <div class="row">
      <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">This is the heart of the whole system, handle it with care!.</div>
          </div>

          <div class="row">
          <div class="col-md-6">
          <div class="tile">

            <div class="overlay" id="postOverlay" style="visibility: hidden;">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Updating, Please Wait...</h3>
            </div>

            <h3 class="tile-title">Cost Of $1 (US) in UGX</h3>
            <div class="tile-body">
            <div class="form-group">
              <input type="text" id="getExchangeRate" class="form-control" rows="4" placeholder="Cost of $1 in UGX goes Here."/>
          </div>
            </div>
            <div class="tile-footer">
              <button onclick="updateExchangeRate();" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
            </div>
          </div>
        </div>
        


        <div class="col-md-6">
          <div class="tile">

            <div class="overlay" id="postOverlay" style="visibility: hidden;">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Updating, Please Wait...</h3>
            </div>

            <h3 class="tile-title">Transportation Cost Per KM</h3>
            <div class="tile-body">
            <div class="form-group">
              <input type="text" id="getTransportationCost" class="form-control" rows="4" placeholder="Transportation Cost Per KM goes Here."/>
          </div>
            </div>
            <div class="tile-footer">
              <button onclick="updateTransportationCost();" id="sendPost" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
            </div>
          </div>
        </div>
      </div>

<!-- //////////////////////////////////////////////////////////////////////////////////-->
<div class="row">
          <div class="col-md-6">
          <div class="tile">

            <div class="overlay" id="postOverlay" style="visibility: hidden;">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Updating, Please Wait...</h3>
            </div>

            <h3 class="tile-title">Change Admin Password</h3>
            <div class="tile-body">
                <div class="form-group">
                  <label class="control-label">Old Password</label>
                  <input type="password" id="password1" class="form-control" rows="4" placeholder="Old Password Goes Here"/>
                </div>
                <div class="form-group">
                  <label class="control-label">New Password</label>
                  <input type="password" id="password2" class="form-control" rows="4" placeholder="New Password Goes Here"/>
                </div>
                <div class="form-group">
                  <label class="control-label">Repeat New Password</label>
                  <input type="password" id="password3" class="form-control" rows="4" placeholder="Repeat New Password Goes Here"/>
                </div>
            </div>
            <div class="tile-footer">
              <button id="updatePassword" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
            </div>
          </div>
        </div>
        


        <div class="col-md-6">
          <div class="tile">

            <div class="overlay" id="notificationOverlay" style="visibility: hidden;">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Sending, Please Wait...</h3>
            </div>

            <h3 class="tile-title">Send Bulk Notifications</h3>
            <div class="tile-body">
              <div class="form-group">
                  <textarea id="notificationData" class="form-control" rows="10" placeholder="Notification Description goes here"></textarea>
              </div>  
            </div>
            <div class="tile-footer">
              <button id="sendNotifications" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Send</button>
            </div>
          </div>
        </div>
      </div>
<!-- //////////////////////////////////////////////////////////////////////////////////-->

        </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        getTransportationCost();
        getDollarCost();
        getProfile();
        getNotificatos();
      });

      function getDollarCost(){
        var data_string='action=getExchangeRate';
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              data = JSON.parse(html);
              var rate=data.EXCHANGE[0].COST;
              $("#getExchangeRate").val(rate);
            }
          });
      }

      function getTransportationCost(){
        var data_string='action=getTransportationCost';
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              data = JSON.parse(html);
              var rate=data.TRANSPORT[0].COST;
              $("#getTransportationCost").val(rate);
            }
          });
      }

      function updateTransportationCost(){
        var amount=document.getElementById("getTransportationCost").value;

        swal({
          title: "Are you sure?",
          text: "The Transportation Cost Per KM will be updated.",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, update it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        }, function(isConfirm) {
          if (isConfirm) {
            saveTransportationCost(amount);
          } else {
            swal("Cancelled", "Cost not updated.", "error");
          }
        });
      }

      function saveTransportationCost(amount){
        var data_string='action=UpdateTransportationCost&cost='+amount;
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              if (html=="true") {
                swal("Added!", "Cost updated.", "success");
              }else{
                swal("Failed", "Try Again Please.", "error");
              }
            }
          });
      }

      function updateExchangeRate(){
        var amount=document.getElementById("getExchangeRate").value;

        swal({
          title: "Are you sure?",
          text: "The Cost Of $1 (US) in UGX will be updated.",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, update it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        }, function(isConfirm) {
          if (isConfirm) {
            saveExchangeRate(amount);
          } else {
            swal("Cancelled", "Cost not updated.", "error");
          }
        });
      }

      function saveExchangeRate(amount){
        var data_string='action=UpdateDollarRate&cost='+amount;
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              if (html=="true") {
                swal("Added!", "Cost updated.", "success");
              }else{
                swal("Failed", "Try Again Please.", "error");
              }
            }
          });
      }

      $('#updatePassword').click(function(){
        var password1=document.getElementById("password1").value;
        var password2=document.getElementById("password2").value;
        var password3=document.getElementById("password3").value;

        if (password2==password3 && password2 && password3 && password1) {
          swal({
            title: "Are you sure?",
            text: "The Admin Password of this System will be updated.",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
          }, function(isConfirm) {
            if (isConfirm) {
              saveUpdatePassword(password1, password2, password3);
            } else {
              swal("Cancelled", "Password not updated.", "error");
            }
          });
        }else{
            swal("Cancelled", "Pleae provide valid information.", "error");
        }
      });

      function saveUpdatePassword(password1, password2, password3){
        var data_string='action=updatePassword&oldPass='+password1+'&newPass='+password2;
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              if (html=="true") {
                swal("Added!", "Quantity updated.", "success");
                $("#password1").val('');
                $("#password2").val('');
                $("#password3").val('');
              }else{
                swal("Failed", "Try Again Please.", "error");
              }
            }
          });
      }

      $('#sendNotifications').click(function(){
        var notificationData=document.getElementById("notificationData").value;
        if (notificationData) {
          $("#notificationOverlay").css('visibility', 'visible');
          var data_string='action=sendBulkNotifications&notification='+notificationData;
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              if (html=="true") {
                swal("Added!", "Quantity updated.", "success");
                $("#notificationOverlay").css('visibility', 'hidden');
                $("#notificationData").val('');
              }else{
                $("#notificationOverlay").css('visibility', 'hidden');
              }
            }
          });
        }else{
            swal("Cancelled", "Pleae provide valid information.", "error");
        }
      });

      function getProfile() {
        var data_string='action=getProfile';
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              data = JSON.parse(html);
              $(".app-sidebar__user-name").html(data.name);
              if (data.avator==null) {
                var image1 = '../classes/fileload/user.png';
                var htm = ['<img style="max-width: 50px" class="app-sidebar__user-avatar" src='+image1+' alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
                fetchUsers();
              }else{
                var htm = ['<img style="max-width: 50px" class="app-sidebar__user-avatar" src="../classes/fileload/'+data.avator+'" alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
                fetchUsers();
              }
            }
          });
      }

      function getNotificatos(){
        var data_string='action=getPaymentsNotifications';
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              data = JSON.parse(html);
              var count=0;
              for (var i = 0; i < data.NOTIFICATIONS.length; i++) {
                //////////////////////////////////////
                var item_id=data.NOTIFICATIONS[i].ITEM_ID;
                var amount_paid=data.NOTIFICATIONS[i].ITEM_PRICE;
                var user_id=data.NOTIFICATIONS[i].USER_ID;
                var date_required=data.NOTIFICATIONS[i].DATE_REQURED;
                var days_needed=data.NOTIFICATIONS[i].ITEM_QTY;
                var status=data.NOTIFICATIONS[i].STATUS;
                var item_name=data.NOTIFICATIONS[i].ITEM_NAME;
                var client_name=data.NOTIFICATIONS[i].CLIENT_NAME;
                var time=data.NOTIFICATIONS[i].DATE;

                if (status==null) {
                  ++count;
                }

                htmli=['<li onclick="getAdminNots('+item_id+')">'+
                  '<a class="app-notification__item" href="javascript:;">'+
                  '<span class="app-notification__icon">'+
                  '<span class="fa-stack fa-lg">'+
                  '<i class="fa fa-circle fa-stack-2x text-success">'+
                  '</i><i class="fa fa-money fa-stack-1x fa-inverse">'+
                  '</i></span></span>'+
                    '<div>'+
                      '<p class="app-notification__message">'+
                      client_name+' Has orderd for '+item_name+' for '+days_needed+'day(s), for UGX'+amount_paid+' please take action if needed'+
                      '</p>'+
                      '<p class="app-notification__meta">'+time+'</p>'+
                    '</div>'+
                  '</a>'+
                '</li>'].join('');
                $(".app-notification__content").append(htmli);
                ////////////////////////////////////////
              }
              if (count>0) {
              $(".app-notification__title").html('You have '+count+' new notifications.');
              }else{
                $(".app-notification__title").html('You have no new notifications yet.');
              }
            }
          });
      }
    </script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
<?php
  }else{
    ?>
    <script type="text/javascript">
      window.location.href = "./page-login.php";
    </script>
    <?php
  }
?>