
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
                    <h1>Postaldispatch Details</h1>
                    <button class="btn btn-primary" ><a href="<?=base_url() ?>frontoffice/Postaldispatch/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
                </div>
                
                <hr>
                               
                                <div class="table-responsive">
                                   <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>id</th>
                                                <th>Outword no</th>
                                                <th>Outword Letter no</th>
                                                <th>Outword Date</th>
                                                <th>Name</th>
                                                <th>Place</th>  
                                                <th>Address</th>
                                                <th>Incoming Number	</th>
                                                <th>Incoming Date</th>
                                                <th>subject of correspondence</th>
                                                <th>Remark</th>
                                                <th>Postal Charges</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                        <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo "<tr>";
                                            echo '<td><i class="fas fa-eye" style="font-size: 14px;"></i></a> 
                                              </td>';
                                            echo "<td>".$value->Id."</td>";
                                            echo "<td>".$value->OutwordNo."</td>";
                                            echo "<td>".$value->OutwordLetterNo."</td>";
                                            echo "<td>".$value->OutwordDate."</td>";
                                            echo "<td>".$value->Name."</td>";
                                            echo "<td>".$value->Location."</td>";
                                            echo "<td>".$value->Address."</td>";
                                            echo "<td>".$value->IncomingNumber."</td>";
                                            echo "<td>".$value->IncomingDate."</td>";
                                            echo "<td>".$value->subject."</td>";
                                            echo "<td>".$value->Remark."</td>";
                                            echo "<td>".$value->PostalCharges."</td>";
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
                   
                       
               
            