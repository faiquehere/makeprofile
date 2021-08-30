<?php

session_start();
require('connection.php');
require('header.php');

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
}



}

else
{
    header('location:login.php');
}

    

}
?>
<style>
    .fa {
      padding: 5px;
      font-size: 30px;
      width: 50px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 50%;
    }
    
    .fa:hover {
 border-radius: 2px;
        text-decoration: none;
        color:white;
    }
    
    <?php
if(!empty($twitter))
{    
   echo
   " .fa-twitter {
      background: #55ACEE;
      color: white;
    }
    ";
  }
  if(!empty($facebook))
  {
    echo
    "  
  .fa-facebook {
    background: #005ea6;
    color: white;
    }
    ";
  }

  if(!empty($linkedin))
  {
    echo
    "  
    .fa-linkedin {
      background: #007bb5;
      color: white;
    }
    ";
  }
   if(!empty($instagram))
   { 
   echo
   "
    .fa-instagram {
      background: #125688;
      color: white;
    }
    ";
  }
    
    if(!empty($tumblr))
    {
      echo
      "
    .fa-tumblr {
      background: #2c4762;
      color: white;
    }
    ";
  }
   if(!empty($github))
   { 
    echo"
    .fa-github {
      background: #2c4762;
      color: white;
    }
    ";
  }
    if(!empty($email))
    {
      echo"
    .fa-envelope
    {
        background-color: yellow;
        color: white;
    }
    ";
  }
    ?>
*
{
    margin: 0;
    padding: 0;
}

#contain
{
    padding: 40px;
}

#footer {
  color: #777;
  margin-bottom: 50px;
  font: 1.3em/1.6 "Lato", Helvetica Neue, Helvetica, Arial, sans-serif;
  text-shadow: 0 0 1px #fff;
  margin-top: 10px;
  text-align: center;
}

<?php
if(empty($picture))
{
  echo ".profile
  {
  
    width: 120px;
    height: 80px;
    border-radius: 50%;
    background: #512DA8;
    font-size: 85px;
    color: #fff;
    text-align: center;
    line-height: 80px;
    margin: 10px 0;
    /* padding: 20px; */
  }";
}
?>



    </style>



  <?php 

echo'
    <div id="contain" class="container d-flex justify-content-center  bg-light">

        
    <div class="card" style="width: 30rem; height:13rem">

        <!-- <img class="card-img-top rounded-circle" src="img/faique.JPG" width="90"  height="200" alt="Card image cap"> -->
        <div class="card-body  ">
            <div class="d-flex justify-content-center">
        ';if(!empty($picture))
        {

        echo"<img src='$picture' class='rounded-circle'  width='100' height='100px' alt='Profile Picture'>";
        }
        if(empty($picture))
        {
          $defaultpicture=$username[1];
        echo"
        <div class='profile'>
       ".ucfirst(substr($defaultpicture,0,1))."</div>
          ";
        }
        echo'
            </div>
            
         <div class=" d-flex justify-content-center mt-2"> 
      ';   
         if(!empty($facebook))
         {
          $facebook2="https://facebook.com/".$facebook;
         
           echo
           "<a href='$facebook2' class='fa fa-facebook' target='_blank'></a>";

         } 
         
         if(!empty($github))
         {

          $github2="https://github.com/".$github;
         
          echo
           "<a href='$github2' class='fa fa-github' target='_blank'></a>";

         } 

         if(!empty($twitter))
         {
          $twitter2="https://twitter.com/".$twitter;
   
          echo
           "<a href='$twitter2' class='fa fa-twitter' target='_blank'></a>";

         } 
         if(!empty($instagram))
         {
          $instagram2="https://instagram.com/".$instagram;
          
          echo
           "<a href='$instagram2' class='fa fa-instagram' target='_blank'></a>";

         } 
         if(!empty($linkedin))
         {
          $linkedin2="https://linkedin.com/in/".$linkedin;
        
          echo
           "<a href='$linkedin2' class='fa fa-linkedin' target='_blank'></a>";

         } 
         if(!empty($tumblr))
         {
          $tumblr2="https://".$tumblr.".tumblr.com";
          
          echo
           "<a href='$tumblr2' class='fa fa-tumblr' target='_blank'></a>";

         } 
      
         if(!empty($email))
         {
          $email2="mailto:".$email;
 
          echo
           "<a href='$email2' class='fa fa-envelope' target='_blank'></a>";

         } 
      
      
      
      ?>

        </div>
        </div>
      </div>
    </div>

    

    <footer id="footer" class="footer text-center mt-2 ">
        &copy; 2021  <?php echo ucfirst($username[1])?>
        </br>
        <?php
       
        if(isset($_SESSION['username']))
        {
        
        echo"<a href='download.php?$username[1]' download data-toggle='tooltip' title='Download this page as a html file..'>Download this page.</a>";
        }
        else
        {
        echo"Create your own page with Make Profile <a href='register.php'>Get Started</a>";
        
        }
        ?>
 
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

