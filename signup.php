<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's | Table</title>
    <link rel="stylesheet" href="tyle.css">
</head>
<body>
    <?php
        require("connect.php");
        require("index.php")
        $sql="SELECT * FROM myuser";
        $rawResult = mysqli_query($conn,$sql);
    
    ?>

            <?php
                while($row = mysqli_fetch_assoc($rawResult))
            ?>
  
           
        </table>
    </div>
</body>
</html>