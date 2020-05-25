

  <select name="nazwa" multiple>
  <?php
  $dsn = "mysql:host=localhost;dbname=uczelnia";
  $username = "root";
  $password = "";


  $db = new PDO($dsn, $username, $password);

  $stmt = $db->query('SELECT * FROM studenci');
    
  foreach($stmt as $row)

  {
    echo "<option>";
    echo 'imie: ' . $row['imie']  .
   
    ', nazwisko:' . $row['nazwisko']  .
   
    ', id:' . $row['id'] .

    ', email:' . $row['email'] .

    ', eok studiow:' . $row['id_rok_studiow'] .
   
    '<br />';
    echo "</option>";
  }

  ?>
</select>