<?php 
    //utilizzo file_get_contents per restituire una stringa dal file
    $todoListString = file_get_contents('./database.json');

    // aggiungiamo l'header per dire a qualunque client che chiama la nostra api che questa risposta è di tipo json
    header('Content-Type: application/json');
    echo $todoListString;