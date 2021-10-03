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
            if(strlen($username) < 5 || strlen($password)<6 )
            {
                echo "Username/Password length is not sufficient";
                return;
            }

            $query = "select * from users where username = '$username' limit 1";
            $result = mysqli_query($con,$query);

            if ($result && mysqli_num_rows($result) > 0)
            {
                $userdata = mysqli_fetch_assoc($result);
                
                if ($userdata['password'] === $password)
                {
                    $_SESSION['id'] = $userdata['id'];
                    header("Location:index.php");
                    die;
                }
            }
            echo "Username/Password is invalid!";
        }
        else
        {
            echo "Username/Password cannot be empty!";
        }
   }
?>

<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>

    <div class="main">
        <div id="box">
            <form method="POST">
                <div style="text-align: center; margin: auto;">
                    <h1>Login</h1>
                </div>
                <input id="text" type="text" name="username">
                <input id="text" type="password" name="password">
                <input id="button" type="submit" value="Login">
                <a href="register.php">Register</a>
            </form>
        </div>
    </div>
</body>
</html>