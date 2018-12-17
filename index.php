<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Car Inventory System</title>
        <!--start css include-->
        <link rel="stylesheet" type="text/css" href="assets/css/plugins/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/plugins/bootstrap/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
        <!--end of css includes-->
        
        <!--start of jquery/js include-->
        <script src="assets/js/plugins/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/js/plugins/bootstrap/bootstrap.js"></script>
        <script src="assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

        <!--end of jquery/js include-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        
        <script src="assets/js/inventory.js"></script>
    </head>
    <body>
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-3">
                   <nav>
                       <ul class="list-group">
                            <li class="list-group-item">
                              <a href="#addmanf" onclick="renderPage('addmanf')">
                                Add Manufacturer
                              </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#addmodel" onclick="renderPage('addmodel')">
                                Add Car Model
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#carlist" onclick="renderPage('carlist')">
                                    View Inventory
                                 </a>
                            </li>
                       </ul>
                   </nav>
               </div>
               <div class="col-md-9" id="pagecontainer">
                   <?php include_once "view/addmanf.php"?>
               </div>
               
           </div>
       </div>
        <div id="modelContainer">
            
        </div>
    </body>
</html>
