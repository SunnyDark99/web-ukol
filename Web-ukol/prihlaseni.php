<?php
include 'pripojeni.php';

$sql = "SELECT * FROM user";         
$uzivatele = mysqli_query($connection, $sql);
$prihlasen ="";
if  ($_POST['jmeno_prihlaseni'] != "" && $_POST['heslo_prihlaseni'] != "" ){          
        
        while ($user = mysqli_fetch_array($uzivatele)){ 
            if ($user['jmeno'] == $_POST['jmeno_prihlaseni'] && $user['heslo'] == md5($_POST['heslo_prihlaseni'] )){
                $prihlasen = $user['jmeno'];
            }  
        }  
}
if($prihlasen == ""){
    echo "Jmeno nebo heslo je špatně <br>";
    echo "<a href='index.php'><button>Zkusit znovu </button> </a>";
}else{
    echo "Přihlášen: <b>".$prihlasen."<b>";
    echo "<form method='get' action='index.php'>";
    echo "<button name='prihlaseny_uzivatel' value=".$prihlasen.">Super!</button>";
    echo "</form>";
}
?>