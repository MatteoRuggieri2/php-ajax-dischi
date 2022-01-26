<?php include __DIR__ . '/database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="logo-container">
            <img src="img/spotify-logo.png" alt="Spotify Logo">
        </div>
    </header>

    <!-- MAIN -->
    <main>

    <?php echo $database ?>
        <div class="container">
            <div class="wrapper">

                <!-- Single Album -->
                <?php foreach($database as $album) { ?>
                    <div class="single-album-container">
                        <img class="album-image" src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?>">
                        <h2 class="album-title"><?php echo $album['title'] ?></h2>
                        <h3 class="album-author"><?php echo $album['author'] ?></h3>
                        <h3 class="album-year"><?php echo $album['year'] ?></h3>
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>

</body>
</html>