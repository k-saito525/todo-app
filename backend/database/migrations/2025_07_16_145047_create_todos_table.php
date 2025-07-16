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
        Schema::create('todos', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('title', length: 100)->default('')->nullable(false)->comment('タイトル');
            $table->string('body', length: 1000)->default('')->nullable(false)->comment('本文');
            $table->integer('status')->default(0)->nullable(false)->comment('ステータス');
            $table->timestamps(); // created_at, updated_atの2つのカラムを作成
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
