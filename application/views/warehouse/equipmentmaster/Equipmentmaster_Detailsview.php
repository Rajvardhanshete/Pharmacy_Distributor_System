
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
               
                <div class="separator-breadcrumb border-top"></div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="breadcrumb">
                    <h1>WareHouse Details</h1>
                    <button class="btn btn-primary"><a href="<?=base_url() ?>frontoffice/complain/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
                             
                </div>
                <hr>
                 
                                <div class="table-responsive">
                                    

                                    <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Operation</th>
                                                <th>Id</th>
                                                <th>EquipmentName Name</th>
                                                <th>Equipment Code</th>
                                                <th>Equipment Category </th>
                                                <th>Description</th>
                                                <th>WareHouseName</th>
                                                <th>Maintainace</th>
                                                <th>MaintainaceDuration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                         <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo "<tr>";
                                            echo  '<td><a href="'.base_url('WareHouse/EquipmentMaster/update/'.$value->id).'"><i class="fas fa-eye" style="font-size: 14px;"></i></a>  </td>';
                                            
                                            echo "<td>".$value->id."</td>";
                                            echo "<td>".$value->EquipmentName."</td>";
                                            echo "<td>".$value->EquipmentCode."</td>";
                                            echo "<td>".$value->EquipmentCategory."</td>";
                                            echo "<td>".$value->Description."</td>";
                                            echo "<td>".$value->WareHouseName ."</td>";
                                            if ($value->Maintainace == "1"){
                                                echo "<td>Yes</td>";
                                            }
                                            else{
                                                echo "<td>No</td>";
                                            }
                                            echo "<td>".$value->MaintainaceDuration."</td>";
                                                                                   
                                            $i++;
                                        
                                            echo "</tr>";                        
                                        }
                                        ?> 
                             
                                
                                          
                                        </tbody>
                                        
                                    </table>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
   

    $('#example').dataTable( {} );
 
    
} );
</script>
                   
                       
               
            