<?php 
    require "./includes/header.php";
    require "./includes/slider.php"; 
?>

<!--games section start-->
<div class="section-item games margin-min container-fluid">
	<div class="container">
		<h1>POPULAR GAMES</h1>
        
        <div class="items-row">
        	<div class="item-heading">
            	<div class="section-left">
                	<h1>LATEST GAMES</h1>
                </div>
                
                <div class="section-right">
                	<a href="games.php">VIEW MORE</a>
                </div>
            </div>
        
            <div class="clear"></div>
            
            <div class="list-of-items">    	
                <div class="row">
                    <?php showGames(5); ?>
                </div>
            </div>
        </div>       
	</div>
</div>
<!--games section end-->

<!--movies section start-->
<div class="section-item movies container-fluid">
	<div class="container">
		<h1>LATEST FILMS</h1>
        
        <div class="items-row">
        	<div class="item-heading">
            	<div class="section-left">
                	<h1>NEW FILMS</h1>
                </div>
    
                <div class="section-right">
                	<a href="movies.php">VIEW MORE</a>
                </div>        
            </div>
            
            <div class="clear"></div>
            
            <div class="list-of-items">
                <div class="row">
                    <?php showMovies(5); ?>   
                </div>
            </div>
        </div>
	</div>
</div>
<!--movies section end-->

<!--software section start-->
<div class="section-item software container-fluid">
	<div class="container">
		<h1>POPULAR SOFTWARE</h1>
        
        <div class="items-row">
        	<div class="item-heading">
            	<div class="section-left">
                	<h1>NEW SOFTWARE</h1>
                </div>
                
                <div class="section-right">
                	<a href="software.php">VIEW MORE</a>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="list-of-items">
                <div class="row">
                    <?php showSoftwares(5); ?>
                </div>
            </div>
        </div>
	</div>
</div>
<!--software section end-->

<!--books section start-->
<div class="section-item books container-fluid">
	<div class="container">
		<h1>SUCESS BOOKS</h1>
        
        <div class="items-row">
        	<div class="item-heading">
            	<div class="section-left">
                	<h1>POPULAR BOOKS</h1>
                </div>
                
                <div class="section-right">
                	<a href="books.php">VIEW MORE</a>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="list-of-items">
                <div class="row">
                    <?php showBooks(5); ?>
                </div>
            </div>
        </div>
	</div>
</div>
<!--books section end-->

<?php require "./includes/footer.php" ?>