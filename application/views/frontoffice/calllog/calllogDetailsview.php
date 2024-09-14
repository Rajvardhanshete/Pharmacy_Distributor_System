
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                
                
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="breadcrumb">
                    <h1>Call Details</h1>
                    <button class="btn btn-primary" ><a href="<?=base_url() ?>frontoffice/Calllogs/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
                <div class="separator-breadcrumb border-top"></div>
                </div>
                <hr>
                
                               
                                <div class="table-responsive">
                                   <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                   <thead>
                                            <tr>
                                                <th></th>
                                                <th>Id</th>
                                                <th>Call Type</th>
                                                <th>Call Person Name</th>
                                                <th>Employee Name</th>
                                                <th>Call Date</th>
                                                <th>Call Resoan Type</th>
                                                <th>Call Time</th>
                                                <th>Next Follow Date</th>
                                                <th>Call Description</th>
                                                <th>Feedback</th>
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
                                            echo '<td><a href="'.base_url('FrontOffice/Calllogs/update/'.$value->id).'"><i class="fas fa-eye" style="font-size: 14px;"></i></a></td>';
                                            echo "<td>".$value->id."</td>";
                                            echo "<td>".$value->Calltype."</td>";
                                            echo "<td>".$value->Callpname."</td>";
                                            echo "<td>".$value->EmpName."</td>";
                                            echo "<td>".$value->Calldate."</td>";
                                            echo "<td>".$value->CallResType."</td>";
                                            echo "<td>".$value->CallTime."</td>";
                                            echo "<td>".$value->NextFollowDate."</td>";
                                            echo "<td>".$value->CallDescription."</td>";
                                            echo "<td>".$value->Feedback."</td>";
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
                   
                       
               
            