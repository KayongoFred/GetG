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
      <!-- Navbar Right Menu-->
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









        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-login.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
          <p class="app-sidebar__user-name">Get Gear</p>
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
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info">
              <span id="big_pic"></span>
              <h4 id="full_name"></h4>
              <p id="user_email">System User</p>
              <p id="user_phone">System User</p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Gears</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Orders</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline"></div>
            <div class="tab-pane fade" id="user-settings">
              <div class="tile user-settings">
		        <table class="table table-striped table-hover" id="sampleTable"></table>
              </div>
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
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      /////////////////////////////////////////
      var avator = get("avator");
      var name = get("name");
      var email = get("email");
      var phone = get("phone");

      $(document).ready(function () {
        var htm = ['<img class="user-img" src="../classes/fileload/'+avator+'">'].join('');
        document.getElementById("big_pic").innerHTML = htm;
        document.getElementById("full_name").innerHTML=name;
        document.getElementById("user_email").innerHTML=email;
        document.getElementById("user_phone").innerHTML=phone;
        /////////////////profile//////////////////////////
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
            }
          });
        //////////////////////////////////////////////////////
        fetchPosts(email);
        fetchUsers(email);
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

      function arrangeImages(item_id){
          var htmli="";
          data_string='action=getItemImages&itemId='+item_id;
        $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              data = JSON.parse(html);
              for (var i = 0; i < data.IMAGES.length; i++) {
                var item_name =data.IMAGES[i].IMAGE;

                var htm = ['<img style="max-width: 150px; padding-right: 2px;" class="user-img" src="../classes/fileload/'+data.IMAGES[i].IMAGE+'">'].join('');
                $("#image"+item_id).append(htm);
                htmli=htm;
                }
            }
          });
        return htmli;
      }

      function fetchPosts(email) {
        data_string='action=getMyItem&userName='+email;
        $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              data = JSON.parse(html);
              //alert(html);
              for (var i = 0; i < data.ITEMS.length; i++) {
                var avator;
				var item_id =data.ITEMS[i].ID;
	            var images=arrangeImages(item_id);
                var item_name =data.ITEMS[i].ITEM_NAME;
				var item_price =data.ITEMS[i].ITEM_PRICE;
				var user_id =data.ITEMS[i].USER_ID;
				var category_id =data.ITEMS[i].CAT_ID;
				var item_qty =data.ITEMS[i].ITEM_QTY;
                var status =data.ITEMS[i].STATUS;
				var item_description =data.ITEMS[i].ITEM_DESC;
				var category =data.ITEMS[i].CATEGORY;
				var image_data =data.ITEMS[i].IMAGE_DATA;
                if (data.ITEMS[i].ITEM_IMAGE==null) {
                	var avator = 'user.png';
	            }else{
	                avator=data.ITEMS[i].ITEM_IMAGE;
	            }
                //alert(item_id);
                var htm;
                  htm=['<div class="timeline-post">'+
                  '<div class="post-media"><a href="#"><img style="max-width: 50px" src="../classes/fileload/'+avator+'"></a>'+
                    '<div class="content">'+
                      '<h5><a href="#">'+item_name+'</a></h5>'+
                      '<p class="text-muted"><small>UGX'+item_price+'</small></p>'+
                    '</div>'+
                  '</div>'+
                  '<div class="post-content">'+
                    '<p id="answer">'+item_description+'</p>'+
                    '<div id="image'+item_id+'">'+
                    '</div>'+
                  '</div>'+
                  '<ul class="post-utility">'+
                    '<li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-trash-o"></i>Delete</a></li>'+
                    '<li class="shares"><a href="#"><i class="fa fa-fw fa-pencil-square-o"></i>Edit</a></li>'+
                    '<li class="comments">'+category+'</li>'+
                  '</ul>'+
                '</div>'].join('');
            	
                $("#user-timeline").append(htm);
              }
            }
          });
        getNotificatos();
        return false;
      }

      function get(name){
       if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
          return decodeURIComponent(name[1]);
      }

      function fetchUsers(cemail) {
        //var topic=get("subject");
        var data_string;

        data_string='action=getMyClientsOrders&userName='+cemail;
        $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              var data = JSON.parse(html);
              //alert(data.ORDERS.length);
              var htm=['<thead>'+
                  '<tr>'+
                    '<th>Item</th>'+
                    '<th>Orderd</th>'+
                    '<th>Needed</th>'+
                    '<th>Status</th>'+
                    '<th>Paid</th>'+
                    '<th>Days</th>'+
                  '</tr>'+
                '</thead>'+
                '<tbody id="table_data">'].join('');
              for (var i = 0; i < data.ORDERS.length; i++) {
                //////////////////////////////////////
                var avator = data.ORDERS[i].CLIENT_AVATOR;
                var name = data.ORDERS[i].CLIENT_NAME;
                var email = data.ORDERS[i].CLIENT_EMAIL;
                var phone = data.ORDERS[i].CLIENT_PHONE;
                htmli=['<tr>'+
                    '<td onclick=getItemProfile("'+data.ORDERS[i].ITEM_ID+'")><a href="#"><img src="../classes/fileload/'+data.ORDERS[i].IMAGES+'" class="avatar" alt="Avatar"/> '+data.ORDERS[i].ITEM_NAME+'</br>UGX'+data.ORDERS[i].ITEM_PRICE+'</br>'+data.ORDERS[i].ITEM_DESCRIPTION+'</a></td>'+
                    '<td>'+data.ORDERS[i].TIME+'</td>'+
                    '<td>'+data.ORDERS[i].DATE+'</td>'+
                    '<td>'+data.ORDERS[i].STATUS+'</td>'+
                    '<td>'+data.ORDERS[i].AMOUNT+'</td>'+
					'<td>'+data.ORDERS[i].QUANTITY+'</td>'+
                  '</tr>'].join('');
                  htm+=htmli;
                ////////////////////////////////////////
              }
              htm+='</tbody>';
              $("#sampleTable").append(htm);
              $('#sampleTable').DataTable();
            }
          });
        return false;
      }

      function getItemProfile(itemId){
      	window.location.href = "./item_data.php?id="+itemId;
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