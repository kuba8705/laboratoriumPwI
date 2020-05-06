
  <?php
  $dsn = "mysql:host=localhost;dbname=uczelnia";
  $username = "root";
  $password = "";

  $db = new PDO($dsn, $username, $password);


  $stmt = $db->query('SELECT imie, nazwisko,kierunek,stopien FROM studenci INNER JOIN rok ON rok.id = studenci.id_rok_studiow;');
    
  foreach($stmt as $row)
  {
   
    echo 'imie:  ' . $row['imie']  .
     
    ', nazwisko: ' . $row['nazwisko']  .
   
    ', kierunek: ' . $row['kierunek'] .

    ', stopien:  ' . $row['stopien'] .
   
    '<br />';
   
  }

  ?>
