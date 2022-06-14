<?php

function dd(...$array) #die dump -> pre
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function ddd(...$array)
{
    dd($array);
    die;
}

function perbandinganBobot()
{
    #digunakan untuk declare perbandingan bobot yang sudah ditentukan
    return [
        'kp' => 0.65,
        'ku' => 0.23,
        'kt' => 0.12,
    ];
}
