<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stasiun Meteorologi | Raja Haji Fisabililah</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets/img/BMKG.PNG') ?>">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/slickmove.css') ?>">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.fancybox.css') ?>" type="text/css" media="screen">
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/animate.css') ?>">
    <!-- Theme color -->
    <link id="switcher" href="<?= base_url('assets/css/theme-color/default-theme.css') ?>" rel="stylesheet">

    <!-- Main Style -->
    <link href="<?= base_url('assets/css/style1.css') ?>" rel="stylesheet">

    <!-- Weather Card Style -->
    <link href="<?= base_url('assets/css/weathercard.css') ?>" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css'>
    <!-- Cabin for Title -->
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel='stylesheet' type='text/css'>
    <!-- Pacifico for Logo   -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel='stylesheet' type='text/css'>
    <style>
        #status {
            background-image: url("<?= base_url() ?>/assets/img/Logo-BMKG-new.gif");
        }

        #download-app {
            background-image: url("<?= base_url() ?>/assets/img/BGK.png");
        }

        #subscribe {
            background-image: url("<?= base_url() ?>/assets/img/subscribe-bg.jpg");
        }
    #clock{
    text-align: right;
}
    #dino{
        text-align: right;
    }
}

    .mySlides {display: none;}

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    td{
        padding: 20px;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 8s;
      animation-name: fade;
      animation-duration: 8s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    .pink{
         background-color:  #FF69B4;
    }
    .pink:hover{
         background-color:#FF1493;

    }

    </style>
</head>
<body>

    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
        <div id="status">&nbsp;
        </div>
    </div>
    <!-- END PRELOADER -->


    <!-- Start menu area -->
    <div class="nav-area">
        <a id="menu-btn"><i class="fa fa-bars fa-border" style="background-color:#2F4F4F;color:white"></i></a>
        <nav class="main-nav" id="main-menu">
            <span class="fa fa-remove" id="close"></span>
            <ul>
               <!--  <li><a href="<?php echo base_url();  ?>login"><i class="fa fa-user"></i><span>Admin</span></a></li>
                <hr> -->
                <li><a href="<?php echo base_url(); ?>#header"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="<?php echo base_url(); ?>#screenshot"><i class="fa fa-image"></i><span>Prakiraan cuaca</span></a></li>
                <li><a href="<?php echo base_url(); ?>#testimonial"><i class="fa fa-certificate"></i><span>Struktur Organisasi</span></a></li>
                <li><a href="<?php echo base_url(); ?>#download-app"><i class="glyphicon glyphicon-book"></i><span>Visi Misi</span></a></li>
                <li><a href="<?php echo base_url(); ?>#features"><i class="fa fa-server"></i><span>Kategori</span></a>
                </li>
                <li><a href="<?php echo base_url(); ?>#contact"><i class="fa fa-envelope-o"></i><span>Contact</span></a>
                </li>
            </ul>
        </nav>
    </div>


    <!-- Start header section -->
    <header id="header">
        <div class="header-inner">
            <!-- Header image -->
            <img src="assets/img/BGJ.png" alt="img">
            <div class="overlay">
                <div class="header-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-top">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="header-bottom">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="header-bottom-left">
                                                <h1><a class="logo" href="<?php echo base_url(); ?>#header"><img src="assets/img/bg3.png" alt="logo"></a></h1>
                                              <b><CENTER><p><h3><font color="white">Maklumat Layanan BMKG</font></h3></p></CENTER></b>
                                               <CENTER><p>"Dengan ini kami menyatakan siap melayani masyarakat untuk memperoleh informasi Meteorologi, Klimatologi, dan Geofisika, sesuai dengan standar pelayanan yang telah ditetapkan, apabila tidak menepati janji ini, kami siap menerima sanksi sesuai dengan peraturan perundang-udangan yang berlaku"
                                                </p></CENTER> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="header-bottom-right"><br><br>
                                                 <div class="feature-img wow fadeInUp">
                                                <!-- <img src="assets/images/iphone-group1.png" alt="iphone grpup img"> -->
                                                <img src="assets/img/BGFF.png" alt="iphone grpup img" style="width: 50%;">
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
    </header>
   
     
     <!-- Start Prakiraan cuaca -->
     <section id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area wow fadeInUp">
                        <h2 class="title">Prakiraan <span>Cuaca</span></h2>
                            <p></p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="screenshots-area">
                        <?php 
                            function kodeCuaca($kodeCuaca, $time_format){
                                if ($kodeCuaca==0&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah-am.png'>";
                                }
                                else if ($kodeCuaca==0&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah-pm.png'>";
                                }
                                else if ($kodeCuaca==1&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah%20berawan-am.png'>";
                                }
                                else if ($kodeCuaca==1&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah%20berawan-pm.png'>";
                                }
                                else if ($kodeCuaca==2&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah%20berawan-am.png'>";
                                }
                                else if ($kodeCuaca==2&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah%20berawan-pm.png'>";
                                }
                                else if ($kodeCuaca==3&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan-am.png'>";
                                }
                                else if ($kodeCuaca==3&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan-pm.png'>";
                                }
                                else if ($kodeCuaca==4&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan%20tebal-am.png'>";
                                }
                                else if ($kodeCuaca==4&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan%20tebal-pm.png'>";
                                }
                                else if ($kodeCuaca==5&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/udara%20kabur-am.png'>";
                                }
                                else if ($kodeCuaca==5&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/udara%20kabur-pm.png'>";
                                }
                                else if ($kodeCuaca==10&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/asap-am.png'>";
                                }
                                else if ($kodeCuaca==10&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/asap-pm.png'>";
                                }
                                else if ($kodeCuaca==45&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/kabut-am.png'>";
                                }
                                else if ($kodeCuaca==45&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/kabut-pm.png'>";
                                }
                                else if ($kodeCuaca==60&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20ringan-am.png'>";
                                }
                                else if ($kodeCuaca==60&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20ringan-pm.png'>";
                                }
                                else if ($kodeCuaca==61&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20sedang-am.png'>";
                                }
                                else if ($kodeCuaca==61&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20sedang-pm.png'>";
                                }
                                else if ($kodeCuaca==63&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lebat-am.png'>";
                                }
                                else if ($kodeCuaca==63&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lebat-pm.png'>";
                                }
                                else if ($kodeCuaca==80&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lokal-am.png'>";
                                }
                                else if ($kodeCuaca==80&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lokal-pm.png'>";
                                }
                                else if ($kodeCuaca==95&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20petir-am.png'>";
                                }
                                else if ($kodeCuaca==95&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20petir-pm.png'>";
                                }
                                else if ($kodeCuaca==97&&$time_format>="06:00"&&$time_format<="17:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lokal-am.png'>";
                                }
                                else if ($kodeCuaca==97&&$time_format<="18:00"&&$time_format>="05:59") {
                                    echo "<img src='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lokal-pm.png'>";
                                }
                            }
                        ?>
                        <?php 
                            function tgl_indo($date){
                                $bulan = array(
                                    1 => 'Januari',
                                    'Februari',
                                    'Maret',
                                    'April',
                                    'Mei',
                                    'Juni',
                                    'Juli',
                                    'Agustus',
                                    'September',
                                    'Oktober',
                                    'November',
                                    'Desember'
                                );
                                $pecahkan = explode('-', $date);

                                return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                            }
                        ?>
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <table align="center">
                                    <tr>
                                        <td>

                                            <!--Tanjungpinang-->

                                            <div class="weather-card one">
                                                <div class="top">
                                                    <div class="wrapper">
                                                        <?php 
                                                            $url = "https://ibnux.github.io/BMKG-importer/cuaca/501371.json";
                                                            $data = file_get_contents($url);
                                                            $characters = json_decode($data);  

                                                            date_default_timezone_set("Asia/Jakarta");
                                                            $current_time =  date("H:i");

                                                            $date = $characters[0]->jamCuaca;
                                                        ?>
                                                        <h1 class="kota">Tanjungpinang</h1>
                                                        <h1 class="date"><?php echo tgl_indo(date('Y-m-d'));?></h1>
                                                        <h2 class="time">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                            ?>
                                                            <span> WIB</span></h2>
                                                        <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[0]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[1]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[2]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[3]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                            ?>
                                                        <h3 class="heading">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    echo $characters[0]->cuaca;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    echo $characters[1]->cuaca;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    echo $characters[2]->cuaca;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    echo $characters[3]->cuaca;
                                                                }
                                                            ?>
                                                        </h3>
                                                        <div class="temp">
                                                            <span class="temp-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->tempC;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->tempC;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->tempC;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->tempC;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="deg">o</span>
                                                            <span class="temp-type">C</span>
                                                        </div>
                                                        <div class="humidity">
                                                            <img src="https://cdn.iconscout.com/icon/free/png-256/humidity-forecast-hydration-precipitation-temperature-weather-38924.png" class="humidity-pic"></img>
                                                            <span class="humidity-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->humidity;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->humidity;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->humidity;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->humidity;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="humidity-type">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <!--Batam-->
                                            <div class="weather-card one">
                                                <div class="top">
                                                    <div class="wrapper">
                                                        <?php 
                                                            $url = "https://ibnux.github.io/BMKG-importer/cuaca/501601.json";
                                                            $data = file_get_contents($url);
                                                            $characters = json_decode($data);  

                                                            date_default_timezone_set("Asia/Jakarta");
                                                            $current_time =  date("H:i");

                                                            $date = $characters[0]->jamCuaca;
                                                        ?>
                                                        <h1 class="kota">Batam</h1>
                                                        <h1 class="date"><?php echo tgl_indo(date('Y-m-d'));?></h1>
                                                        <h2 class="time">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                            ?>
                                                            <span> WIB</span></h2>
                                                        <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[0]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[1]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[2]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[3]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                            ?>
                                                        <h3 class="heading">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    echo $characters[0]->cuaca;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    echo $characters[1]->cuaca;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    echo $characters[2]->cuaca;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    echo $characters[3]->cuaca;
                                                                }
                                                            ?>
                                                        </h3>
                                                        <div class="temp">
                                                            <span class="temp-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->tempC;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->tempC;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->tempC;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->tempC;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="deg">o</span>
                                                            <span class="temp-type">C</span>
                                                        </div>
                                                        <div class="humidity">
                                                            <img src="https://cdn.iconscout.com/icon/free/png-256/humidity-forecast-hydration-precipitation-temperature-weather-38924.png" class="humidity-pic"></img>
                                                            <span class="humidity-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->humidity;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->humidity;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->humidity;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->humidity;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="humidity-type">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                            <!--Bintan-->
                                            <div class="weather-card one">
                                                <div class="top">
                                                    <div class="wrapper">
                                                        <?php 
                                                            $url = "https://ibnux.github.io/BMKG-importer/cuaca/501602.json";
                                                            $data = file_get_contents($url);
                                                            $characters = json_decode($data);  

                                                            date_default_timezone_set("Asia/Jakarta");
                                                            $current_time =  date("H:i");

                                                            $date = $characters[0]->jamCuaca;
                                                        ?>
                                                        <h1 class="kota">Bintan</h1>
                                                        <h1 class="date"><?php echo tgl_indo(date('Y-m-d'));?></h1>
                                                        <h2 class="time">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                            ?>
                                                            <span> WIB</span></h2>
                                                        <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[0]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[1]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[2]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[3]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                            ?>
                                                        <h3 class="heading">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    echo $characters[0]->cuaca;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    echo $characters[1]->cuaca;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    echo $characters[2]->cuaca;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    echo $characters[3]->cuaca;
                                                                }
                                                            ?>
                                                        </h3>
                                                        <div class="temp">
                                                            <span class="temp-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->tempC;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->tempC;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->tempC;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->tempC;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="deg">o</span>
                                                            <span class="temp-type">C</span>
                                                        </div>
                                                        <div class="humidity">
                                                            <img src="https://cdn.iconscout.com/icon/free/png-256/humidity-forecast-hydration-precipitation-temperature-weather-38924.png" class="humidity-pic"></img>
                                                            <span class="humidity-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->humidity;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->humidity;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->humidity;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->humidity;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="humidity-type">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="mySlides fade">
                                <table align="center">
                                    <tr>
                                        <td>

                                            <!--Tarempa-->
                                            <div class="weather-card one">
                                                <div class="top">
                                                    <div class="wrapper">
                                                        <?php 
                                                            $url = "https://ibnux.github.io/BMKG-importer/cuaca/501372.json";
                                                            $data = file_get_contents($url);
                                                            $characters = json_decode($data);  

                                                            date_default_timezone_set("Asia/Jakarta");
                                                            $current_time =  date("H:i");

                                                            $date = $characters[0]->jamCuaca;
                                                        ?>
                                                        <h1 class="kota">Tarempa</h1>
                                                        <h1 class="date"><?php echo tgl_indo(date('Y-m-d'));?></h1>
                                                        <h2 class="time">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                            ?>
                                                            <span> WIB</span></h2>
                                                        <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[0]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[1]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[2]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[3]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                            ?>
                                                        <h3 class="heading">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    echo $characters[0]->cuaca;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    echo $characters[1]->cuaca;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    echo $characters[2]->cuaca;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    echo $characters[3]->cuaca;
                                                                }
                                                            ?>
                                                        </h3>
                                                        <div class="temp">
                                                            <span class="temp-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->tempC;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->tempC;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->tempC;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->tempC;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="deg">o</span>
                                                            <span class="temp-type">C</span>
                                                        </div>
                                                        <div class="humidity">
                                                            <img src="https://cdn.iconscout.com/icon/free/png-256/humidity-forecast-hydration-precipitation-temperature-weather-38924.png" class="humidity-pic"></img>
                                                            <span class="humidity-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->humidity;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->humidity;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->humidity;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->humidity;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="humidity-type">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                            <!--Daik Lingga-->
                                            <div class="weather-card one">
                                                <div class="top">
                                                    <div class="wrapper">
                                                        <?php 
                                                            $url = "https://ibnux.github.io/BMKG-importer/cuaca/501369.json";
                                                            $data = file_get_contents($url);
                                                            $characters = json_decode($data);  

                                                            date_default_timezone_set("Asia/Jakarta");
                                                            $current_time =  date("H:i");

                                                            $date = $characters[0]->jamCuaca;
                                                        ?>
                                                        <h1 class="kota">Daik Lingga</h1>
                                                        <h1 class="date"><?php echo tgl_indo(date('Y-m-d'));?></h1>
                                                        <h2 class="time">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                            ?>
                                                            <span> WIB</span></h2>
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[0]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[1]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[2]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[3]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                            ?>
                                                        <h3 class="heading">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    echo $characters[0]->cuaca;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    echo $characters[1]->cuaca;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    echo $characters[2]->cuaca;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    echo $characters[3]->cuaca;
                                                                }
                                                            ?>
                                                        </h3>
                                                        <div class="temp">
                                                            <span class="temp-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->tempC;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->tempC;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->tempC;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->tempC;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="deg">o</span>
                                                            <span class="temp-type">C</span>
                                                        </div>
                                                        <div class="humidity">
                                                            <img src="https://cdn.iconscout.com/icon/free/png-256/humidity-forecast-hydration-precipitation-temperature-weather-38924.png" class="humidity-pic"></img>
                                                            <span class="humidity-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->humidity;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->humidity;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->humidity;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->humidity;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="humidity-type">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                            <!--Natuna(ranai)-->
                                            <div class="weather-card one">
                                                <div class="top">
                                                    <div class="wrapper">
                                                        <?php 
                                                            $url = "https://ibnux.github.io/BMKG-importer/cuaca/501370.json";
                                                            $data = file_get_contents($url);
                                                            $characters = json_decode($data);  

                                                            date_default_timezone_set("Asia/Jakarta");
                                                            $current_time =  date("H:i");

                                                            $date = $characters[0]->jamCuaca;
                                                        ?>
                                                        <h1 class="kota">Ranai</h1>
                                                         <h1 class="date"><?php echo tgl_indo(date('Y-m-d'));?></h1>
                                                        <h2 class="time">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    echo $time_format;
                                                                }
                                                            ?>
                                                            <span> WIB</span></h2>
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    $date = $characters[0]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[0]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    $date = $characters[1]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[1]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    $date = $characters[2]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[2]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    $date = $characters[3]->jamCuaca;
                                                                    $timestamp = strtotime($date);
                                                                    $time_format = date("H:i", $timestamp);
                                                                    $kodeCuaca = $characters[3]->kodeCuaca;
                                                                    kodeCuaca($kodeCuaca, $time_format);
                                                                }
                                                            ?>
                                                        <h3 class="heading">
                                                            <?php
                                                                if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                    echo $characters[0]->cuaca;
                                                                }
                                                                elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                    echo $characters[1]->cuaca;
                                                                }
                                                                elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                    echo $characters[2]->cuaca;
                                                                }
                                                                elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                    echo $characters[3]->cuaca;
                                                                }
                                                            ?>
                                                        </h3>
                                                        <div class="temp">
                                                            <span class="temp-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->tempC;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->tempC;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->tempC;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->tempC;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="deg">o</span>
                                                            <span class="temp-type">C</span>
                                                        </div>
                                                        <div class="humidity">
                                                            <img src="https://cdn.iconscout.com/icon/free/png-256/humidity-forecast-hydration-precipitation-temperature-weather-38924.png" class="humidity-pic"></img>
                                                            <span class="humidity-value">
                                                                <?php
                                                                    if ($current_time>="00:00"&&$current_time<="05:59") {
                                                                        echo $characters[0]->humidity;
                                                                    }
                                                                    elseif ($current_time>="06:00"&&$current_time<="11:59") {
                                                                        echo $characters[1]->humidity;
                                                                    }
                                                                    elseif ($current_time>="12:00"&&$current_time<="17:59") {
                                                                        echo $characters[2]->humidity;
                                                                    }
                                                                    elseif ($current_time>="18:00"&&$current_time<="23:59") {
                                                                        echo $characters[3]->humidity;
                                                                    }
                                                                ?>
                                                            </span>
                                                            <span class="humidity-type">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <br>

                        <div style="text-align:center">
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End header section -->

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area wow fadeInLeft">
                        <h2 class="title">Struktur <span>Organisasi</span></h2>
                        <p>BMKG RAJA HAJI FISABILILAH</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="testimonial-slider">
                        <!-- single slide -->
                        <?php 
                            foreach($profil->result() as $row)
                            {
                                ?>
                                 <div class="testimonial-single-slide">
                                    <img class="testi-avatar" src="<?php echo base_url(); ?>foto/<?php echo $row->nama_berkas; ?>" alt="testimonial img">
                                    <p class="testi-name"><?php echo $row->nama; ?></p>
                                    <p class="testi-company"><?php echo $row->jabatan; ?></p>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial -->

    <!-- Start download app -->
    <section id="download-app">
        <div class="download-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area wow fadeInUp">
                            <h2 class="title">VISI <span>MISI</span></h2>
                            <p>BMKG RAJA HAJI FISABILILAH</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="testimonial-slider">
                        <!-- single slide -->
                        <div class="testimonial-single-slide">
                            <p class="testi-name">Visi</p>
                            <p class="testi-text">
                                <?php
                                    foreach ($visi as $tampil) : ?>
                                    <tr>
                                        <td><?= $tampil->Visi; ?></td>
                                    </tr>
                                <?php
                                    endforeach;
                                ?>
                            </p>
                        </div>
                        <!-- single slide -->
                        <div class="testimonial-single-slide">
                            <p class="testi-name">Misi</p>
                             <p class="testi-text">
                                <?php
                                    foreach ($visi as $tampil) : ?>
                                    <tr>
                                        <td><?= $tampil->Misi; ?></td>
                                    </tr>
                                <?php
                                    endforeach;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End download app -->

    <!-- Start Features -->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title"><span>KATEGORI</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration
                            in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="features-area">
                        <div class="row">
                            <!-- Start features left -->
                            <div class="col-md-4">
                                <div class="features-left">
                                    <ul class="features-list features-list-left">
                                        <li class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                            <a href="<?php echo base_url('user/artikel') ?>">
                                                <i class="glyphicon glyphicon-book"></i>
                                                <div class="features-content">
                                                    <h4>Artikel</h4>
                                            </a>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                </div>
                                </li>
                                <li class="wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s">
                                    <a href="https://www.bmkg.go.id/berita/">
                                        <i class="fa fa-newspaper-o"></i>
                                        <div class="features-content">
                                            <h4>Berita</h4>
                                    </a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <a href="<?php echo base_url('user/buletin') ?>">
                                    <i class="fa fa-file-image-o"></i>
                                    <div class="features-content">
                                        <h4>Buletin</h4>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        </li>
                      <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <a href="https://www.bmkg.go.id/cuaca/citra-radar.bmkg">
                                    <i class="fa fa-podcast"></i>
                                    <div class="features-content">
                                        <h4>citra-radar</h4>
                                </a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        </li>
                  
                </ul>
            </div>
        </div>
        <!-- End features left -->
        <!-- Start features img -->
        <div class="col-md-4">
            <div class="feature-img wow fadeInUp"><br><br><br><br>
                <img src="assets/img/campbell.png" alt="iPhone mockup">
            </div>
        </div>
        <!-- End features img -->
        <!-- Start features right -->
        <div class="col-md-4">
            <div class="features-right">
                <ul class="features-list features-list-right">
        
            <li class="wow fadeInRight" data-wow-duration="0.75s" data-wow-delay="0.75s">
                <a href="<?php echo base_url('user/prospekuser') ?>">
                    <i class="fa fa-cloud"></i>
                    <div class="features-content">
                        <h4>Prospek Cuaca</h4>
                </a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
        </div>
        </li>
        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
            <a href="https://www.bmkg.go.id/satelit/">
                <i class="fa fa-mixcloud"></i>
                <div class="features-content">
                    <h4>Satelit</h4>
            </a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            </div>
        </li>
        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
            <a href="http://www.weather.gov.sg/weather-rain-area-240km">
                <i class="fa fa-rss"></i>
                <div class="features-content">
                    <h4>Radar Singapore</h4>
            </a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            </div>
        </li>
         <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
            <a href="http://web.meteo.bmkg.go.id/id/prakiraan/angin-3000-ft">
                <i class="fa fa-forumbee"></i>
                <div class="features-content">
                    <h4>streamline</h4>
            </a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            </div>
        </li>
     
        </ul>
        </div>
        </div>
        <!-- End features right -->
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start screenshot -->
   
    <!-- End screenshot -->

    <!-- Start subscribe -->
    <section id="subscribe">
        <div class="download-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area wow fadeInUp">
                            <h2 class="title">Subscribe Our <span>Newsletter</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by injected humour</p>
                        </div>
                    </div>
                    <!-- Start download app content -->
                    <div class="col-md-12">
                        <div class="subscribe-content wow fadeInLeft">
                            <form action="" class="subcr-form">
                                <i class="fa fa-envelope-o"></i>
                                <input type="text" name="" id="" placeholder="Type your mail address..">
                                <button type="submit" class="subcr-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End download app -->

    <!-- Start contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Hubungi <span>Kami</span></h2>
                        <p>Jika anda memiliki pertanyaan atau saran silahkan lampirkan di sini</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php echo $this->session->flashdata('message') ?>
                </div>
                <div class="col-md-12">
                    <div class="contact-area">
                        <form action="<?php echo site_url('user/kirim_saran');?>" class="contact-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Pertanyaan atau Saran" name="isi" required></textarea>
                            </div>
                            <div class="send-area">
                                <button type="submit" class="send-btn">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact -->

    <!-- Start footer -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="feature-img wow fadeInUp">
                    <div class="footer-social">
                        <a href="https://www.facebook.com/InfoBMKG/"><button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i></button></a>
                        <a href="https://twitter.com/infoBMKG"><button type="button" class="btn btn-info"><i class="fa fa-twitter"></i></button></a>
                        <a href="https://www.instagram.com/infoBMKG/"><button type="button" class="btn pink"><i class="fa fa-instagram"></i></button></a>
                        <a href="https://www.youtube.com/user/infoBMKG"><button type="button" class="btn btn-danger"><i class="fa fa-youtube"></i></button></a>
                       </div>
                    </div>
                    <div class="footer-text">
                        <p>Website by <a href="#">BMKG RAJA HAJI FISABILILLAH 2020</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End -->


    <!-- jQuery library -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.js"></script>
    <!-- Slick Slider -->
    <script src="<?= base_url('assets') ?>/js/slick.js"></script>
    <!-- Add fancyBox -->
    <script src="<?= base_url('assets') ?>/js/jquery.fancybox.pack.js"></script>
    <!-- Wow animation -->
    <script src="<?= base_url('assets') ?>/js/wow.js"></script>
    <!-- Off-canvas Menu -->
    <script src="<?= base_url('assets') ?>/js/classie.js"></script>

    <!-- Custom js -->
    <script src="<?= base_url('assets') ?>/js/custom.js"></script>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 6000);
        }
    </script>

</body>

</html>