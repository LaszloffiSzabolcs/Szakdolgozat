<?php

    require 'modell/user.php';
    $user= new User($db);

    $loginResult = "";

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $loginReaction = array(
        "Login Failed: Wrong Username",
        "Login Failed: Wrong Password",
        "Login Successful",
    );

    switch ($action){
        case 'logout':
            session_unset();
            $loginResult = "Logged out Successful";
        break;

        case 'login':
			$login='';
			if(isset($_POST['nev']) && isset($_POST['jelszo'])){

            $login = $user->checkLogin($_POST['nev'], $_POST['jelszo']);

            $loginResult = $loginReaction[$login];

            echo $loginResult . "<br>";
            }
			if($login==2){
				header("Location: index.php?page=home");
				exit();
			}
        break;
    }
	print_r($_SESSION);
    require 'view/login.php';