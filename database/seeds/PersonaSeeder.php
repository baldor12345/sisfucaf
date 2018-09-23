<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new DateTime;

		$now = new DateTime;
		DB::table('persona')->insert(array(
                'nombres'       =>'Baldor',
                'apellidos'              =>'Manayay',
                'tipo'              =>'S',
                'dni'               =>'12345678',
                'fechai'	=>'2018-09-08',
                'sexo'              =>'M',
                'estado_civil'              =>'S',
                'codigo'              =>'SFUCAF0001',
                'ingreso_personal'              =>'300.00',
                'ingreso_familiar'              =>'500.00',
				'created_at'     => $now,
				'updated_at'     => $now
            ));
            DB::table('persona')->insert(array(
                'nombres'       =>'Azorin',
                'apellidos'              =>'Manayay',
                'tipo'              =>'C',
                'dni'               =>'12345679',
                'fechai'	=>'2018-09-08',
                'sexo'              =>'M',
                'estado_civil'              =>'S',
                'codigo'              =>'SFUCAF0001',
                'ingreso_personal'              =>'300.00',
                'ingreso_familiar'              =>'500.00',
				'created_at'     => $now,
				'updated_at'     => $now
			));

    }
}