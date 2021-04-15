<?php

function printArr($array) {
    foreach ($array as $item) {
        echo "<p>$item</p>";
    }
}

function largest($array) {
    $high = 0;
    foreach ($array as $item) {
        if ($item > $high) {
            $high = $item;
        }
    }
    return $high;
}