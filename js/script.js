Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        albumsArray: [],
        genresArray: [],
        genreFilter: '',
        filteredGenreAlbumsArray: []
    },
    methods: {
        getAlbumsApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((response) => {
                this.albumsArray = response.data
                // console.log('mio array', this.albumsArray)

                this.albumsArray.forEach((element) => {
                    if( !this.genresArray.includes(element.genre) ) {
                        this.genresArray.push(element.genre);
                    }
                });
                // console.log(this.genresArray)
            });
        },

        // Funzione che chiama una API ogni volta che la select cambia valore
        callGenreApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php',
                {
                    params: {
                        genre_filter: this.genreFilter
                    }
                }
            )
            .then((response) => {
                this.filteredGenreAlbumsArray = response.data
                // console.log('mio array filtrato', this.filteredGenreAlbumsArray)

            });
        }
    },
    created: function() {
        this.getAlbumsApi();
    }
})