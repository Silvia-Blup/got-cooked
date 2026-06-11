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
        Schema::create('krs_details', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('kode_krs');
        // define foreign key constrait
        $table->foreign('krs_id')->references('id')->m('table_krs')->onDelete('cascade');

        $table->unsignedBigInteger('kelas_id');
        $table->foreign('kelas_id')->references('id')->m('table_kelas')->onDelete('cascade');
        
        $table->enum('status', ['pending', 'approved', 'declined']);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs_details');
    }
};
