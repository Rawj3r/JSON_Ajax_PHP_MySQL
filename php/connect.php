<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi
 * Date: 4/23/16
 * Time: 1:53 PM
 */
//class Connect{
//
//    private $conn;
//
//    public function __construct(){
//        $this->connect();
//    }
//
//    public function connect(){
//        $this->conn = mysqli_connect("localhost", "root", "root", "jsonajax") or die("Error " . mysqli_connect_error($this->conn));
//        return $this->conn;
//    }
//
//}

$db = mysqli_connect("localhost", "root", "root", "jsonajax") or die("Error " . mysqli_connect_error($this->conn));