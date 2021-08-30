<?php

$con=mysqli_connect("localhost","root","","make_profile");

if($con)
{
    // echo "connected";
}
else 
{
    die("not connected". mysqli_connect_error());
}

?>