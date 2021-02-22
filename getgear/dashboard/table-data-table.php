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
        
        <li><a class="app-menu__item" href="create_post.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Add Item</span></a></li>
        <li><a class="app-menu__item" href="orders_data.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Orders</span></a></li>
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
          <h1><i class="fa fa-users"></i> System Users</h1>
          <p>.........Get Gear</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item active"><a href="#">System Users</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-striped table-hover" id="sampleTable">
                
              </table>
            </div>
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
    <!-- Google analytics script-->
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
              $(".app-sidebar__user-name").html(data.name);
              if (data.avator==null) {
                var image1 = '../classes/fileload/user.png';
                var htm = ['<img style="max-width: 50px" class="app-sidebar__user-avatar" src='+image1+' alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
              }else{
                var htm = ['<img style="max-width: 50px" class="app-sidebar__user-avatar" src="../classes/fileload/'+data.avator+'" alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
              }
              fetchUsers();
            }
          });
      });

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

      function getAdminNots(itemId){
        window.location.href = "./item_data.php?id="+itemId;
      }

      function clearNotifications(){
        var data_string='action=clearDashboardNotifications';
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              //////////cleared/////////
            }
          });
      }

      function fetchUsers() {
        //var topic=get("subject");
        var data_string;

        data_string='action=get_users';
        $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              var data = JSON.parse(html);
              //alert(data.USERS.length);
              var htm=['<thead>'+
                  '<tr>'+
                    '<th>Name</th>'+
                    '<th>E-mail</th>'+
                    '<th>Sex</th>'+
                    '<th>Prevlege</th>'+
                    '<th>Nationality</th>'+
                    '<th>Phone</th>'+
                  '</tr>'+
                '</thead>'+
                '<tbody id="table_data">'].join('');
              for (var i = 0; i < data.USERS.length; i++) {
                //////////////////////////////////////
                htmli=['<tr onclick=asignItem("'+data.USERS[i].EMAIL+'")>'+
                    '<td>'+data.USERS[i].NAME+'</td>'+
                    '<td>'+data.USERS[i].EMAIL+'</td>'+
                    '<td>'+data.USERS[i].SEX+'</td>'+
                    '<td>'+data.USERS[i].PREVLAGE+'</td>'+
                    '<td>'+data.USERS[i].NATIONALITY+'</td>'+
                    '<td>'+data.USERS[i].PHONE+'</td>'+
                  '</tr>'].join('');
                  htm+=htmli;
                ////////////////////////////////////////
              }
              htm+='</tbody>';
              $("#sampleTable").append(htm);
              $('#sampleTable').DataTable();
            }
          });
        getNotificatos();
        return false;
      }

      function asignItem(email){
        window.location.href = "./create_post.php?user="+email;
      }

      function get(name){
       if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
          return decodeURIComponent(name[1]);
      }
      ////////////////////////////////////////
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
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