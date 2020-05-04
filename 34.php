
  <?php
  $dsn = "mysql:host=localhost;dbname=motoryzacja";
  $username = "root";
  $password = "";

  try{
    $db = new PDO($dsn, $username, $password);
    $stmt = $db->query('SELECT * FROM samochody WHERE (id = 1 OR id=3)');
    
    foreach($stmt as $row)
 
    {
     
      echo 'marka: ' . $row['marka']  .
     
      ', model:' . $row['model']  .
     
      ', id:' . $row['id'] .
     
      '<br />';
     
    }
  }
  catch(PDOException $e)
  {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();

  }
  ?>
