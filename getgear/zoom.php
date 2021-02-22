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
    <div class="btCat">
            <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">Book Item</a></p> 
        </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well well-lg offer-box text-center">
                   Everyday's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;10 % off  on hire of UGX 2,000,000 and above !
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slide">
                        <img src="assets/img/dummyimg.png" alt="img01" style="width: 100%; max-height: 100%;">
                    </div>
                </div>
                <br />
            </div>

            <div class="col-md-6 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="thumbnail product-box">
                        <div class="caption">
                            <h3>Drone </h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="thumbnail product-box">
                        <div class="caption">
                            <h4>Description </h4>
                            <p>It's of heigh resolution wqjdiowdio  9e9eoweoweowe p ioweqo ejijefje ejfeijfoeoweifjiejioj jwoejoejioejfioej jeiojiow</p>
                        </div>
                    </div>
                </div>

                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="thumbnail product-box">
                        <div class="caption">
                            <h4>Ratings </h4>
                            <p>

                                <div class="ratings" style="align-items: flex-start;">

                                    <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp100<br>
                                    <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp80<br>
                                    <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp40<br>
                                    <span>&#9734;</span><span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp10<br>
                                    <span>&#9734;</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 50<br>
                                </div>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>                  

            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Top Hired Gears
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Cameras
      <span class="label label-primary pull-right">Sh 400000/=</span><img src="assets/img/dummyimg.png" style="height: 100px"> 
      <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
                        </li>
                        <li class="list-group-item">Drones<br>
                      <span class="label label-success pull-right">Sh 340000/=</span>
                      <img src="assets/img/dummyimg.png" style="height: 100px"> 
                      <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
                        </li>
                        <li class="list-group-item">Phantome Y
                             <span class="label label-info pull-right">Sh 250000/=</span>
                             <img src="assets/img/dummyimg.png" style="height: 100px"> 
                             <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
                        </li>
                        <li class="list-group-item">Camone TX
                             <span class="label label-success pull-right">Sh 440000/=</span>
                             <img src="assets/img/dummyimg.png" style="height: 100px"> 
                             <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
                        </li>
                    </ul>                  
                </div>                      
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active list-group-item-success">Related Hires
                   </a>
                    <ul class="list-group">

                        <li class="list-group-item">Phantome x7 Drone
                             <span class="label label-danger pull-right">300</span>
                        </li>
                        <li class="list-group-item">Camone TX
                             <span class="label label-success pull-right">340</span>
                        </li>
                        <li class="list-group-item">Soney Z
                             <span class="label label-info pull-right">735</span>
                        </li>

                    </ul>                  
                </div>
                <div>
                    <a href="#" class="list-group-item active">Look for Gear Accessaries & Extras
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">Camera Accessaries
                             <span class="label label-warning pull-right">456</span>
                        </li>
                        <li class="list-group-item">Drones Accessaries
                             <span class="label label-success pull-right">156</span>
                        </li>
                        <li class="list-group-item">Stands Accessaries
                             <span class="label label-info pull-right">400</span>
                        </li>
                        <li class="list-group-item">Sound Recorders Accessaries
                             <span class="label label-primary pull-right">89</span>
                        </li>
                        <li class="list-group-item">LED Video Light Accessaries
                             <span class="label label-danger pull-right">90</span>
                        </li>
                        <li class="list-group-item">Computers Accessaries
                             <span class="label label-warning pull-right">567</span>
                        </li>
                    </ul>                               
                </div>
                </div>
                        
                <div class="col-md-9">
                <div class="ro">
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/dummyimg.png" class="itemZoom" alt="" />
                            <div class="caption">
                                <h3><a href="#"> </a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/dummyimg.png" class="itemZoom" alt="" />
                            <div class="caption">
                                <h3><a href="#"> </a></h3>
                            </div>
                        </div>
                    </div> 

                     
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/dummyimg.png" class="itemZoom" alt="" />
                            <div class="caption">
                                <h3><a href="#"> </a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/dummyimg.png" class="itemZoom" alt="" />
                            <div class="caption">
                                <h3><a href="#"> </a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="assets/img/dummyimg.png" class="itemZoom" alt="" />
                            <div class="caption">
                                <h3><a href="#"> </a></h3>
                            </div>
                        </div>
                    </div>
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

        <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Gears . <a href="https://play.google.com/store/apps/details?id=com.waglex.getgear" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>

    </div>

    <!--Footer -->
    <div class="col-md-12 footer-box">


       
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
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		</script>
</body>
</html>
