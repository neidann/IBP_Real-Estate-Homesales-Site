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
        Schema::create('carts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->references("id")->on("users");
            $table->foreignId("property_id")->references("id")->on("properties");
            $table->timestamps();
        });
    }
    /*
     * user:1 property:1
     * user:1 property:2
     * user:1 property:3
     * */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
