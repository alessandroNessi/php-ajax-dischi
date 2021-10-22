<?php 
    require __DIR__."/database.php";//importo il file con i dati, potrei anche incollarli quì

    header("Content-Type: application/json");//diamo un formato alla risposta in ouput

    echo json_encode($database);//diamo in 'ouput' la variabile $database importata dal file database.php codificata in JSON
?>