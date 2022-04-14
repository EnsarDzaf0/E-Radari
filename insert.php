<?php
    

    include "connection.php";
    $location=$_POST['location']; 
    $limit=$_POST['limit']; 
    $time=$_POST['time'];
    
    $sql = "INSERT INTO `radari` (`id`, `lokacija`, `vrijeme`, `ogranicenje`) 
    VALUES (NULL, '$location', '$time', '$limit')";

  $execute=mysqli_query($con,$sql);
  if($execute==true)
  {
    echo '<script>alert("Uspješno ste unijeli radar!")</script>';
  }
  else{
    echo  "Error: " . $sql . "<br>" . mysqli_error($con);
  }

  header('Refresh: 1; URL=http://localhost/wp/RADARI/index.html');
?>
