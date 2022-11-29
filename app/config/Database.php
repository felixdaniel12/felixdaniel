<?php

class Database{

    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $db = "si_absen";

    var $database;

    public function __construct()
    {
        return $this->database = mysqli_connect($this->host, $this->user, $this->password, $this->db);
    }
}