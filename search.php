<?php 
require "./includes/functions.php"; 

    if(isset($_POST['query'])){
        getSearchResults($_POST['query']);
    }
?>