<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Improved Culinary</title>
    <!--      API here-->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1TwYksj1uQg1V_5yPUZqwqYYtUIvidrY&callback=true"></script>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/slider.css" rel="stylesheet">

    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" type="text/cs" href="assets/js/bootstrap-timepicker/compiled/timepicker.css"/>
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datetimepicker/datertimepicker.html"/>
    <link rel="stylesheet" href="assets/css/bootstrap-slider.css" type="text/css">
    <link rel="stylesheet" href="newGallery/gallery.css">
    <!--    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->

    <script type="text/javascript" src="_function.js"></script>
    <style type="text/css">
        #legend {
            background: white;
            padding: 10px;
            margin: 5px;
            font-size: 12px;
            font-color: blue;
            font-family: Arial, sans-serif;
        }

        .color {
            border: 1px solid;
            height: 12px;
            width: 12px;
            margin-right: 3px;
            float: left;
        }

        legenda
        .a {
            background: #f75d5d;
        }

        .b {
            background: #ff3300;
        }

        .c {
            background: #ffd777;
        }

        .d {
            background: #ec87ec;
        }

        .e {
            background: #e2e231;
        }

        .f {
            background: #000000;
        }

        .g {
            background: #ff07d5;
        }

        .h {
            background: #9ad7f9;
        }

        .i {
            background: #f92a2a;
        }

        .j {
            background: #6df73b;
        }

        .k {
            background: #1796c4;
        }

        .l {
            background: #f75d5d;
        }
    </style>
</head>

<body onload="init()">
<!-- Small Modal -->
<div class="modal fade" id="mySmallModal" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background:#000000">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="modal_title">Modal Header</h4>
            </div>
            <div class="modal-body" id="modal_body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background:#000000">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="md_title">Modal Header</h4>
            </div>
            <div class="modal-body" id="md_body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>

    </div>
