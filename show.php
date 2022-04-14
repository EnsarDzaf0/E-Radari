<?php
    include "connection.php";
    $sql="SELECT * FROM radari";
    $result = mysqli_query($con,$sql);  
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>LOKACIJA</th>";
        echo "<th>VRIJEME</th>";
        echo "<th>OGRANICENJE</th>";
        echo "<th>OPCIJA</th>";
        echo "<th>OPCIJA</th>";
        echo "</tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['lokacija'] . "</td>";
        echo "<td>" . $row['vrijeme'] . "</td>";
        echo "<td>" . $row['ogranicenje'] . "</td>";
        echo "<td> <a style='background-color: #FF8C32;color: white;padding: 8px 10px;opacity: 0.8;'  href='update.php?id=" .$row['id'].  "'>Izmjeni</a> </td>";
        echo "<td> <a style='background-color: #FF8C32;color: white;padding: 8px 10px;opacity: 0.8;'  href='delete.php?id=" .$row['id'].  "'>Izbrisi</a> </td>";
        echo "</tr>";
      }
        echo "<tr>";
        echo "<td><button style='background-color: #FF8C32;color: white;padding: 16px 20px;border: none;cursor: pointer;width: 100%;opacity: 0.8;' onclick='zatvoritabelu()'>Zatvori</button></td>";
   //     echo "<td> <a href='update.php?id=" .$row['id'].  ">Izmjena</a> </td>";
        echo "</tr>";
     
?>

