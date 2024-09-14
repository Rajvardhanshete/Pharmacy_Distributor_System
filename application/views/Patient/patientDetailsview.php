
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Patient Details</h1>
                </div>
                <button class="btn btn-primary" style="margin-left: 980px;"><a href="<?=base_url() ?>Patient/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
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
                                                <th>Patient Name</th>
                                                <th>Date</th>
                                                
                                                <th>Remark</th>
                                                <th>Frame Uses</th>
                                                <th>Type</th>
                                                <th>Unit</th>
                                                <th>Glass Type</th>
                                                <th>id</th>
                                                <th>Bill Amount</th>
                                                <th>1st Installment payment mode</th>
                                                <th>1st Amount</th>
                                                <th>2nd Installment payment mode</th>
                                                <th>2nd Amount</th>
                                                <th>3rd Installment payment mode</th>
                                                <th>3rd Amount</th>
                                                <th>4th Installment payment mode</th>
                                                <th>4th Amount</th>
                                                <th>Remaining Amount</th>
                                                <th>Total Paid Amount</th>  
                                                <th>Note</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                        <?php 
                                          $i=0;
                                            foreach($alldata as $rw=>$value){

                                            //    $gender= $value->Gender;
                                            //    if ($gender == 1) {
                                            //     $res = 'male';
                                            //    }
                                            //    else{
                                            //     $res = 'female';
                                            //    }

                                            
                                            echo "<tr>";
                                            echo  '<td><a href="'.base_url().'Patient/update/'.$value->id.'"><i class="fas fa-eye" style="font-size: 14px;"></i></a> 
                                            </td>';
                                          
                                            echo "<td>".$value->PatientName."</td>";
                                            echo "<td>".$value->Date."</td>";
                                          
                                            echo "<td>".$value->Remark."</td>";
                                            echo "<td>".$value->FrameUses."</td>";
                                            echo "<td>".$value->Type."</td>";
                                            echo "<td>".$value->Unit."</td>";
                                            echo "<td>".$value->GlassType."</td>";
                                            echo "<td>".$value->id."</td>";
                                            echo "<td>".$value->BIllAmount."</td>";
                                            echo "<td>".$value->firstPaymentMode."</td>";
                                            echo "<td>".$value->firstAmount."</td>";
                                            echo "<td>".$value->secondPaymentMode."</td>";
                                            echo "<td>".$value->secondAmount."</td>";
                                            echo "<td>".$value->thirdPaymentMode."</td>";
                                            echo "<td>".$value->thirdAmount."</td>";
                                            echo "<td>".$value->forthPaymentMode."</td>";
                                            echo "<td>".$value->forthAmount."</td>";
                                            echo "<td>".$value->remainingAmount."</td>";
                                            echo "<td>".$value->TotalPaidAmount."</td>";
                                            echo "<td>".$value->Note."</td>";
                                            // echo "<td>". $res."</td>";
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
                   
                       
               
            