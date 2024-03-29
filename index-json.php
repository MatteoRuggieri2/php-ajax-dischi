<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json php-ajax-dischi</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Cdn VueJs e Axios -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

</head>
<body>
    <div id="root">

        <!-- HEADER -->
        <header>
            <div class="logo-container">
                <img src="img/spotify-logo.png" alt="Spotify Logo">
            </div>
        </header>

        <!-- MAIN -->
        <main>
            <div class="container">
                
                <!-- Filter -->
                <div class="filter-container">

                    <!-- Genre-search -->
                    <div class="genre-search">

                        <label for="genre-select">Filtra per genere</label>
                        <select @change="getAlbumsApi" v-model="genreFilter" name="genre-select" id="genre-select">
                            <option value="">All</option>
                            <option v-for="(singleGenre) in genresArray" :value="singleGenre">{{ singleGenre }}</option>
                        </select>

                    </div>

                </div>

                <div class="wrapper">

                    <!-- Single Album -->
                    <div v-for="(album) in albumsArray" class="single-album-container">
                        <img class="album-image" :src="album.poster" :alt="album.title">
                        <h2 class="album-title">{{ album.title }}</h2>
                        <h3 class="album-author">{{ album.author }}</h3>
                        <h3 class="album-year">{{ album.year }}</h3>
                    </div>

                </div>
            </div>
        </main>

    </div>
    
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>