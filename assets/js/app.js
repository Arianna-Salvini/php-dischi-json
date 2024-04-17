const { createApp } = Vue

createApp({
    data() {
        return {
            disks: [],
            api_url: 'api.php',
            error: '',
        };
    },
    mounted() {
        // Effettuare richiesta al backend
        axios.get('api_url')
            .then(response => {
                // Aggiungere la risposta e i suoi dati alla variabile disks
                this.disks = response.data;
            })
            .catch(error => {
                console.log(error.message);
                this.error = error.message;
            })
    },
}).mount('#app')