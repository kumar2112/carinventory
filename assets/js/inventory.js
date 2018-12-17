//load pages
var renderPage=function(pagename){
     $("#pagecontainer").load("view/"+pagename+".php");
     return false;
}

//ajax for save Manufacturer

var saveManufacturer=function(formid){
     var formData = $("#"+formid).serializeArray();
     formData.push({name:"taskPerForm",value:"addnewmanufacturer"});
     $.ajax({
        type: "POST",
        url: "ajax/formhandler.php",
        data: formData,
        //cache: false,
        success: function(response) {
               if(response=="success"){
                   $("#"+formid)[0].reset();
                   $("#alert").html('<div class="alert alert-success" role="alert">Manufacturer added successfully.</div>');
                   setTimeout(function(){
                       $("#alert").html('');
                   },2000)
                }
        }
     });
     return false;
}

var saveModel=function(formid){
     var formData = $("#"+formid).serializeArray();
     formData.push({name:"taskPerForm",value:"addnewmodel"});
     $.ajax({
        type: "POST",
        url: "ajax/formhandler.php",
        data: formData,
        //cache: false,
        success: function(response) {
               if(response=="success"){
                   $("#"+formid)[0].reset();
                   $("#alert").html('<div class="alert alert-success" role="alert">New Model added successfully.</div>');
                   setTimeout(function(){
                       $("#alert").html('');
                   },2000)
                }
        }
     });
     return false;
}
var showDetails=function(modlid){
    $.post("view/cardetails.php?modelid="+modlid,function(response){
        $("#modelContainer").empty();
        $("#modelContainer").append(response);
        $('.modal').modal()
    });
}


var soldCar=function(modlid){
    
    var modlid=modlid;
    $.ajax({
        type: "POST",
        url: "ajax/formhandler.php",
        data:{modlid:modlid,taskPerForm:"soldCar"},
        //cache: false,
        success: function(response) {
               if(response=="success"){
                   $('.modal').modal('hide');
                   $("#row"+modlid).remove();
                   $("#alert").html('<div class="alert alert-success" role="alert">Modle Sold</div>');
                   
                   setTimeout(function(){
                       $("#alert").html('');
                   },2000)
                }
        }
     });
     return false;
}
