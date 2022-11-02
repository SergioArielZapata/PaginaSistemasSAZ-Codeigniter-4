<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UsuarioModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UsuarioModel();

		$user_object->insertBatch([
			[
				"name" => "Rahul Sharma",
				"email" => "rahul_sharma@mail.com",
				"phone_no" => "7899654125",
				"role" => "admin",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"name" => "Prabhat Pandey",
				"email" => "prabhat@mail.com",
				"phone_no" => "8888888888",
				"role" => "usuario",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
	}
}