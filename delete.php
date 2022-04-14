<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    
    $sql = "DELETE FROM `radari` WHERE `id`='$id'";

     $result = $con->query($sql);

     if ($result == TRUE) {

        echo "Radar obrisan. Uskoro ćete biti vraćeni na glavnu stranicu.";

    }else{

        echo "Error:" . $sql . "<br>" . $con->error;

    }
    header('Refresh: 3; URL=http://localhost/wp/RADARI/index.html');
} 

?>