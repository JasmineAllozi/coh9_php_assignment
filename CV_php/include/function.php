<?php
function get_users_data(){
$user_data=[];
if(!empty($_POST)){
    //catch user input and convert it from php arrary to string and put it in users.json file

        $user_data[]=file_put_contents("./data/users.json",json_encode($_POST));}
return $user_data;
}



