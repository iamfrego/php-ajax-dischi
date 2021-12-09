const app = new Vue({
    el: '#app',
    data: {
        discs: null,
    },
    mounted() {
        axios
            .get('api/db.php')
            .then(response => {
                console.log(response);
                this.discs = response.data
            }).catch(error => {
            console.log(error);
      })
    }
})