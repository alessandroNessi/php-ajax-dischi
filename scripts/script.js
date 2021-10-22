var app = new Vue({
    el: '#app',

    data: {
        data:[],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/data/API_sim.php', {
            params: {

            }
        }).then((response) => {
            this.data=response.data;
            console.log(this.data);
        }).catch((error) => {
            console.log(error);
        });
    }
})