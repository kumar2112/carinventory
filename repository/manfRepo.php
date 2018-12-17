<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of manfrepo
 *
 * @author kumar
 */
require_once __DIR__."/../repository/Repository.php";
require_once __DIR__."/../modal/manfModal.php";
class manfRepo extends Repository {
    //save manufacturer
    public function saveManufacturer(manfModal $manf){
        $statement = $this->db->prepare('INSERT INTO manufacturer (manf_name, manf_createdon, manf_isactive)VALUES (:manf_name, :manf_createdon, :manf_isactive)');
        $statement->execute([
                        'manf_name' => $manf->manufacturername,
                        'manf_createdon' => date("Y-m-d"),
                        'manf_isactive' => 'yes',
                    ]);
        return true;
    }
    
    public function getAll(){
        $stmt = $this->db->query("SELECT manf_id,manf_name FROM manufacturer");
        $manufacturers=$stmt->fetchAll();
        return $manufacturers;
    }
    
    
}
