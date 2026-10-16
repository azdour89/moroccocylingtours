<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $t) {
            $t->id();
            $t->string('slug')->unique();
            $t->string('title');
            $t->string('region');
            $t->unsignedTinyInteger('days');
            $t->string('difficulty');          // Easy, Moderate, Hard
            $t->unsignedInteger('distance_km');
            $t->unsignedInteger('climbing_m');
            $t->unsignedInteger('price_eur');  // per person
            $t->string('summary');
            $t->text('description');
            $t->json('highlights')->nullable();
            $t->unsignedSmallInteger('sort')->default(0);
            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
