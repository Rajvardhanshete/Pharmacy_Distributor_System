
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                
                
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="breadcrumb">
                    <h1>Item Info Details</h1>
                    <button class="btn btn-primary" ><a href="<?=base_url() ?>inventory/ItemInformation/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
                <div class="separator-breadcrumb border-top"></div>
                </div>
                <hr>
                
                               
                                <div class="table-responsive">
                                   <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                   <thead>
                                            <tr>
                                                <th></th>
                                                <th>Id</th>
                                                <th>ItemName</th>
                                                <th>ItemCategory</th>
                                                <th>BrandName</th>
                                                <th>Unit</th>
                                                <th>MinStock</th>
                                                <th>MaxStock</th>
                                                <th>PurchasePrice</th>
                                                <th>SalePrice</th>
                                                <th>Party</th>
                                                <th>ItemDescription</th>
                                                <th>HSN</th>
                                                <th>GST</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                        <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo "<tr>";
                                            echo '<td><a href="'.base_url('Inventory/ItemInformation/update/'.$value->id).'"><i class="fas fa-eye" style="font-size: 14px;"></i></a></td>';
                                            echo "<td>".$value->id."</td>";
                                            echo "<td>".$value->ItemName."</td>";
                                            echo "<td>".$value->ItemCategoryName."</td>";
                                            echo "<td>".$value->BrandName."</td>";
                                            echo "<td>".$value->Unit."</td>";
                                            echo "<td>".$value->MinStock."</td>";
                                            echo "<td>".$value->MaxStock."</td>";
                                            echo "<td>".$value->PurchasePrice."</td>";
                                            echo "<td>".$value->SalePrice."</td>";
                                            echo "<td>".$value->PartyName."</td>";
                                            echo "<td>".$value->ItemDescription."</td>";
                                            echo "<td>".$value->HSNCode4digit."</td>";
                                            echo "<td>".$value->GSTName."</td>";
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
                   
                       
               
            