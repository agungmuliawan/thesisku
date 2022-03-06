<?php

function dd(...$array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function ddd(...$array){
    dd($array);
    die;
}
