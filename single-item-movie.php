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
    <?php 
        $movie = getMovieDetails($_GET['fileId']);
        prepareFileforDownload($movie['name']);
        $movieTemplate = <<<MOVIE
            <div class="poster parallax-image">
	            <img src="img/{$movie['image']}" alt="poster">
            </div>
            
            <div class="container">
		        <div class="single-item">
        	        <div class="single-item-inner">
        		        <div class="detail">
        			        <div class="section-left">
                                <div class="cover-img">
                        	        <img src="img/{$movie['image']}" alt="cover"/>
                                </div>
                            </div>
                        
                            <div class="section-right">
                                <h1>{$movie['name']}</h1>
                        
                                <div class="clear"></div>
                        
                                <p><span>Director: </span>{$movie['director']}</p>
                                <p><span>Release Date: </span>{$movie['release_date']}</p>
                                <p><span>Quality: </span>{$movie['quality']}</p>
                                <p><span>Language: </span>{$movie['language']}</p>
                                <p><span>Time: </span>{$movie['time']}</p>
                        
                                <div class="buttons">
                                    <ul>
                                        <li><a <a href= "./files/download_center.txt" download>Download</a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                
                        <div class="clear"></div>
                    
                        <div class="dec">
                            <h1>Storyline:</h1>
                            <p>{$movie['description']}</p>
                        </div>
                    </div>
                </div> 
            </div>
MOVIE;
    echo $movieTemplate;
    ?>
</div>

<?php require "./includes/footer.php";?>

