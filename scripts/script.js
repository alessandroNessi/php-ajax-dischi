var app = new Vue({
    el: '#app',

    data: {
        data:[],
        genres:[],
    },
    methods: {
        populateTable(){
            axios.get('http://localhost/php-ajax-dischi/data/API_sim.php', {
            params: {

            }
            }).then((response) => {
                this.data=response.data;
                // console.log(this.data);
            }).catch((error) => {
                console.log(error);
            });
        },
        populateGenres(){
            axios.get('http://localhost/php-ajax-dischi/data/API_sim.php', {
            params: {
                "genres":"true",
            }
            }).then((response) => {
                this.genres=response.data;
                console.log(this.genres);
            }).catch((error) => {
                console.log(error);
            });
        }
    },
    created() {
        this.populateTable();
        this.populateGenres();
    }
})