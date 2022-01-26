<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portos', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('event')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('portos_list', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('ket')->nullable();
            $table->timestamps();

            $table->bigInteger('portos_id')->unsigned()->index();
            $table->foreign('portos_id')
                ->references('id')->on('portos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portos');
    }
}
