<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TestUser; // ★ 追記: TestUserモデルのインポート
use Illuminate\Support\Facades\Hash; // ★ 追記: Hashファサードのインポート

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * データベースシードを実行します。
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            TestUser::create([
                // マイグレーションで $table->id() を使った場合、'id'カラムが主キーです。
                // $table->id('user_id') を使った場合は 'user_id' が主キーです。
                // 主キーは自動採番されるため、通常は指定しません。

                'user_name' => "TestUser_{$i}",
                'email' => "testuser{$i}@example.com",
                'password' => Hash::make('password'),
                // 必要に応じて他のカラムも設定
            ]);
        }
    }
}
