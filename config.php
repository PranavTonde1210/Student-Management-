<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="student";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    //echo "Connection Ok";
}
else
{
    echo "Connection failed";
}
?>