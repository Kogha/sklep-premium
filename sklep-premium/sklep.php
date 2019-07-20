<?php 
/* Autor: Maciej "Kogha" Błoński <kogha@onet.pl>
Automatyczny sklep premium bez możliwości dokonania płatności(trzeba taką funkcję dopisać)
plik: sklep.php
GitHub: https://github.com/Kogha/sklep-premium
*/

include 'system-logowania.php';

$login = $_POST['login'];
?>

<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <center>
        <div class="container">
            <div id="header"><p><h1>Zakup punktów premium</h1></p></div>
            <div class="rectangle">
            <form action="request_pay.php" method="POST">

            <p class="text"> Wybierz ilość punktów i metodę płatności. </p>

            <input type="hidden" name="nick" value="<?php echo $login; ?>">

            <select name="punkty" class="wybor">
                <option value="10"> 10 punktów premium (5zł) </option>
                <option value="20"> 20 punktów premium (10zł) </option>
                <option value="100"> 100 punktów premium (50zł) </option>
            </select><br />

            <select name="method_pay" class="wybor">
                <option value="sms"> SMS </option>
            </select><br />

            <input type="hidden" name="login" value="<?php echo $login;?>">

            <input type="submit" class="przycisk" value="Doładuj konto">

            </form>
            </div>
        </div>
    </body>
