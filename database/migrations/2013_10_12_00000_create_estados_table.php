<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id('id_estado');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('estados')->insert(['nombre' => 'Activo']);
        DB::table('estados')->insert(['nombre' => 'Inactivo']);
    }

    public function down()
    {
        Schema::dropIfExists('estados');
    }
};