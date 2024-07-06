<?php

function dd($value) {
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

function ageChecker($age) {
    if ($age >= 21) {
        echo 'Welcome!';
    } else {
        echo 'You\'re not welcome here';
    }
}