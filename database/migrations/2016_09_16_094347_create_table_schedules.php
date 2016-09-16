<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 30);
            $table->date('tanggal');
            $table->integer('jumlahkirim');
            $table->timestamps();
            /*
            $table->integer('id_franchisee')->unsigned()->primary('id_franchisee');
            $table->string('nama', 30);
            $table->date('tanggal');
            $table->integer('jumlahkirim');
            $table->timestamps();

            $table  ->foreign('id_franchisee')
                    ->references('id')->on('franchisees')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('schedules');
    }
}
