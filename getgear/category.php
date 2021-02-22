<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GETGEAR</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./"><strong>GETGEAR</strong> store</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Login</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>+256-700-768-312</a></li>
                            <li><a href="#"><strong>Mail: </strong>getgearug@gmail.com</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                <div>
                                    Twese Building, Room F17,<br />
                                    Wilson Street,<br />
                                    Kampala, Uganda
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">


                   Everyday's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;10 % off  on hire of UGX 2,000,000 and above !                
              
               
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">

                        <ul id="item0"></ul>

                        <ul id="item1"></ul>

                        <ul id="item2"></ul>

                        <ul id="item3"></ul>
                        <nav id="categories"></nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col -->
            
            <div class="col-md-3 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" id="item5" >
                    
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6" id="item6">
                    
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Category</a>

                    <ul class="list-group" id="categoryCount"></ul>
                </div>
                
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Items</li>
                    </ol>
                </div>
                <!-- /.row -->
                <div class="row" id="all_items">
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="col-md-12 download-app-box text-center">

        <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Gears . <a href="https://play.google.com/store/apps/details?id=com.waglex.getgear" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>

    </div>

    <!--Footer -->
    <div class="col-md-12 footer-box">

        <div class="row">
            <div class="col-md-4">
                <strong>Send a Quick Query </strong>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                            <div class="form-group">
                                <input type="text" id="emailaddress" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" onclick="sendRequest();" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <strong>Our Location</strong>
                <hr>
                <p>
                    Twese Building, Room F17, Wilson Street,<br />
                                    Kampala, Uganda<br />
                    Call: +256-700-768-312<br>
                    Email: getgearug@gmail.com<br>
                </p>

                2019 www.getgear.store | All Right Reserved
            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr>
                <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
                <!--<a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>-->
                <p>
                    Join our conversations on our social media platforms, and get involved in our other programs. Enjoy!. 
                </p>
            </div>
        </div>
        <hr>
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2019 | &nbsp; All Rights Reserved | &nbsp; www.getgear.store | &nbsp; 24x7 support | &nbsp; Email us: getgearug@gmail.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>

    <script type="text/javascript">
            $(document). ready(function () {
                var htmli="";
                data_string='action=get_categories';
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      getCategorized1(data.CATEGORIES[0].CATEGORY, data.CATEGORIES[1].CATEGORY, data.CATEGORIES[2].CATEGORY,data.CATEGORIES[3].CATEGORY);
                      getCategorized5(data.CATEGORIES[4].CATEGORY);
                      getCategorized6(data.CATEGORIES[5].CATEGORY);
                      categoryCount();
                      //$('#mi-slider').catslider();
                    }
                  });
            });

            function getCategorized1(category1, category2, category3, category4) {
                var htmli="";
                data_string='action=getCategorizedItems&category='+category1;
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < data.ITEMS.length; i++) {
                            var imageName=data.ITEMS[i].ITEM_IMAGE;
                            var itemName=data.ITEMS[i].ITEM_NAME;
                            var altCount=i+1;
                          htmli=['<li><a href="#"><img src="./classes/fileload/'+imageName+'" alt="img0'+altCount+'"><h4>'+itemName+'</h4></a></li>'].join('');
                          htm+=htmli;
                          if (i==3) {
                            break;
                          }
                      }
                      $("#item0").append(htm);
                      getCategorized2(category2, category3, category4);
                      //$('#mi-slider').catslider();
                    }
                  });
            }

            function getCategorized2(category2, category3, category4) {
                var htmli="";
                data_string='action=getCategorizedItems&category='+category2;
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < data.ITEMS.length; i++) {
                            var imageName=data.ITEMS[i].ITEM_IMAGE;
                            var itemName=data.ITEMS[i].ITEM_NAME;
                            var altCount=i+1;
                          htmli=['<li><a href="#"><img src="./classes/fileload/'+imageName+'" alt="img0'+altCount+'"><h4>'+itemName+'</h4></a></li>'].join('');
                          htm+=htmli;
                          if (i==3) {
                            break;
                          }
                      }
                      $("#item1").append(htm);
                      getCategorized3(category3, category4);
                      //$('#mi-slider').catslider();
                    }
                  });
            }

            function getCategorized3(category3, category4) {
                var htmli="";
                data_string='action=getCategorizedItems&category='+category3;
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < data.ITEMS.length; i++) {
                            var imageName=data.ITEMS[i].ITEM_IMAGE;
                            var itemName=data.ITEMS[i].ITEM_NAME;
                            var altCount=i+1;
                          htmli=['<li><a href="#"><img src="./classes/fileload/'+imageName+'" alt="img0'+altCount+'"><h4>'+itemName+'</h4></a></li>'].join('');
                          htm+=htmli;
                          if (i==3) {
                            break;
                          }
                      }
                      $("#item2").append(htm);
                      getCategorized4(category4);
                      //$('#mi-slider').catslider();
                    }
                  });
            }

            function getCategorized4(category4) {
                var htmli="";
                data_string='action=getCategorizedItems&category='+category4;
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < data.ITEMS.length; i++) {
                            var imageName=data.ITEMS[i].ITEM_IMAGE;
                            var itemName=data.ITEMS[i].ITEM_NAME;
                            var altCount=i+1;
                          htmli=['<li><a href="#"><img src="./classes/fileload/'+imageName+'" alt="img0'+altCount+'"><h4>'+itemName+'</h4></a></li>'].join('');
                          htm+=htmli;
                          if (i==3) {
                            break;
                          }
                      }
                      $("#item3").append(htm);
                      //$('#mi-slider').catslider();
                      getCategories();
                    }
                  });
            }

            function getCategorized5(category5) {
                var htmli="";
                data_string='action=getCategorizedItems&category='+category5;
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < data.ITEMS.length; i++) {
                            var item_id=data.ITEMS[i].ID;
                            var item_name=data.ITEMS[i].ITEM_NAME;
                            var item_price=data.ITEMS[i].ITEM_PRICE;
                            var user_id=data.ITEMS[i].USER_ID;
                            var category_id=data.ITEMS[i].CAT_ID;
                            var item_qty=data.ITEMS[i].ITEM_QTY;
                            var item_description=data.ITEMS[i].ITEM_DESC;
                            var category=data.ITEMS[i].CATEGORY;
                            var itemImages=data.ITEMS[i].ITEM_IMAGE;

                            htmli=['<div class="thumbnail product-box">'+
                            '<img style="max-height: 150px;" src="./classes/fileload/'+itemImages+'" alt="" />'+
                            '<div class="caption">'+
                            '<h3><a href="#">'+item_name+' </a></h3>'+
                            '<p>'+item_description+'</p>'+
                            '<p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="item_description.php?item_id='+item_id+'&item_name='+item_name+'&item_price='+item_price+'&user_id='+user_id+'&category_id='+category_id+'&item_qty='+item_qty+'&item_description='+item_description+'&category='+category+'&itemImages='+itemImages+'" class="btn btn-primary"'+
                            'role="button">See Details</a></p>'+
                            '</div>'+
                            '</div>'].join('');
                              htm+=htmli;

                          if (i==0) {
                            break;
                          }
                      }
                      $("#item5").append(htm);
                    }
                  });
            }

            function getCategorized6(category6) {
                var htmli="";
                data_string='action=getCategorizedItems&category='+category6;
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < data.ITEMS.length; i++) {
                            var item_id=data.ITEMS[i].ID;
                            var item_name=data.ITEMS[i].ITEM_NAME;
                            var item_price=data.ITEMS[i].ITEM_PRICE;
                            var user_id=data.ITEMS[i].USER_ID;
                            var category_id=data.ITEMS[i].CAT_ID;
                            var item_qty=data.ITEMS[i].ITEM_QTY;
                            var item_description=data.ITEMS[i].ITEM_DESC;
                            var category=data.ITEMS[i].CATEGORY;
                            var itemImages=data.ITEMS[i].ITEM_IMAGE;

                            htmli=['<div class="thumbnail product-box">'+
                            '<img style="max-height: 150px;" src="./classes/fileload/'+itemImages+'" alt="" />'+
                            '<div class="caption">'+
                            '<h3><a href="#">'+item_name+' </a></h3>'+
                            '<p>'+item_description+'</p>'+
                            '<p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="item_description.php?item_id='+item_id+'&item_name='+item_name+'&item_price='+item_price+'&user_id='+user_id+'&category_id='+category_id+'&item_qty='+item_qty+'&item_description='+item_description+'&category='+category+'&itemImages='+itemImages+'" class="btn btn-primary"'+
                            'role="button">See Details</a></p>'+
                            '</div>'+
                            '</div>'].join('');
                              htm+=htmli;

                          if (i==0) {
                            break;
                          }
                      }
                      $("#item6").append(htm);
                    }
                  });
            }

            function getCategories() {
                var htmli="";
                data_string='action=get_categories';
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < 4; i++) {
                          htmli=['<a href="#">'+data.CATEGORIES[i].CATEGORY+'</a>'].join('');
                          htm+=htmli;
                      }
                      $("#categories").append(htm);
                      $('#mi-slider').catslider();
                      GetRecomendedItems();
                    }
                  });
            }

            function GetRecomendedItems() {
                var htmli="";
                var category=get("category");
                data_string='action=getCategorizedItems&category='+category;
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < data.ITEMS.length; i++) {
                        var item_id=data.ITEMS[i].ID;
                        var item_name=data.ITEMS[i].ITEM_NAME;
                        var item_price=data.ITEMS[i].ITEM_PRICE;
                        var user_id=data.ITEMS[i].USER_ID;
                        var category_id=data.ITEMS[i].CAT_ID;
                        var item_qty=data.ITEMS[i].ITEM_QTY;
                        var item_description=data.ITEMS[i].ITEM_DESC;
                        var category=data.ITEMS[i].CATEGORY;
                        var itemImages=data.ITEMS[i].ITEM_IMAGE;

                    htmli=['<div class="col-md-4 text-center col-sm-6 col-xs-6">'+
                        '<div style="height: 450px;" class="thumbnail product-box">'+
                        '<img style="max-height: 200px;" src="./classes/fileload/'+itemImages+'" alt="" />'+
                        '<div class="caption">'+
                        '<h3><a href="#">'+item_name+'</a></h3>'+
                        '<p>Price : <strong>UGX '+item_price+'</strong>  </p>'+
                        '<p>'+item_description+'</p>'+
                        '<p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="item_description.php?item_id='+item_id+'&item_name='+item_name+'&item_price='+item_price+'&user_id='+user_id+'&category_id='+category_id+'&item_qty='+item_qty+'&item_description='+item_description+'&category='+category+'&itemImages='+itemImages+'" class="btn btn-primary"'+
                        'role="button">See Details</a></p>'+
                        '</div></div></div></div>'].join('');

                          htm+=htmli;
                      }
                      $("#all_items").append(htm);
                    }
                  });
            }

            function categoryCount() {
                var htmli="";
                data_string='action=categoryCount';
                $.ajax({
                    type: "GET",
                    url: "./ajax.php",
                    data: data_string,
                    cache: false,
                    success: function(html){
                      var data = JSON.parse(html);
                      var htm="";
                      for (var i = 0; i < data.CATEGORIES.length; i++) {
                        var count=data.CATEGORIES[i].CATEGORY_COUNT;
                        var category=data.CATEGORIES[i].CATEGORY;
                        htmli=['<a href="category.php?category='+category+'"><li class="list-group-item">'+category+
                            '<span class="label label-primary pull-right">'+count+'</span>'+
                            '</li></a>'].join('');
                          htm+=htmli;
                      }
                      $("#categoryCount").append(htm);
                    }
                  });
            }

            function sendRequest() {
                var email=document.getElementById('emailaddress').value;
                var message=document.getElementById('message').value;
                var recipient="sanigetmultimedia@gmail.com";
                var time="00.00.00";
                if (email && message) {
                    var htmli="";
                    data_string='action=sendMessage&patient='+recipient+'&message='+message+'&sender_email='+email+'&time='+time;
                    $.ajax({
                        type: "GET",
                        url: "./ajax.php",
                        data: data_string,
                        cache: false,
                        success: function(html){
                          if (html=="true") {
                            alert("Your message has been sent");
                            $("#emailaddress").val("");
                            $("#message").val("");
                          }
                        }
                      });
                }else{
                    alert("Please fill out both fields");
                }
            }

      function get(name){
       if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
          return decodeURIComponent(name[1]);
      }
        </script>
</body>
</html>
