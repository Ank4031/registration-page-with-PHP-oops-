<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once "db.php";
        $a = new db();
        $a->postdata($_POST);
        $c = $a->check();
        if($c===0){
            // echo $a->register();
        }
        else{
            echo "User Already exist";
        }
        
        echo $a->get();
    }