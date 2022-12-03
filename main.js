//alert ('funziona');

const { createApp } = Vue

createApp({
    data() {
        return {
            new_task: [],

            tasks: [],
            api_url: 'server.php'
        }
    },
    methods: {
        callApi(url) {
            axios.get(url)
                .then(response => {
                    console.log(response.data);
                    this.tasks = response.data;
                })
                //questo metodo .catch serve per intercettera eventuali errori
                .catch(err => {
                    console.error(err.message);

                })
        },

        addTask() {
            console.log('ho cliccato su add task');
            //console.log('valore input = ' + this.newTask);

            //devono inserire almeno 5 caratteri
            //if (this.newTask.length < 5) {
               // this.error = true
            //} else {
                //questi due prima erano fuori e li portiamo dentro l'if-else per risolvere il bug dell'input vuoto
                //this.tasks.unshift(this.newTask)
                //this.newTask = ''
                //this.error = false
           // }
        },
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



