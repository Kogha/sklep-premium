<?php 
/* Autor: Maciej "Kogha" Błoński <kogha@onet.pl>
Automatyczny sklep premium bez możliwości dokonania płatności(trzeba taką funkcję dopisać)
plik: konto.php
GitHub: https://github.com/Kogha/sklep-premium
*/
session_start();
require_once 'connect.php';


$login = $_SESSION['login'];
$password = $_SESSION['password'];

$sql = new mysqli($db_host, $db_user, $db_password, $db_name);
$result = $sql->query("SELECT * FROM uzytkownicy WHERE user='$login' AND password='$password'");
$wiersz = $result->fetch_assoc();

$email = $wiersz['email'];
$punkty = $wiersz['punkty'];
$data = $wiersz['premium'];


?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <center>
        <div class="container">
            <div id="header"><p><h1>Konto</h1></p></div>
            <div class="rectangle">
                <?php   echo "<p><span style='color: #ffffff;'>Witaj ponownie, ".$login."!</span></p>"; 
                        echo "<p><span style='color: #ffffff;'>Dostępne punkty premium: ".$punkty."</span></p>";
                        echo "<p><span style='color: #ffffff;'>Konto premium aktywne do: ".$data."</span></p>" ?>
                <br />
                    <form action="sklep.php" method="post">
                    <input type="hidden" name="login" value="<?php echo $login; ?>">
                    <input type="submit" class="przycisk" name="do_platnosci" value="Doładuj konto">
                    </form>
                <br /><a href="http://www.koghadev.pl">Wyloguj się</a>
            </div>
        </div>
    </body>
