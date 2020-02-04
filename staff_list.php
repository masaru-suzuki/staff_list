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
    <?php
    try {
      $dsn = 'mysql:dbname=shop;host=127.0.0.1;charset=utf8';
      $user = 'root';
      $password = 'root';
      $dbh = new PDO(
        $dsn,
        $user,
        $password,
        array(PDO::ATTR_EMULATE_PREPARES => false)
      );
      $sql = 'SELECT code,name FROM mst_staff WHERE 1';
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      $dbh = null;

      print 'スタッフ一覧<br /><br />';
      print '<form method="post" action="staff_edit.php">';
      while (true) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rec == false) {
          break;
        }
        print '<input type="radio" name="staffcode" value="' . $rec['code'] . '">';
        print $rec['name'];
        print '<br />';
      }
      print '<input type="submit" value="修正">';
      print '</form>';
    } catch (Exception $e) {
      print '失敗しました<br />';
      print 'ただいま障害により大変ご迷惑をおかけしております。';
      exit();
    }
    ?>
  </div>
</body>

</html>