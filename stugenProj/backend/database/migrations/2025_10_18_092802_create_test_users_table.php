<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('test_users', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }
    
    public function up(): void
    {
        Schema::create('test_users', function (Blueprint $table) {
            // そのまま: デフォルトの主キー 'id' (Laravelの慣習)
            $table->id(); 
            
            // 追記: user_name カラムを追加
            $table->string('user_name', 100); 

            // 追記: 認証に必要な一般的なカラム（email, passwordなど）
            $table->string('email')->unique();
            $table->string('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_users');
    }
};
