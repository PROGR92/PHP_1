<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title> Zamowienie </title>
</head>
<body>


<?php
  $pierwsze_pole=$_POST["pierwsze"];
  $drugie_pole=$_POST["drugie"];
  $suma=0.99*$pierwsze_pole+1.29*$drugie_pole;

  //echo "<h2>$pierwsze_pole $drugie_pole</h2>";
echo<<<END

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>Pierwszych(0,99PLN)</td><td>$pierwsze_pole</td>
    </tr>
    <tr>
        <td>Drugich(1,29PLN)</td><td>$drugie_pole</td>
    </tr>
    <tr>
        <td>SUMA</td><td>$suma PLN</td>
    </tr>
  </table>  

  <a href="index.php">Powrót do strony głównej.</a>

END;

?>

</body>
</html>