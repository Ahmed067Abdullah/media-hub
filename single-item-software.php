<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Download Centre Pro</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/grid.css">

<link rel="stylesheet" type="text/css" href="css/fwslider.css">
<link rel="stylesheet" type="text/css" href="css/respon.css">
<script type="text/javascript" src="js/fwslidrmini.js"></script>

<script type="text/javascript">
$(window).scroll(function(){

  // Add parallax scrolling to all images in .paralax-image container
  $('.parallax-image').each(function(){
    // only put top value if the window scroll has gone beyond the top of the image
    if ($(this).offset().top < $(window).scrollTop()) {
      // Get ammount of pixels the image is above the top of the window
      var difference = $(window).scrollTop() - $(this).offset().top;
      // Top value of image is set to half the amount scrolled
      // (this gives the illusion of the image scrolling slower than the rest of the page)
      var half = (difference / 2) + 'px';

      $(this).find('img').css('top', half);
    } else {
      // if image is below the top of the window set top to 0
      $(this).find('img').css('top', '0');
    }
  });

});
</script>



</head>

<body>

<header>
	<div class="header-top container-fluid">
    <div class="container">
    
    	<div class="section-left">
        	<ul>
            	<li><a href="#">Sitemap</a></li>
                <li><a href="#">New Technology</a></li>
                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@downloadcentrepro.com</a></li>
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
    
    <div class="header-middle container-fluid">
    <div class="container">
    	<div class="section-left">
        	<div class="logo">
        		<img src="img/logo.jpg" alt="logo">
        	</div>
        </div>
        
        <div class="section-right">
        	<div class="header-ad">
        		<img src="img/header-ad.jpg" alt="ad">
        	</div>
        </div>
    </div>
    </div>
    
    <div class="header-bootom container-fluid">
    <div class="container">
    	<div class="section-left">
    		<nav>
            	<ul>
                	<li><a   href="index.html">Home</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Movies </a></li>
                    <li><a href="#">Books </a></li>
                    <li><a href="#"> software </a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a  href="contact.html">CONTACT US</a></li>
            	</ul>
            </nav>
        </div>
        
        <div class="section-right">
        	<div class="search-box">
            	<input type="search" placeholder="Search......"/>
            
            </div>
        </div>
    </div>
    </div>


</header>

<div class="single-item-page ">
<div class="poster parallax-image">
	<img src="img/windows-10-wallpaper.jpg" alt="poster">
</div>
<div class="container">
		<div class="single-item">
        	<div class="single-item-inner">
        		<div class="detail">
        			<div class="section-left">
                    	
                        <div class="cover-img">
                        	<img src="img/windows-10r.jpg" alt="cover"/>
                        </div>
                    
                    </div>
                    <div class="section-right">
                		<h1>Windows 10</h1>
                        
                        <ul>
                        	<li><a href="#">Operating System</a></li>
                            
                        </ul>
                    
                    <div class="clear"></div>
                    
                    <p><span>Developer: </span> Microsoft Corporation</p>
                    <p><span>License: </span>  Commercial Trial</p>
                    <p><span>Plateform: </span>  Pc</p>
                    <p><span>Release Date: </span> 	July 29, 2015</p>
                    <p><span>Language: </span> Multiple languages</p>
                    <p><span>File size: </span>5 GB</p>
                    <p><span>System requirements: </span>Intel Core i3-3225 2.2 GHz, 2 GB RAM, 20 GB HDD</p>
                    
                    <div class="buttons">
                	<ul>
                		
                        <li><a href="#">Download</a></li>
                    </ul>
                    
                    <!-- The Modal trailer -->
                        <div id="myModal" class="modal">
                        
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <div class="iframe embed-container">
                            
                           <iframe src="https://www.youtube.com/embed/A2xM2F9cfnI" frameborder="0" allowfullscreen></iframe>
                            
                            </div>
                          </div>
                        
                        </div>
                        
                        <!-- The Modal trailer end -->
                        
                          <!-- The Modal movie -->
                        <div id="myModal-1" class="modal1">
                        
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close1">&times;</span>
                            <div class="iframe embed-container">
                            
                            <iframe id="iframe-embed" scrolling="no" src="https://streamango.com/embed/atpcdosprdmampcf/Star_Wars_Episode_VII_The_Force_Awakens_2015_720p_BluRay_mp4" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"  frameborder="0"></iframe>
                            
                            
                            </div>
                          </div>
                        
                        </div>
                        
                        <!-- The Modal movie end -->
                        
                        
                </div>
                  
                    </div>
                </div>
                
                <div class="clear"></div>
                
                <div class="dec">
                	<h1>Description:</h1>
       
                	<p>Windows 10 holds the lead in innovation when it comes to desktop operating systems. Consider, for example, that the voice-activated digital assistant Cortana showed up a full year before Apple added Siri to macOS, that only Windows Hello lets you log in with your face, and that only Windows offers full touch-screen support. Furthermore, last summer's Anniversary Update added rich digital-inking capabilities, lock-screen Cortana and music controls, better security, and improvements to the interface and Edge browser. Yet even with all its forward-looking features, the OS manages to remain familiar to longtime Windows users. For this, Windows 10 joins macOS as a PCMag Editors' Choice for desktop operating systems.</p>
                    
                    <h2>Software Screen Shots</h2>
                    <div class="game-screen-shot">
                   <img src="img/microsoft-windows-10-anniversary-update-start-screen.jpg" alt="screen-shot">
                   
                     <img src="img/-store-collections-in-microsoft-windows-10-anniversary-update.jpg" alt="screen-shot">
                     
                       <img src="img/-xbox-for-pc.jpg" alt="screen-shot">
                       
                         <img src="img/-dark-mode-in-microsoft-windows-10-anniversary-update.jpg" alt="screen-shot">
                         
                    </div>
                    
                </div>
                	
                
        	</div>
        </div>
    
