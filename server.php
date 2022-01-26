<?php 

    require __DIR__ . '/database.php';

    // $genre_user_choice = $_GET['genre_filter']

    $json = json_encode($database);

    header('Content-Type: application/json');

    echo $json;

    // var_dump($genre_user_choice)

?>