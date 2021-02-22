<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GETGEAR</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <style type="text/css">{
        unicode-bidi: bidi-override;
        direction: rtl;
    }
  
        .rating {
            align-content: flex-start;
        }
        .itemZoom{
            height: 10%;

        }

        .ro {
            float: right;
            width: 100%;
            border: 0px solid blue;
            margin-top: 0px;
        }

        .ro > *{
            display: block;
            width: 100%;
        }

        .btCat {
            float: right;
        }

        .btCat {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            padding: 5px;
            
        }
    </style>

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
            <div class="col-md-6">
                <div class="well well-lg offer-box text-center">
                   Everyday's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;10 % off  on hire of UGX 2,000,000 and above !
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slide"></div>
                </div>
                <br />
            </div>

            <div class="col-md-6 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="thumbnail product-box">
                        <div class="caption">
                            <h3 id="item_name"></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="thumbnail product-box">
                        <div class="caption">
                            <h4>Description </h4>
                            <p id="item_description"></p>
                        </div>
                    </div>
                </div>

                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="thumbnail product-box">
                        <div class="caption">
                            <h4>Ratings </h4>
                            <p>

                                <div class="ratings" style="align-items: flex-start;">

                                    <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="fiveStar"></span><br>
                                    <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="fourStar"></span><br>
                                    <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="threeStar"></span><br>
                                    <span>&#9734;</span><span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="twoStar"></span><br>
                                    <span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="oneStar"></span><br>
                                </div>
                                
                            </p>
                        </div>
                    </div>
                </div>

                <div class=" col-md-12 col-sm-6 col-xs-6">
    <div class="btCat">
            <p class="thumbnail product-box"><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">Book Item</a></p> 
        </div>
            </div>
            </div>               

            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Recomended</a>
                    <ul class="list-group" id="categorized_items"></ul>                  
                </div>                      
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active">Top categories</a>
                    <ul class="list-group" id="categoryCount"></ul>                               
                </div>
                </div>
                        
                <div class="col-md-9">
                <div class="ro" id="allImages">
                    
                    </div>

                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="col-md-12 download-app-box text-center">
        Download Our Android App and Get 10% additional Off on all Gears . <a href="https://play.google.com/store/apps/details?id=com.waglex.getgear" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>
    </div>
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
        $(document).ready(function () {
            var item_id=get("item_id");
            var item_name=get("item_name");
            var item_price=get("item_price");
            var user_id=get("user_id");
            var category_id=get("category_id");
            var item_qty=get("item_qty");
            var item_description=get("item_description");
            var category=get("category");
            var itemImages=get("itemImages");

            var htmm=['<img src="./classes/fileload/'+itemImages+'" alt="img01" style="width: 100%; max-height: 100%;"/>'].join('');
            $("#mi-slider").append(htmm);
            $('#mi-slider').catslider();
            var nameandprice=item_name+"</br>UGX "+item_price;
            document.getElementById("item_name").innerHTML=nameandprice;
            document.getElementById("item_description").innerHTML=item_description;
            getItemRatting(item_id);
            getItemImages(item_id);
            getCategorized();
            categoryCount();
        });

        function getItemRatting(itemId) {
            var htmli="";
            data_string='action=getItemRatting&itemId='+itemId;
            $.ajax({
                type: "GET",
                url: "./ajax.php",
                data: data_string,
                cache: false,
                success: function(html){
                    data = JSON.parse(html);
                    document.getElementById("fiveStar").innerHTML=data.RATTING[0].FIVE;
                    document.getElementById("fourStar").innerHTML=data.RATTING[0].FOUR;
                    document.getElementById("threeStar").innerHTML=data.RATTING[0].THREE;
                    document.getElementById("twoStar").innerHTML=data.RATTING[0].TWO;
                    document.getElementById("oneStar").innerHTML=data.RATTING[0].ONE;
                }
            });
        }

        function getItemImages(itemId) {
            var htmli="";
            data_string='action=getItemImages&itemId='+itemId;
            $.ajax({
                type: "GET",
                url: "./ajax.php",
                data: data_string,
                cache: false,
                success: function(html){
                    data = JSON.parse(html);
                    for (var i = 0; i < data.IMAGES.length; i++) {
                        var item_image=data.IMAGES[i].IMAGE;
                        var htm=['<div class="col-md-4 text-center col-sm-6 col-xs-6">'+
                            '<div class="thumbnail product-box">'+
                                '<img src="./classes/fileload/'+item_image+'" class="itemZoom" alt="" />'+
                                '<div class="caption">'+
                                    '<h3><a href="#"> </a></h3>'+
                                '</div>'+
                            '</div>'+
                        '</div>'].join('');

                        $("#allImages").append(htm);
                    }
                }
            });
        }

        function get(name){
            if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
            return decodeURIComponent(name[1]);
        }

        function getCategorized() {
            var htmli="";
            data_string='action=getRecomended';
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

                        htmli=['<li class="list-group-item">'+item_name+'<br>'+
                          '<span class="label label-success pull-right">UGX '+item_price+'</span><br>'+
                          '<center>'+
                          '<img src="./classes/fileload/'+itemImages+'" style="height: 100px">'+
                          '</center>'+
                          '<a href="#" style="color: white;" class="btn btn-success" role="button">Add To Cart</a>'+
                          '<a href="item_description.php?item_id='+item_id+'&item_name='+item_name+'&item_price='+item_price+'&user_id='+user_id+'&category_id='+category_id+'&item_qty='+item_qty+'&item_description='+item_description+'&category='+category+'&itemImages='+itemImages+'" style="color: white;" class="btn btn-primary" role="button">See Details</a>'+
                        '</li>'].join('');
                        htm+=htmli;
                    }
                    $("#categorized_items").append(htm);
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
    </script>
</body>
</html>
