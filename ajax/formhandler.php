<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__."/../repository/Repository.php";
$taksPerForm=$_POST['taskPerForm'];

switch($taksPerForm){
    case "addnewmanufacturer" :
       
        require_once __DIR__."/../modal/manfModal.php";
        
        $manufacturerName=$_POST['txtManfName'];
        $manfmodal=new manfModal($manufacturerName);
        $manfRepo=Repository::getRepo("manfRepo");
        $manfRepo->saveManufacturer($manfmodal);
        echo "success";
        
    break;
    case "addnewmodel" :
        require_once __DIR__."/../modal/modelModal.php";
        $manufacturerName=$_POST['selManfName'];
        $modelname=$_POST['txtModelName'];
        $modelcolor=$_POST['txtModelColor'];
        $modelregnum=$_POST['txtModelRegNum'];
        $modleyear=$_POST['txtManfYear'];
        $modlenotes=$_POST['txtModelNotes'];
        
        
        $modelmodal=new modelModal($modelname,$modelcolor,$modleyear,$modelregnum,$modlenotes,$manufacturerName);
        $modelRepo=Repository::getRepo("modelRepo");
        $modelRepo->saveModel($modelmodal);
        echo "success";
        
    break;
    case "soldCar" :
        require_once __DIR__."/../modal/modelModal.php";
        $model_id=$_POST['modlid'];
        $modelRepo=Repository::getRepo("modelRepo");
        $modelRepo->soldModel($model_id);
        echo "success";
        
    break;
    default;
        echo "some thing went wrong";
}

