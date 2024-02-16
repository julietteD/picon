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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('fr_title1')->nullable();
            $table->string('en_title1')->nullable();
            $table->string('nl_title1')->nullable();
            $table->string('fr_title2')->nullable();
            $table->string('en_title2')->nullable();
            $table->string('nl_title2')->nullable();
            $table->string('fr_title3')->nullable();
            $table->string('en_title3')->nullable();
            $table->string('nl_title3')->nullable();
            $table->string('fr_title4')->nullable();
            $table->string('en_title4')->nullable();
            $table->string('nl_title4')->nullable();
            $table->string('fr_body1')->nullable();
            $table->string('en_body1')->nullable();
            $table->string('nl_body1')->nullable();
            $table->string('fr_body2')->nullable();
            $table->string('en_body2')->nullable();
            $table->string('nl_body2')->nullable();
            $table->string('fr_body3')->nullable();
            $table->string('en_body3')->nullable();
            $table->string('nl_body3')->nullable();
            $table->string('fr_body4')->nullable();
            $table->string('en_body4')->nullable();
            $table->string('nl_body4')->nullable();
            $table->string('fr_body5')->nullable();
            $table->string('en_body5')->nullable();
            $table->string('nl_body5')->nullable();
            $table->string('fr_body6')->nullable();
            $table->string('en_body6')->nullable();
            $table->string('nl_body6')->nullable();
            $table->string('fr_body7')->nullable();
            $table->string('en_body7')->nullable();
            $table->string('nl_body7')->nullable();
        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
