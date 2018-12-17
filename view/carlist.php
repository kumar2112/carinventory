<?php 
require_once __DIR__."/../repository/Repository.php";
$modelRepo=Repository::getRepo("modelRepo");
$allModels=$modelRepo->getAllModel();
//print_r($allModels);
?>
<header>
    <h2>Car List</h2>
</header>
<div class="row">
    <div class="col-md-12">
         <div id="alert"></div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Manufacturer Name</th>
                <th scope="col">Model Name</th>
                <th scope="col">Count</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0;foreach($allModels as $model){ $i++ ?>
                <tr onclick="showDetails(<?= $model['modl_id']?>)" id="row<?= $model['modl_id'] ?>">
                    <th scope="row"><?= $i ?></th>
                    <td><?= $model['manf_name']?></td>
                    <td><?= $model['modl_name']?></td>
                    <td><?= $model['']?></td>
                </tr>
              <?php } ?>
            </tbody>
        </table>
    </div>
</div>