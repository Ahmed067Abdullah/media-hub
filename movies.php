<?php require "./includes/header.php"; ?>

<div class="all-page container-fluid">
    <div class="container">
	    <h1>Movies</h1>
    
        <div class="list-of-items">        	
            <div class="row">
                <?php showMovies(); ?>                    
            </div>        
        </div>
    </div>
</div>

<?php require "./includes/footer.php" ?>

