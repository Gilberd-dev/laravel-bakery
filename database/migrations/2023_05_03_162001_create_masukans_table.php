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
        Schema::create('masukans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengunjung');
            $table->string('email_pengunjung');
            $table->text('teks_masukan');
            $table->timestamp('tanggal_post_masukan');
            $table->string('gambar_video_masukan');
            $table->enum('status_masukan', ['Diizinkan', 'Diblokir']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masukans');
    }
};
