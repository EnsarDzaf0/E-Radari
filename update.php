<?php 

    include "connection.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
        $sql = "SELECT * FROM `radari` WHERE `id`='$id'";
        $result = $con->query($sql); 
        if ($result->num_rows > 0) {        
            while ($row = $result->fetch_assoc()) {
                $lokacija = $row['lokacija'];
                $vrijeme = $row['vrijeme'];
                $ogranicenje = $row['ogranicenje'];
                $id = $row['id'];
            } 
?>
        <html>
        <head>
        <style>
        <?php include 'index.css'; ?>
        body{

        }
        </style>
        </head>
        <body>
            <form action="./insert.php" class="forma-unos" style="width:50%;" method="post">
                <h1>Izmjena radara:</h1>

                <label for="location"><b>Lokacija</b></label>
                <input type="text" placeholder="Unesite lokaciju" name="location" id="location" required>

                <label for="limit"><b>Ogranicenje</b></label>
                <input type="text" placeholder="Unesite ogranicenje" name="limit" id="limit" required>

                <label for="time"><b>Vrijeme</b></label>
                <input type="time" name="time" id="time" required>

                <button type="submit" class="dugme" name="unesi" id="unesi">Unesi</button>
            </form>
            </body>
            </html>

<?php
    } else{ 

        header('Location: view.php');
    } 
}

?> 