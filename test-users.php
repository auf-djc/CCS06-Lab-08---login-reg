<?php

require "config.php";

use App\User;

try {
	User::register('Apolinario', 'Mabini', 'y Maranan', 'apolinario@mabini.ph', 'FILIPINAS', '1864-07-23', 'Male', 'Tanauan, Batangas', '123456789');
	echo "<li>Added 1 record";

	$users = [
		[
			'first_name' => 'Jose',
			'middle_name' => 'Mercado',
			'last_name' => 'Rizal',
			'email' => 'jose@rizal.ph',
			'password' => 'TAGAILOG',
			'birthdate' => '1861-06-19',
			'gender' => 'Male',
			'address' => 'Calamba, Laguna',
			'contact_number' => '234567891'
		],
		[
			'first_name' => 'Antonio',
			'middle_name' => 'Novicio',
			'last_name' => 'Luna',
			'email' => 'antonio@luna.ph',
			'password' => 'ARTIKULOUNO',
			'birthdate' => '1866-10-29',
			'gender' => 'Male',
			'address' => 'Badoc, Ilocos Norte',
			'contact_number' => '345678912'
		]
	];
	User::registerMany($users);
	echo "<li>Added " . count($users) . " more records";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

