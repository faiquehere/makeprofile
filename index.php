<?php

session_start();
require('connection.php');
// require('header.php');

if(isset($_SERVER['REQUEST_URI']))

{

    $url= $_SERVER['REQUEST_URI'];
$username=explode('?',$url);


$sql="select username from make_profile_users where username='$username[1]'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{

  $showprofile="select * from make_profile_users_link where user_id='$username[1]'";
$result=mysqli_query($con,$showprofile);
$n=mysqli_num_rows($result);
if($n==1)
{
  while($row=mysqli_fetch_assoc($result))
  {
      $facebook=$row['facebook'];
      $twitter=$row['twitter'];
      $instagram=$row['instagram'];
      $github=$row['github'];
      $linkedin=$row['linkedin'];
      $tumblr=$row['tumblr'];
      $email=$row['email'];
      $picture=$row['picture'];

  }
  include('userpage.php');

}



}

else
{
header('location:home.php');
}

    }
?>
