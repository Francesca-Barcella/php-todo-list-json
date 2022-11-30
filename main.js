//alert ('funziona');

const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php'
        }
    },
    methods:{
        callApi(url){
            axios.get(url)
            .then(response => {
                console.log(response.data);
                this.tasks = response.data;
            })
            //questo metodo .catch serve per intercettera eventuali errori
            .catch(err => {
                console.error(err.message);

            })
        }
    },
    mounted() {
        this.callApi(this.api_url)
    
    },
}).mount('#app')

// ci sarà url che corrispende al nostro server.php
// in return array vuoto tasks[]
// struttura della chiamata nuova presa dalle slide:esempio chiamata axios da esercizio vecchio

/* methods: {
    callApi(url) {
        console.log(this.state.filterCategory + 'prova riga 22');
        if (this.state.filterCategory !== '') {
            url += `?${this.state.categoryParameter}=${this.state.filterCategory}`
        }
        console.log(url);

        axios.get(url)
            .then(response => {
                //console.log(response.data);
                this.state.characters = response.data
                this.state.loading = false

            })
            //questo metodo .catch serve per intercettera eventuali errori
            .catch(err => {
                console.error(err.message);
                this.state.error = err.message
                this.state.loading = false
            })
    }
},
mounted() {
    this.callApi(this.state.API_URL)

}, */



