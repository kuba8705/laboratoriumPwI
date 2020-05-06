
  <?php
  $dsn = "mysql:host=localhost;dbname=uczelnia";
  $username = "root";
  $password = "";


  $db = new PDO($dsn, $username, $password);

  $statement = $db->prepare('DELETE FROM studenci WHERE id = :fid');

  $statement->execute([
    'fid'=>'2',
  ]);
  ?>
