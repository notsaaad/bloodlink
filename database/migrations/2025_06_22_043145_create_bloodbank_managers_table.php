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
        Schema::create('bloodbank_managers', function (Blueprint $table) {
            $table->id('manager_id');
            $table->string('name');
            $table->string('national_id')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('bloodbank_id');

            // $table->foreign('bloodbank_id')->references('bloodbank_id')->on('bloodbanks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloodbank_managers');
    }
};
