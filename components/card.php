<?php 
    function writeCard($title,$author,$year,$poster){
        echo "<div class='card_container'><div class='card'>
            <img src='{$poster}' alt='{$title}'>
            <h2 class='title'>{$title}</h2>
            <p class='subtitle'>{$author}</p>
            <p class='subtitle'>{$year}</p>
        </div></div>";
    }
?>