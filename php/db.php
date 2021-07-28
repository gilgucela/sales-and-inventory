<?php

class Connection
{
    private $server = "mysql:host=localhost;dbname=psu_gradequiz";
    private $username = "root";
    private $password = "";
    private $settings = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);

    protected $conn;


    public function openConnection()
    {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->settings);

            return $this->conn;
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
