<?php
    session_start();

    include("database/connection.php");
    include("middlewares/functions.php");

    $isError = false;
    $errorMessage = "";
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        
        if (!empty($name) && !empty($password))
        {
            if(strlen($name) < 5 || strlen($password)<6 )
            {
                echo "<script>
                        alert('Invalid 😅');
                        window.location.href='login.php';
                    </script>";
            }

            $query = "select * from users where name = '$name' limit 1";
            $result = mysqli_query($con,$query);

            if ($result && mysqli_num_rows($result) > 0)
            {
                $userdata = mysqli_fetch_assoc($result);
                
                //Login success
                if ($userdata['password'] === $password)
                {
                    $_SESSION['id'] = $userdata['id'];
                    header("Location:index.php");
                    return;
                }
            }
            echo "<script>
                        alert('Oops, something\'s happened 😥');
                        window.location.href='login.php';
                    </script>";
        }
        else
        {
            echo "<script>
                        alert('Cannot be empty 😡');
                        window.location.href='login.php';
                    </script>"; 
        }
    }
?>

<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

    <div class="main" >
        <div id="box">
            <form method="POST"> 
                <div style="text-align: center; margin: auto;">
                    <h1>Login</h1>
                </div>
                <input class="text" type="text" name="name" placeholder="Input your name">
                <input class="text" type="password" name="password" placeholder="Input your password">
                <input id="button" type="submit" value="Login">
                <a href="register.php">Don't have an account? Register</a>
            </form>
        </div>
    </div>
</body>
</html>