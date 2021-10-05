<?php
    session_start();

    include("database/connection.php");
    include("middlewares/functions.php");

    $userdata = Auth($con);

?>
<!DOCTYPE html>
<head>
    <title>WebAuth</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Main Page</h1>

    <br>
    <h1>Hello, <?php echo $userdata['username']?>!</h1>
</body>
</html>