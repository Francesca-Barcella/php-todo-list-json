<?php
/* 
TRACCIA
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.

STACK
Html, CSS, VueJS (importato tramite CDN), axios, PHP

CONSIGLI
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

BONUS
Mostrare lo stato del task → se completato, barrare il testo
Permettere di segnare un task come completato facendo click sul testo
Permettere il toggle del task (completato/non completato)
Abilitare l’eliminazione di un task */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div id="app">
        <div class="container">

            <h1>To do list</h1>

            <!-- sicuramente ci andrà un ul>li con ciclo v-for e text interpolation per stampare la lista -->
            <ul>
                <li v-for="task in tasks">{{task}}</li>
            </ul>

            <!-- aggiungere nuovi tasks -> form con action server.php + method post (per inviare dati al server) -->
            <form action="server.php" method="post">
                <div class="mb-3">
                    <label for="new_task" class="form-label">Inserisci nuovo task</label>
                    <input type="text" name="new_task" id="new_task" class="form-control" placeholder="nuovo task">
                </div>
                <button type="submit" class="p-1 me-1">Aggiungi</button>
                <button type="reset" class="p-1">Annulla</button>
            </form>

        </div>
    </div>


    <!-- link per axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link per vue -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- link per js -->
    <script src="./main.js"></script>
</body>

</html>