<?php
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$text = $_POST['message'];

if(trim($name) == "" && trim($email) == "" && trim($pass) == "" && trim($text) == "") echo "vzahali koncheniy";
else if(trim($name) == '') echo "Dovboeb vvedi name";
else if (strlen(trim($name)) <= 1) echo "konch vvedi email";
else {
    $_POST['password'] = sha1($pass);
    echo "<h1>norm pots:</h1>";
    foreach($_POST as $key => $val) echo "$key: $val <br>";
    
    
    // header('Location: index.php');
    // exit;
}