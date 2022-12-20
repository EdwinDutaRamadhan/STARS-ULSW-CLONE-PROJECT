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
        Schema::create('dispensasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('link');
            $table->string('dispensasi');
            $table->string('syarat');
            $table->string('tagihan');
            $table->boolean('status');
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
        Schema::dropIfExists('dispensasis');
    }
};
