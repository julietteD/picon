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
            $table->text('fr_title1')->nullable();
            $table->text('en_title1')->nullable();
            $table->text('nl_title1')->nullable();
            $table->text('fr_title2')->nullable();
            $table->text('en_title2')->nullable();
            $table->text('nl_title2')->nullable();
            $table->text('fr_title3')->nullable();
            $table->text('en_title3')->nullable();
            $table->text('nl_title3')->nullable();
            $table->text('fr_title4')->nullable();
            $table->text('en_title4')->nullable();
            $table->text('nl_title4')->nullable();
            $table->text('fr_body1')->nullable();
            $table->text('en_body1')->nullable();
            $table->text('nl_body1')->nullable();
            $table->text('fr_body2')->nullable();
            $table->text('en_body2')->nullable();
            $table->text('nl_body2')->nullable();
            $table->text('fr_body3')->nullable();
            $table->text('en_body3')->nullable();
            $table->text('nl_body3')->nullable();
            $table->text('fr_body4')->nullable();
            $table->text('en_body4')->nullable();
            $table->text('nl_body4')->nullable();
            $table->text('fr_body5')->nullable();
            $table->text('en_body5')->nullable();
            $table->text('nl_body5')->nullable();
            $table->text('fr_body6')->nullable();
            $table->text('en_body6')->nullable();
            $table->text('nl_body6')->nullable();
            $table->text('fr_body7')->nullable();
            $table->text('en_body7')->nullable();
            $table->text('nl_body7')->nullable();
        

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
