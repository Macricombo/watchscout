<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->index('slug');
            $table->index('order');
        });

        // Tabella pivot per la relazione many-to-many tra watches e categories
        Schema::create('category_watch', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('watch_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            // Impedisce duplicati
            $table->unique(['category_id', 'watch_id']);
        });

        // Inserimento delle categorie predefinite
        $categories = [
            ['name' => 'Lusso', 'slug' => 'lusso', 'description' => 'Orologi di alta gamma e prestigio', 'order' => 1],
            ['name' => 'Artigianali', 'slug' => 'artigianali', 'description' => 'Orologi realizzati a mano con cura artigianale', 'order' => 2],
            ['name' => 'Eleganti', 'slug' => 'eleganti', 'description' => 'Orologi raffinati per occasioni speciali', 'order' => 3],
            ['name' => 'Vintage', 'slug' => 'vintage', 'description' => 'Orologi d\'epoca e da collezione', 'order' => 4],
            ['name' => 'Classici', 'slug' => 'classici', 'description' => 'Orologi dal design senza tempo', 'order' => 5],
            ['name' => 'Sportivi', 'slug' => 'sportivi', 'description' => 'Orologi robusti per attività sportive', 'order' => 6],
            ['name' => 'Economici', 'slug' => 'economici', 'description' => 'Orologi di qualità a prezzi accessibili', 'order' => 7],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        Schema::dropIfExists('category_watch');
        Schema::dropIfExists('categories');
    }
};
