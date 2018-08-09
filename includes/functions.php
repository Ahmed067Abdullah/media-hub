<?php

function showGames($count = null){
    $limit = 14;
    if(isset($count))
        $limit = $count;
    $counter = 0;
    while($counter < $limit){
        $game = <<<GAME
        <div class="col-md-2">
            <div class="item">
                <div class="item-inner">
                    <div class="item-img">
                        <a href="#">
                            <img src="img/Call-of-Duty-Modern-Warfare.jpg" alt="Call of Duty Modern Warfare" title="Call of Duty Modern Warfare"/>
                        </a>
                    </div>
                    <div class="item-info">
                        <a href="#"><h1>Call of Duty Modern Warfare</h1></a>
                        <p><b>Platform: </b>PC</p>
                        <p><b>Release Date: </b>22 Nov 2016</p>
                        <p><b>Language:</b> </strong>English</p>
                        <p><b>Genre: </b>Shooter</p>           
                    </div>
                </div>
            </div>
        </div>
GAME;
    echo $game;
    $counter++;
    }
} 

function showMovies($count = null){
    $limit = 12;
    if(isset($count))
        $limit = $count;
    $counter = 0;
    while($counter < $limit){
        $movie = <<<MOVIE
        <div class="col-md-2">
            <div class="item">
                <div class="item-inner">
                    <div class="item-img">
                        <a href="single-item.php">
                            <img src="img/star-wars.jpg" alt="Call of Duty Modern Warfare" title="Call of Duty Modern Warfare"/>
                        </a>
                    </div>
                    <div class="item-info">
                        <a href="single-item.php"><h1>Star Wars: The Force Awakens</h1></a>
                        <p><b>Platform: </b>PC</p>
                        <p><b>Release Date: </b>22 Nov 2016</p>
                        <p><b>Language:</b> </strong>English</p>
                        <p><b>Genre: </b>Shooter</p>        
                    </div>
                </div>
            </div>
        </div>
MOVIE;
    echo $movie;
    $counter++;
    }
}

function showBooks($count = null){
    $limit = 11;
    if(isset($count))
        $limit = $count;
    $counter = 0;
    while($counter < $limit){
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
}

function showSoftwares($count = null){
    $limit = 10;
    if(isset($count))
        $limit = $count;
    $counter = 0;
    while($counter < $limit){
        $software = <<<SOFTWARE
        <div class="col-md-2">
            <div class="item">
                <div class="item-inner">
                    <div class="item-img">
                        <a href="#">
                            <img src="img/windows-10r.jpg" alt="Call of Duty Modern Warfare" title="Call of Duty Modern Warfare"/>
                        </a>
                    </div>
                    <div class="item-info">
                        <a href="#"><h1>Windows 10</h1></a>
                        <p><b>Platform: </b>PC</p>
                        <p><b>Release Date: </b>22 Nov 2016</p>
                        <p><b>Language:</b> </strong>English</p>
                        <p><b>Genre: </b>Shooter</p>          
                    </div>
                </div>
            </div>
        </div>
SOFTWARE;
    echo $software;
    $counter++;
}
}

?>
