<?php
//let the session begin
session_start();
//destroy sesion
session_destroy();
//redirect
header("location:../");
exit();


?>