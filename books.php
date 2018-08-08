<?php require "./includes/header.php"?>

<div class="all-page container-fluid">
<div class="container">
	<h1>Books</h1>
    
    <div class="list-of-items">
        <div class="row">
        <?php
            $counter = 0;
            while($counter < 11){
                $book = <<<BOOK
                <div class="col-md-2">
                <div class="item">
                    <div class="item-inner">
                    
                    <div class="item-img">
                    <a href="#">
                        <img src="img/book-cover.jpg" alt="Call of Duty Modern Warfare" title="Call of Duty Modern Warfare"/>
                        </a>
                    </div>
                    <div class="item-info">
                        <a href="#"><h1>Breaking the Time Barrier</h1></a>
                        <p><b>Platform: </b>PC</p>
                        <p><b>Release Date: </b>22 Nov 2016</p>
                        <p><b>Language:</b> </strong>English</p>
                        <p><b>Genre: </b>Shooter</p>
                        
                    </div>
                </div>
                </div>
            </div>
BOOK;
                echo $book;
                $counter++;
            }    	
        ?>
        </div>
    </div>
</div>
</div>

<?php require "./includes/footer.php" ?>