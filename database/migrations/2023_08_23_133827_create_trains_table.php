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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 80);
            $table->string('departure_station', 80);
            $table->string('arrival_station', 80);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->char('code', 6);
            $table->smallInteger('number_of_cabs');
            $table->boolean('on_time');
            $table->boolean('cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
