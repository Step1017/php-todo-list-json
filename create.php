<?php 

    // var_dump($_POST);
    $todoListString = file_get_contents('./database.json');
    $todoListDecoded = json_decode($todoListString, true);
    //in questo caso specifico in cui sono io a fare il front-end mi basta questo:
    $newTask = [
        'taskName' => $_POST['task']['taskName'],
        'done' => $_POST['task']['done'] == 'true' ? true : false
    ];
    /* ma la best-practice è questa(dare un minimo di validazione):
    if ($_POST['task']['done'] != "true" && $_POST['task']['done'] != "false") {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid data',
            'code' => 400
        ]);

        die();
    } */

    //e lo pusho qui dentro:
    $todoListDecoded[] = $newTask;

    //vado a ricodificare le informazioni e le stampiamo prima di salvarlo nel database.json
    $todoListEncoded = json_encode($todoListDecoded);
    //e lo salvo nel database.json con la funzione file_put_contents
    file_put_contents('./database.json', $todoListEncoded);

    // aggiungiamo l'header per dire a qualunque client che chiama la nostra api che questa risposta è di tipo json
    header('Content-Type: application/json');

    //parte della 2^ soluzione per aggiungere nuovo task alla lista
    $response = [
        'success' => true,
        'code' => 200,
        'message' => 'Ok',
        'todos' => $todoListDecoded
    ];

    echo json_encode($response);
