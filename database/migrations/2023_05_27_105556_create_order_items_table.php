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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("price");
            $table->string("name");
            $table->string("description");
            $table->string("address");
            $table->string("rooms");
            $table->string("position");
            $table->string("property_id");
            $table->foreignId("user_id")->references("id")->on("users");
            $table->foreignId("order_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
