<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <div class="site-title"><a href ="{{route('articles.index')}}">ミニブログ</a></div>
        @if(Auth::check())
        <div>ログインなうですYO！{{Auth::user()->name}}がログインしています。<div>
        @else
        <div>NOTろぐいん</div>
        @endif
        <div><a href="{{route('login')}}">マイページ</a><div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        &copy; Laravel11 入門〜開発実践まで
    </footer>
</body>
</html>
