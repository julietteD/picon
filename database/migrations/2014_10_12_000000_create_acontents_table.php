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
        Schema::create('acontents', function (Blueprint $table) {
            $table->id();
            $table->longtext('fr_body')->nullable();
            $table->longtext('en_body')->nullable();
            $table->longtext('nl_body')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acontents');
    }
};
