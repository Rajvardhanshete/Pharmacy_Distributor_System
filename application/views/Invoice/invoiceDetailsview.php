
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Invoice Details</h1>
                </div>
                <button class="btn btn-primary" style="margin-left: 980px;"><a href="<?=base_url() ?>Invoice/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
                <div class="separator-breadcrumb border-top"></div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                               
                                <div class="table-responsive">
                                    

                                    <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Operation</th>
                                                <th>CustomerName</th>
                                                <th>Date</th>
                                                <th>Barcode</th>
                                                <th>Id</th>
                                                <th>ProductName</th>
                                                <th>Unit</th>
                                                <th>Batch</th>
                                                <th>ExpiryDate</th>
                                                <th>Rate</th>
                                                <th>Qty</th>
                                                <th>FreeQty</th>
                                                <th>Amount</th>
                                                <th>TotalAmount</th>
                                               
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                         <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo "<tr>";
                                            echo  '<td><a href="'.base_url().'Invoice/update/'.$value->Id.'"><i class="fa-regular fa-pen-to-square" style="font-size:20px;color: #0c0cf1;"></i></a> </td>';
                                                                             
                                            echo "<td>".$value->CustomerName."</td>";
                                            echo "<td>".$value->Date."</td>";
                                            echo "<td>".$value->Barcode."</td>";
                                            echo "<td>".$value->Id."</td>";
                                            echo "<td>".$value->ProductName."</td>";
                                            echo "<td>".$value->Unit."</td>";
                                            echo "<td>".$value->Batch."</td>";
                                            echo "<td>".$value->ExpiryDate."</td>";
                                            echo "<td>".$value->Rate."</td>";
                                            echo "<td>".$value->Qty."</td>";
                                            echo "<td>".$value->FreeQty."</td>";
                                            echo "<td>".$value->Amount."</td>";
                                            echo "<td>".$value->TotalAmount."</td>";
                                           
                                            
                                                                                     
                                           
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
                   
                       
               
            