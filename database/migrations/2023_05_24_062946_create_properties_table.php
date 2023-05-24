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
        Schema::create('properties', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("user_id")->references("id")->on("users");
            $table->foreignId("category_id")->references("id")->on("categories");
            $table->string("title");
            $table->longText("description");
            $table->string("card_img");
            $table->string("img_text");
            $table->string("sqft");//metrekare
            $table->longText("position");
            $table->integer("sittingrooms");
            $table->integer("bedrooms");
            $table->integer("baths");
            $table->enum("status",["ACTIVE","SOLD","INACTIVE"]);
            $table->string("high_price");
            $table->string("low_price");
            $table->text("address");
            $table->integer("age")->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
