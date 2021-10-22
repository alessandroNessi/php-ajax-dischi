<?php 
    require __DIR__."/database.php";//importo il file con i dati, potrei anche incollarli quì

    $genres=[];
    foreach($database as $album){
        if(!in_array($album['genre'], $genres)){
            $genres[]=$album['genre'];
        }
    };
?>