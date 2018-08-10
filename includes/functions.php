<?php

require_once dirname(__FILE__) . '/db.php';

function runQuery($query){
    global $connection;
    $queryResult = mysqli_query($connection, $query);
    if (!$queryResult) {
        die('Error in querying database ' . mysqli_error($connection));
    }
    return $queryResult;
}

function dataFetched($queryResult){
    return (mysqli_num_rows($queryResult) != 0);
}

function fetchData($queryResult){
    return (mysqli_fetch_assoc($queryResult));
}

function showGames($count = null){
    $limit = '';
    if(isset($count))
        $limit = 'LIMIT 5';
    $games = runQuery("SELECT * FROM games ORDER by id DESC {$limit} ");

    while($row = fetchData($games)){
        renderStyledDiv($row['image'],$row['name'],$row['platform'],$row['release_date'],$row['language'],$row['genre'],0);
    }
} 

function showMovies($count = null){
    $limit = '';
    if(isset($count))
        $limit = 'LIMIT 5';
    $games = runQuery("SELECT * FROM movies ORDER by id DESC {$limit} ");

    while($row = fetchData($games)){
        renderStyledDiv($row['image'],$row['name'],$row['lead_role'],$row['release_date'],$row['language'],$row['genre'],1);
    }
}

function showBooks($count = null){
    $limit = '';
    if(isset($count))
        $limit = 'LIMIT 5';
    $games = runQuery("SELECT * FROM books ORDER by id DESC {$limit} ");

    while($row = fetchData($games)){
        renderStyledDiv($row['image'],$row['name'],$row['author'],$row['release_date'],$row['language'],$row['genre'],2);
    }
}

function showSoftwares($count = null){
    $limit = '';
    if(isset($count))
        $limit = 'LIMIT 5';
    $games = runQuery("SELECT * FROM softwares ORDER by id DESC {$limit} ");

    while($row = fetchData($games)){
        renderStyledDiv($row['image'],$row['name'],$row['platform'],$row['release_date'],$row['language'],$row['developed_by'],3);
    }
}

//  TYPES
// 0 => Games
// 1 => Movies
// 2 => Books 
// 3 => Softwares

function renderStyledDiv($image,$name,$platform,$release_date,$language,$genre,$type){
    if($type == 1)
        $conflict1 = "Lead Role";
    else if($type == 2)
        $conflict1 = "Author";
    else
        $conflict1 = "Platform";
        
    if($type == 3)
        $conflict2 = "Developed By";
    else
    $conflict2 = "Genre";
    
    $content = <<<CONTENT
    <div class="col-md-2">
        <div class="item">
            <div class="item-inner">
                <div class="item-img">
                    <a href="#">
                        <img src="img/{$image}" />
                    </a>
                </div>
            
                <div class="item-info">
                    <a href="#"><h1>{$name}</h1></a>
                    <p><b>{$conflict1}: </b>{$platform}</p>
                    <p><b>Release Date: </b>{$release_date}</p>
                    <p><b>Language:</b> </strong>{$language}</p>
                    <p><b>{$conflict2}: </b>{$genre}</p>           
                </div>
            </div>
        </div>
    </div>
CONTENT;
    echo $content;
}
?>
