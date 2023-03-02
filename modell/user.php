<?php

require_once 'db_conn.php';

class User{

    private $user_ID;
    private $user_Name;
    private $user_Password;
    private $user_Type;
    private $db;

    function __construct($db){
        $this->db=$db;
    }

    public function checkLogin($username, $password){
        $sql = "SELECT * FROM felhasznalo WHERE nev = '".$_POST['nev']."'";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                //checks if there is a user with the inputted username
                if($row['nev'] == $username){
                    //echo $username;
                    //checks if the password is correct, it works now
                    if($row['jelszo'] == $password){
                        $loginResult = 2 ;//successful login
                        $_SESSION["username"] = $row['nev'];
                        $_SESSION["id"] = $row['Felh_id'];
                    }
                    else{
                        $loginResult = 1 ;//incorrect password
                    }
                }
                else{
                    echo "Wrong username.";
                }
            }
        }
        else{
            $loginResult = 0; //incorrect username
        }
        return $loginResult;
    }
}