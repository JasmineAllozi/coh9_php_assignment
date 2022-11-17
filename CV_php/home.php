<?php

$user=(object)$_POST;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   
</head>
<body class="container p-2">
<nav class="navbar bg-light ">
  <div class="container-fluid" > 
  <a class="navbar-brand text-secondary"  href="#"><p class="text-uppercase fs-1 fw-bold" style="color:darkslategray"><?= $user -> f_name ?></p></a>
  <div class="d-flex fw-semibold">
  <p><?= $user-> email?></p>
  <p><?php echo "|";?></p>
  <p><?= $user-> phone?></p>
  <p><?php echo "|";?></p>
  <p><?= $user-> city?></p></div>
  
</div>
</nav>

<div>
    <h1 class="fs-4 p-3 m-0">Education</h1>
    <hr class="m-0">
    <ul class="m-1 fw-lighter fw-bold">
        <li >Bachelor in: <span class="fw-light"><?=$user->uni_name?></span></li>
        <li>University: <span class="fw-light"><?=$user->uni_specialization?></span></li>
        <li>Graduation Date: <span class="fw-light"><?= $user-> GD ?></span></li>
    </ul>
</div>

<div>
    <h1 class="fs-4 p-3 m-0">Experience</h1>
    <hr class="m-0">
    <p><?= $user->experience?></p>
</div>

<div>
    <h1 class="fs-4 p-3 m-0">Skills</h1>
    <hr class="m-0">
    <p><?= $user->skills?></p>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
</body>
</html>