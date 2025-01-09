<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nip')->unique();
            $table->string('nama');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->enum('jenis_kelamin', array_map(fn($case) => $case->value, \App\Enums\JenisKelaminEnums::cases()))->default(\App\Enums\JenisKelaminEnums::LAKI_LAKI->value);
            $table->enum('golongan', array_map(fn($case) => $case->value, \App\Enums\GolonganEnums::cases()))->default(\App\Enums\GolonganEnums::IA->value);
            $table->integer('eselon')->nullable();
            $table->foreignId('jabatan_id')->nullable()->constrained('jabatans');
            $table->string('tempat_tugas')->nullable();
            $table->enum('agama', array_map(fn($case) => $case->value, \App\Enums\AgamaEnums::cases()))->default(\App\Enums\AgamaEnums::ISLAM->value);
            $table->foreignId('unit_kerja_id')->nullable()->constrained('unit_kerjas');
            $table->string('no_hp')->nullable();
            $table->string('npwp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
