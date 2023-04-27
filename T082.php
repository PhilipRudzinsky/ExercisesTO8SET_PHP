<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T082</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td width="205" valign="top">
            <p>Imię i nazwisko:</p>
        </td>
        <td width="205" valign="top">
            <p>Klasa/grupa:</p>
        </td>
        <td width="205" valign="top">
            <p>Data:</p>
        </td>
    </tr>
    <tr>
        <td width="205" valign="top">
            <p>Filip Rudziński</p>
        </td>
        <td width="205" valign="top">
            <p>3pir/2</p>
        </td>
        <td width="205" valign="top">
            <p>23.11.2022</p>
        </td>
    </tr>
    </tbody>
</table>
<h1>Zadanie T082</h1>
<p>Napisz funkcję, której wynikiem będzie podniesienie wartości przekazanego jej poprzez referencję argumentu do potęgi przekazanej również jako argument. Funkcja zwraca wartość i wyświetla wynik w postaci (np. dla wartości 2 i 3):</p>
<form method="post">
    <label for="a">Wartość A</label>
    <input type="number" name="a"> <br>

    <label for="b">Wartość B</label>
    <input type="number" name="b"> <br>

    <button name="submit">WYŚLIJ</button> <br>
</form>
<?php
function wartosc($a,$b)
{
    return pow($a,$b);
}

if(isset($_POST["submit"]))
{
    $c=$_POST["a"];
    $d=$_POST["b"];
    echo "x = ",$c,"<br>y = ",$d,"<br>a<sup>b</sup>=",$c,"<sup>",$d,"</sup>= ", wartosc($c,$d);

}


?>
</body>
</html>
