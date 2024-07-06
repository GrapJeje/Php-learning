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

    <?php foreach ($task as $key => $feature) : ?>
     <li><strong><?= ucwords($key); ?></strong> <?= $feature; ?></li>
    <?php endforeach; ?>

</ul>

<ul>
     <li>
        <strong>Name: </strong> <?= $task['title']; ?>
    </li>

    <li>
        <strong>Due Data: </strong> <?= $task['due']; ?>
    </li>

    <li>
        <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
    </li>

    <li>
        <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete' ; ?>
    </li>

</ul>

<ul>
     <li>
        <strong>Name: </strong> <?= $task['title']; ?>
    </li>

    <li>
        <strong>Due Data: </strong> <?= $task['due']; ?>
    </li>

    <li>
        <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
    </li>

    <li>
    
        <strong>Status: </strong> 
        
        <?php if ($task['completed']) : ?>
            <span>&#9989</span>
        <?php else : ?>
            <span>Incomplete</span>
        <?php endif; ?>
    </li>

</ul>
    
</body>
</html>