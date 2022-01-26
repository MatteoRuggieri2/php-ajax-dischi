Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        albumsArray: []
    },
    methods: {
        getAlbumsApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((response) => {
                this.albumsArray = response.data
                console.log('mio array', this.albumsArray)
            });
        }
    },
    created: function() {
        this.getAlbumsApi();
    }
})