<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('findings', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('foundname');
            $table->string('lat');
            $table->string('lng');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('findings');
    }
};
