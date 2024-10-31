<head>
    <style>
        .breadcrumb {
            color: olivedrab;
        }

        .class {
            border: 2px solid black;
            border-radius: 10px;
            background-color: olivedrab;
            color: white;

            transition: all 0.6s ease;

        }

        .class:hover {
            background-color: blueviolet;
        }
    </style>
</head>
<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">

        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form role="form" id="Form" action="" method="post">
                            <ul class="nav nav-tabs" id="nav-tabs">
                                <li class="nav-item" id="nav1">
                                    <a data-index="0" class="nav-link active" aria-current="page" data-toggle="tab" href="#form1"><i class="fa-solid fa-circle-info"></i>&nbsp;Branch Details</a>
                                </li>
                                <li class="nav-item" id="nav2">
                                    <a data-index="1" class="nav-link" data-toggle="tab" href="#form2"><i class="fa-solid fa-person"></i>&nbsp;Person Info</a>
                                </li>
                                <li class="nav-item" id="nav3">
                                    <a data-index="2" class="nav-link" data-toggle="tab" href="#form3"><i class="fa-solid fa-address-card"></i>&nbsp;Address Info</a>
                                </li>
                                <li class="nav-item" id="nav4">
                                    <a data-index="3" class="nav-link" data-toggle="tab" href="#form4"><i class="fa-solid fa-receipt"></i>&nbsp;Cash Account Info</a>
                                </li>
                                <li class="nav-item" id="nav5">
                                    <a data-index="4" class="nav-link" data-toggle="tab" href="#form5"><i class="fa-solid fa-circle-info"></i>&nbsp;Account Info</a>
                                </li>
                               
                            </ul>


                            <div class="tab-content">


                                <!-- Branch Details Form-->

                                <div class="tab-pane fade show active" id="form1">
                                    <div class="h3 text-left">Branch Information</div>
                                    <div class="row">

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="BranchName">Branch Name <span class="text-danger">*</span></label>
                                            <input class="form-control" id="BranchName" type="text" name="BranchName" placeholder="Enter Branch Name" required />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="PartyName">Party Name</label>
                                            <select class="form-control" name="PartyName" id="PartyName">
                                            <option value="">--Select--</option>
                                            <?php foreach($party as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="seleycted=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->id.'" '.$selected.'>'.$value->PartyName.'</option>';
                                            }
                                            ?> 
                                            </select>
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="GSTNumber">GST Number</label>
                                            <input class="form-control" id="GSTNumber" type="text" name="GSTNumber" placeholder="Enter GST Number" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="PANNumber">PAN Number</label>
                                            <input class="form-control" id="PANNumber" type="text" name="PANNumber" placeholder="Enter PAN Number" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <div class="row">

                                                <div class="col-5 form-group mb-3">
                                                    <label for="StartTime">Office Time</label>
                                                    <input class="form-control" id="StartTime" type="Time" name="StartTime" value="<?php if (!empty($data))echo $data[0]->StartTime; ?>" />
                                                </div>

                                                <div class="col-2 form-group mb-3 mt-4 text-center">
                                                    To
                                                </div>

                                                <div class="col-5 form-group mb-3 mt-1">
                                                    <label for="EndTime"> </label>
                                                    <input class="form-control" id="EndTime" type="Time" name="EndTime" value="<?php if (!empty($data)) echo $data[0]->EndTime; ?>" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="HACDisplayName">HAC Display Name</label>
                                            <textarea class="form-control" id="HACDisplayName" name="HACDisplayName" placeholder="Enter HAC Display Name"></textarea>
                                        </div>
                                    </div>

                                    <div class="h3 text-left">Branch Contact</div>

                                    <div class="row">

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="ContactNo">Contact No <span class="text-danger">*</span></label>
                                            <input class="form-control" id="ContactNo" type="text" name="ContactNo" placeholder="Enter Contact No" required />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="Email">Email <span class="text-danger">*</span></label>
                                            <input class="form-control" id="Email" type="email" name="Email" placeholder="Enter Email" required />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="PurchaseEmail">Purchase Email</label>
                                            <input class="form-control" id="PurchaseEmail" type="email" name="PurchaseEmail" placeholder="Enter Purchase Email" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="SalesEmail">Sales Email</label>
                                            <input class="form-control" id="SalesEmail" type="email" name="SalesEmail" placeholder="Enter Sales Email" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="Website">Website</label>
                                            <input class="form-control" id="Website" type="text" name="Website" placeholder="Enter Website" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="FacebookLink">Facebook Link</label>
                                            <input class="form-control" id="FacebookLink" type="text" name="FacebookLink" placeholder="Enter Facebook Link" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="GooglePlus">Google Plus</label>
                                            <input class="form-control" id="GooglePlus" type="text" name="GooglePlus" placeholder="Enter Google Plus" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="TwitterLink">Twitter Link</label>
                                            <input class="form-control" id="TwitterLink" type="text" name="TwitterLink" placeholder="Enter Twitter Link" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="LinkedinLink">Linkedin Link</label>
                                            <input class="form-control" id="LinkedinLink" type="text" name="LinkedinLink" placeholder="Enter Linkedin Link" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="InstagramLink">Instagram</label>
                                            <input class="form-control" id="InstagramLink" type="text" name="InstagramLink" placeholder="Enter Instagram Link" />
                                        </div>

                                    </div>



                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <!-- <button class="btn btn-primary  text-white" style="background-color:green;font-weight:900" type="button" name="btn_save_branch_detail" id="btn_save_branch_detail"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>&nbsp next1</button> -->

                                            <button class="btn btn-danger text-white" type="button" name="nextButton" id="nextButton" style="background-color:red;">Next &nbsp <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

                                        </div>
                                    </div>

                                </div>
                                <!-- Branch Details Form End-->


                                <!-- Person Info Form-->

                                <div class="tab-pane fade" id="form2">
                                    <div class="h3 text-left">Contact Person</div>
                                    <div class="row">

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="PersonName">Person Name</label>
                                            <input class="form-control" id="PersonName" type="text" name="PersonName" placeholder="Enter Person Name" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="PersonDesignation">Person Designation</label>
                                            <input class="form-control" id="PersonDesignation" type="text" name="PersonDesignation" placeholder="Enter Person Designation" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="PersonContactNumber">Person Contact Number</label>
                                            <input class="form-control" id="PersonContactNumber" type="text" name="PersonContactNumber" placeholder="Enter Person Contact Number" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="PersonAlternetNumber">Person Alternet Contact Number</label>
                                            <input class="form-control" id="PersonAlternetNumber" type="text" name="PersonAlternetNumber" placeholder="Enter Alternet Contact Number" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="PersonEmail">Person Email</label>
                                            <input class="form-control" id="PersonEmail" type="text" name="PersonEmail" placeholder="Enter Person Email" />
                                        </div>

                                    </div>



                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <!-- <button class="btn btn-primary  text-white" style="background-color:green;font-weight:900" type="button" name="btn_save" id="btn_save"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16"> -->
                                                    <!-- <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" /> -->
                                                    <!-- <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" /> -->
                                                <!-- </svg>&nbsp Save</button> -->
                                                <button class="btn btn-danger text-white" type="button" id="prevButton" style="background-color:red;"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Previous Tab</button>
                                                <button class="btn btn-danger text-white" type="button" name="nextButton1" id="nextButton1" style="background-color:red;">Next &nbsp <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

                                        </div>
                                    </div>

                                </div>
                                <!-- Person Info Form End-->


                                <!-- Address Info Form-->
                                <div class="tab-pane fade" id="form3">

                                    <div class="h3 text-left">Billing Address</div>
                                    <div class="row">
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="phone">Address</label>
                                            <textarea name="Address" class="form-control" id="Address">
                                        </textarea>
                                        </div>


                                        <div class="col-md-3 form-group mb-3">
                                            <label for="BillingPlace">Place</label>
                                            <input class="form-control" id="BillingPlace" type="text" name="BillingPlace" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="BillingPincode">Pincode</label>
                                            <input class="form-control" type="text" id="BillingPincode" name="BillingPincode" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="BillingThasil">Thasil</label>
                                            <input class="form-control" type="text" id="BillingThasil" name="BillingThasil" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="BillingDestrict">Destrict</label>
                                            <input class="form-control" type="text" id="BillingDestrict" name="BillingDestrict" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="BillingState">State</label>
                                            <input class="form-control" type="text" id="BillingState" name="BillingState" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="BillingCountry">Country</label>
                                            <input class="form-control" type="text" id="BillingCountry" name="BillingCountry" value="" />
                                        </div>
                                    </div>

                                    <div class="h3 text-left mt-4">Shipping Address</div>

                                    <div class="form-check col-md-4 mt-2 mx-2" style="font-size: .9 rem;">
                                        <input type="checkbox" class="form-check-input" id="CheckboxSameAddress" name="CheckboxSameAddress">
                                        <label for="CheckboxSameAddress" style="color: blue;">Check if Shipping Address is same as Billing Address</label>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="ShippingAddress">Address</label>
                                            <textarea name="ShippingAddress" class="form-control" id="ShippingAddress">
                                        </textarea>
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="ShippingPlace">Place</label>
                                            <input class="form-control" id="ShippingPlace" type="text" name="ShippingPlace" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="ShippingPincode">Pincode</label>
                                            <input class="form-control" type="text" id="ShippingPincode" name="ShippingPincode" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="ShippingThasil">Thasil</label>
                                            <input class="form-control" type="text" id="ShippingThasil" name="ShippingThasil" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="ShippingDestrict">Destrict</label>
                                            <input class="form-control" type="text" id="ShippingDestrict" name="ShippingDestrict" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="ShippingState">State</label>
                                            <input class="form-control" type="text" id="ShippingState" name="ShippingState" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="ShippingCountry">Country</label>
                                            <input class="form-control" type="text" id="ShippingCountry" name="ShippingCountry" value="" />
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <!-- <button class="btn btn-primary  text-white" style="background-color:green;font-weight:900" type="button" name="btn_save" id="btn_save"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>&nbsp Save</button> -->
                                                <button class="btn btn-danger text-white" type="button" id="prevButton1" style="background-color:red;"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp  Previous Tab</button>
                                                <button class="btn btn-danger text-white" type="button" name="nextButton2" id="nextButton2" style="background-color:red;">Next &nbsp <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

                                        </div>
                                    </div>


                                </div>
                                <!-- Address Info Form End-->


                                <!-- Cash Account Info Form-->
                                <div class="tab-pane fade" id="form4">
                                    <div class="h3 text-left">Cash Account Information</div>

                                    <div class="row">
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="OpeningBalance">Opening Balance</label>
                                            <input class="form-control" id="OpeningBalance" type="text" name="OpeningBalance" value="" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <!-- <button class="btn btn-primary  text-white" style="background-color:green;font-weight:900" type="button" name="btn_save" id="btn_save"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>&nbsp Save</button> -->

                                                <button class="btn btn-danger text-white" type="button" id="prevButton2" style="background-color:red;"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp  Previous Tab</button>
                                                <button class="btn btn-danger text-white" type="button" name="nextButton3" id="nextButton3" style="background-color:red;">Next &nbsp <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                </div>
                                <!-- Cash Account Info Form End-->


                                <!-- Account Info Form-->
                                <div class="tab-pane fade" id="form5">
                                    <div class="h3 text-left">Account Details & Documents</div>

                                    <div class="row">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="BankName">Bank Name</label>
                                            <input class="form-control" id="BankName" type="text" name="BankName" value="" />
                                        </div>


                                        <div class="col-md-3 form-group mb-3">
                                            <label for="BankBranchName">Bank Branch Name</label>
                                            <input class="form-control" id="BankBranchName" type="text" name="BankBranchName" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="BankAccountNumber">Bank Account Number</label>
                                            <input class="form-control" type="text" id="BankAccountNumber" name="BankAccountNumber" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="BankAccountHolderNumber">Bank Account Holder Number</label>
                                            <input class="form-control" type="text" id="BankAccountHolderNumber" name="BankAccountHolderNumber" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="BankIFSCCode">Bank IFSC Code</label>
                                            <input class="form-control" type="text" id="BankIFSCCode" name="BankIFSCCode" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="BankMICRCode">Bank MICR Code</label>
                                            <input class="form-control" type="text" id="BankMICRCode" name="BankMICRCode" value="" />
                                        </div>

                                        <div class="form-check col-md-4 mt-4 mx-2" style="font-size: .9 rem;">
                                            <input type="checkbox" class="form-check-input" id="CheckboxActive" name="CheckboxActive">
                                            <label for="CheckboxActive">Active</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <!-- <button class="btn btn-primary  text-white" style="background-color:green;font-weight:900" type="button" name="btn_save" id="btn_save"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>&nbsp Save</button> -->
                                                <button class="btn btn-danger text-white" type="button" id="prevButton3" style="background-color:red;"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp  Previous Tab</button>
                                                <button class="btn btn-primary" type="button" name="btn_save_branch_info" id="btn_save_branch_info" style="background-color: #a82eda;font-weight:900 ;color:white;"><i class="fa-solid fa-floppy-disk" style="color: white; margin-right:.2rem"></i>Save</button>
                                        </div>
                                    </div>


                                </div>
                                <!-- Account Info Form End-->


                            </div>
