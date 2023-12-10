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
        Schema::create('category_masters', function (Blueprint $table) {
            $table->id();
            $table->string('category_master_id')->nullable();
            $table->string('status_id')->nullable();
            $table->string('name')->nullable();
            $table->string('desc')->nullable();
            $table->date('lang')->nullable();
            $table->date('lang_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
