<header>
    <h2>Add New Manufacturer</h2>
</header>
<div class="row">
    
    <div class="col-md-12">
        <div id="alert"></div>
        <form name="addManfForm" id="addManfForm" method="post" onsubmit="return saveManufacturer(this.id);">
            <div class="form-group">
              <label for="txtManfName">Manufacturer Name</label>
              <input type="text" class="form-control" id="txtManfName" name="txtManfName" aria-describedby="manufacturerHelp" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