<p id = "currentTabIndex"> </p>


                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script  src="<?php echo base_url('web_resources'); ?>/dist/js/jquery.min.js"></script>          
        <script  src="<?php echo base_url('web_resources'); ?>/dist/js/controllers/StudentCreate.js"></script> -->

        <script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script>

        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log("hello1");
        const tabs = document.querySelectorAll('.nav-link');
        const tabContents = document.querySelectorAll('.tab-pane');
        let currentTabIndex = 0;
        console.log("hello2");

        // Function to show the current tab
        function showTab(index) {
            tabs.forEach((tab, i) => {
                console.log("hello3");
                tab.classList.toggle('active', i === index);
            });
            tabContents.forEach((content, i) => {
                console.log("hello4");
                content.classList.toggle('show', i === index);
                content.classList.toggle('active', i === index);
            });
            // Update the current tab index display
            console.log(document.getElementById('currentTabIndex'));
            document.getElementById('currentTabIndex').textContent = `Current Tab Index: ${index}`;
            console.log("hello5");
        }

        // Next tab button
        document.getElementById('nextButton').addEventListener('click', function () {
            if (currentTabIndex < (tabs.length - 1)) {
                console.log("hello6");
                currentTabIndex++;
                showTab(currentTabIndex);
                console.log("hello7");
            }
        });
        document.getElementById('nextButton1').addEventListener('click', function () {
            if (currentTabIndex < (tabs.length - 1)) {
                console.log("hello6");
                currentTabIndex++;
                showTab(currentTabIndex);
                console.log("hello7");
            }
        });
        document.getElementById('nextButton2').addEventListener('click', function () {
            if (currentTabIndex < (tabs.length - 1)) {
                console.log("hello6");
                currentTabIndex++;
                showTab(currentTabIndex);
                console.log("hello7");
            }
        });
        document.getElementById('nextButton3').addEventListener('click', function () {
            if (currentTabIndex < (tabs.length - 1)) {
                console.log("hello6");
                currentTabIndex++;
                showTab(currentTabIndex);
                console.log("hello7");
            }
        });
        

        // Previous tab button
        document.getElementById('prevButton').addEventListener('click', function () {
            if (currentTabIndex > 0) {
                currentTabIndex--;
                showTab(currentTabIndex);
            }
        });
        document.getElementById('prevButton1').addEventListener('click', function () {
            if (currentTabIndex > 0) {
                currentTabIndex--;
                showTab(currentTabIndex);
            }
        });
        document.getElementById('prevButton2').addEventListener('click', function () {
            if (currentTabIndex > 0) {
                currentTabIndex--;
                showTab(currentTabIndex);
            }
        });
        document.getElementById('prevButton3').addEventListener('click', function () {
            if (currentTabIndex > 0) {
                currentTabIndex--;
                showTab(currentTabIndex);
            }
        });
        
        // Initial tab display
        showTab(currentTabIndex);
    });
