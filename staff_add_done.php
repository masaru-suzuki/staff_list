<body>

  <?php

  try {
    $staff_name = $_POST['name'];
    $staff_pass = $_POST['pass'];
    var_dump($staff_name);
    var_dump($staff_pass);
    $staff_name_element = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
    $staff_pass_element = htmlspecialchars($staff_pass, ENT_QUOTES, 'UTF-8');
    var_dump($staff_name_element);
    var_dump($staff_pass_element);
    // $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
    // $staff_pass = htmlspecialchars($staff_pass, ENT_QUOTES, 'UTF-8');

    // $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'root';
    // $dbh = new PDO($dsn, $user, $password);
    // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = 'INSERT INTO mst_staff(name,password)VALUES(?,?)';
    // $stmt = $dbh->prepare($sql);
    // $data[] = $staff_name;
    // $data[] = $staff_pass;
    // $stmt->execute($data);


    $dsn = 'mysql:dbname=shop;host=127.0.0.1;charset=utf8';
    $dbh = new PDO(
      $dsn,
      $user,
      $password,
      array(PDO::ATTR_EMULATE_PREPARES => false)
    );

    $sql = 'INSERT INTO mst_staff(name,password) VALUES (?,?)';
    $stmt = $dbh->prepare($sql);
    $data[] = $staff_name_element;
    $data[] = $staff_pass_element;
    $stmt->execute($data);
    $dbh = null;

    print $staff_name_element;
    print 'さんを追加しました';
  } catch (Exception $e) {
    print '失敗しました<br />';
    print 'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }
  ?>
  <a href="staff_list.php">戻る</a>
</body>