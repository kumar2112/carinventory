<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author kumar
 */
require_once __DIR__."/../config.php";
class Database  {
    public $db;
    public function __construct(){
        try {
            $this->db = new PDO('mysql:host='.host.';dbname='.dbname,username,password);
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
       
    }
    
    
}
