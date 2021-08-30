<?php
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>
<?php 
    
//  $page_name=$_SERVER['REQUEST_URI'];
// $page_name2=explode("/",$page_name);
//     echo ucfirst($_SESSION['username']."-".$page_name2[2]); 
    

?>
</title>
<style>
    .navborder
    {
        border: 3px solid black;
    }


    .navhov:hover
    {
        background-color: black;
        color: white;
    }
</style>
</head>
  <body class="bg-light">
  

  <nav class="navbar navbar-expand-lg navbar-light bg-lgiht navborder">
 
 <a class='navbar-brand' href='#'>Make Profile</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">

 

   
   <?php
       if(isset($_SESSION['login'])){

$userpage='userpage.php?'.$_SESSION['username'];   
         echo "
         <li class='nav-item '>
         <a class='nav-link' href='$userpage'>Profile</a>
         </li>"; 
         }
         else
         {
          echo "
          <li class='nav-item '>
          <a class='nav-link' href='index.php'>Home<a>
          </li>";
          
         }
         ?>

         <?php 

if(isset($_SESSION['login']))
 {

       echo"
         <li class='nav-item '>
         <a class='nav-link' href='user_dashboard.php'>Dashboard</a>
         </li>" ;


     }
       ?>     

</ul>
     
<?php 
 if(!isset($_SESSION['login'])){
 echo '
 <ul class="navbar-nav navbar-right">
 <li class="nav-item">
 <a class="nav-link" href="login.php">Login</a>
</li>

       <li class="nav-item">
         <a class="nav-link" href="register.php">Register</a>
       </li>
       </ul>';
 }
?>


<?php 
if(isset($_SESSION['login'])){
echo '<ul class="nav navbar-nav navbar-right">
     <li class="nav-item ">
     <a class="nav-link" href="user_dashboard.php">Hello '.strtoupper($_SESSION['username']).' </a>
   </li>
     <li class="nav-item ">
         <a class="nav-link" href="logout.php">Logout</a>
       </li>
   
</ul>';}
?>


 </div>
</nav>
   


