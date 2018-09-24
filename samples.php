<?php 
/**
* @author : https://github.com/naveen17797
**/

require 'class.jsonHandler.php';

// example implementation of the json login system

//declare the class with the file name you want

$jsonHandler = new jsonHandler("login.json");

// to add username and password from form

$username = "admin";

$password = "admin";

//implement hash here
$password = password_hash($password, PASSWORD_DEFAULT);

//void
$jsonHandler->create_key_value($username, $password);

//to remove the user by username, void
$jsonHandler->remove_key($username)


// to check if user name already exists, boolean 
$boolean = $jsonHandler->check_if_key_exists($username);


//get all the usernames, array
$jsonHandler->getAllKeys()


//update password by refering username, void
$jsonHandler->rewrite_the_value($username, $password);

?>