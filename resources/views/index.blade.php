<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  氏名<br>
  @error('name')
  <p>{{$message}}</p>
  @enderror
  <form action="/thanks" method="post">
    @csrf
  <input type="text" name="name"><br>
  メールアドレス<br>
  @error('email')
  <p>{{$message}}</p>
  @enderror
  <input type="email"name="email"><br>
  <input type="submit" value="送信する">
</form>
</body>
</html>