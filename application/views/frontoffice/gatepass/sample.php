      <!-- =============== Left side End ================-->
      <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Gate-Pass Details</h1>
                </div>
                <button class="btn btn-primary" style="margin-left: 980px;"><a href="<?=base_url() ?>Pass/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
                <div class="separator-breadcrumb border-top"></div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                               
                                <div class="table-responsive">
                                   <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>id</th>
                                                <th>PersonName</th>
                                                <th>GateInDate</th>
                                                <th>GateInTime</th>
                                                <th>Reason</th>
                                                <th>DriverName</th>
                                                <th>Mobile</th>
                                                <th>VehicleName</th>
                                                <th>VehicleNo</th>
                                                <th>GateOutDate</th>
                                                <th>GateOutTime</th>
                                                <th>FrontPhoto</th>
                                                <th>BackPhoto</th>
                                                <!-- <th>FullName</th>
                                                <th>Address</th>
                                                <th>JoinDate</th>
                                                <th>EndDate</th>  
                                                <th>Qualification	</th>
                                                <th>Experience</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                        <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo "<tr>";
                                            echo '<td><i class="fas fa-eye" style="font-size: 14px;"></i></a> 
                                              </td>';
                                            echo "<td>".$value->id."</td>";
                                            echo "<td>".$value->PersonName."</td>";
                                            echo "<td>".$value->GateInDate."</td>";
                                            echo "<td>".$value->GateInTime."</td>";
                                            echo "<td>".$value->Reason."</td>";
                                            echo "<td>".$value->DriverName."</td>";
                                            echo "<td>".$value->Mobile."</td>";
                                            echo "<td>".$value->VehicleName."</td>";
                                            echo "<td>".$value->VehicleNo."</td>";
                                            echo "<td>".$value->GateOutDate."</td>";
                                            echo "<td>".$value->GateOutTime."</td>";
                                            echo "<td>".$value->FrontPhoto."</td>";
                                            echo "<td>".$value->BackPhoto."</td>";
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
            </div>
        </div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
   

    $('#example').dataTable( {} );
 
    
} );
</script>
                   
                       
               
            