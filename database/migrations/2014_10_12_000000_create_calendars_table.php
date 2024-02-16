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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable;
            $table->string('fr_city')->nullable;
            $table->string('en_city')->nullable;
            $table->string('nl_city')->nullable;
            $table->string('fr_dateConcert')->nullable;
            $table->string('en_dateConcert')->nullable;
            $table->string('nl_dateConcert')->nullable;
            $table->string('orderElt')->nullable->default(0);
            $table->string('link')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};
