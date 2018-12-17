<?php
require_once __DIR__."/../repository/Repository.php";
$model_id=$_GET['modelid'];
$modelRepo=Repository::getRepo("modelRepo");
$model=$modelRepo->getModel($model_id);
?>

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?= $model['modl_name'] ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Manufacturer :</label>
                            </div>
                            <div class="col-md-6">
                                 <?= $model['manf_name'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Model :</label>
                            </div>
                            <div class="col-md-6">
                                 <?= $model['modl_name'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Color :</label>
                            </div>
                            <div class="col-md-6">
                                 <?= $model['modl_color'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Year Of Manufacture :</label>
                            </div>
                            <div class="col-md-6">
                                 <?= $model['modl_year'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Registration Number :</label>
                            </div>
                            <div class="col-md-6">
                                <?= $model['modl_regnum'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Notes:</label>
                            </div>
                            <div class="col-md-6">
                                <?= $model['modl_notes'] ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="soldCar(<?= $model['modl_id'] ?>)">Sold</button>
            </div>
        </div>
    </div>
</div>
