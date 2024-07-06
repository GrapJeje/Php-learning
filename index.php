<?php

$task = [
    'title' => 'Finish homework',
    'due' => 'today',
    "assigned_to" => 'Jason',
    'completed' => true
];

$person['Name'] = 'Jason';

unset($person['Age']);

require 'index.view.php';