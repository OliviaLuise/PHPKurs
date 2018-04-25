<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>


<?php
  $Foo; //diese variabel hat den wert null, da ihr sonst kein wert zugewiesen wurde
 var_dump($Foo);
 echo "<br>";
//mit diesem if kann man nachschauen ob eine variabel schon gebildet ist
  if(isset($foo)){
    echo $foo;
  }
//Boolean => binärer datentyp true o. false
//Variabeln sind case-sensitive, d. h. $foo != $FOO und müssen auch nicht deklariert werden
  $foo = false;
  $foo2 = true;
//Bedingung if...else
// Wird immer auf 'true' getestet, also muss man keinen vergleich in diesem Fall angegeben
// if($foo == true){}
  if($foo){
    echo "foo ist true!";
  } elseif ($foo == $foo2){
    echo "foo ist gleich foo2";
  } elseif($foo != $foo2){
    echo "foos sind ungleich";
  }
    else {
    echo "foo ist false!";
  };

  echo "<br>";
//wenn beim if nur eine Bedingung angegeben ist kann man {} auch weglassen
  if(1==="1") echo "(1 == '1')";
  echo "<br>";

//String Operatoren
  echo "ABC"."DEF"."GHI";
  echo "<br>";
  echo "Hello World! "; //strings werden unter " " angegeben

  echo 6*6;           //zahlen werden als Integer oder Float augegeben
  echo "<br>";                    //aruthmetische Operatoren
  echo "Dar Ergebnis von 7 + 7 ist " . (7+7) ;
  echo "<br>";
  echo 7-5;
  echo "<br>";
  echo 6/5;
  echo "<br>";
  echo 6%5;       //Modulo operator zeigt den rest einer Division an
echo "<br>";
  echo 8**2 ."<br>";      //hochrechnen

//Weitere Vergleichs Operatoren: <, >, >=, <=
$zahl1=5;
$zahl2 = "3";

if($zahl1 > $zahl2){
  echo "Zahl 1 ist grösser! <br>"}
?>

</body>
</html>
