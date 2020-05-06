
  <?php
  $dsn = "mysql:host=localhost;dbname=uczelnia";
  $username = "root";
  $password = "";


  $db = new PDO($dsn, $username, $password);


  $statement = $db->prepare('INSERT INTO rok (id, nazwa, kierunek, stopien)
  VALUES (:fid, :fnazwa, :fkierunek, :fstopien)');

$statement->execute([
    'fid' => '1',
    'fnazwa' => 'Pierwszy',
    'fkierunek' => 'Informatyka',
    'fstopien' => '1',
  ]);

  $statement->execute([
    'fid' => '2',
    'fnazwa' => 'Drugi',
    'fkierunek' => 'Matematyka',
    'fstopien' => '2',
  ]);

  $statement2 = $db->prepare('INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
  VALUES (:fid, :fimie, :fnazwisko, :femail, :fid_rok_studiow)');

  $statement2->execute([
    'fid' => '1',
    'fimie' => 'Desaunois',
    'fnazwisko' => 'Borkowski',
    'femail' => 'Borkowski@wp.pl',
    'fid_rok_studiow' => '1',
  ]);

  $statement2->execute([
    'fid' => '2',
    'fimie' => 'Klaudiusz',
    'fnazwisko' => 'Zielinski',
    'femail' => 'Zielinski@wp.pl',
    'fid_rok_studiow' => '1',
  ]);

  $statement2->execute([
    'fid' => '3',
    'fimie' => 'Jozef',
    'fnazwisko' => 'Wisniewski',
    'femail' => 'Wisniewski@wp.pl',
    'fid_rok_studiow' => '1',
  ]);

  ?>
