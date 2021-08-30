<?php 
require('connection.php');
require('header.php');
$user_inserted=false;
$pass_check=false;
$err=false;
if(isset($_POST['username']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$passwordc=$_POST['confirm_password'];

if($password==$passwordc)
{

              $sql="select * from make_profile_users where username='$username'";
              $result=mysqli_query($con,$sql);
              $num=mysqli_num_rows($result);
              if($num<=0)
              {
                
                $passwordhash=password_hash($password,PASSWORD_DEFAULT); 
                $sql="insert into make_profile_users(username,password,email)values('$username','$passwordhash','$email')";
                $result=mysqli_query($con,$sql);

                $user_inserted=true;
                $sql2="insert into make_profile_users_link(user_id)values('$username')";
                $result2=mysqli_query($con,$sql2);
              
              }
else{
  $err=true;
}

}

else
{

  $pass_check=true;
  
}

}


?>
<?php
  if($user_inserted==true)
  {

    $pass_check=false;
    header('location:login.php?login');
    
  }

  if($pass_check==true)
  {
    $user_inserted=false;
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Password does not match</strong>
  </div>';  
}

if($err==true)
{
 
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Username already exit!</strong>
</div>';  
}


?>


 
      <div class="container" style="width: 40%;">
  <form class="form-signin mt-3" action="register.php" method="post">
  <div class="text-center ">
    <img class="mb-4" src="images/login.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>
    <p>Already have an account? <a href="login.php">Login.</a></p>
  </div>

  <div class="form-label-group">
      <label for="inputUsername">Username</label>
    <input type="text" id="inputUsername" name="username" class="form-control"  placeholder="Username" required autofocus>
  </div>
  
  <div class="form-label-group mt-2">
      <label for="inputEmail">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control"  placeholder="Email address" required autofocus>
  </div>

    <div class="form-label-group mt-2">
      <label for="inputPassword">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  </div>

  <div class="form-label-group mt-2">
      <label for="inputPassword">Confirm Password</label>
    <input type="password" id="inputPassword" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
  </div>

  
  <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Sign up</button>
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