<?php
    include("config.php");
    if(isset($_POST['submit'])){
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "select * from userdetails where id=$from";
    $query = mysqli_query($conn,$sql);
    $pro1 = mysqli_fetch_assoc($query);

    $sql = "select * from userdetails where id=$to";
    $query = mysqli_query($conn,$sql);
    $pro2 = mysqli_fetch_assoc($query);

    
        //deducting balance from sender account.
        $transfer = $pro1['balance'] - $amount;
        $sql= "update userdetails set balance=$transfer where id=$from";
        mysqli_query($conn,$sql);

        //Adding balance to receiver account.
        $transfer = $pro2['balance'] + $amount;
        $sql= "update userdetails set balance=$transfer where id=$to";
        mysqli_query($conn,$sql);

        //showing Transaction History

        if($amount < 0){
            echo '<script>alert("Amount cannot be negative.")</script>';
        }
        else if($amount == 0){
            echo '<script>alert("Amount cannot be zero")</script>';
        }
        else if($amount > $pro1['balance']){
            echo '<script>alert("Insufficient Balance");</script>';
        }
        else{
            //deducting balance from sender account.
            $transfer = $pro1['balance'] - $amount;
            $sql= "update userdetails set balance=$transfer where id=$from";
            mysqli_query($conn,$sql);
    
            //Adding balance to receiver account.
            $transfer = $pro2['balance'] + $amount;
            $sql= "update userdetails set balance=$transfer where id=$to";
            mysqli_query($conn,$sql);
    
            //showing Transaction History
    
            $sender = $pro1['name'];
            $receiver = $pro2['name'];
            $sql = "insert into transcationdetails (sender,receiver,amount) values('$sender','$receiver','$amount')";
            $query = mysqli_query($conn,$sql);
            if($query){
                echo '<script>alert("Transcation Successfull!");</script>';
                echo '<script>window.location.href="transcationhis.php"</script>';
            }
            $transfer=0;
            $amount=0;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK SYSTEM</title>
    <link rel="stylesheet" href="style3.css">
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
         <h1>TRANSFER MONEY</h1>
         <?php
            include("config.php");
            $sid = $_GET['id'];
            $query = "select * from userdetails where id =$sid";
            $query_run = mysqli_query($conn,$query);
            $rows=mysqli_fetch_assoc($query_run);
        ?>
        <form method="post">
            Name:<br><br><input type="text" value="<?php echo $rows['name'];?>" disabled><br><br>
            Email:<br><br><input type="email" value="<?php echo $rows['emailid'];?>" disabled><br><br>
            Balance:<br><br><input type="text" value="<?php echo $rows['balance'];?>" disabled><br><br>
            To:<br><br><select name="to" class="select" required>
                <option disabled selected>Select another account for transfer</option>
                <?php
                    $sql = "select * from userdetails where id!=$sid";
                    $query_run = mysqli_query($conn,$sql);
                    while($rows=mysqli_fetch_assoc($query_run)){
                ?>
                <option class="option" value="<?php echo $rows['id'];?>"><?php echo $rows['name']?></option>
                        <?php
                    }
                        ?>
            </select><br><br>
            Amount:<br><br><input type="text" name="amount"><br><br>
            <input type="submit" name="submit">
        </form>
    </div>
    <footer>
        <p class="lead2">Designed by Rumeza Shaikh</p>
    </footer>
</body>
</html>