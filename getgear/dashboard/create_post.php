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
          <h1><i class="fa fa-edit"></i> Post New Item</h1>
          <p>Add a new gear here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Post New Item</a></li>
        </ul>
      </div>
      <div class="row">
      <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Add a new gear here!.</div>
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
              <h3 class="l-text">Posting, Please Wait...</h3>
            </div>

            <h3 class="tile-title">Add New Gear</h3>
            <div class="tile-body">
              <form>
                <select class="form-control" id="topicSelect"></select>
                <div class="form-group">
                  <label class="control-label">Item Owner</label>
                  <input type="text" id="user_email" class="form-control" rows="4" placeholder="Enter Owner Email or Phone"/>
                </div>
                <div class="form-group">
                  <label class="control-label">Item Name</label>
                  <input type="text" id="itemName" class="form-control" rows="4" placeholder="Item Name Goes Here"/>
                </div>
                <div class="form-group">
                  <label class="control-label">Item Price</label>
                  <input type="text" id="itemPrice" class="form-control" rows="4" placeholder="Item Price Goes Here"/>
                </div>
                <div class="form-group">
                  <label class="control-label">Description</label>
                  <textarea id="answer" class="form-control" rows="4" placeholder="Item Description goes here"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Pick Images.</label>
                  <input id="images" class="form-control" accept="image/*" type="file" name="files[]" multiple>
                </div>

                  <div class="form-group">
                    <select class="form-control" id="saleSelect">
                      <optgroup>
                        <option>For Hire</option>
                        <option>For Sale</option>
                      </optgroup>
                    </select>
                </div>

              </form>
            </div>
            <div class="tile-footer">
              <button id="sendPost" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Publish</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
        </div>
        


        <div class="col-md-6">
          <div class="tile">

            <div class="overlay" id="addOverlay" style="visibility: hidden;">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Posting, Please Wait...</h3>
            </div>

            <h3 class="tile-title">Post A New Ad.</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Ad link</label>
                  <input type="text" id="ad_link" class="form-control" rows="4" placeholder="Link Goes Here."/>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Pick Image.</label>
                  <input id="image" class="form-control" accept="image/*" type="file" name="file">
                </div>
            <div class="tile-footer">
              <button id="sendAd" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Publish</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
              </form>
            </div>


          <div class="tile">
            <div class="overlay" id="categoryOverlay" style="visibility: hidden;">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Adding, Please Wait...</h3>
            </div>
            <h3 class="tile-title">Add New Category.</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Category Name</label>
                  <input type="text" id="ad_category" class="form-control" rows="4" placeholder="Category Name Goes Here."/>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Pick Avator.</label>
                  <input id="category_image" class="form-control" accept="image/*" type="file" name="file">
                </div>
            <div class="tile-footer">
              <button id="send_category" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Publish</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
              </form>
            </div>
          </div>
        </div>
      </div>


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
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      ////////////////////////////////////////
      function fetchUsers() {
        //var topic=get("subject");
        var data_string;

        data_string='action=get_categories';
        $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              var data = JSON.parse(html);
              var htm=['<optgroup> <option>Select A Category</option>'].join('');
              for (var i = 0; i < data.CATEGORIES.length; i++) {
                  htmli=['<option>'+data.CATEGORIES[i].CATEGORY+'</option>'].join('');
                  htm+=htmli;
              }
              htm+='</optgroup>';
              $("#topicSelect").append(htm);
            }
          });
          getNotificatos();
        return false;
      }
       /////////////////////////////////////////
      var userCooke=get('user');
      $('#user_email').val(userCooke);

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
                fetchUsers();
              }else{
                var htm = ['<img style="max-width: 50px" class="app-sidebar__user-avatar" src="../classes/fileload/'+data.avator+'" alt="User Image">'].join('');
                document.getElementById("avator").innerHTML = htm;
                fetchUsers();
              }
            }
          });
      });
      ////////////////////////////////////////

      $('#sl').click(function(){
        $('#tl').loadingBtn();
        $('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
        $('#tl').loadingBtnComplete();
        $('#tb').loadingBtnComplete({ html : "Sign In"});
      });


      var fileInput=document.getElementById('images');
      var fileList=[];
      var form;
      fileInput.addEventListener('change', function (evnt) {
        fileList=[];
        form = new FormData();
        var fileCount=fileInput.files.length;
        for (var i = 0; i < fileCount; i++) {
            fileList.push(fileInput.files[i]);
            form.append("files[]", fileInput.files[i]);
        }
      })
      
      $('#sendPost').click(function(){
        var user_email=document.getElementById('user_email').value;
        var answer=document.getElementById('answer').value;
        var topic=document.getElementById('topicSelect').value;
        var purpose=document.getElementById('saleSelect').value;
        var itemName=document.getElementById('itemName').value;
        var itemPrice=document.getElementById('itemPrice').value;
        if(topic!="Select A Category"){
          if (fileList.length>=2) {
            if (answer && user_email && itemPrice && itemName) {
              //////////////////////////////////////////////
                $("#postOverlay").css('visibility', 'visible');
                form.append("action", "post_solution");
                form.append("user_email", user_email);
                form.append("answer", answer);
                form.append("topic", topic);
                form.append("itemName", itemName);
                form.append("itemPrice", itemPrice);
                form.append("purpose", purpose);
                $.ajax({
                    url : "../src/process.php",
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data : form,
                    success: function(response){
                        $('#user_email').val('');
                        $('#answer').val('');
                        $('#images').val('');
                        $('#user_email').focus();
                        $("#postOverlay").css('visibility', 'hidden');
                        alert(response);
                    }
                });
              //////////////////////////////////////////////
            }else{
              if (!answer && !user_email) {
                $('#user_email').focus();
              }else if (!answer && user_email){
                $('#answer').focus();
              }else if (answer && !user_email){
                $('#user_email').focus();
              }else if(!itemName){
                $('#itemName').focus();
              }else if(!itemPrice){
                $('#itemPrice').focus();
              }
              $.notify({
                title: "Error : ",
                message: "Please fill out all the required fields and try again, oli muntu mukulu, nko'ye okujukiza!",
                icon: 'fa fa-error' 
              },{
                type: "info"
              });
            }
         }else{
          $.notify({
            title: "Error : ",
            message: "Please select images and try again, oli muntu mukulu, nko'ye okujukiza!",
            icon: 'fa fa-error' 
          },{
            type: "info"
          });
         }
      }else{
          $.notify({
            title: "Error : ",
            message: "Please select item category and try again, oli muntu mukulu, nko'ye okujukiza!",
            icon: 'fa fa-error' 
          },{
            type: "info"
          });
      }
      });

      function get(name){
       if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
          return decodeURIComponent(name[1]);
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

      
      $('#sendAd').click(function(){
          $("#addOverlay").css('visibility', 'visible');
          var ad_link=document.getElementById('ad_link').value;
          var adfile = document.getElementById('image').files[0];
          var adform = new FormData();
          adform.append("action", "post_ad");
          adform.append("image", adfile);
          adform.append("link", ad_link);
          if (adfile && ad_link) {
          $.ajax({
              url : "../src/process.php",
              type: "POST",
              cache: false,
              contentType: false,
              processData: false,
              data : adform,
              success: function(response){
                  $('#ad_link').val('');
                  $('#image').val('');
                  $("#addOverlay").css('visibility', 'hidden');
              }
          });
        }else{
            $("#addOverlay").css('visibility', 'hidden');
            $.notify({
            title: "Error : ",
            message: "Please select image, provide link and try again, oli muntu mukulu, nko'ye okujukiza!",
            icon: 'fa fa-error' 
          },{
            type: "info"
          });
        }
      });
      
      $('#demoSelect').select2();

      
      $('#send_category').click(function(){
          $("#categoryOverlay").css('visibility', 'visible');
          var ad_link=document.getElementById('ad_category').value;
          var adfile = document.getElementById('category_image').files[0];
          var adform = new FormData();
          adform.append("action", "post_category");
          adform.append("image", adfile);
          adform.append("category", ad_link);
          if (adfile && ad_link) {
          $.ajax({
              url : "../src/process.php",
              type: "POST",
              cache: false,
              contentType: false,
              processData: false,
              data : adform,
              success: function(response){
                alert(response);
                  $('#ad_category').val('');
                  $('#category_image').val('');
                  $("#categoryOverlay").css('visibility', 'hidden');
              }
          });
        }else{
            $("#categoryOverlay").css('visibility', 'hidden');
            $.notify({
            title: "Error : ",
            message: "Please select image, provide category name and try again, oli muntu mukulu, nko'ye okujukiza!",
            icon: 'fa fa-error' 
          },{
            type: "info"
          });
        }
      });
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