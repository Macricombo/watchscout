<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('watch_favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('watch_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            // Impedisce duplicati
            $table->unique(['user_id', 'watch_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('watch_favorites');
    }
};
