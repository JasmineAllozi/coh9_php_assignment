<?php
session_start();
require './header.php';
include "./include/function.php";

$users=get_users_data();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<nav class="navbar bg-light">

  <div class="container-fluid">
    <form class="d-flex" role="search" method="$_GET" action="./home.php">
      <input class="form-control me-2" type="search" placeholder="Search for an CV by ID" aria-label="Search">
      <button class="btn btn-outline-success" type="submit" >Search</button>
    </form>
  </div>
  
  
 
</nav>




<div class="d-flex justify-content-center align-items-center">
    <h1 class="w-50 p-3">Standing out. Professional. Recruiter-approved. Ready in minutes with our step-by-step builder.</h1>
   
<form class=" row g-3 w-50 m-3" method="POST" action="home.php">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">FULL NAME</label>
    <input type="text" class="form-control" id="inputEmail4" name="f_name" required>
  </div>
  
  <div class="col-12">
    <label for="inputAddress" class="form-label">EMAIL ADDRESS</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="info@example.com" name="email" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">PHONE</label>
    <input type="telephone" class="form-control" id="inputAddress2" placeholder="079865432" name="phone" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CITY</label>
    <input type="text" class="form-control" id="inputCity" name="city" required>
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">BIRTHDAY DATE</label>
    <input type="date" class="form-control" id="inputZip" name="BD" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ID</label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="ID# must be 3-different-numbers" name="ID" required>
  </div>
  
<div class="col-12">
    <label for="inputAddress" class="form-label">UNIVERSITY</label>
    <input type="text" class="form-control" id="inputAddress"  name="uni_name" required>
  </div>
<div class="col-12">
    <label for="inputAddress" class="form-label">UNIVERSITY SPECIALIZATION</label>
    <input type="text" class="form-control" id="inputAddress"  name="uni_specialization" required>
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">GRADUATION_DATE</label>
    <input type="date" class="form-control" id="inputZip" name="GD" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">EXPERIENCE</label>
    <textarea class="form-control" name="experience" required></textarea>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">SKILLS</label>
    <textarea class="form-control" name="skills" required></textarea>
  </div>
 

  <div class="col-12">
    
    <button type="submit" class="btn btn-primary" >Submit</button>
  </div>
</form>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>