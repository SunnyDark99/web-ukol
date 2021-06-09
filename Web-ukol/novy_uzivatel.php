<?php
include 'pripojeni.php';
$exist = 0;
$sql = "SELECT * FROM uzivatel"; 
$uzivatele = mysqli_query($connection, $sql);

if  ($_POST['jmeno_registrace'] != "" && $_POST['heslo_registrace'] != "" ){      
         
    while ($uzivatel = mysqli_fetch_array($uzivatele)){
        if ($uzivatel['jmeno'] == $_POST['jmeno_registrace']){
            echo "Uživatel s tímto jménem už existuje.<br>";
            echo "<a href='index.php'><button>Zkusit znovu </button> </a>";
            $exist =1;
            break;   
        }
    }
    if($exist==0){
        $sql = "INSERT INTO uzivatel (jmeno, heslo)
        VALUES('".$_POST['jmeno_registrace']."', '".md5($_POST['heslo_registrace'])."')";
        mysqli_query($connection, $sql);    
        echo "Registrace dokončena pro jméno:<b> ".$_POST['jmeno_registrace']."</b> <br>";
        echo "<a href='index.php'><button>Přihlásit se</button> </a>";
    }    
      
}else{
    echo "Nezadáno jméno nebo heslo. <br>";
    echo "<a href='index.php'><button>Zkusit znovu </button> </a>";
}
?>


