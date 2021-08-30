<?php

require('header.php');
?>
<style>
#colid
{
  border: 10px solid orange;
border-radius: 10px;
height: 80%;
color: orange;
background-color: white;
margin:5px;
}

#colid:hover
{
  border: 10px solid orange;
border-radius: 10px;
height: 80%;
color: white;
background-color: orange;
margin:5px;
}

.marg
{
  margin-top: 80px;
}
#footer

{
  position: fixed;
  bottom: 0;
  right: 0;
  left: 0;
  text-align: center;
}
a
{
  color: orange;
  text-decoration: none;
}
a:hover
{
  color: white;
  text-decoration: none;
}
</style>


<div class="container marg ">
  <h2 class="text-center">CREATE YOUR PROFILE IN JUST SIMPLE 3 STEPS</h2>
  <div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-3 col-sm " id="colid">
    <a href="register.php">  
<h3 class="heading">01</h3>
<h5 class="firststeppara">Get Registered</h5>
</a>
</div>

<div class="col-md-3 col-sm" id="colid">
<a href="register.php">
<h3 class="heading">02</h3>
<h5 class="firststeppara">Set your links</h5>
</a>
</div>

<div class="col-md-3 col-sm" id="colid">
<a href="register.php">
<h3 class="heading">03</h3>
<h5 class="firststeppara">Download your page</h5>
</a>
</div>


</div>


<footer class="footer " id="footer">
  <div class="container">
  <p class="mt-5 mb-3 text-muted text-center">&copy; Make Profile <?php echo date("Y"); ?>  </p>
  </div>
</footer>

<!-- <h3>Second Step</h3>
<p>Login</p>
<h3>Third Step</h3>
<p>Set your Links</p>
<h2>Conratulations you created your profile.</h2> -->


</div>