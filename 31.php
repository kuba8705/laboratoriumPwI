
  <?php
  $fp = fopen("plik.txt", "r");

  $Dane = fread($fp, filesize("plik.txt"));

  echo $Dane;

  fclose($fp)
  ?>