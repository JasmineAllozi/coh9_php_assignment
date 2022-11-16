<?php
session_start();
include "./include/functions.php";



//if(!isset($_SESSION['user'])&& !strpos(($_SERVER['SCRIPT_FILENAME']),'index.php'))
//header("location: ./");
//exit();

//get the pages of the website
$menu=json_decode(file_get_contents("./data/menu.json"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="navbar navbar-expand-lg bg-light">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    
</head>
<body class="container">

<header >
<nav class="navbar navbar-expand-lg bg-light px-5">
<div class="container-fluid">
<a class="navbar-brand" href="./home.php">Animals API PHP</a>

<?php if(!strpos($_SERVER['SCRIPT_FILENAME'],'index.php')) : ?><!-- access the other pages if index.php is not include in filename-->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php foreach($menu as $item):?>
        <li class="nav-item">
          <a class="nav-link <?= strpos($_SERVER['SCRIPT_FILENAME'],'index.php') ?"active":"null"?>" aria-current="page" href="<?= $item ->script_name?>">
            <?= $item->title?> </a>
        </li>
        <?php endforeach;?>
        </ul>

            <div>
             <span class="me-3">
                <?= $_SESSION['user']['display_name'];?>
             </span>
             <a href="./auth/logout.php" class="btn btn-danger">logout</a><!-- logout btn-->
            </div>
    </div>
<?php endif;?>
</div>
</nav>
</header>
<div class="container">
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
