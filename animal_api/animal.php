<?php

$animal_id = isset($_GET['id']) ? $_GET['id'] : null;

if (!empty($animal_id)) :
    $animals = json_decode(file_get_contents('./rand.json'));
    $animals_arr = array_filter($animals, function ($item) use ($animal_id) {
        return $item->id == $animal_id;
    });

   
    $animal = !empty($animals_arr) ? $animals_arr[array_key_first($animals_arr)] : null;
    if (empty($animal))
        die('you are trying to access a course that is not existed');
?>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <img src="./assets/images/c1.jpeg" alt="Course">
            </div>
            <div class="col">
                <h2><?= $animal->title ?></h2>
                <p><?= $animal->description ?></p>
                
            </div>
        </div>
    </div>
<?php

else :
    echo "There is no course with this id, or id is empty";
endif;
