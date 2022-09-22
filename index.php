<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obed's | Exam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
            require("connect.php");

            function addUser($conn, $first, $last, $email, $uid, $pwd){
                $check = "SELECT first from myuser where email='$email'";
                $checkResult =  mysqli_query($conn,$check);
                if(mysqli_num_rows($checkResult) > 0){
                    echo "User Already Exists";
                }
                else{
                    $sql = "INSERT INTO myuser(
                        first,
                        last,
                        email,
                        username, 
                        password
                    ) VALUES(
                        '$first',
                        '$last',
                        '$email',
                         '$uid',
                         '$pwd'
                    )";
                    $smt = mysqli_query($conn, $sql);
                    if($smt){
                        echo " welcome $first";
                        // header('location: index.php');
                    }
                    else{
                        echo "Failure" .  mysqli_error($conn);
                    }
                }  
            }
    
    
    
    
            
            if(isset($_POST["btn"])){
                $first = $_POST["first"];
                $last = $_POST["last"];
                $email = $_POST["email"];
                $uid = $_POST["uid"];
                $pwd = $_POST["pwd"];
            
                addUser($conn, $first, $last, $email, $uid, $pwd);
                
            }
    
    ?>

    <div class="container">
        <h2>SIGN UP</h2>
        <form class="input" action="index.php" method="POST">
            <input type="text"  name="first" placeholder="Enter your First Name" required>
            <input type="text"  name="last" placeholder="Enter your Last Name" required>
            <input type="email"  name="email" placeholder="Enter your Email" required>
            <input type="text"  name="uid" placeholder="Enter preferred Username" required>
            <input type="password"  name="pwd" placeholder="Enter Password" required>
            <button class="btn" name="btn" >Sign Up</button>
        </form>
    </div>
   
</body>
</html>