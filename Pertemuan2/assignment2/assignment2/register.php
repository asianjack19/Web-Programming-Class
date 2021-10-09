<?php
    session_start();

    include("database/connection.php");
    include("middlewares/functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        
        if (!empty($name) && !empty($password))
        {
            if(strlen($name) < 5 && strlen($password)<6 )
            {
                echo "<script>
                alert('Please input valid length 😥');
                window.location.href='register.php';
                </script>";
                return;
            }
            $query = "insert into users (name,password,email,address) values ('$name','$password','$email','$address')";
            mysqli_query($con,$query);
            header("Location:login.php");
        }
    }

?>

<!DOCTYPE html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
        <div id="box">
            <form method="POST">
                <div style="text-align: center; margin: auto;">
                    <h1>Register</h1>
                </div>
                <input class="text" type="text" name="name" placeholder="Input your name">
                <input class="text" type="text" name="email" placeholder="Input your email">
                <input class="text" type="text" name="address" placeholder="Input your address">
                <input class="text" type="password" name="password" placeholder="Input your password">
                <input id="button" type="submit" value="Register">
                <a href="login.php">Have an account? Login</a>
            </form>
        </div>
    </div>
</body>
</html>