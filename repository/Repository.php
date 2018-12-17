<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of repository
 *
 * @author kumar
 */
require_once __DIR__."/../db/Database.php";
class Repository extends Database  {
    //Repository Factory
    public static function getRepo($repoName){
        require_once __DIR__."/../repository/".$repoName.".php";
        $repoClass=new $repoName;
        if (!class_exists($repoName, true)) {
            trigger_error("Unable to load class: $repoName", E_USER_WARNING);
        }else{
           return $repoClass;
        }
    }
    
   
}
