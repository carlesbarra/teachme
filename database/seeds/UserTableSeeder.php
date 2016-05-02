<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {
	
	public function run() {

		$this->createAdmin();
		$this->createUsers(50);

	}

	private function createAdmin() {

		User::create([
			'name' 		=> 'Carles Barra',
			'email' 	=> 'carlesbarra@gmail.com',
			'password'	=> bcrypt('admin')
		]);

	}

	private function createUsers($totalUsers) {

		$faker = Faker::create();

		for($i = 1; $i <= $totalUsers; $i++) {

			User::create([
				'name' 		=> $faker->name,
				'email' 	=> $faker->email,
				'password'	=> bcrypt('secret')
			]);

		}

	}

}