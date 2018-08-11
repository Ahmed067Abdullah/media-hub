<?php require "./includes/functions.php"; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Download Centre Pro</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/grid.css">
<link rel="stylesheet" href="./css/search.css">

<link rel="stylesheet" type="text/css" href="css/fwslider.css">
<link rel="stylesheet" type="text/css" href="css/respon.css">
<script type="text/javascript" src="js/fwslidrmini.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body onload = "setActiveClass()">

<header>
	<div class="header-top container-fluid">
    <div class="container-header">
    
    	<div class="section-left">
        	<ul>
            	<li><a href="sitemap.php">Sitemap</a></li>
                <li><a href="../files/MyFile.rar"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@downloadcentrepro.com</a></li>
            </ul>
        </div>
        
        <div class="section-right">		
        	<div class="soial-icon">
                        <span class="socia-p"><span class="socia-text">Follow us on</span>
                        <a href="#" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

                        </span>
                  
                </div>
        
        </div>
    </div>
    </div>
    
    <!-- <div class="header-middle container-fluid">
    <div class="container">
    	<div class="section-left">
        	<div class="logo">
        		<a href="#"><img src="img/logo.jpg" alt="logo"></a>
        	</div>
        </div>
        
        <div class="section-right">
        	<div class="header-ad">
        		<img src="img/header-ad.jpg" alt="ad">
        	</div>
        </div>
    </div>
    </div> -->
    <div class = "header-fixed">
        <div class="header-bootom container-fluid header-real">
            <div class="container-header">
                <div class="section-left">
                    <nav>
                        <ul>
                            <li><a href="index.php" class ="home-page-link">Home</a></li>
                            <li><a href="games.php" class ="games-page-link">Games</a></li>
                            <li><a href="movies.php" class ="movies-page-link">Movies </a></li>
                            <li><a  href="books.php" class ="books-page-link">Books </a></li>
                            <li><a href="software.php" class ="softwares-page-link"> Softwares </a></li>
                            <li><a href="about.php" class ="about-page-link">About Us</a></li>
                            <li><a href="contact.php" class ="contact-page-link">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="section-right">
                    <div class="search-box">
                    <input type="text" class="search-input" placeholder="Search" onkeyup="getData(this.value)" name="query" autocomplete = "off" >
                    
                    </div>
                    <div class='search-result'></div>
                </div>
            </div>
        </div>
    </div>

</header>

<script src='../js/script.js'></script>
