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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('birthdate');
            $table->string('ipaddress');
            $table->string('question');
            $table->string('persons');
            $table->string('marketing')->nullable()->default(0);
            $table->string('newsletter')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};
