<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 100pt;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0 -100px 0;
        }
    </style>
</head>
<body>
<h1>Blade/Index</h1>
<p>&#64;foreachディレクティブの例</p>
<ol>
    @foreach($data as $item)
        @if ($loop->first)
            <p>データ一覧</p>
            <ul>
                @endif
                <li>No, {{$loop->iteration}}.{{$item}}</li>
                @if ($loop->last)
            </ul><p>ここまで</p>
        @endif
    @endforeach
</ol>
<form method="post" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
</form>
</body>
</html>
