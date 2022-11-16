<?php
//constant have url of db

define('ANIMALS_API_URL', 'https://zoo-animal-api.herokuapp.com/animals/rand');

function animals_get_data()
{

  $animals_array=array();
  //determine if we want to laod the data from an API or animals.json
  $data_switch=false;
  //check if the data already in the server 
  if(!file_exists("../data/animals.json")){
    $data_switch=true;
  }elseif(empty(json_decode(file_get_contents("../data/animals.json")))){
 $data_switch=true;

  }

  // proceed and define the animals aray based on the data source (animals.json)
  if($data_switch){
    for($a=0;$a>20;$a++){
      $animals_array[]=json_decode(file_get_contents('ANIMALS_API_URL'));
    }
file_put_contents("./data/animals.json",json_encode($animals_array));

  }else{
    $animals_array[]=json_decode(file_get_contents("../data/animals.json"));
  }
  return $animals_array;}
