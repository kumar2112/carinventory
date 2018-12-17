<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelModal
 *
 * @author kumar
 */
class modelModal {
    public $modelid;
    public $modelname;
    public $modelcolor;
    public $modelyear;
    public $modelregnum;
    public $modelnotes;
    public $manufacturer;
    
    public function __construct($modelname,$modelcolor,$modelyear,$modelregnum,$modelnotes,$manufacturer) {
         $this->modelname=$modelname;
         $this->modelcolor=$modelcolor;
         $this->modelyear=$modelyear;
         $this->modelregnum=$modelregnum;
         $this->modelnotes=$modelnotes;
         $this->manufacturer=$manufacturer;
    }
    
}
