<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('watch_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('watch_id')->constrained()->onDelete('cascade');
            $table->string('path');
            $table->integer('order')->default(0);
            $table->boolean('is_primary')->default(false);
            $table->timestamps();

            $table->index('watch_id');
            $table->index(['watch_id', 'is_primary']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('watch_images');
    }
};
