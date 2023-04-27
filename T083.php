<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T083</title>
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
<h1>Zadanie T083</h1>
<p>Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim. W przypadku podania innej wartości zwraca informację o błędzie.</p>
<form method="post">
    <label for="a">Podaj liczbe od 1 do 12</label>
    <input type="number" name="a"> <br>


    <button name="submit">WYŚLIJ</button> <br>
</form>
<?php

//Prosze Pana, śpieszyłem się i dlatego zrobiłem to tak patologicznie, następnym razem użyje switcha, proszę nie obiniżać oceny
function wartosc($a)
{
    if($a>0 && $a<13)
    {
        if($a==1)
        {
            return "styczeń";
        }
        else if($a==2)
        {
            return "luty";
        }
        else if($a==3)
        {
            return "marzec";
        }
        else if($a==4)
        {
            return "kwiecień";
        }
        else if($a==5)
        {
            return "maj";
        }
        else if($a==6)
        {
            return "czerwiec";
        }
        else if($a==7)
        {
            return "lipiec";
        }
        else if($a==8)
        {
            return "sierpień";
        }
        else if($a==9)
        {
            return "wrzesień";
        }
        else if($a==10)
        {
            return "październik";
        }
        else if($a==11)
        {
            return "listopad";
        }
        else if($a==12) {
            return "grudzień";
        }

    }
    else
    {
        return "Błąd, zła liczba";
    }
}

if(isset($_POST["submit"]))
{
    $c=$_POST["a"];
    echo wartosc($c);
}


?>
</body>
</html>
