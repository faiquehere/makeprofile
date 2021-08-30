<?php 
session_start();
if(!isset($_SESSION['username']))
{
header("location:login.php?login_err");
}
require('connection.php');

require('header.php');


$username=$_SESSION['username'];

if(isset($_POST['submit']))
{
  
$picture_url=$_POST['picture_url'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$instagram=$_POST['instagram'];
$github=$_POST['github'];
$linkedin=$_POST['linkedin'];
$tumblr=$_POST['tumblr'];
$email=$_POST['email'];

$insert_query="update make_profile_users_link set 
picture='$picture_url',

facebook='$facebook',

twitter='$twitter',

instagram='$instagram',

github='$github',

linkedin='$linkedin',

tumblr='$tumblr',

email='$email'

where user_id='$username'";

$result=mysqli_query($con,$insert_query);
if($result)
{

  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Your profile has been updated.</strong> 
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  </div>";
}
else
{
  echo "error".mysqli_error($con);
}

}


?>
<div class="container" style="width: 40%;">
  <form class="form-signin mt-4" action="user_dashboard.php" method="post">
  <div class="text-center ">
    <h1 class="h3 mb-3 font-weight-normal">Dashboard</h1>
    <p>Set your social links </p>
  </div>
  <?php

  $show="select * from make_profile_users_link where user_id='$username'";
  $result=mysqli_query($con,$show);
$num_rows=mysqli_num_rows($result);
  if($num_rows)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      $picture_url_show=$row['picture'];
      $facebook_show=$row['facebook'];
    
      $twitter_show=$row['twitter'];
      $instagram_show=$row['instagram'];
      $github_show=$row['github'];
      $linkedin_show=$row['linkedin'];
      $tumblr_show=$row['tumblr'];
      $email_show=$row['email'];
    }
  }

  ?>


  <div class="form-label-group mt-1">
  <label for="picture">Display Picture</label>
    <input type="url" id="picture_url" name="picture_url" class="form-control" value="<?php  echo $picture_url_show;?>" placeholder="Enter your direct picture link" >
  </div>
  
  <div class="form-label-group mt-1">
  <label for="facebook">Facebook</label>
    <input type="text" id="facebook" name="facebook" class="form-control" value="<?php echo   $facebook_show;?>" placeholder="Facebook username" >
  </div>
  
  <div class="form-label-group mt-1">
  <label for="twitter">Twitter</label>
    <input type="text" id="twitter" name="twitter" class="form-control" value="<?php echo   $twitter_show;?>" placeholder="Twitter username" >
  </div>
  
  <div class="form-label-group mt-1">
  <label for="instagram">Instagram</label>
    <input type="text" id="instagram" name="instagram" class="form-control" value="<?php echo   $instagram_show;?>" placeholder="Instagram username" >
  </div>

  <div class="form-label-group mt-1">
  <label for="github">Github</label>
  <input type="text" id="github" name="github" class="form-control" value="<?php echo  $github_show;?>" placeholder="Github username" >
  </div>

  <div class="form-label-group mt-1">
  <label for="linkedin">Linkedin</label>
    <input type="text" id="linkedin" name="linkedin" class="form-control" value="<?php echo   $linkedin_show;?>" placeholder="Linkedin username">
  </div>
  
  <div class="form-label-group mt-1">
  <label for="tumblr">Tumblr</label>
    <input type="text" id="tumblr" name="tumblr" class="form-control" value="<?php echo    $tumblr_show;?>" placeholder="Tumblr username" >
  </div>
  
  <div class="form-label-group mt-1">
  <label for="email">Email address</label>  
  <input type="email" id="email" name="email" class="form-control" value="<?php echo    $email_show; ?>" placeholder="Email" >
  </div>
  


  
  <button class="btn btn-lg btn-primary btn-block mt-2" type="submit" name="submit">Make Profile</button>
  <p class="mt-2 mb-3 text-muted text-center">&copy; Make Profile <?php echo date("Y"); ?>  </p>
</form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>