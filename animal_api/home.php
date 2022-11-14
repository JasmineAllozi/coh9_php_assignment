<?php
//require './header.php';

$animals = json_decode(file_get_contents('./rand.json'));
?>

<main class="container my-5">

<h1 class="text-center">Animal Card</h1>
<hr class="w-50 m-auto">

<div  class="mt-5 row">

    <?php foreach ($animals as $animal) :
        
    ?>
        <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
            <div class="card">
                <img src="./assets/images/c1.jpeg" class="card-img-top" alt="animal">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $animal->name ?>
                    </h5>
                    <p class="card-text">
                        <?= $animal->animal_type ?>
                    </p>
                    <a href="./animal.php?id=<?= $animal->id ?>" class="btn btn-primary"></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
</main>