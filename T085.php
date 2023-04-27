<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T085</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td width="205" valign="top">
            <p>Imiê i nazwisko:</p>
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
            <p>Filip Rudziñski</p>
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
<h1>Zadanie T085</h1>
<p>Napisz funkcjê, która dla dwóch liczb ca³kowitych wyœwietla ich wspólny dzielnik (przypomnij sobie algorytm Euklidesa).</p>
<form method="post">
    <label for="a">Podaj liczbe od 1 do 12</label>
    <input type="number" name="a"> <br>

    <label for="b">Podaj liczbe od 1 do 12</label>
    <input type="number" name="b"> <br>


    <button name="submit">WYŒLIJ</button> <br>
</form>
<?php
function wartosc($a,$b)
{
    for(;;)
    {
        if($a%$b==0)
        {
            return $b;
            break;
        }
        else
        {
            $c=$a%$b;
            $a=$b;
            $b=$c;
        }
    }

}

if(isset($_POST["submit"]))
{
    $c=$_POST["a"];
    $d=$_POST["b"];
    echo "NWD = ", wartosc($c,$d);
}


?>
</body>
</html>
