
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Student Details</h1>
                </div>
                <button class="btn btn-primary" style="margin-left: 980px;"><a href="<?=base_url() ?>Student/create" class="text-white text-decoration-none"><i class="fa-solid fa-plus text-white"></i>&nbsp;Add New</a></button>
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
                                                <th>Id</th>
                                                <th>FullName</th>
                                                <th>Address</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Std</th>
                                                <th>Subject</th>
                                                <th>DOB</th>
                                                <th>Gender</th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                          

                                         <?php 
                                            $i=0;
                                            foreach($alldata as $rw=>$value){
                                            echo "<tr>";
                                            echo  '<td><a href="'.base_url().'Student/update/'.$value->Id.'"><i class="fa-regular fa-pen-to-square" style="font-size:20px;color: #0c0cf1;"></i></a> </td>';
                                            
                                            echo "<td>".$value->Id."</td>";
                                            echo "<td>".$value->FullName."</td>";
                                            echo "<td>".$value->Address."</td>";
                                            echo "<td>".$value->Mobile."</td>";
                                            echo "<td>".$value->Email."</td>";
                                            echo "<td>".$value->Name."</td>";
                                            echo "<td>".$value->Sub."</td>";
                                            echo "<td>".$value->DOB."</td>";
                                            echo "<td>".$value->Gender."</td>";
                                            
                                                                                     
                                           
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
                   
                       
               
            