<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('brand');
            $table->string('model');
            $table->string('reference_number')->nullable();
            $table->integer('year')->nullable();
            $table->string('condition');
            $table->decimal('price', 12, 2);
            $table->text('description');
            $table->string('case_material')->nullable();
            $table->decimal('case_diameter', 5, 1)->nullable();
            $table->string('movement_type')->nullable();
            $table->string('bracelet_material')->nullable();
            $table->string('location');
            $table->boolean('box_papers')->default(false);
            $table->string('warranty')->nullable();
            $table->string('status')->default('active');
            $table->boolean('featured')->default(false);
            $table->timestamps();
            $table->softDeletes();

            // Indici per migliorare le performance delle ricerche
            $table->index(['brand', 'model']);
            $table->index('status');
            $table->index('featured');
            $table->index('price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('watches');
    }
};
