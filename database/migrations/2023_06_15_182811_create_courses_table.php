<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("course");
            $table->longText("short_desc");
            $table->longText("long_desc");
            $table->string("category");
            $table->string("image_1");
            $table->string("image_2");
            $table->string("level");
            $table->integer("weeks_hours");
            $table->string("age");
            $table->string("language");
            $table->integer("price");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
