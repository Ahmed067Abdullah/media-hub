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

<?php $book = getBookDetails($_GET['fileId']); ?>
<div class="single-item-page ">
    <?php $bookTemplate = <<<BOOK
        <div class="poster parallax-image">
            <img src="img/{$book['image']}" alt="poster">
        </div>

        <div class="container">
            <div class="single-item">
                <div class="single-item-inner">
                    <div class="detail">
                        <div class="section-left">
                            <div class="cover-img">
                                <img src="img/{$book['image']}" alt="cover"/>
                            </div>
                        </div>

                        <div class="section-right">
                            <h1>{$book['name']}</h1>
                        
                            <div class="clear"></div>
                        
                            <p><span>Author: </span>{$book['author']}</p>
                            <p><span>Pages: </span>{$book['pages']}</p>
                            <p><span>Published Date: </span>{$book['release_date']}</p>
                            <p><span>Language: </span>{$book['language']}</p>
                            <div class="buttons">
                                <ul>
                                    <li><a href="#">Download</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <div class="clear"></div>
                    
                    <div class="dec">
                        <h1>Book Description:</h1>
        
                        <p>{$book['description']}</p>                    
                    </div> 
                </div>
            </div>
        </div>
BOOK;
    echo $bookTemplate;
    ?>
</div>

<?php require "./includes/footer.php"?>