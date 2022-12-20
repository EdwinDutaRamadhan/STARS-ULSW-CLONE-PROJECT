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
        Schema::create('k_k_m_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('link');
            $table->string('catatan');
            $table->boolean('valid');
            $table->integer('poin');
            $table->string('kegiatan');
            $table->string('rumpun');
            $table->string('jenis');
            $table->string('kelompok');
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
        Schema::dropIfExists('k_k_m_s');
    }
};
