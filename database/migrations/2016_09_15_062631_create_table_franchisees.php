<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFranchisees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 30) -> unique();
            $table->string('alamat', 100) -> unique();
            $table->string('kecamatan', 15);
            $table->string('kota', 15);
            $table->string('username', 15);
            $table->string('password', 30);
            $table->string('jualtahu', 1000);
            $table->integer('stoktahu');
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
        Schema::drop('franchisees');
    }
}
