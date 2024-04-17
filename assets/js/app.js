const { createApp } = Vue

createApp({
    data() {
        return {
            disks: [],
        };
    },
    mounted() {
        // Effettuare richiesta al backend
        axios.get('api.php')
            .then(response => {
                // Aggiungere la risposta e i suoi dati alla variabile disks
                this.disk = response.data;
            })
            .catch(error => {
                console.log(err.message);
                this.error = err.message;
            })
    },
}).mount('#app')