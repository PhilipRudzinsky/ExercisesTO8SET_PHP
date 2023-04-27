<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T084</title>
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
<h1>Zadanie T084</h1>
<p>Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze niebieskim.</p>
<form method="post">
    <label for="a">Podaj liczbe a</label>
    <input type="number" name="a"> <br>

    <label for="b">Podaj liczbe b</label>
    <input type="number" name="b"> <br>


    <button name="submit">WYŚLIJ</button> <br>
</form>
<?php
function wartosc($a,$b)
{
    if($a>$b)
    {
        echo '<span style="color:#00ff00;text-align:center;">',$a ,"<br> ",'</span>', '<span style="color:#FF0000;text-align:center;">', $b,'</span>';
    }
    else if($a==$b)
    {
        echo '<span style="color:#0000FF;text-align:center;">',$a ,"<br> ", $b,'</span>';
    }
    else
    {
        echo '<span style="color:#FF0000;text-align:center;">',$a ,"<br> ",'</span>', '<span style="color:#00ff00;text-align:center;">', $b,'</span>';
    }

}

if(isset($_POST["submit"]))
{
    $c=$_POST["a"];
    $d=$_POST["b"];
    wartosc($c,$d);
}


?>
</body>
</html>
