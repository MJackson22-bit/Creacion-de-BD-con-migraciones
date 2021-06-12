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
            $table->string("c_codclase", 5);
            $table->string("p_idprofesor", 10);
            $table->bigInteger("a_idaula", 20)->unsigned();
            $table->foreign("c_codclase")->references("codclase")->on("clase")->onDelete("cascade");
            $table->foreign("p_idprofesor")->references("id")->on("profesor")->onDelete("cascade");            
            $table->foreign("a_idaula")->references("id")->on("aula")->onDelete("cascade");
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
