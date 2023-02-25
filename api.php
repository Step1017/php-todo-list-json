<?php 
    //utilizzo file_get_contents per restituire una stringa dal file
    $todoListString = file_get_contents('./database.json');
    // utilizzo la funzione json_decode per rendere la stringa $todoListString un array associativo, utilizzabile da php tramite il secondo parametro impostato a true
    $todoListDecoded = json_decode($todoListString, true);

    // aggiungiamo l'header per dire a qualunque client che chiama la nostra api che questa risposta è di tipo json
    header('Content-Type: application/json');

    //vado a ricodificare le informazioni e le stampiamo
    $todoListEncoded = json_encode($todoListDecoded);

    echo $todoListEncoded;