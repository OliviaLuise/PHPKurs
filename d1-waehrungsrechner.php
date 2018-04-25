<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    *{font-family: sans-serif;
      margin: auto;
      }
    table {background-color: skyblue; padding:15px;}
    td {text-align: right;}
    div {text-align: center; font-weight:bold; padding: 10px;}
    .eingabe_ok {background-color: orange;  }
    .eingabe_error {background-color: red; }
  </style>
</head>
<body>

  <form action="d1-waehrungsrechner.php" method="POST">
    <table>
      <tr><th colspan="2">Währungsrechner Statisch</th></tr>
      <tr>
        <td>Betrag:</td>
        <td><input type="text" name="betrag" placeholder="Betrag"></td>
      </tr>
      <tr>
        <td>Ausgangwährung:</td>
        <td>EUR</td>
      </tr>
      <tr>
        <td>Zielwährung:</td>
        <td>BTC</td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Umrechnen"></td>
      </tr>
    </table>
  </form>

<?php
//Wenn ein formular abgeschickt wurde
  if(isset($_POST["betrag"]) ){
    $betrag = $_POST["betrag"];

    if(is_numeric($betrag)){
      $kurs_btc_eur = 9091.58;
      $kurs_eur_btc = 1 / $kurs_btc_eur;

      $zielbetrag = $kurs_eur_btc * $betrag;

      echo "<br><div class=\"eingabe_ok\">".$betrag . " EUR = " . $zielbetrag . " BTC"."</div>";
    }
    else{
      echo "<br><div class=\"eingabe_error\">"."Bitte eine Zahl eingeben </div>";
    }
  }
  //diese variabel beinhaltet jetzt alle Werte die mit POST übermittelt wurden


?>
</body>
</html>