</div>
<section id="container">


    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a class="logo">
            <!-- <img style="height:30px;" src="assets/ico/dinner.png" alt=""> -->
            <b>WEBGIS Culinary </b>03-1711522006 M.Nur Faiz Putro</a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->

                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>

        <h4>
            <div class="top-menu">
                <ul class="nav pull-right" style="margin-top: 6px">
                    <a href="admin/" class="logo1" title="Login"><img src="image/login.png">
                        <!-- <i class="fa fa-user"></i> -->
                        <span style="color:white">Login</span></a>
                </ul>
            </div>
        </h4>


    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>

        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="#"><img src="assets/img/jam.jpg" class="img-circle" width="150"
                                                     height="120"></a></p>
                <h5 class="centered">Bukittinggi</h5>

                <br>

                <li class="sub-menu">
                    <a href="javascript:; " onclick="viewkul()">
                        <i class="fa fa-bars"></i>
                        <span>List Culinary</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-thumb-tack"></i>
                        <span>Arround Me</span>
                    </a>
                    <ul class="treeview-menu">
                        <div class=" form-group" style="color: white;"><br>
                            <label>Based On Radius</label><br>
                            <label for="inputradiuss">Radius : </label>
                            <label id="nilai">0</label> m
                            <script>
                                function cekkk() {
                                    document.getElementById('nilai').innerHTML = document.getElementById('inputradiuss').value * 100
                                }
                            </script>
                            <input type="range" onchange="cekkk();aktifkanRadiuss()" id="inputradiuss"
                                   name="inputradiuss" data-highlight="true" min="0" max="20" value="0">
                        </div>
                        <!-- <button type="button" id="inputradius" onclick="aktifkanRadius()" class="btn btn-info btn-block btn-flat" >Cari</button> -->
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-search"></i>
                        <span>Search Culinary By</span>
                    </a>
                    <ul class="sub">
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-search"></i>
                                <span>By Name</span>
                            </a>
                            <ul class="sub">
                                <div class=" form-group">
                                    <li>
                                        <div class="search">
                                            <div class="col-md-15 padding-0 text-center">
                                                <div class="form-group form-animate-text"><br>
                                                    <input type="text" class="form-text" placeholder="...."
                                                           id="kul_nama" required>
                                                    <span class="bar"></span>
                                                </div>
                                                <button type="submit" class="btn btn-info btn-block btn-flat"
                                                        id="kul_button" onclick='find_kul();'>Search
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                        <i class="fa fa-globe"></i>
                        <span>Sub District</span>
                      </a>
                      <ul class="sub">
                        <div class=" form-group"> <br>
                          <label style="color: white;">Sub District</label>
                          <select class="form-control select2" style="width: 100%; height: 70%;" id="carikecamatankul">
                            <option value="">-Choose-</option>
                            <?php
                        include("connect.php");
                        $carikecamatankul = pg_query("select * from district order by name ASC");
                        while ($rowcarikecamatankul = pg_fetch_assoc($carikecamatankul)) {
                            echo "<option value=" . $rowcarikecamatankul['id'] . ">" . $rowcarikecamatankul['name'] . "</option>";
                        }
                        ?>
                          </select>
                                              
                        </div>
                        
                        <div class=" form-group">
                          <button type="submit" class="btn btn-info btn-block btn-flat" id="kul_kec" onclick='viewkecamatankul();'>Search</button>
                        </div>
                     </ul>
                    </li> -->


                        <li class="sub-menu">
                            <a href="javascript:;" onclick="selectkul()">
                                <i class="fa fa-cutlery"></i>
                                <span>By Culinary</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" onclick="selectfacility()">
                                <i class="fa fa-thumbs-up"></i>
                                <span>By Facility</span>
                            </a>
                        </li>


                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-building"></i>
                                <span>By Capacity</span>
                            </a>
                            <ul class="sub">
                                <div class=" form-group"><br>
                                    <select class="form-control select2" style="width: 100%; height: 70%;"
                                            id="caricapacity">
                                        <option name="kapasitas" value="">-Choose-</option>
                                        <option name="kapasitas" value="1"> < 50</option>
                                        <option name="kapasitas" value="2">50-100</option>
                                        <option name="kapasitas" value="3">> 100</option>
                                    </select>
                                </div>
                                <div class=" form-group">
                                    <button type="submit" class="btn btn-info btn-block btn-flat" id="kul_kec"
                                            onclick='viewcapacity();'>Search
                                    </button>
                                </div>
                            </ul>
                        </li>


                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-money"></i>
                                <span>By Price</span>
                            </a>
                            <ul class="sub">
                                <div class=" form-group"><br>
                                    <select class="form-control select2" style="width: 100%; height: 70%;"
                                            id="cariprice">
                                        <option name="harga" value="">-Choose-</option>
                                        <option name="harga" value="1"> < Rp 10.000</option>
                                        <option name="harga" value="2">Rp 10.000 - Rp 20.000</option>
                                        <option name="harga" value="3"> > Rp 20.000</option>
                                    </select>
                                </div>
                                <div class=" form-group">
                                    <button type="submit" class="btn btn-info btn-block btn-flat" id="kul_kec"
                                            onclick='viewprice();'>Search
                                    </button>
                                </div>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-hand-o-left"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-12 col-lg-8">
                    <section class="panel">
                        <!-- First Action -->
                        <div class="panel-body">
                            <div>
                                <label style="color: black; margin-right:20px">Google Map with Location List</label>
                                <button type="button" onclick="posisisekarang()" class="btn btn-success "
                                        data-toggle="tooltip" id="posisinow" title="Posisi Saya"
                                        style=""><i class="fa fa-location-arrow"> </i>
                                </button>

                                <button type="button" onclick="lokasimanual()" class="btn btn-success"
                                        data-toggle="tooltip" id="posmanual" title="Posisi Manual"
                                        style=""><i class="fa fa-map-marker"></i>
                                </button>

                                <!--                       <button type="button" onclick="viewkul()" class="btn btn-default" data-toggle="tooltip" title="Melihat Semua Kuliner" -->
                                <!--                               style="margin: 7px" style="margin-right: 7px;"><i class="fa fa-bullseye"></i>-->
                                <!--                       </button>-->

                                <!-- <button type="button" onclick="clean()" class="btn btn-default" data-toggle="tooltip" title="Refresh" style="margin-right: 7px;"><i class="fa fa-refresh"></i>
                                </button> -->
                                <label id="tombol">
                                    <a type="button" onclick="legenda()" id="showlegenda" class="btn btn-success"
                                       data-toggle="tooltip" title="Legenda" style="margin-right: 7px;"><i
                                                class="fa fa-eye"></i>
                                    </a>
                            </div>
                            <div id="map" style="height:460px" class="centered"></div>
                        </div>
                    </section>


                    <!--custom chart end-->
                    <div class="col-lg-6 ds" id="Information" style="display:none;">
                        <div style="margin:20px">
                            <a class="btn btn-compose">Result</a>
                        </div>
                        <!-- First Action -->
                        <div class="box-body" style="margin:20px; max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcaridet1" style="display:none;">
                                <table class="table " id='hasilcaridet'></table>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 ds" id="hasildetculi" style="display:none;">
                        <a class="btn btn-compose" style="color: white;">Result</a>
                        <!-- First Action -->
                        <div class="box-body" style="margin:20px; max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcaridetculi1" style="display:none;">
                                <table class="table " id='hasilcaridetculi'></table>

                            </div>

                        </div>
                    </div>

                    <!-- DATA TABLE OBJEK SEKITAR-->
                    <div id="view_table_sekitar" class="col-lg-6 col-md-4 col-sm-4 ds" style="display:none">
                        <div class="white-panel pns" style="height:510px">
                            <div class="white-header"
                                 style="height:40px;margin:20px;margin-top:0px;background:white;color:black">
                                <h5 class="btn btn-compose">Search Results Object Around</h5>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-6"></div>
                            </div>
                            <div style="height:410px; margin:20px; overflow-y: scroll;">
                                <table id="hasilcarihotel1" class="table table-bordered">
                                    <tbody id='hasilcarihotel' style='color:black'></tbody>
                                </table>
                                <table id="hasilcariobj1" class="table table-bordered">
                                    <tbody id='hasilcariobj' style='color:black'></tbody>
                                </table>
                                <table id="hasilcarimosque1" class="table table-bordered">
                                    <tbody id='hasilcarimosque' style='color:black'></tbody>
                                </table>
                                <table id="hasilcarisouv1" class="table table-bordered">
                                    <tbody id='hasilcarisouv' style='color:black'></tbody>
                                </table>
                                <table id="hasilcariculi1" class="table table-bordered">
                                    <tbody id='hasilcariculi' style='color:black'></tbody>
                                </table>
                                <table id="hasilcariind1" class="table table-bordered">
                                    <tbody id='hasilcariind' style='color:black'></tbody>
                                </table>
                                <table id="hasilcarirestaurant1" class="table table-bordered">
                                    <tbody id='hasilcarirestaurant' style='color:black'></tbody>
                                </table>
                                <table id="table_angkot" class="table table-bordered">
                                    <tbody id='table_kanan_angkot' style='color:black'></tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- /col-md-12 -->

                    <div class="col-lg-4 ds" id="tampilangkotsekitarik" style="display:none;">

                        <!-- <h3 style="font-size:16px">Angkot Information</h3> -->
                        <a class="btn btn-compose" style="color: white;">Angkot Information</a>
                        <div class="box-body" style="max-height:450px;overflow:auto;">
                            <div class="form-group" id="tampillistangkotik1" style="display:none;">
                                <table class="table table-bordered" id='tampillistangkotik'></table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ds" id="hasilmosque" style="display:none;">
                        <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                        <!-- <h3 style="font-size:16px">Mosque Information</h3> -->
                        <a class="btn btn-compose" style="color: white;">Mosque Information</a>
                        <!-- First Action -->
                        <div class="box-body" style="max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcarimosque1" style="display:none;">
                                <table class="table table-bordered" id='hasilcarimosque'></table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ds" id="hasilrestaurant" style="display:none;">
                        <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                        <!-- <h3 style="font-size:16px">Mosque Information</h3> -->
                        <a class="btn btn-compose" style="color: white;">Restaurant Information</a>
                        <!-- First Action -->
                        <div class="box-body" style="max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcarirestaurant1" style="display:none;">
                                <table class="table table-bordered" id='hasilcarirestaurant'></table>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 ds" id="hasilhotel" style="display:none;">
                        <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                        <!-- <h3 style="font-size:16px">Hotel Information</h3> -->
                        <a class="btn btn-compose" style="color: white;">Hotel Information</a>
                        <!-- First Action -->
                        <div class="box-body" style="max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcarihotel1" style="display:none;">
                                <table class="table table-bordered" id='hasilcarihotel'></table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ds" id="hasilobj" style="display:none;">
                        <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                        <!-- <h3 style="font-size:16px">Tourism Information</h3> -->
                        <a class="btn btn-compose" style="color: white;">Tourism Information</a>
                        <!-- First Action -->
                        <div class="box-body" style="max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcariobj1" style="display:none;">
                                <table class="table table-bordered" id='hasilcariobj'></table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ds" id="hasilindustry" style="display:none;">
                        <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                        <!-- <h3 style="font-size:16px">Industry Information</h3> -->
                        <a class="btn btn-compose" style="color: white;">Industry Information</a>
                        <!-- First Action -->
                        <div class="box-body" style="max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcariind1" style="display:none;">
                                <table class="table table-bordered" id='hasilcariind'></table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ds" id="hasilsouv" style="display:none;">
                        <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                        <!-- <h3 style="font-size:16px">Souvenir Information</h3> -->
                        <a class="btn btn-compose" style="color: white;">Souvenir Information</a>
                        <!-- First Action -->
                        <div class="box-body" style="max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcarisouv1" style="display:none;">
                                <table class="table table-bordered" id='hasilcarisouv'></table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ds" id="hasilculi" style="display:none;">
                        <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                        <!-- <h3 style="font-size:16px">Culinary Information</h3> -->
                        <a class="btn btn-compose" style="color: white;">Culinary Information</a>
                        <!-- First Action -->
                        <div class="box-body" style="max-height:450px;overflow:auto;">
                            <div class="form-group" id="hasilcariculi1" style="display:none;">
                                <table class="table table-bordered" id='hasilcariculi'></table>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- </div>/col-lg-9 END SECTION MIDDLE -->


                <!-- **********************************************************************************************************************************************************
                RIGHT SIDEBAR CONTENT
                *********************************************************************************************************************************************************** -->

                <!-- <div class="col-sm-6 col-md-6 mb"  style="margin-top: 0px;" id="hasilik" > -->

                <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                <!--          <h2 class="box-title" id="hasilpencarian">-->
                <!-- <marquee width="100%" behavior="alternate" scrollamount="4">Bukittinggi Tourism..</marquee> -->
                <!--          </h2><br>-->
                <!-- <section class="panel">
                    <div class="panel-body">
                      <div class="white-panel" style="margin:20px">
                        <a class="btn btn-compose">Result</a>
                      </div> -->
                <!-- First Action -->

                <!-- <div class="box-body" style="margin:20px;max-height:400px;overflow:auto;">
                <div class="form-group" id="hasilcari1" style="display:none;">
                <table class="table table-bordered" id='hasilcari'></table>
                </div>
                </div>
                </div>
                </section>
                </div> -->


                <div class="col-sm-4 div-col-md-4 col-lg-4" style=" margin-top:0px; display:none" id="hasilik">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="white-header" style="margin:20px;">
                                <a class="btn btn-compose">Result</a>
                            </div>
                            <div class="box-body" style="margin: 20px; max-height:400px;overflow:auto">
                                <div class="form-group" id="hasilcari1" style="display: none;">
                                    <table class="table table-bordered" id="hasilcari"></table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-sm-6 div-col-md-6 col-lg-4" style=" margin-top:0px;" id="recommend">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="white-header" style="margin:20px;">
                                <a class="btn btn-compose">Popular Culinary</a>
                            </div>
                            <div class="white-panel">
                                <?php
                                include "newGallery/popular.php";
                                ?>
                            </div>
                            <!--                            <div class="html5gallery" data-skin="horizontal" data-width="320" data-height="272" data-responsive="true">-->
                            <!--                                <a href="img/culinary/cancang.jpg"  title="Cancang"><img-->
                            <!--                                            src="img/culinary/cancang.jpg" onclick="recKul('11')" alt="Cancang"></a>-->
                            <!--                                <a href="img/culinary/itiak.jpg" title="Guali Itiak Lado Mudo" onclick="recKul('4')"><img-->
                            <!--                                            src="img/culinary/itiak.jpg"></a>-->
                            <!--                                <a href="img/culinary/nasikapau.jpg" title="Nasi Kapau" onclick="recKul('22')"><img-->
                            <!--                                            src="img/culinary/nasikapau.jpg"></a>-->
                            <!--                                <a href="img/culinary/tmbng.jpg" title="Tambungsu" onclick="recKul('3')"><img-->
                            <!--                                            src="img/culinary/tmbng.jpg"></a>-->
                            <!--                            </div>-->
                        </div>
                    </section>
                </div>

                <div id="nearbyik" class="col-md-4 col-sm-4 mb" style="display:none">
                    <div class="white-panel pns" style="padding-bottom:5px">
                        <div class="white-header" style="height:40px;margin-bottom:0px;background:white;color:black">
                            <!-- <h4><u><b>Object Arround</b></u></h4> -->
                            <a class="btn btn-compose">Object Arround</a>
                        </div>
                        <div style="text-align:left; margin: 10px; color:black;">
                            <!--img src="assets/img/product.png" width="120"-->
                            <div style="padding: 10px">
                                <div class="checkbox">
                                    <label>
                                        <input id="check_tw" type="checkbox">
                                        Tourism
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="check_i" type="checkbox">
                                        Small Industry
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="check_m" type="checkbox" value="">
                                        Masjid
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="check_oo" type="checkbox" value="">
                                        Souvenit
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="check_k" type="checkbox" value="">
                                        Culinary
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="check_h" type="checkbox" value="">
                                        Hotel
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="check_res" type="checkbox" value="">
                                        Restaurant
                                    </label>
                                </div>
                                <!--RADIUS-->
                                <label for="inputradius">Radius : </label>
                                <label id="nilaiiiii">0</label> m
                            </div>

                            <script>
                                function cek() {
                                    document.getElementById('nilaiiiii').innerHTML = document.getElementById('inputradius').value * 100
                                }
                            </script>
                            <input type="range" onchange="cek(); aktifkanRadius()" id="inputradius" name="inputradius"
                                   data-highlight="true" min="0" max="15" value="0">

                            <!--BUTTON CARI SEKITAR-->
                            <div id="view_sekitar" class="centered">
                            </div>


                        </div>
                    </div>
                </div><!-- /col-md-12 -->


                <div class="col-lg-4 ds" id="hasilrute" style="display:none;">
                    <!-- <div class="col-md-12 padding-0" style="display:none;"> -->
                    <!-- <h3 style="font-size:16px">Rute</h3> -->
                    <a class="btn btn-compose">Rute</a>
                    <!-- First Action -->
                    <div class="box-body" style="max-height:557px;overflow:auto;">
                        <div class="form-group" id="detailrute1">

                            <table class="table table-bordered" id='detailrute'></table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ds" id="selectkulll" style="display:none;">
                    <!-- <h3 style="font-size:16px">Select Culinary</h3> -->
                    <button class="btn btn-compose">Select Culinary</button>
                    <div class="panel box-v3">
                        <ul class="sub">
                            <div id="forml">
                                <input type="text" class="form-control hidden" id="id" name="id"
                                       value="<?php echo $id ?>">
                                <div class="form-group row col-xs-9">
                                    <?php
                                    $sql2 = pg_query("select * from culinary order by name");
                                    while ($dt = pg_fetch_array($sql2)) {
                                        echo "<div class='checkbox'><label style='color:black'><input name='culinary' value=\"$dt[id]\" type='checkbox' style='width:25px'>$dt[name]</label></div>";
                                    }

                                    ?>

                                </div>
                            </div>
                            <div class=" form-group">
                                <button type="submit" class="btn btn-info btn-block btn-flat" id="kul_kec"
                                        onclick='viewkull();'>Search
                                </button>
                            </div>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 ds" id="selectfacility" style="display:none;">
                    <!-- <h3 style="font-size:16px">Select Facility</h3> -->
                    <a class="btn btn-compose">Select Facility</a>
                    <div class="panel box-v3">
                        <ul class="sub">
                            <div id="forml">
                                <input type="text" class="form-control hidden" id="id" name="id"
                                       value="<?php echo $id ?>">
                                <div class="form-group row col-xs-9">
                                    <?php
                                    $sql2 = pg_query("select * from facility_culinary order by facility");
                                    while ($dt = pg_fetch_array($sql2)) {
                                        echo "<div class='checkbox'><label style='color:black'><input name='facility' value=\"$dt[id]\" type='checkbox' style='width:25px'>$dt[facility]</label></div>";
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class=" form-group">
                                <button type="submit" class="btn btn-info btn-block btn-flat" id="kul_kec"
                                        onclick='viewfas();'>Search
                                </button>
                            </div>
                        </ul>
                    </div>
                </div>


        </section>
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="html5gallery/html5gallery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
    <script src="assets/js/zabuto_calendar.js"></script>
    <script src="newGallery/gallery.js"></script>

    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar
            ({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax:
                    {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                legend:
                    [
                        {type: "text", label: "Special event", badge: "00"},
                        {type: "block", label: "Regular event",}
                    ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
</body>
</html>
