<?php 

    require __DIR__ . '/database.php';

    $genre_user_choice = $_GET['genre'];
    $filteredAlbumsArray = [];

    
    if(empty($genre_user_choice)) {  //Se l'utente non scegie nulla faccio vedere tutti gli album
        $json = json_encode($database);
    } else {                         //altrimenti faccio vedere solo gli album con il genere scelto
        foreach($database as $album) {
            if($genre_user_choice === $album['genre']) {
                $filteredAlbumsArray[] = $album;
            }
        }
        $json = json_encode($filteredAlbumsArray);
    }

    header('Content-Type: application/json');

    echo $json;

?>