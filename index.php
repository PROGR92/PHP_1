<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title> Formularz </title>
</head>
<body>

    <h1>Zamowienie</h1>
    <form action="zamowienie.php" method="post">
        Ile pierwszych (0.99 PLN/szt):
        <input type="text" name="pierwsze" />
            <br><br>
        Ile drugich (1.29 PLN/szt):
        <input type="text" name="drugie"/>
            <br><br> 
        <input type="submit" value="Wyślij zamówienie"/>
    </form>

<?php
//kod niejawny

 //   $imie="Łukasz";
 //   echo 'Witaj '.$imie;
 
?>

</body>
</html>