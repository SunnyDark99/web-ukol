<?php
session_start();
include 'pripojeni.php';

if  (isset($_POST['odhlasit'])){
          session_unset();
    }

if  (isset($_GET['prihlaseny_uzivatel'])){
    
    echo "Přihlášen: <b>".$_GET['prihlaseny_uzivatel']."</b>";
    $_SESSION["user"] = $_GET['prihlaseny_uzivatel'];
    
    echo "<form method='post' action='index.php'>";
    echo "<button name='odhlasit'>Odhlásit</button>";
    echo "</form>";
    echo "<hr>"; 
}

$sql = "SELECT * FROM user";         
$zaznamy = mysqli_query($connection, $sql);
echo "<h1>Seznam uživatelů</h1>";

while ($jmeno = mysqli_fetch_array($zaznamy)){
    echo $jmeno['jmeno']."<br>";
}
echo "<hr>";
?>

<h2>Přihlášení</h2> <br>
<form method="post" action="prihlaseni.php">
    
    Jméno: <input type="text" name="jmeno_prihlaseni" > <br>
    Heslo: <input type="password" name="heslo_prihlaseni" > <br>
    <button>Přihlásit</button> <br> 
</form>
<hr>

<h2>Registrace nového uživatele</h2> <br>
<form method="post" action="novy_uzivatel.php">
    
    Jméno: <input type="text" name="jmeno_registrace" > <br>
    Heslo: <input type="text" name="heslo_registrace" > <br>
    <button>Zaregistrovat</button> <br> 
</form>

