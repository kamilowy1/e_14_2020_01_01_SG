<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>
<body>
    <div id="menu">
     <a href="index.php">Główna</a>
     <a href="procesory.html">Procesory</a>
     <a href="ram.html">RAM</a>
     <a href="grafika.html">Grafika</a>
    </div>
       <div id="logo">
        <h2>Podzespoły komputerowe</h2>
       </div>
          <div id="glowny">
           <h1>Dzisiejsze promocje</h1>
           <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>
<?php
// utworzenie zmiennych polaczeniowych 

$server = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'sklep';

$conn = mysqli_connect($server,$user,$passwd,$dbname);
//sprawdzenie polaczenia 
/*
if (!$conn){
    die ("fatal error:".mysqli_error($conn));
} echo "jest okej";
*/

$sql = "SELECT `id`, `nazwa`, `opis`, `cena` FROM `podzespoly` WHERE `cena` <1000;";
$zapytanie = mysqli_query($conn,$sql);

while($wynik = mysqli_fetch_row($zapytanie)){
    echo "<tr>";
    echo "<td>". $wynik[0] ."</td>";
    echo "<td>". $wynik[1] ."</td>";
    echo "<td>". $wynik[2] ."</td>";
    echo "<td class='cena'>". $wynik[3] ."</td>";
    echo "</tr>";
}

mysqli_close($conn);

?>
           </table>
          </div>
            <div id="stopka1">
            <img src="scalak.jpg" alt="promocje na procesory">
            </div>
              <div id="stopka2">
              <h4>Nasz Sklep Komputerowy</h4>
              <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
              </div>
                 <div id="stopka3">
                <p>zadzwoń: 601 602 603</p>
                 </div>
                    <div id="stopka4">
                     <p>Stronę wykonał: 000000000</p>
                    </div>
</body>
</html>