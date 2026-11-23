<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン - つぶやきアプリ</title>
</head>
<body>
    <nav>
        <a href="{{ url('/tweet') }}">つぶやきアプリ</a>
    </nav>
    <main>
        <h1>ログイン</h1>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">メールアドレス</label>
                <input type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus>
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
                <button type="submit">ログイン</button>
            </div>
        </form>
        <p>
            <a href="{{ route('register') }}">アカウントをお持ちでない方はこちら</a>
        </p>
    </main>
</body>
</html>