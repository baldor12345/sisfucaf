<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 100)->nullable();
            $table->string('apellidos', 100)->nullable();
            $table->char('tipo',2)->nullable(); // S=>socio, C=>Cliente, 2=>SC
            $table->date('fechai')->nullable();
            $table->integer('numero_acciones')->nullable();
            $table->char('dni',8)->nullable();
            $table->string('direccion', 80)->nullable();;
            $table->date('fecha_nacimiento')->nullable();
            $table->char('sexo', 1); // M->Masculino, F->Femenino
            $table->char('estado_civil', 1); // S->Soltero, C=>Casado, V=>Viudo, D=>Divorciado
            $table->string('ocupacion', 80)->nullable();
            $table->integer('personas_en_casa')->nullable();
            $table->string('codigo', 40);
            $table->decimal('ingreso_personal',10,2);
            $table->decimal('ingreso_familiar',10,2);
            $table->string('telefono_fijo',18)->nullable();
            $table->string('telefono_movil1',18)->nullable();
            $table->string('telefono_movil2',18)->nullable();
            $table->string('email',60)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
