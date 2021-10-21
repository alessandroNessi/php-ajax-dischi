<?php
    include __DIR__.("/data/data.php");
    include __DIR__.("/components/header.php");
    include __DIR__.("/components/card.php");
    // var_dump($database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <div class="container">
            <?php 
                foreach ($database as $data){
                    writeCard($data['title'],$data['author'],$data['year'],$data['poster']);
                }
            ?>
        </div>
    </main>
    <img src="" alt="">
    <footer></footer>
</body>
</html>