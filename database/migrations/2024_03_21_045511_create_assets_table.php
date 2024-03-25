<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();

            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('jantina')->nullable();
            $table->string('no_kakitangan')->nullable();
            $table->string('jawatan')->nullable();
            $table->string('no_telefon')->nullable();
            $table->string('no_telefon_pejabat')->nullable();
            $table->string('alamat_pejabat')->nullable();

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
        Schema::dropIfExists('assets');
    }
}
