<?php
function CheckLogin($con)
{
    if (isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $query = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0)
        {
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
        }
    }

    header("Location:login.php");
    die;
}

function GenerateRandom($length)
{
    $text = "";
    if($length < 8)
    {
        $length = 8;
    }
    $len = rand(7, $length);
    for($i=0; $i<$len; $i++)
    {
        $text .= rand(0,9);
    }

    return $text;

}