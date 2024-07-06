<?php

$person = [
    'Age' => 17,
    'Hair' => 'Brown'
];

$person['Name'] = 'Jason';

unset($person['Age']);

require 'index.view.php';