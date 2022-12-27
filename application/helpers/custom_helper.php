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

function badgeClass(float $nominal)
{
	$class = 'badge badge-danger';
	if ($nominal >= 80 && $nominal <= 100) {
		$class = 'badge badge-success';
	} elseif ($nominal >= 60 && $nominal < 80) {
		$class = 'badge badge-primary';
	} elseif ($nominal >= 40 && $nominal < 60) {
		$class = 'badge badge-info';
	} else if ($nominal >= 20 && $nominal < 40) {
		$class = 'badge badge-warning';
	}

	return $class;
}
