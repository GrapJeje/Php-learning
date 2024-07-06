<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

header {
    background: #e3e3e3;
    padding: 2em;
    text-align: center;
}

</style>

<body>

<header>
    <h1> 
        <?php

        $greeting = 'Hello'; // variable

        echo $greeting . ', ' . htmlspecialchars($_GET['name']); // print een text via de name in de url: http://localhost:8888/?name=Jason
        ?> 
    </h1>

    <h1> 
        <?= 'Welkom, ' . htmlspecialchars($_GET['name']); // Doet hetzelfde maar dan korter ?> 
    </h1>

</header>

<ul>

    <?php foreach ($person as $key => $feature) : ?>
     <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
    <?php endforeach; ?>

</ul>
    
</body>
</html>