</div>
</div>


<footer>
	<div class="news-letter container-fluid">
    	<div class="container">
        	<div class="section-left">
            	<span>Sign Up For Newsletter</span>
                <input class="email" type="email" placeholder="Email Address">
                <input class="btn" type="submit" value="Subscribe Now"> 
            
            </div>
        	<div class="section-right">
            	<div class="soial-icon">
                        <span class="socia-p"><span class="socia-text"></span>
                        <a href="#" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                        </span>
                  
                </div>
            </div>
    	</div>
    </div>

	<div class="footer-top container-fluid">
    	<div class="container">
        
    		<div class="col-md-3">
            	<span><i class="fa fa-location-arrow" aria-hidden="true"></i> GAMES COLLECTION</span>
            	<ul>
            		<li><a href="#">BATMAN GAME</a></li>
                    <li><a href="#"> TENNIS GAME</a></li>
                    <li><a href="#">CRICKET GAME</a></li>
                </ul>
                
                <span><i class="fa fa-location-arrow" aria-hidden="true"></i> SOFTWARE COLLECTION</span>
                <ul>
            		<li><a href="#">MICROSOFT OFFICE</a></li>
                    <li><a href="#">ADOBE PHOTOSHOP</a></li>
                    <li><a href="#">ADOBE ILLISTRATOR</a></li>
                    <li><a href="#">FILEZILLA (FTP SERVER)</a></li>
                    <li><a href="#">ANTIVURS AVAST</a></li>
                    <li><a href="#">SMS CASTER</a></li>
                </ul>
            </div>
            <div class="col-md-3">
            	<span><i class="fa fa-location-arrow" aria-hidden="true"></i> BOOKS</span>
            	<ul>
            		<li><a href="#">THE GREAT MAN</a></li>
                    <li><a href="#">SUCESS QUOTES</a></li>
                    <li><a href="#">CRICKET GAME</a></li>
                    <li><a href="#">POWER BROKE</a></li>
                    <li><a href="#">RICK (TC)</a></li>
                </ul>
                
                <span><i class="fa fa-location-arrow" aria-hidden="true"></i>   FILMS</span>
                <ul>
            		<li><a href="#">BAYWATCH</a></li>
                    <li><a href="#">AVATAR</a></li>
                    <li><a href="#">THE LEGAND MAN</a></li>
                    <li><a href="#">FORCE STOP</a></li>
                </ul>
            
            </div>
            <div class="col-md-3">
            
            	<span><i class="fa fa-location-arrow" aria-hidden="true"></i> ARTICLE</span>
            	<ul>
            		<li><a href="#">SOCIAL MEDIA GROUP</a></li>
                    <li><a href="#">BLACK HAT STRATEGY</a></li>
                    <li><a href="#">ICM TAG YORK</a></li>
                    <li><a href="#">BROCK LESNER</a></li>
                </ul>
                
                <span><i class="fa fa-location-arrow" aria-hidden="true"></i>  CONTESTS</span>
                <ul>
            		<li><a href="#">DESIGNING</a></li>
                    <li><a href="#">APPLICATIONS</a></li>
                    <li><a href="#">ICONS</a></li>
                    <li><a href="#">SCRIPTS</a></li>
                </ul>
            
            </div>
            <div class="col-md-3">
            	<h2>Download centre pro</h2>
            	<p>FREE DOWNLOAD SITE FOR ALL USERS AND DEVELOPERS TO ENJOY FREE SOFTWARE ANDTOOLS, API, TUTORIALS, GAMES, BOOKS, FILMS, CONTESTS, WITHALL LATEST TECHNOLOGIES.....</p>
            </div>
            
    	</div>
    </div>

	<div class="footer-copyright container-fluid">
    	<div class="container">
        	<p>© 2017 DEV-TOOLS. All rights reserved. www.Downloadcentrepro.com</p>
            
    	</div>
    </div>

</footer>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<script>
// Get the modal
var modal1 = document.getElementById('myModal-1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn-1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
</body>
</html>

