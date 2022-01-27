Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        albumsArray: [],
        genresArray: [],
        genreFilter: '',
    },
    methods: {
        getAlbumsApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php',
                {
                    params: {
                        genre: this.genreFilter
                    }
                }
            )
            .then((response) => {
                this.albumsArray = response.data

                // Per popolare la select in base ai generi presenti
                this.albumsArray.forEach((element) => {
                    if( !this.genresArray.includes(element.genre) ) {
                        this.genresArray.push(element.genre);
                    }
                });
            });
        }
    },
    created: function() {
        this.getAlbumsApi();
    }
})