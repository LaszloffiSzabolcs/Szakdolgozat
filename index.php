<?php

    session_start();

    require 'modell/db_conn.php';
    $db = new DataBase();

    $page = $_REQUEST['page'] ?? "index";

    $controllerFile = 'controller/'.$page.'.php';

    if(file_exists($controllerFile)){
        require $controllerFile;
    }