<?php 
/* Autor: Maciej "Kogha" Błoński <kogha@onet.pl>
Automatyczny sklep premium bez możliwości dokonania płatności(trzeba taką funkcję dopisać)
plik: index.php
GitHub: https://github.com/Kogha/sklep-premium
*/
session_start();

include 'system-logowania.php';


if (isset($_POST['login']))
{
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $wynik = checkAccountData($login, $password);

    if ($wynik == 1)
    {
        header('Location: konto.php');
        exit;
    }
    else 
    {
        echo '<center><span style="color: red"> Nie ma takiego użytkownika w bazie danych!</span></center>';
        echo '<head><meta http-equiv="refresh" content="2; URL=index.php"></head>';
    }

}    

?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body>
        <center>
            <div class="container">
                <div id="header">
                    <p><h1>Sklep Premium</h1></p> 
                </div>

                <div class="rectangle">
                    <form action="" method="post">
                        <input type="text" name="login" class="login" placeholder="Podaj login" /> <br /> <br />
                        <input type="password" name="password" class="login" placeholder="Podaj hasło" /> <br /> <br />
                        <input type="submit" class="przycisk" value="Zaloguj się" />
                    </form>
                </div>
            </div>
    </body>
</html>
