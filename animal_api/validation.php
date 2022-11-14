<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$_SESSION['error'] = null;

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';



if (!empty($username) && !empty($password)) {

    $users = file_get_contents('./users.json');
    $users = json_decode($users);

    $valid_user;

    foreach ($users as $user) {
        if ($user->name == $username) {
            $valid_user = $user;
            break;
        }
    }

    if (!empty($valid_user)) {
        if ($password != $valid_user->password) {
            $error = true;
            $error_msg = 'Incorrect email or password';
        }
    } else {
        $error = true;
        $error_msg = 'Incorrect email or password';
    }
} else {
    $error = true;
    $error_msg = 'You need to enter some information';
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    header('location: ./');
} else {
    $_SESSION['user'] = array(
        'display_name' => $valid_user->display_name
    );
    header('location: ./home.php');
}