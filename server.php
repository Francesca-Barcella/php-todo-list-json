<?php

$tasks = [
    'HTML',
    'css',
    'Responsive design',
    'Javascript',
    'PHP',
    'Laravel'
];

//var_dump($tasks);
//aggiungo funzione header() + json_encode per far leggere a js la lista dei tasks
header ('Content-Type:application/json');
echo json_encode($tasks);