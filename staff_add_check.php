<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ろくまる農園</title>
</head>
<?php
$staff_name = $_POST['name'];
$staff_pass = $_POST['pass'];
$staff_pass2 = $_POST['pass2'];

function esc($target)
{
  return htmlspecialchars($target, ENT_QUOTES, 'UTF-8');
}
$staff_name = esc($staff_name);
$staff_pass = esc($staff_pass);
$staff_pass2 = esc($staff_pass2);

if ($staff_name == '') {
  print 'スタッフ名が入力されていません<br />';
} else {
  echo "こんにちは\t$staff_name\tさん!!<br />";
}

if ($staff_pass == '') {
  print 'パスワードが入力されていません<br />';
}
if ($staff_pass != $staff_pass2) {
  print 'パスワードが一致しません<br />';
}
if ($staff_name == '' || $staff_pass == '' || $staff_pass != $staff_pass2) {
  echo <<<EOM
  <form>
    <input type="button" onclick="history.back()" value="back">
  </form>
  EOM;
} else {
  $staff_pass = md5($staff_pass);
  echo <<<EOM
  <form method="post" action="staff_add_done.php">
    <input type="hidden" name="name" value="'.$staff_name'">
    <input type="hidden" name="pass" value="'.$staff_pass'">
    <br />
    <input type="button" onclick="history.back()" value="back">
    <input type="submit" value="OK">
  </form>
  EOM;
}

?>

<body>

</body>

</html>