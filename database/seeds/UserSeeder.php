<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new DateTime;
		$usertype_id = DB::table('usertype')->where('name', '=', 'ADMINISTRADOR PRINCIPAL')->first()->id;
		DB::table('user')->insert(array(
				'nombres'		=>'Baldor',
				'apellidos'		=>'Manayay',
				'dni'		=>'12345678',
				'login'          => '12345678',
				'password'       => Hash::make('123456'),
				'telefono'		=>'123456789',
				'email'		=>'Baldor@gmail.com',
				'fechai'	=>'2018-09-08',
				'usertype_id' => $usertype_id,
				'created_at'     => $now,
				'updated_at'     => $now
			));
		$usertype_id = DB::table('usertype')->where('name', '=', 'EMPLEADO')->first()->id;
		DB::table('user')->insert(array(
				'nombres'		=>'Azorin',
				'apellidos'		=>'Manayay',
				'dni'		=>'12345679',
				'login'          => '12345679',
				'password'       => Hash::make('123456'),
				'telefono'		=>'123456789',
				'email'		=>'azorin@gmail.com',
				'fechai'	=>'2018-09-08',
				'usertype_id' => $usertype_id,
				'created_at'     => $now,
				'updated_at'     => $now
			));
    }
}
