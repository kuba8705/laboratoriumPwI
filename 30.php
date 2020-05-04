
  <?php
  $Dane ="Hello, World!";

  $fp = fopen("plik.txt", "w");
  
  fputs($fp, $Dane);
  
  fclose($fp);
  ?>
