<?php 
    function writeCard($title,$author,$year,$poster){
        echo "<div class='card_container'><div class='card'>
            <a href='https://en.wikipedia.org/wiki/{$author}'><img src='{$poster}' alt='{$title}'></a>
            <h2 class='title'>{$title}</h2>
            <p class='subtitle'>{$author}</p>
            <p class='subtitle'>{$year}</p>
        </div></div>";
    }
?>