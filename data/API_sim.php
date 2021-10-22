<?php 
    require __DIR__."/database.php";//importo il file con i dati, potrei anche incollarli quì
    require __DIR__."/genres.php";//importo il file con i generi

    header("Content-Type: application/json");//diamo un formato alla risposta in ouput

    if(!empty($_GET)){
        if(!empty($_GET['genres']) && $_GET['genres']=="true"){
            echo json_encode($genres);//diamo in 'ouput' la variabile $database importata dal file database.php codificata in JSON
        }else{
            echo json_encode("error, bad request");
        }
    }else{
        echo json_encode($database);//diamo in 'ouput' la variabile $database importata dal file database.php codificata in JSON
    }
?>