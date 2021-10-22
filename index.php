<?php
    include __DIR__.("/data/data.php");
    // include __DIR__.("/components/header.php");
    include __DIR__.("/components/card.php");
    // var_dump($database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="https://png2.cleanpng.com/sh/fdb987b25544360cc0ccddf830309d3d/L0KzQYq3VsA5N6J0hJH0aYP2gLBuTfxwb5CyiAJ4dHnpiX73jCJ1aZNxfZ93ZYT6f8PyTfdzaaFtgdV8LYP3grbojflvb15yRdN1dHX1frL7igZmNZpzjtd8dH3ofsX6TgJ2fKVqhtRucnewd7F5hP9vNZpzjtd8dD24c7fqVfY3bWE7SqdvNz6zQ4O8UMA6OmI6TqI5NEO2R4W3UsUzNqFzf3==/kisspng-logo-spotify-portable-network-graphics-streaming-m-alternative-investments-ruttenberg-gordon-invest-5cfc5f6e0625f7.0325009215600433740252.png" alt="spotify logo">
    </header>
    <main>
        <div class="container">
            <?php foreach ($database as $data){ ?>
                <div class='card_container'><div class='card'>
                    <a href='https://en.wikipedia.org/wiki/<?php echo $data['author']?>'><img src='<?php echo $data['poster']?>' alt='<?php echo $data['title']?>'></a>
                    <h2 class='title'><?php echo $data['title']?></h2>
                    <p class='subtitle'><?php echo $data['author']?></p>
                    <p class='subtitle'><?php echo $data['year']?></p>
                </div></div>
            <?php } ?>
        </div>
    </main>
    <img src="" alt="">
    <footer></footer>
</body>
</html>