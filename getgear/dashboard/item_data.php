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
      <!-- Navbar Right Menu-->
      <ul class="app-nav">

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
              <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Item Description</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Edit Item</a></li>
              <li class="nav-item"><a class="nav-link" href="#cash-order" data-toggle="tab">Order With Cash</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline"></div>
            <div class="tab-pane fade" id="user-settings">
              <div class="tile user-settings">
                

                <div class="overlay" id="postOverlay" style="visibility: hidden;">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Posting, Please Wait...</h3>
            </div>

            <h3 class="tile-title">Edit Gear</h3>
            <div class="tile-body">
              <form>
                <select class="form-control" id="topicSelect"></select>
                <div class="form-group">
                  <label class="control-label">Item Owner</label>
                  <input type="text" id="muser_email" class="form-control" rows="4" placeholder="Enter Owner Email or Phone"/>
                </div>
                <div class="form-group">
                  <label class="control-label">Item Name</label>
                  <input type="text" id="mitemName" class="form-control" rows="4" placeholder="Item Name Goes Here"/>
                </div>
                <div class="form-group">
                  <label class="control-label">Item Price</label>
                  <input type="text" id="mitemPrice" class="form-control" rows="4" placeholder="Item Price Goes Here"/>
                </div>
                <div class="form-group">
                  <label class="control-label">Description</label>
                  <textarea id="manswer" class="form-control" rows="4" placeholder="Item Description goes here"></textarea>
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
              <button id="sendPost" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
        </div>







        <div class="tab-pane fade" id="cash-order">








          <div class="tile user-settings">
                <div class="overlay" id="postOverlay" style="visibility: hidden;">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Posting, Please Wait...</h3>
            </div>

            <h3 class="tile-title">Order Item With Cash</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">User Email</label>
                  <input type="text" id="client_email" class="form-control" rows="4" placeholder="Enter User Email or Phone"/>
                </div>

                <div class="bootstrap-iso">
                  <div class="form-group" id="date-picker">
                    <label class="control-label">When Is It Needed?.</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label">Number of days neede</label>
                  <input id="after" class="form-control" type="number" value="1" min="1" max="30" />
                </div>
                <input type="hidden" name="ammount-paid" id="ammount-paid"/>

              </form>
            </div>
            <div class="tile-footer">
              <button id="placeOrder" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Place Order</button>
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
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">

      $("#placeOrder").click(function(){
        var client_email=document.getElementById('client_email').value;
        var dateNeeded=document.getElementById('date').value;
        var daysNeeded=document.getElementById('after').value;
        var ammountPaid=document.getElementById('ammount-paid').value;
        var item_id=get("id");

        if (client_email && dateNeeded && daysNeeded) {
        var htmli="On ";
        data_string='action=checkItemAvailability&item_id='+item_id+'&gearDate='+dateNeeded+'&finalCount='+daysNeeded;

        $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              data = JSON.parse(html);
              if (data.BUSY_DATES.length==0) {
                  saveTransaction();
              } else {
                for (var i = 0; i < data.BUSY_DATES.length; i++) {
                  htmli+=data.BUSY_DATES[i].BUSY_DATE+", ";
                }
                htmli+=" this item will not be available, please consider chosing another item.";
                $.notify({
                  title: "Error : ",
                  message: htmli,
                  icon: 'fa fa-error' 
                },{
                  type: "info"
                });
              }
            }
          });
      }else{
        $.notify({
            title: "Error : ",
            message: "Please fillout all the information, oli muntu mukulu, nko'ye okujukiza!",
            icon: 'fa fa-error' 
          },{
            type: "info"
          });
      }

      });


      function saveTransaction(){
        $("#postOverlay").css('visibility', 'visible');
        var client_email=document.getElementById('client_email').value;
        var dateNeeded=document.getElementById('date').value;
        var daysNeeded=document.getElementById('after').value;
        var ammountPaid=document.getElementById('ammount-paid').value;
        var item_id=get("id");

        if (client_email && dateNeeded && daysNeeded) {
          data_string='action=saveBooking'+
          '&item_id='+item_id+
          '&quantity='+daysNeeded+
          '&user_id='+client_email+
          '&amount_paid='+ammountPaid+
          '&hireDate='+dateNeeded+
          '&hireDays='+daysNeeded+
          '&transaction_type=Cash';
          $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              $('#client_email').val('');
              $('#date').val('');
              $("#postOverlay").css('visibility', 'hidden');
              $.notify({
                title: "Success : ",
                message: "Your order has been placed!",
                icon: 'fa fa-error' 
              },{
                type: "info"
              });
            }
          });
        }else{
          $.notify({
            title: "Error : ",
            message: "Please fillout all the information, oli muntu mukulu, nko'ye okujukiza!",
            icon: 'fa fa-error' 
          },{
            type: "info"
          });
        }
      }

      /////////////////////////////////////////
      $(document).ready(function () {
        /////////////////profile//////////////////////////
        var item_idi=get("id");
        fetchCategories();
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
          fetchPosts(item_idi);
        //////////////////////////////////////////////////////
      });

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

      function fetchPosts(item_idi) {
        data_string='action=getMyItemData&item_id='+item_idi;
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


                var client_phone =data.ITEMS[i].CLIENT_PHONE;
                var client_email =data.ITEMS[i].CLIENT_EMAIL;
                var client_avator =data.ITEMS[i].CLIENT_AVATOR;
                var client_name =data.ITEMS[i].CLIENT_NAME;

                var htm = ['<img class="user-img" src="../classes/fileload/'+client_avator+'">'].join('');
                document.getElementById("big_pic").innerHTML = htm;
                document.getElementById("full_name").innerHTML=client_name;
                document.getElementById("user_email").innerHTML=client_email;
                document.getElementById("user_phone").innerHTML=client_phone;


                $("#muser_email").val(client_email);
                $("#mitemName").val(item_name);
                $("#mitemPrice").val(item_price);
                $("#ammount-paid").val(item_price);
                document.getElementById("manswer").innerHTML=item_description;

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
                    '<li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-trash-o"></i><span  onclick="deleteItemBox()">Delete Item</span></a></li>'+
                    '<li class="comments">'+category+'</li>'+
                  '</ul>'+
                '</div>'].join('');
              
                $("#user-timeline").append(htm);
              }
            }
          });
        return false;
      }

      function get(name){
       if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
          return decodeURIComponent(name[1]);
      }

      function deleteItemBox(){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this item!",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        }, function(isConfirm) {
          if (isConfirm) {
            DeleteThisItem();
          } else {
            swal("Cancelled", "This Item deletion is Cancelled.", "error");
          }
        });
      }

      function DeleteThisItem() {
        var item_id=get("id");
        var data_string;
        data_string='action=delete_item&item_id='+item_id;
        $.ajax({
            type: "GET",
            url: "../ajax.php",
            data: data_string,
            cache: false,
            success: function(html){
              if (html=="true") {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
              }else{
                swal("Failed", "Something went wrong", "error");
              }
            }
          });
          getNotificatos();
        return false;
      }


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
        var item_id=get("id");
        var user_email=document.getElementById('muser_email').value;
        var answer=document.getElementById('manswer').value;
        var topic=document.getElementById('topicSelect').value;
        var itemName=document.getElementById('mitemName').value;
        var itemPrice=document.getElementById('mitemPrice').value;
        var purpose=document.getElementById('saleSelect').value;
        if(topic!="Select A Category"){
          if (fileList.length>=2) {
            if (answer && user_email && itemPrice && itemName) {
              //////////////////////////////////////////////
                $("#postOverlay").css('visibility', 'visible');
                form.append("action", "update_item");
                form.append("user_email", user_email);
                form.append("answer", answer);
                form.append("topic", topic);
                form.append("itemName", itemName);
                form.append("itemPrice", itemPrice);
                form.append("item_id", item_id);
                form.append("purpose", purpose);
                $.ajax({
                    url : "../src/process.php",
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data : form,
                    success: function(response){
                        alert(response);
                        $('#user_email').val('');
                        $('#answer').val('');
                        $('#images').val('');
                        $('#user_email').focus();
                        $("#postOverlay").css('visibility', 'hidden');
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
                message: "Please fill out all the required fields and try again!",
                icon: 'fa fa-error' 
              },{
                type: "info"
              });
            }
         }else{
          $.notify({
            title: "Error : ",
            message: "Please select images and try again!",
            icon: 'fa fa-error' 
          },{
            type: "info"
          });
         }
      }else{
          $.notify({
            title: "Error : ",
            message: "Please select item category and try again!",
            icon: 'fa fa-error' 
          },{
            type: "info"
          });
      }
      });

      function fetchCategories() {
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
              //alert(data.USERS.length);
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

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="js/bootstrap-number-input.js" ></script>
<script>
// Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
$("[name='checkbox2']").change(function() {
  if(!confirm('Do you wanna cancel me!')) {
    this.checked = true;
  }
});

$('#after').bootstrapNumber();
$('#colorful').bootstrapNumber({
  upClass: 'success',
  downClass: 'danger'
});
</script>
<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('#date-picker form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'dd/mm/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
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