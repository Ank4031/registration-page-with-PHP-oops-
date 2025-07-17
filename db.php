<?php

class db{

    public function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "testdb");
    }

    public function postdata($data){
        $this->uname = $data["username"];
        $this->name = $data["name"];
        $this->passwd = $data["password"];
    }

    public function check(){
        $sql1 = "SELECT count(*) as ct from user where username = '$this->uname'";
        $count =  $this->conn->query($sql1);
        $row = $count->fetch_assoc();
        return $row['ct'];
    }

    public function register(){
        $sql1 = "SELECT count(*) as ct from user";
        $count =  $this->conn->query($sql1);
        $row = $count->fetch_assoc();
        $new_id = $row['ct'] + 1;
        $sql2 = "INSERT INTO user VALUES ($new_id,'$this->name', '$this->uname', '$this->passwd') ";
        if ($this->conn->query($sql2)){
            echo "registration complete";
        }else{
            echo "error occured";
        }
    }

    public function get(){
        echo " ".$this->uname;
    }
}