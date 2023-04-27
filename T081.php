<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T081</title>
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
<h1>Zadanie T081</h1>
<p>Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora warunkowego "?" (wariant 2).</p>
<form method="post">
    <label for="a">Wartość A</label>
    <input type="number" name="a"> <br>

    <button name="submit">WYŚLIJ</button> <br>
</form>
<?php
    function wartosc1($a)
{
    return ($a>0) ? $a : $a*-1;
}
function wartosc2($c)
{
    if($c>=0)
    {
        return $c;
    }
    else return $c*-1;
}
    if(isset($_POST["submit"]))
    {
        $b=$_POST["a"];
        echo "Wariant 1: ", wartosc1($b), "<br>";
        echo "Wariant 2: ", wartosc2($b);
    }


?>
</body>
</html>
