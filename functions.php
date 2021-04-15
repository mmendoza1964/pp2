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

function removeDups($array) {
    $array = array_unique($array); //remove duplicates

    foreach ($array as $item) {
        echo "<p>$item</p>";
    }
}