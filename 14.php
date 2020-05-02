<!DOCTYPE HTML>
<html lang ="pl">
<head>
</head>
<body>
<?php
    if(empty($_POST["fnumber"])) echo "Nie podano pierwszej liczby. ";
    if(empty($_POST["lnumber"])) echo "Nie podano drugiej liczby";
    if(!empty($_POST["lnumber"])&&!empty($_POST["fnumber"]))
    {
        echo "Dodawanie: ";
        echo $_POST["fnumber"]+$_POST["lnumber"];
        echo " Odejmowanie: ";
        echo $_POST["fnumber"]-$_POST["lnumber"];
        echo " Mnożenie: ";
        echo $_POST["fnumber"]*$_POST["lnumber"];
    }  
?>
</body>
</html>