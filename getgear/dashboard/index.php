<?php
  if ($_COOKIE["getgear_user_email"] && $_COOKIE["getgear_user_password"]) {
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Get Gear</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Get Gear</a>
      <!-- Sidebar toggle button-->
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

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
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">All Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
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
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>.........Get Gear</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>All Users</h4>
              <p><b id="allusers">00</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Sellers</h4>
              <p><b id="sellers">00</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Admins</h4>
              <p><b id="admins">00</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Items</h4>
              <p><b id="items">00</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">System Usage</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Served Clients</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Client's Addresses</h3>
            <div class="tile-body">
              <div id="map"></div>
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
    <script type="text/javascript" src="js/plugins/chart.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0CyHkun9XwwT7O9eIZEQill7qRwbhUiU"></script>
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
              count_users();
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

      function count_users() {
        var data_string='action=count_users';
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              var data = JSON.parse(html);
              $("#allusers").html(data.allusers);
              $("#admins").html(data.admins);
              $("#items").html(data.items);
              $("#sellers").html(data.sellers);
            }
          });
          getNotificatos();
      }
      ////////////////////////////////////////

      var data = {
      	labels: ["January", "February"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(0.312201, -327.423022),
          zoom: 7.5
        });
        var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];
        map.set('styles', styles);
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          //https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml
          downloadUrl('../map_data.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var markerImage = 'marker.png';
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                icon: markerImage
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

    google.maps.event.addDomListener(window, 'load', initMap);
    </script>
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