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
    <link rel="stylesheet" href="style2.css">
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
         <h1>VIEW CUSTOMER</h1>
         <table>
            <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone no</td>
                    <td>Balance</td>
                    <td>Account Created</td>
                    <td>Transcation</td>
            </tr>
            <?php
                $sql = "select * from userdetails";
                $result = mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_assoc($result)){
            ?>
            
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['emailid'];?></td>
                <td><?php echo $rows['phoneno'];?></td>
                <td><?php echo $rows['balance'];?></td>
                <td><?php echo $rows['doj'];?></td>
                <td><a href="trans.php?id=<?php echo $rows['id'];?>">Transfer</a></td>
            </tr>
            <?php
        }
        ?>
        </table>

    </div>
      
    <footer>
        <p class="lead2">Designed by Rumeza Shaikh</p>
    </footer>
</body>
</html>
