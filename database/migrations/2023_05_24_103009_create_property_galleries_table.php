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
        Schema::create('property_galleries', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("property_id");
            $table->integer('order');
            $table->string("image");
            $table->string("image_alt");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_galleries');
    }
};
