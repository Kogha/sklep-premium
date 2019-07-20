<?php 
/* Autor: Maciej "Kogha" Błoński <kogha@onet.pl>
Automatyczny sklep premium bez możliwości dokonania płatności(trzeba taką funkcję dopisać)
plik: system.php
GitHub: https://github.com/Kogha/sklep-premium
*/ 

function checkAccountData($login, $password)
{

    $db_host = ""; //host
    $db_user = ""; //użytkownik
    $db_password = ""; //hasło
    $db_name = ""; //nazwa bazy danych

    $sql = new mysqli($db_host, $db_user, $db_password, $db_name);


    $result = $sql->query("SELECT * FROM uzytkownicy WHERE user='$login' AND password='$password' LIMIT 1");

    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 1)
    {
        $rezultat = 1;
        return $rezultat;
    }
    elseif ($num_rows < 1) 
    {
        $rezultat = "no";
        return $rezultat;
    }
    elseif ($num_rows > 1)
    {
        $rezultat = 2;
        return $rezultat;
    } 

}
