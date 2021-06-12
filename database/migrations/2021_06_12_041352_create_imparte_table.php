<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImparteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imparte', function (Blueprint $table) {
            $table->unsignedBigInteger("c_codclase");
            $table->unsignedBigInteger("p_idprofesor");
            $table->unsignedBigInteger("a_idaula");
            $table->foreign("c_codclase")->references("codclase")->on("clase")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("p_idprofesor")->references("id")->on("profesor")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("a_idaula")->references("id")->on("aula")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imparte');
    }
}
