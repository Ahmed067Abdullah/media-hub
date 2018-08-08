<?php require "./includes/header.php" ?>

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


<div class="single-item-page ">
<div class="poster parallax-image">
	<img src="img/Star.Wars.The.Force.Awakens_1_1920x1440.jpg" alt="poster">
</div>
<div class="container">
		<div class="single-item">
        	<div class="single-item-inner">
        		<div class="detail">
        			<div class="section-left">
                    	
                        <div class="cover-img">
                        	<img src="img/star-wars.jpg" alt="cover"/>
                        </div>
                    
                    </div>
                    <div class="section-right">
                		<h1>Star Wars: The Force Awakens (2015)</h1>
                        
                        <ul>
                        	<li><a href="#">Action </a></li>
                            <li><a href="#">Adventure </a></li>
                            <li><a href="#">Science Fiction </a></li>
                            <li><a href="#">Fantasy </a></li>
                        </ul>
                    
                    <div class="clear"></div>
                    
                    <p><span>Director: </span> J.J. Abrams</p>
                    <p><span>writer: </span>     Lawrence Kasdan &nbsp;&nbsp; George Lucas &nbsp;&nbsp; J.J. Abrams </p>
                    <p><span>Release Date: </span>2015-12-15</p>
                    <p><span>Quality: </span>HD</p>
                    <p><span>Country: </span>US</p>
                    <p><span>Language: </span>English</p>
                    <p><span>Run Time: </span>136</p>
                    
                    <div class="buttons">
                	<ul>
                		<li><a id="myBtn" href="#">Watch Trailer</a></li>
                        <li><a id="myBtn-1" href="#">Watch Full Movie Online</a></li>
                        <li><a href="#">Download</a></li>
                    </ul>
                    
                    <!-- The Modal trailer -->
                        <div id="myModal" class="modal">
                        
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <div class="iframe embed-container">
                            
                            <iframe  src="https://www.youtube.com/embed/gAUxw4umkdY?ecver=1" frameborder="0" allowfullscreen></iframe>
                            
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
                	<h2>Storyline</h2>
                	<p>30 years after the defeat of Darth Vader and the Empire, Rey, a scavenger from the planet Jakku, finds a BB-8 droid that knows the whereabouts of the long lost Luke Skywalker. Rey, as well as a rogue stormtrooper and two smugglers, are thrown into the middle of a battle between the Resistance and the daunting legions of the First Order. </p>
                    
                    <h2>Cast</h2>
                    <p>Harrison Ford as Han Solo</p>
                    <p>Mark Hamill as Luke Skywalker</p>
                    <p>Carrie Fisher as General Leia Organa</p>
                    <p>Adam Driver as Kylo Ren</p>
                    <p>Daisy Ridley as Rey</p>
                    <p>John Boyega as Finn</p>
                    <p>Oscar Isaac as Poe Dameron</p>
                    <p>Lupita Nyong'o as Maz Kanata</p>
                    <p>Andy Serkis as Supreme Leader Snoke</p>
                    <p>Domhnall Gleeson as General Hux</p>
                    
                    <h2>Development</h2>
                    <p>Star Wars creator George Lucas discussed ideas for a sequel trilogy several times after the conclusion of the original trilogy, but denied any intent to make it. In October 2012, he sold his production company Lucasfilm, and with it the Star Wars franchise, to The Walt Disney Company. Speaking alongside Lucasfilm's new president, Kathleen Kennedy, Lucas said: "I always said I wasn't going to do any more and that's true, because I'm not going to do any more, but that doesn't mean I'm unwilling to turn it over to Kathy to do more.</p>
                    
                    
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

