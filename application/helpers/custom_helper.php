<?php

function dd(...$array) #die dump -> pre
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function ddd(...$array){
    dd($array);
    die;
}
