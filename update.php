<?php 

    include "connection.php";

    
    if (isset($_POST['izmjena'])) {
        $lokacija = $_POST['location'];
        $vrijeme = $_POST['time'];
        $ogranicenje = $_POST['limit'];
        $id = $_POST['id'];

        $sql = "UPDATE `radari` SET `lokacija`='$lokacija',`vrijeme`='$vrijeme',`ogranicenje`='$ogranicenje' WHERE `id`='$id'"; 
        $result = $con->query($sql); 

        if ($result == TRUE) {

            echo '<script>alert("Podaci o radaru uspješno izmjenjeni. Klikom na OK će vas vratiti na glavnu stranicu.")</script>';
            header('Refresh: 1; URL=http://localhost/wp/RADARI/E-Radari/index.html');

        }else{

            echo "Error:" . $sql . "<br>" . $con->error;

        }

    } 

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
        <body style = "display: flex;align-items: center;justify-content: center;">
            <form action="" class="forma-unos" style="width:50%;" method="post">
                <h1>Izmjena radara:</h1>

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <label for="location"><b>Lokacija</b></label>
                <input type="text" placeholder="Unesite lokaciju" name="location" id="location" required value="<?php echo $lokacija; ?>">

                <label for="limit"><b>Ogranicenje</b></label>
                <input type="text" placeholder="Unesite ogranicenje" name="limit" id="limit" required value="<?php echo $ogranicenje; ?>">

                <label for="time"><b>Vrijeme</b></label>
                <input type="time" name="time" id="time" required value="<?php echo $vrijeme; ?>">

                <button type="submit" class="dugme" name="izmjena">Izmjeni</button>
            </form>
            </body>
            </html>

<?php
    } else{ 

        header('Location: index.html');
    } 
}

?> 