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
        renderStyledDiv($row['id'],$row['image'],$row['name'],$row['platform'],$row['release_date'],$row['language'],$row['genre'],0);
    }
} 

function showMovies($count = null){
    $limit = '';
    if(isset($count))
        $limit = 'LIMIT 5';
    $games = runQuery("SELECT * FROM movies ORDER by id DESC {$limit} ");

    while($row = fetchData($games)){
        renderStyledDiv($row['id'],$row['image'],$row['name'],$row['lead_role'],$row['release_date'],$row['language'],$row['genre'],1);
    }
}

function showBooks($count = null){
    $limit = '';
    if(isset($count))
        $limit = 'LIMIT 5';
    $games = runQuery("SELECT * FROM books ORDER by id DESC {$limit} ");

    while($row = fetchData($games)){
        renderStyledDiv($row['id'],$row['image'],$row['name'],$row['author'],$row['release_date'],$row['language'],$row['genre'],2);
    }
}

function showSoftwares($count = null){
    $limit = '';
    if(isset($count))
        $limit = 'LIMIT 5';
    $games = runQuery("SELECT * FROM softwares ORDER by id DESC {$limit} ");

    while($row = fetchData($games)){
        renderStyledDiv($row['id'],$row['image'],$row['name'],$row['platform'],$row['release_date'],$row['language'],$row['developed_by'],3);
    }
}

//  TYPES
// 0 => Games
// 1 => Movies
// 2 => Books 
// 3 => Softwares

function renderStyledDiv($id,$image,$name,$platform,$release_date,$language,$genre,$type){
    if($type == 1){
        $conflict1 = "Lead Role";
        $linkConflict = "movie";
    }else if($type == 2){
        $conflict1 = "Author";
        $linkConflict = "book";
    }else{
        $conflict1 = "Platform";
        if($type == 0)
            $linkConflict = "game";
    }

        
    if($type == 3){
        $conflict2 = "Developed By";
        $linkConflict = "software";
    }else
    $conflict2 = "Genre";
    

    $content = <<<CONTENT
    <div class="col-md-2">
        <div class="item">
            <div class="item-inner">
                <div class="item-img">
                    <a href="single-item-{$linkConflict}.php?fileId={$id}">
                        <img src="img/{$image}" />
                    </a>
                </div>
            
                <div class="item-info">
                    <a href="single-item-{$linkConflict}.php?fileId={$id}"><h1>{$name}</h1></a>
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

function getBookDetails($id){
    $book = runQuery("SELECT * FROM books where id = $id");
    return fetchData($book);
}

function getSoftwareDetails($id){
    $software = runQuery("SELECT * FROM softwares where id = $id");
    return fetchData($software);
}

function getMovieDetails($id){
    $movie = runQuery("SELECT * FROM movies where id = $id");
    return fetchData($movie);
}

function getGameDetails($id){
    $game = runQuery("SELECT * FROM games where id = $id");
    return fetchData($game);
}

function prepareFileforDownload($data){
    $fileName = "files/download_center.txt";
    file_put_contents($fileName,$data);
    
}

function getSearchResults($value,$flag=0){


    if (strlen($value) == 0) {
        echo " ";
    }else{
    $value = strtolower($value);
        
    $dataMovie = runQuery("SELECT id,image,name from movies where lower(name) like '$value%'");
    $dataGame = runQuery("SELECT id,image,name from games where lower(name) like '$value%'");
    $dataSoftware = runQuery("SELECT id,image,name from softwares where lower(name) like '$value%'");
    $dataBook = runQuery("SELECT id,image,name from books where lower(name) like '$value%'");


    $content = '';
    $isData = false;

    if(dataFetched($dataMovie)){
            $isData = true;
            getSearchData($dataMovie,'movie');
    }
    if(dataFetched($dataGame)){
        $isData = true;
        getSearchData($dataGame,'game');

    }
    if(dataFetched($dataSoftware)){
        $isData = true;
        getSearchData($dataSoftware,'software');

    }
    if(dataFetched($dataBook)){
        $isData = true;
        getSearchData($dataBook,'book');
        

    }

    if(!$isData){
        echo 'No';
    }
 }
}

function getSearchData($data,$conflict){
    while($row = fetchData($data)){

        $row['image'] = "./img/" . $row['image'];
        $id = $row['id'];

        $user = <<<DELIMETER
    <div class='search-person-container'>
        <a href="single-item-{$conflict}.php?fileId={$id}"  class='search-person'>
            <span class='search-person-image'>
    <img src='{$row['image']}' class='post-avatar post-avatar-30'/>
    </span>
    <span class='search-person-info'>
    <span class='person-name'>{$row['name']}</span>
    </span>
    </a>
    </div>
DELIMETER;

        echo $user;
    }
}

?>


