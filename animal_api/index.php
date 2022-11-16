<?php

require "./header.php";
//var_dump($_SERVER);
//var_dump(json_decode(file_get_contents("./data/menu.json")));
//var_dump(!strpos($_SERVER['SCRIPT_FILENAME'], 'index.php'));
//var_dump(json_decode(file_get_contents("./data/animals.json")));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Animal-API</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

</head>
<body class="container p-5">
    <h1 class="text-center p-5">Login Form</h1>
    <hr>

    <?php if(!empty($_SESSION) && isset($_SESSION['error'])):?>
      <div class="alert alert-danger" role="alert">
      <?= $_SESSION['error']?>
      </div>
      <?php unset($_SESSION['error']);//destroy $_SEESION['error] because it is null
      endif;
      ?>


    
   

<div class="d-flex justify-content-center align-items-center">
    <form class="w-50 " method="POST" action="./auth/validation.php">

      <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3 ">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" class="form-control" id="exampleInputPassword1"required >
      </div>
      
       <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>
<?php 
require("./footer.php")?>