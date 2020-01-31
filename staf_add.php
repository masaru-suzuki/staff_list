<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>ろくまる農園</title>
</head>

<body>
  <div class="container" style="margin: 0 300px;">
    <div class="form-head">
      <p>スタッフ追加</p>
    </div>
    <form action="staff_add_check.php" method="post">
      <p>スタッフ名を入力してください</p>
      <input type="text" name="name" style="width: 200px;" id="" />
      <p>パスワードを入力してください</p>
      <input type="password" name="pass" style="width: 100px" id="">
      <p>確認のためパスワードをもう1度入力してください</p>
      <input type="password" name="pass2" style="width: 100px" id="">
      <hr>
      <input type="button" onclick="history.back()" value="back">
      <input type="submit" value="OK">
    </form>
  </div>
</body>

</html>