</script>


        <script>

        const checkbox = document.getElementById('CheckboxActive');
        let value = 0; // Initialize the variable

        // Function to update the value based on checkbox state
        function updateValue() {
            value = checkbox.checked ? 1 : 0;
            console.log(value); // Log the value for demonstration
        }

        // Add event listener for changes to the checkbox
        checkbox.addEventListener('change', updateValue);
            
            var base_path = "<?php echo base_url(); ?>";
            var a = false;
            const navItems = document.querySelectorAll('.nav-item');
            
            $(document).ready(function() {
                $("#btn_save_branch_info").click(function() {
                    // if (!a) {
                    saveperform();
                    //                     }
                });
                });

            function saveperform() {
                var BranchName = $('#BranchName').val();
                var PartyName = $("#PartyName").val();
                var GSTNumber = $("#GSTNumber").val();
                var PANNumber = $('#PANNumber').val();
                var StartTime = $('#StartTime').val();
                var EndTime = $('#EndTime').val();
                var HACDisplayName = $('#HACDisplayName').val();
                var ContactNo = $('#ContactNo').val();
                var Email = $('#Email').val();
                var PurchaseEmail = $('#PurchaseEmail').val();
                var SalesEmail = $('#SalesEmail').val();
                var Website = $('#Website').val();
                var FacebookLink = $('#FacebookLink').val();
                var GooglePlus = $('#GooglePlus').val();
                var TwitterLink = $('#TwitterLink').val();
                var LinkedinLink = $('#LinkedinLink').val();
                var InstagramLink = $('#InstagramLink').val();
                var PersonName = $('#PersonName').val();
                var PersonDesignation = $('#PersonDesignation').val();
                var PersonContactNumber = $('#PersonContactNumber').val();
                var PersonAlternetNumber = $('#PersonAlternetNumber').val();
                var PersonEmail = $('#PersonEmail').val();
                var Address = $('#Address').val();
                var BillingPlace = $('#BillingPlace').val();
                var BillingPincode = $('#BillingPincode').val();
                var BillingThasil = $('#BillingThasil').val();
                var BillingDestrict = $('#BillingDestrict').val();
                var BillingState = $('#BillingState').val();
                var BillingCountry = $('#BillingCountry').val();
                var CheckboxSameAddress = $('#CheckboxSameAddress').val();
                var ShippingAddress = $('#ShippingAddress').val();
                var ShippingPlace = $('#ShippingPlace').val();
                var ShippingPincode = $('#ShippingPincode').val();
                var ShippingThasil = $('#ShippingThasil').val();
                var ShippingDestrict = $('#ShippingDestrict').val();
                var ShippingState = $('#ShippingState').val();
                var ShippingCountry = $('#ShippingCountry').val();
                var OpeningBalance = $('#OpeningBalance').val();
                var BankName = $('#BankName').val();
                var BankBranchName = $('#BankBranchName').val();
                var BankAccountNumber = $('#BankAccountNumber').val();
                var BankAccountHolderNumber = $('#BankAccountHolderNumber').val();
                var BankIFSCCode = $('#BankIFSCCode').val();
                var BankMICRCode = $('#BankMICRCode').val();
                var CheckboxActive = value;
                console.log(CheckboxActive);

                // Check if no gender is selected

                // Check if any of the required fields are empty or haven't been selected
                if (BranchName === "" || PartyName === "" || GSTNumber == "0" || PANNumber === "" || StartTime === "" || EndTime === "" || HACDisplayName === "" || ContactNo ==="" || Email ==="" || PersonName ==="" || PersonEmail === "" || Address ==="" || BillingPlace === "" || BillingPincode === "" || OpeningBalance ==="" || BankName ==="" || BankBranchName ==="" || BankAccountNumber ==="" || BankAccountHolderNumber ==="" || BankIFSCCode ==="" || BankMICRCode ==="" ) {
                    Swal.fire(
                        'Opps!',
                        'Please Enter Required Fields!',
                        'error'
                    );
                } else {
                    a = true;

                    $.ajax({
                        url: base_path + "HR/Branchinformation/insertBranchinformation",
                        type: "POST",
                        data: $('#Form').serialize(),
                        beforeSend: function() {
                            $('#btn_save_branch_info').prop('disabled', true);
                            $('#btn_save_branch_info').html('Loading');
                        },
                        success: function(data) {
                            $('#btn_save_branch_info').prop('disabled', false);
                            $('#btn_save_branch_info').html('Save');
                            $("#Form").trigger("reset");

                            Swal.fire(
                                'Good job!',
                                'Data Submitted Successfully!',
                                'success'
                            );

                            a = false;
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            // Handle errors here
                            console.error("Error:", errorThrown);
                            Swal.fire(
                                'Error!',
                                'An error occurred during submission. Please try again.',
                                'error'
                            );
                        }
                    });
                }
            }
        </script>