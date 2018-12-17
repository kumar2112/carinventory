<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelRepo
 *
 * @author kumar
 */
require_once __DIR__."/../repository/Repository.php";
require_once __DIR__."/../modal/modelModal.php";
class modelRepo extends Repository {
    public function saveModel(modelModal $modle){
        $statement = $this->db->prepare('INSERT INTO model (modl_manufacturer, modl_name, modl_color,modl_regnum,modl_year,modl_notes)VALUES (:modl_manufacturer, :modl_name, :modl_color,:modl_regnum,:modl_year,:modl_notes)');
        $statement->execute([
                        'modl_manufacturer' => $modle->manufacturer,
                        'modl_name' => $modle->modelname,
                        'modl_color' => $modle->modelcolor,
                        'modl_regnum' => $modle->modelregnum,
                        'modl_year' => $modle->modelyear,
                        'modl_notes' => $modle->modelnotes,
                        
                    ]);
        return true;
   }
   
   public function getAllModel(){
        $sql="SELECT B.manf_name,A.* from model as A LEFT JOIN manufacturer as B ON A.modl_manufacturer=B.manf_id WHERE A.modl_issold=0";
        $statement = $this->db->query($sql);
        $allModels=$statement->fetchAll();
        return $allModels;
   }
   
   public function getModel($modelid){
        $sql="SELECT B.manf_name,A.* from model as A LEFT JOIN manufacturer as B ON A.modl_manufacturer=B.manf_id WHERE A.modl_id=".$modelid;
        $statement = $this->db->query($sql);
        $model=$statement->fetch();
        return $model;
   }
   
   public function soldModel($modelid){
       $sql = "UPDATE model SET modl_issold=? WHERE modl_id=?";
       $stmt= $this->db->prepare($sql);
       $stmt->execute([1,$modelid]);
       return true;
   }
}
