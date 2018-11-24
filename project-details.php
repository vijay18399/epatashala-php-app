<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
        <title>Sidenav - Materialize</title>
        <!-- Favicons-->
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <link rel="icon" href="https://image.flaticon.com/icons/svg/1184/1184976.svg" sizes="32x32">
        <!--  Android 5 Chrome Color-->
        <meta name="theme-color" content="#EE6E73">
        <!-- CSS-->
        <link href="css/prism.css" rel="stylesheet">
        <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/Inconsolata.css" rel="stylesheet" type="text/css">
        <link href="css/icon.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .text-primarycolor{color:#59BD8B;}
            .back{ background-color: #59BD8B; }
        </style>
    </head>
    <body>
        <main>
            <div class="container"><a href="#" data-target="nav-mobile" class="top-nav sidenav-trigger full hide-on-large-only"><i class="material-icons">menu</i></a></div>
            <ul id="nav-mobile" class="sidenav sidenav-fixed">
                <ul class="no-padding">
                    <li class="logo "><a id="logo-container" href="/" class="brand-logo">
                        <img src="https://image.flaticon.com/icons/svg/1184/1184976.svg" height="95px" width="95px">
                        </a>
                    </li>
                    <li  class="version">
                        Epatashala
                    </li>
                </ul>
                <li class="search">
                    <div class="search-wrapper">
                        <input id="search" placeholder="Search"><i class="material-icons">search</i>
                        <div class="search-results"></div>
                    </div>
                </li>
                <li class="bold"><a href="materials.php" class="waves-effect waves-teal">Btech Materials</a></li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold active">
                            <a class="collapsible-header waves-effect waves-teal">CSE Special</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="projects.php">Project Showcase</a></li>
                                    <li><a href="cheatsheets.php">Project Ideas</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="bold"><a href="collaboration.php" class="waves-effect waves-teal">Collaboration</a></li>
                <li class="bold"><a href="curios.php" class="waves-effect waves-teal">Curious</a></li>
                <li class="bold"><a href="contact.php" class="waves-effect waves-teal">Contact Us</a></li>

            </ul>
        </main>
        <!-- Sidebar BSA-->
        <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
        <div class="bsa-cpc"></div>
        <script>
            (function(){
              if(typeof _bsa !== 'undefined' && _bsa) {
              _bsa.init('default', 'CKYD55QM', 'placement:materializecsscom', {
                target: '.bsa-cpc',
                align: 'horizontal',
                disable_css: 'true'
              });
                }
            })();
            
        </script>
        <main>
            <div class="row  card hoverable center">
                <div class="col s12 m10 offset-m1">
                    <h1 class="header  text-primarycolor ">Epatashala</h1>
                </div>
            </div>

            <?php
                if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];
    echo $id;
    require_once('connect.php'); 
$sql = "SELECT * FROM projects WHERE id='$id'";
$res = mysqli_query($conn, $sql);
}
    ?>
            <div class="container">
                <div class="row">
                <?php     while ($r = mysqli_fetch_assoc($res)) { ?>
                    <div class="card col offset-l2 col l8 hoverable ">
                        <div class="card-image">
                            <img class="activator" src="<?php echo $r['image']; ?>" height="340px">
                        </div>
                        <div class="card-content">
                            <span class="card-title center"><?php echo $r['name']; ?></span>
                            <h6><b>Description:</b><?php echo $r['description']; ?></h6>
                            <ul>
                                <li><b>Technologies & Componenets Used</b></li>
                                <?php
                    

$array =  explode(',', $r['technologies'] );

foreach ($array as $item) {
    echo "<li>$item</li>";
}  ?>
                            </ul>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card-panel grey lighten-5 ">
                                        <div class="center">
                                            <span class="black-text">
                                                <ul>
                                                    <li><b>Project By </b></li>
                                                    <li><?php echo $r['submittedby']; ?></li>
                                                    <li><?php echo $r['rollno']; ?></li>
                                                    <li><?php echo $r['college']; ?></li>
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <center><a  class="btn center" href="projects.php">Go back</a></center>
                        </div>
                    </div><?php } ?>
                </div>
            </div>
        </main>
        <footer class="page-footer docs-footer">
            <div class="container">
                <div class="row" style="margin-bottom: 0;">
                    <div class="col s12 m10 offset-m1">
                        <div class="row">
                            <div class="footer-copyright">
                                © 2019-
                                <noscript>2020</noscript>
                                <script type="text/javascript">document.write(new Date().getFullYear());</script> epatashala, All rights reserved.
                                <!--  <a class="grey-text text-darken-1 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a>--->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--  Scripts-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script>if (!window.jQuery) { document.write('<script src="bin/jquery-3.2.1.min.js"><\/script>'); }</script>
        <script src="js/jquery.timeago.min.js"></script>
        <script src="js/prism.js"></script>
        <script src="js/lunr.min.js"></script>
        <script src="js/search.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large #696B77">
            <i class="material-icons right">view_agenda</i>
            </a>
            <ul>
                <li><a class="btn-floating #ffb300 amber darken-1" href="projects.html"><i class="material-icons right">screen_share</i></a></li>
                <li><a class="btn-floating blue darken-1" href="telegram.html"><i class="material-icons right">send</i></a></li>
                <li><a class="btn-floating #1de9b6 teal accent-3" href="pdfs.html"><i class="material-icons right">library_books</i></a></li>
                <li><a class="btn-floating green darken-1" href="whatsapp.html"><i class="fa fa-whatsapp" style="font-size:48px;"></i></a></li>
            </ul>
        </div>
    </body>
</html>