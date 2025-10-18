<?php

namespace App\Http\Controllers;
use App\Models\TestUser; // TestUserモデルをインポート
use Illuminate\View\View; // 型ヒント (必須ではないが推奨)

use Illuminate\Http\Request;

class LpController extends Controller
{
    //
    public function lp()
    {
        // 'lp' は resources/views/hello.blade.php を指します
        // return view('lp');

        // 1. Eloquent ORMによるデータ取得
        // find(2) は主キーが2のレコードを取得します。
        // $user は TestUserモデルのインスタンス、またはレコードが見つからない場合は null になります。
        $user = TestUser::find(2);

        // 2. データが見つからなかった場合の処理 (例: 404エラー)
        if (!$user) {
            // Laravelの組み込み関数で、レコードが見つからない場合に自動的に404ページを返す
            // abort(404, 'User not found.'); 
            return "--- デバッグメッセージ --- データが見つかりませんでした。シーダーが実行されたか確認してください。"; 
        }

        // 3. Viewへのデータの受け渡し
        // キー 'user' で取得した $user インスタンスを view に渡します。
        return view('lp', [
            'user' => $user,
        ]);
    }
}
