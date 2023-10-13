const { createApp } = Vue
createApp({
    data() {
        return {
            disks: null,
            error: null,
        }
    },

    methods: {

    },
    mounted() {

        axios.get('./server.php')
            .then((response) => {
                this.disks = response.data;
                console.log("DISKS = ", this.disks);
            })
            .catch(err => {
                this.error = err.message;
                console.error(this.error);
            })

    }
}).mount('#app')