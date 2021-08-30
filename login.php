<?php 
session_start();
require('header.php');

if(isset($_SESSION['login']))
 
{
header("location:user_dashboard.php");
exit;

}
if(isset($_SESSION['admin']))
{
  header("location:admin_dashboard.php");
  
  exit;
}

require('connection.php');


$show_error=false;
$login_er=false;
$login=false;
$user_not_found=false;
if(isset($_POST['username']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
$sql="select *from make_profile_users where username='$username'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);

if($num==1)
{
  while($r=mysqli_fetch_assoc($result))
  {
    if(password_verify($password,$r['password']))
    {
 

      $_SESSION['login']=true;
      $_SESSION['username']=$username;
    header('location:user_dashboard.php');
        
  }
  else
  {
    $show_error=true;
  }
}
  }

if(!$num==1)
  {
$user_not_found=true;
  }
}



if($show_error==true)
{
$login_er=false;
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Invalid details.</strong>

  </div>';

}

if(isset($_GET['login_err']))
{
 $login_er=true;
  
}

if($login_er==true)
{
  echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Please Login.</strong>
  </div>';

}

if($user_not_found==true)
{
  echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>User not found.</strong>
  </div>';

}

if(isset($_GET['login']))
{
 $login=true;
  
}

if($login==true)
{
  echo '<div  class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your account has been created. Now you can login</strong>
  </div>';

}


?>

    




      <div class="container" style="width: 40%;">
  <form class="form-signin mt-5" action="login.php" method="post">
  <div class="text-center mb-4">
    <img class="mb-4" src="images/login.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <p>Don't have a login? <a href="register.php">Sign up</a></p>
  </div>

  <div class="form-label-group">
      <label for="inputUser">Email address</label>
    <input type="text" id="inputUser" name="username" class="form-control" placeholder="Username" required autofocus>
  </div>

  <div class="form-label-group mt-3">
      <label for="inputPassword">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  </div>

  
  <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; Make Profile <?php echo date("Y"); ?></p>
</form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>