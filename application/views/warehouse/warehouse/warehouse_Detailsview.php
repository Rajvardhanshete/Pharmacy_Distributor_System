
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
                    <button class="btn btn-primary"><a href="<?=base_url() ?>WareHouse/WarehouseMaster/report" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Generate Report</a></button>&nbsp&nbsp
                    <button class="btn btn-primary"><a href="<?=base_url() ?>WareHouse/WarehouseMaster/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
                             
                </div>
                <hr>
                 
                                <div class="table-responsive">
                                    

                                    <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Operation</th>
                                                <th>Id</th>
                                                <th>Warehouse Name</th>
                                                <th>Location</th>
                                                <th>Contact Person Name</th>
                                                <th>Contact 1</th>
                                                <th>Contact 2</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                         <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo "<tr>";
                                            echo  '<td><a href="'.base_url('WareHouse/WarehouseMaster/update/'.$value->id).'"><i class="fas fa-eye" style="font-size: 14px;"></i></a>  </td>';
                                            
                                            echo "<td>".$value->id."</td>";
                                            echo "<td>".$value->WarehouseName."</td>";
                                            echo "<td>".$value->Location."</td>";
                                            echo "<td>".$value->ContactPersonName."</td>";
                                            echo "<td>".$value->Contact1."</td>";
                                            echo "<td>".$value->Contact2."</td>";
                                            echo "<td>".$value->Email."</td>";
                                                                                   
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
                   
                       
               
            