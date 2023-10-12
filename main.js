const { createApp } = Vue
createApp({
    data() {
        return {
            disks: null,
        }
    },

    methods: {

    },
    mounted() {

        axios.get('./server.php')
            .then((response) => {
                this.disks = response.data;
                console.log("DISKS = ", this.disks);
            });

    }
}).mount('#app')