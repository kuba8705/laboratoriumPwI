
  <?php
  $dsn = "mysql:host=localhost;dbname=uczelnia";
  $username = "root";
  $password = "";


  $db = new PDO($dsn, $username, $password);

  $data = [
    'id' => $_GET['id'],
    'imie' => $_GET['imie'],
    'nazwisko' => $_GET['nazwisko'],
    'email' => $_GET['email'],
    'id_rok_studiow' => $_GET['rok'],
  ];
  $sql = "INSERT INTO studenci (id,imie, nazwisko, email,id_rok_studiow) VALUES (:id,:imie, :nazwisko, :email, :id_rok_studiow)";
  echo $sql;
  $stmt= $db->prepare($sql);
  $stmt->execute($data);

  ?>
