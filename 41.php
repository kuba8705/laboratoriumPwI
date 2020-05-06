
  <?php
  $dsn = "mysql:host=localhost;dbname=uczelnia";
  $username = "root";
  $password = "";


  $db = new PDO($dsn, $username, $password);

  $statement = $db->prepare('UPDATE studenci SET nazwisko = :fnazwisko WHERE id=:fid');
  
  $statement->execute([
    'fnazwisko'=>'Malinowski',
    'fid'=>'3',
  ]);

  ?>
