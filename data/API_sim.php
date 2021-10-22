<?php 
    require __DIR__."/database.php";//importo il file con i dati, potrei anche incollarli quì
    require __DIR__."/genres.php";//importo il file con i generi

    header("Content-Type: application/json");//diamo un formato alla risposta in ouput

    if(!empty($_GET)){

        //se ho una richiesta dei generi
        if($_GET['genres']=="true"){
            echo json_encode($genres);//ritorno l'array dei generi
        }

        //se il genere esiste ed è all
        if($_GET['genre']=="All"){
            echo json_encode($database);//restituisco tutto
            //altrimenti controllo che sia presente nei generi, per evitare cicli troppo lunghi inutili sul database
        }elseif(in_array($_GET['genre'], $genres)){
            $filteredAlbum=[];
            foreach($database as $album){
                if($album['genre']==$_GET['genre']){
                    $filteredAlbum[]=$album;
                }
            }
            echo json_encode($filteredAlbum);//ritorno gli album filtrati per genere
        }
    }
?>