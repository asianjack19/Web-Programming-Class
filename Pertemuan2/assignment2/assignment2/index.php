<?php
    session_start();
    include("database/connection.php");
    include("middlewares/functions.php");

    $userdata = Auth($con);

    $query = "SELECT id, name, email, address FROM users";
    $result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<head>
    <title>WebAuth</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <div style="text-align: center">
        <a href="logout.php" >Logout</a>
    </div>

<div class="jumbotron jumbotron-fluid bg-primary">
  <div class="container">
    <h1 class="display-4">All Active Users in the Database</h1>
  </div>
</div>

<table class="table bg-light">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
        if($result){
            while ($row = mysqli_fetch_assoc($result)) {
                echo"
                <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['address']}</td>
                </tr>";
            }
        }
      ?>
    </tr>
  </tbody>
</table>
</body>
</html>