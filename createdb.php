<?php
    $dbusername='root';
    $dbpassword='';
    $baza="DzafoRadar";
    $mysql = new PDO("mysql:host=localhost", $dbusername, $dbpassword);
    $pstatement = $mysql->prepare("CREATE DATABASE IF NOT EXISTS $baza");
    if ( $pstatement->execute())
              {
                echo "Baza kreirana!";
            }
          else
               {
                   echo "Greška kod upita!";
            }
    $konekcija = new PDO("mysql:host=localhost;dbname=$baza", $dbusername, $dbpassword);
	$tabela="radari";
	echo "<br/>";
	if($konekcija)
	{
    		$upit = "CREATE TABLE IF NOT EXISTS $tabela 
    		(id int NOT NULL auto_increment,
    		lokacija varchar(25) NOT NULL,
            vrijeme varchar(25) NOT NULL,
            ogranicenje int NOT NULL,
	        PRIMARY KEY (id)) ";

    if ($konekcija->query($upit))
            {
                echo "Tabela kreirana!";
            }
          else
            {
                   echo "Greška kod upita!";
            }
}
else{
    echo "Nema konekcije sa bazom";
}

?>