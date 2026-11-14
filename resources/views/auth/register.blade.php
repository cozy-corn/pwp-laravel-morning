<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ユーザー登録 - つぶやきアプリ</title>
</head>
<body>
    <nav>
    <a href="{{ url('/tweet') }}">つぶやきアプリ</a>
    </nav>
    <main>
    <h1>ユーザー登録</h1>
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">お名前</label>
            <input type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
            autofocus>
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">メールアドレス</label>
            <input type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required>
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">パスワード</label>
            <input type="password"
            id="password"
            name="password"
            required>
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">パスワード確認</label>
            <input type="password"
            id="password_confirmation"
            name="password_confirmation"
            required>
        </div>
        <div>
            <button type="submit">登録</button>
        </div>
      </form>
    </main>
</body>
</html>