<?php
include "./header.php";
$animals=animals_get_data();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

</head>
<body class="container ">
<?php foreach($animals as $animal):?>
<div class="card" style="width: 18rem ">
  <img src="<?= $animal -> image_link?> " class="card-img-top" alt="animal">
  <div class="card-body">
    <h5 class="card-title"><?= $animal -> name ?></h5>
    <p class="card-text"><?= $animal-> diet?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php endforeach;?>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>






<?php include'./footer.php'?>