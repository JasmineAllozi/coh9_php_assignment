<?php
//session begin
session_start();
//check how is the  person try to login
if($_SERVER['REQUEST_METHOD']!= 'POST' && empty($_POST))
die('You are someone a bad guy trying to access our code directly!');


//get email and password that entered from the user and send to the server
$email=(isset($_POST['email']))? $_POST['email'] :null;
$password=isset($_POST['password'])? $_POST['password']:null;

$error=false;
$error_msg="";
//check if there is an email and password 
if(!empty($email)&& !empty($password)){
   
    //if there is an email and password ,you have to get the DB 
    $usersdata=json_decode(file_get_contents("../data/users.json"));//return an array
    $valid_user;
    //loop for users to check the email and then check the password if is it valid or not
   foreach($usersdata as $user){
    if($user -> email == $email){
        $valid_user=$user;
        break;}}

        if(!empty($valid_user)){
        if($valid_user -> password !=$password){
            $error=true;
            var_dump($valid_user);
            $error_msg="incorrect email or password";

        }}else{
            $error=true;
            $error_msg="incorrect email or password";
        }}
    else{
        $error=true;
        $error_msg= "you need to enter information";}
    
   

//error msg on the session and redirect to page depend on the error msg
if($error){
    $_SESSION['error']=$error_msg;
  header("location: ../");
  exit();
}else{
    $_SESSION['user']=array(
        'display_name'=>$valid_user->display_name );
    header("location:../home.php");
    exit();

}






