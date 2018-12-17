<?php 
require_once __DIR__."/../repository/Repository.php";
$manfRepo=Repository::getRepo("manfRepo");
$manufacturers=$manfRepo->getAll();
//print_r($manufacturers);
?>
<header>
    <h2>Add New Model</h2>
</header>
<div class="row">
    <div class="col-md-12">
        <div id="alert"></div>
        <form name="addModelForm" id="addModelForm" method="post" onsubmit="return saveModel(this.id);">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="txtManfName">Select Manufacturer</label>
                        <select class="form-control browser-default custom-select" name="selManfName" id="selManfName">
                            <option value="" selected>Choose Manufacturer</option>
                            <?php foreach ($manufacturers as $manf) { ?>
                            <option value="<?= $manf['manf_id'] ?>"><?= $manf['manf_name']?></option>
                            <?php } ?>
                         </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtManfName">Model Name</label>
                      <input type="text" class="form-control" id="txtModelName" name="txtModelName" aria-describedby="manufacturerHelp" placeholder="Enter Model Name">
                    </div>
                </div>
            </div>
            
            <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtManfName">Color</label>
                      <input type="text" class="form-control" id="txtModelColor" name="txtModelColor" aria-describedby="manufacturerHelp" placeholder="Enter Model Color">
                    </div>
                    <div class="form-group">
                      <label for="txtManfName">Manufacturer Year</label>
                      <input type="text" class="form-control" id="txtManfYear" name="txtManfYear" aria-describedby="manufacturerHelp" placeholder="Enter Manufacturer Year">
                      <script>
                        $("#txtManfYear").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years"
                        });
                      </script>
                    </div>
                    <div class="form-group">
                      <label for="txtManfName">Registration Number</label>
                      <input type="text" class="form-control" id="txtModelRegNum" name="txtModelRegNum" aria-describedby="manufacturerHelp" placeholder="Enter Registration Year">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtManfName">Notes</label>
                      <textarea  style="height: 183px;" name="txtModelNotes" id="txtModelNotes" row="100" class="form-control" placeholder="Enter Notes"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                   
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>