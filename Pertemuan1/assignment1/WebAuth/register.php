<?php
    session_start();

    include("database/connection.php");
    include("middlewares/functions.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
       $username = $_POST['username'];
       $password = $_POST['password'];
       
 
        if (!empty($username) && !empty($password))
        {
            if(strlen($username) < 5 && strlen($password)<6 )
            {
                echo "INVALID!";
                return;
            }
            $query = "insert into users (username,password) values ('$username','$password')";
            
            mysqli_query($con,$query);

            $filename = "docs/data.txt";
            $text = "Username: ".$username.", Password: ".$password."\n";
            $fh = fopen($filename, "a");
            fwrite($fh, $text);
            fclose($fh);
            header("Location:login.php");
            die;
        }
   }

?>

<!DOCTYPE html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <div class="main">
        <div id="box">
            <form method="POST">
                <div style="text-align: center; margin: auto;">
                    <h1>Register</h1>
                </div>
                <input id="text" type="text" name="username">
                <input id="text" type="password" name="password">
                <input id="button" type="submit" value="Register">
                <a href="login.php">Login</a>
            </form>
        </div>
    </div>
</body>
</html>