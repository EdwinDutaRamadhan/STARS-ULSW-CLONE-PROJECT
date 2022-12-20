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
        Schema::create('p_k_m_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('link');
            $table->string('revisi');
            $table->boolean('validpembimbing');
            $table->boolean('validkorbidkem');
            $table->string('idberkas');
            $table->string('judul');
            $table->string('kegiatan');
            $table->string('skema');
            $table->string('administratif');
            $table->string('substantif');
            $table->string('progdi');
            $table->string('status');
            $table->string('pembimbing');
            $table->string('ketua');
            $table->string('anggota1');
            $table->string('anggota2');
            $table->string('anggota3');
            $table->string('anggota4');
            $table->string('proposal');
            $table->string('berkas');
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
        Schema::dropIfExists('p_k_m_s');
    }
};
