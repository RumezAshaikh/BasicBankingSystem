<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK SYSTEM</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <h1>GEMINI BANK</h1>
    <nav>
        <ul>
            <li> <a href="index.php" >Home</a></li>
            <li> <a href="#" >Contact</a></li>
        </ul>
    </nav>
    <div class="home">
         <h1>TRANSFER HISTORY</h1>
         <table>
            <tr>
                    <td>ID</td>
                    <td>Sender</td>
                    <td>Receiver</td>
                    <td>Amount</td>
                    <td>Transcation Date</td>
            </tr>
            <?php
                $sql = "select * from transcationdetails";
                $result = mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_assoc($result)){
            ?>
            
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['sender'];?></td>
                <td><?php echo $rows['receiver'];?></td>
                <td><?php echo $rows['amount'];?></td>
                <td><?php echo $rows['transcationdate'];?></td>
            </tr>
            <?php
        }
        ?>
    </div>
    <footer>
        <p class="lead2">Designed by Rumeza Shaikh</p>
    </footer>
</body>
</html>