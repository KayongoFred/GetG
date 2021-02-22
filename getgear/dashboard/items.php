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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style type="text/css">
	    body {
	        color: #566787;
			background: #f5f5f5;
			font-family: 'Varela Round', sans-serif;
			font-size: 13px;
		}
		.table-wrapper {
	        background: #fff;
	        padding: 20px 25px;
	        margin: 30px auto;
			border-radius: 3px;
	        box-shadow: 0 1px 1px rgba(0,0,0,.05);
	    }
		.table-wrapper .btn {
			float: right;
			color: #333;
	    	background-color: #fff;
			border-radius: 3px;
			border: none;
			outline: none !important;
			margin-left: 10px;
		}
		.table-wrapper .btn:hover {
	        color: #333;
			background: #f2f2f2;
		}
		.table-wrapper .btn.btn-primary {
			color: #fff;
			background: #03A9F4;
		}
		.table-wrapper .btn.btn-primary:hover {
			background: #03a3e7;
		}
		.table-title .btn {		
			font-size: 13px;
			border: none;
		}
		.table-title .btn i {
			float: left;
			font-size: 21px;
			margin-right: 5px;
		}
		.table-title .btn span {
			float: left;
			margin-top: 2px;
		}
		.table-title {
			color: #fff;
			background: #4b5366;		
			padding: 16px 25px;
			margin: -20px -25px 10px;
			border-radius: 3px 3px 0 0;
	    }
	    .table-title h2 {
			margin: 5px 0 0;
			font-size: 24px;
		}
		.show-entries select.form-control {        
	        width: 60px;
			margin: 0 5px;
		}
		.table-filter .filter-group {
	        float: right;
			margin-left: 15px;
	    }
		.table-filter input, .table-filter select {
			height: 34px;
			border-radius: 3px;
			border-color: #ddd;
	        box-shadow: none;
		}
		.table-filter {
			padding: 5px 0 15px;
			border-bottom: 1px solid #e9e9e9;
			margin-bottom: 5px;
		}
		.table-filter .btn {
			height: 34px;
		}
		.table-filter label {
			font-weight: normal;
			margin-left: 10px;
		}
		.table-filter select, .table-filter input {
			display: inline-block;
			margin-left: 5px;
		}
		.table-filter input {
			width: 200px;
			display: inline-block;
		}
		.filter-group select.form-control {
			width: 110px;
		}
		.filter-icon {
			float: right;
			margin-top: 7px;
		}
		.filter-icon i {
			font-size: 18px;
			opacity: 0.7;
		}	
	    table.table tr th, table.table tr td {
	        border-color: #e9e9e9;
			padding: 12px 15px;
			vertical-align: middle;
	    }
		table.table tr th:first-child {
			width: 60px;
		}
		table.table tr th:last-child {
			width: 80px;
		}
	    table.table-striped tbody tr:nth-of-type(odd) {
	    	background-color: #fcfcfc;
		}
		table.table-striped.table-hover tbody tr:hover {
			background: #f5f5f5;
		}
	    table.table th i {
	        font-size: 13px;
	        margin: 0 5px;
	        cursor: pointer;
	    }	
		table.table td a {
			font-weight: bold;
			color: #566787;
			display: inline-block;
			text-decoration: none;
		}
		table.table td a:hover {
			color: #2196F3;
		}
		table.table td a.view {        
			width: 30px;
			height: 30px;
			color: #2196F3;
			border: 2px solid;
			border-radius: 30px;
			text-align: center;
	    }
	    table.table td a.view i {
	        font-size: 22px;
			margin: 2px 0 0 1px;
	    }   
		table.table .avatar {
			border-radius: 50%;
			height: 35px;
			width: 35px;
			vertical-align: middle;
			margin-right: 10px;
		}
		.status {
			font-size: 30px;
			margin: 2px 2px 0 0;
			display: inline-block;
			vertical-align: middle;
			line-height: 10px;
		}
	    .text-success {
	        color: #10c469;
	    }
	    .text-info {
	        color: #62c9e8;
	    }
	    .text-warning {
	        color: #FFC107;
	    }
	    .text-danger {
	        color: #ff5b5b;
	    }
	    .pagination {
	        float: right;
	        margin: 0 0 5px;
	    }
	    .pagination li a {
	        border: none;
	        font-size: 13px;
	        min-width: 30px;
	        min-height: 30px;
	        color: #999;
	        margin: 0 2px;
	        line-height: 30px;
	        border-radius: 2px !important;
	        text-align: center;
	        padding: 0 6px;
	    }
	    .pagination li a:hover {
	        color: #666;
	    }	
	    .pagination li.active a {
	        background: #03A9F4;
	    }
	    .pagination li.active a:hover {        
	        background: #0397d6;
	    }
		.pagination li.disabled i {
	        color: #ccc;
	    }
	    .pagination li i {
	        font-size: 16px;
	        padding-top: 6px
	    }
	    .hint-text {
	        float: left;
	        margin-top: 10px;
	        font-size: 13px;
	    }    
	</style>


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
          <p class="app-sidebar__user-designation">System Items</p>
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
          <h1><i class="fa fa-users"></i> System Items</h1>
          <p>.........Get Gear</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item active"><a href="#">System Items</a></li>
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
                var htm = ['<img style="width: 50px; height: 50px" class="app-sidebar__user-avatar" src='+image1+' alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
              }else{
                var htm = ['<img style="max-width: 50px" class="app-sidebar__user-avatar" src="../classes/fileload/'+data.avator+'" alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
              }
              fetchUsers();
            }
          });
      });

      function fetchUsers() {
        //var topic=get("subject");
        var data_string;

        data_string='action=getAllMyItemData';
        $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              var data = JSON.parse(html);
              //alert(html);
              var htm=['<thead>'+
                  '<tr>'+
                    '<th>Client</th>'+
                    '<th>Item</th>'+
                    '<th>Price</th>'+
                    '<th>Date Added</th>'+
                    '<th>Purpose</th>'+
                    '<th>Category</th>'+
                  '</tr>'+
                '</thead>'+
                '<tbody id="table_data">'].join('');
              for (var i = 0; i < data.ORDERS.length; i++) {
                //////////////////////////////////////
                var avator = data.ORDERS[i].CLIENT_AVATOR;
                var name = data.ORDERS[i].CLIENT_NAME;
                var email = data.ORDERS[i].CLIENT_EMAIL;
                var phone = data.ORDERS[i].CLIENT_PHONE;
                var purpose= data.ORDERS[i].PURPOSE;
                var category= data.ORDERS[i].CATEGORY;
                htmli=['<tr>'+
                	'<td>'+
                	'<a href="user_profile.php?avator='+avator+'&name='+name+'&email='+email+'&phone='+phone+'">'+
                	'<img src="../classes/fileload/'+avator+'" class="avatar" alt="Avatar"/> '+name+'</a></td></a>'+
                    '<td onclick=getItemProfile("'+data.ORDERS[i].ITEM_ID+'")><a href="#"><img src="../classes/fileload/'+data.ORDERS[i].IMAGES+'" class="avatar" alt="Avatar"/> '+data.ORDERS[i].ITEM_NAME+'</a></td>'+
                    '<td>UGX'+data.ORDERS[i].ITEM_PRICE+'</td>'+
                    '<td>'+data.ORDERS[i].DATE+'</td>'+
                    '<td>'+purpose+'</td>'+
                    '<td>'+category+'</td>'+
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

      function getItemProfile(itemId){
      	window.location.href = "./item_data.php?id="+itemId;
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