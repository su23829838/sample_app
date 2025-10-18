{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel Test</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>これはコントローラーとビューを使って表示されました。</p>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel Test</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        .user-info {
            background-color: #f0f8ff;
            border: 1px solid #cceeff;
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
            border-radius: 8px;
        }
        .user-name {
            font-size: 1.8rem;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>データ表示の確認</h1>
    <p>これはコントローラーとビューを使って表示されました。</p>

    <div class="user-info">
        <h2>取得したユーザー情報</h2>
        <!-- 渡された $user オブジェクトの user_name プロパティを出力 -->
        <p>ユーザー名: <span class="user-name">{{ $user->user_name }}</span></p>
        <!-- 主キー（id または user_id）も確認のために表示 -->
        <p>ユーザーID: {{ $user->id }}</p>
        <p>メールアドレス: {{ $user->email }}</p>
    </div>

</body>
</html>
