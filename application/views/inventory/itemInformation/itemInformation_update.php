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
                            <div class="h3 text-left">Item Information</div>
                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                <input name="id" id="id" type="hidden" value="<?= isset($data->id) ? $data->id : '' ?> ">
                                    <label for="ItemName">Item Name <span class="text-danger">*</span></label>
                                    <input class="form-control" id="ItemName" type="text" name="ItemName" placeholder="Enter Item Name" value="<?= isset($data->ItemName) ? $data->ItemName : '' ?> " required />
                                </div>

                                <div class="col-md-3 form-group">
                                    <label for="ItemCategory">Item Category <span class="text-danger">*</span></label>
                                    <select class="form-control" name="ItemCategory" id="ItemCategory" required>
                                        <option value="">--Select--</option>
                                        <!-- <?php foreach($itemcat as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="seleycted=selected";
                                                //     } 
                                                // }  
                                                
                                                echo '<option value="'.$value->id.'" '.$selected.'>'.$value->	ItemCategoryName.'</option>';
                                            }
                                            ?>  -->
                                            <?php foreach ($itemcat as $value) {
                                            $selected = "";
                                            if ($data->ItemCategory) {
                                                if ($value->id == $data->ItemCategory) {
                                                    $selected = "selected=selected";
                                                    echo '<option value="' . $data->ItemCategory . '" ' . $selected . '>' . $value->ItemCategoryName . '</option>';
                                                }
                                                echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->ItemCategoryName . '</option>';
                                            } else {
                                                echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->ItemCategoryName . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="BrandName">Brand Name <span class="text-danger">*</span></label>
                                    <select class="form-control" name="BrandName" id="BrandName" required>
                                        <?php 
                                            $selected = "";
                                            if ($data->BrandName) {
                                                
                                                $selected = "selected=selected";
                                                echo '<option value="' . $data->BrandName . '" ' . $selected . '>' . $value->BrandName . '</option>';
                                                }
                                                else {
                                                // echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->ItemCategoryName . '</option>';
                                            }
                                        
                                        ?>
                                        <option value="">--Select Brand Name--</option>
                                        <option value="Amitiza">Amitiza</option>
                                        <option value="Botox">Botox</option>
                                        <option value="Cialis">Cialis</option>
                                        <option value="Dexilant">Dexilant</option>
                                        <option value="Famvir">Famvir</option>
                                        <option value="Gimoti">Gimoti</option>
                                        <option value="Januvia">Januvia</option>
                                        <option value="Jivi">Jivi</option>
                                        <option value="Livalo">Livalo</option>
                                        <option value="Muse">Muse</option>
                                        <option value="Oseni">Oseni</option>
                                        <option value="Relpax">Relpax</option>
                                        <option value="Siliq">Siliq</option>
                                        <option value="Venofer">Venofer</option>
                                        <option value="Zynyz">Zynyz</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="Unit">Unit(UOM)</label>
                                    <select class="form-control" name="Unit" id="Unit">
                                        <?php 
                                            $selected = "";
                                            if ($data->Unit) {
                                                
                                                    $selected = "selected=selected";
                                                    echo '<option value="' . $data->Unit . '" ' . $selected . '>' . $data->ItemCategoryName . '</option>';
                                                }
                                                else {
                                                // echo '<option value="' . $value->id . '" ' . $selected . '>' . $data->ItemCategoryName . '</option>';
                                            }
                                        
                                            ?>
                                        <option value="">--Select Unit--</option>
                                        <option value="Bag">Bag</option>
                                        <option value="Bucket">Bucket</option>
                                        <option value="Bundle">Bundle</option>
                                        <option value="Box">Box</option>
                                        <option value="Dozen">Dozen</option>
                                        <option value="Kit">Kit</option>
                                        <option value="Piece">Piece</option>
                                        <option value="PK">PK</option>
                                        <option value="PK100">PK100</option>
                                        <option value="Rack">Rack</option>
                                        <option value="Single">Single</option>
                                        <option value="Set">Set</option>
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="MinStock">Min Stock</label>
                                    <input class="form-control" type="text" id="MinStock" name="MinStock" placeholder="Enter Min Stock" value="<?= isset($data->MinStock) ? $data->MinStock : '' ?>"/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="MaxStock">Max Stock</label>
                                    <input class="form-control" type="text" id="MaxStock" name="MaxStock" placeholder="Enter Max Stock" value="<?= isset($data->MaxStock) ? $data->MaxStock : '' ?>"/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="PurchasePrice">Purchase Price</label>
                                    <input class="form-control" type="text" id="PurchasePrice" name="PurchasePrice" placeholder="Enter Purchase Price" value="<?= isset($data->PurchasePrice) ? $data->PurchasePrice : '' ?>"/>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="SalePrice">Sale Price</label>
                                    <input class="form-control" type="text" id="SalePrice" name="SalePrice" placeholder="Enter Sale Price" value="<?= isset($data->SalePrice) ? $data->SalePrice : '' ?>"/>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="Party">Party</label>
                                    <select class="form-control" name="Party" id="Party" required>
                                        <option value="">--Select--</option>
                                        <!-- <?php foreach($party as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="seleycted=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->id.'" '.$selected.'>'.$value->PartyName.'</option>';
                                            }
                                            
                                            ?>  -->
                                            <?php foreach ($party as $value) {
                                            $selected = "";
                                            if ($data->Party) {
                                                if ($value->id == $data->Party) {
                                                    $selected = "selected=selected";
                                                    echo '<option value="' . $data->Party . '" ' . $selected . '>' . $value->PartyName . '</option>';
                                                }
                                                echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->PartyName . '</option>';
                                            } else {
                                                echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->PartyName . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="ItemDescription">Item Description</label>
                                    <!-- <textarea class="form-control" id="ItemDescription" name="ItemDescription" placeholder="Please Enter Description"></textarea> -->
                                    <?php
                                                  echo '<textarea class="form-control" id="ItemDescription" type="text" name="ItemDescription" value=""> '. $data->ItemDescription .'</textarea>';
                                    ?>
                                </div>
                                <!-- <div class="form-check col-md-2 mt-5" style="font-size: .9 rem;">
                                    <input type="checkbox" class="form-check-input" id="CheckboxActive" name="CheckboxActive">
                                    <label for="CheckboxActive">Active</label>
                                </div> -->

                                <div class="col-md-2 form-group mb-3">
                                    <label for="HSN">HSN</label>
                                    <select class="form-control" name="HSN" id="HSN">
                                        <option value="">--Select--</option>
                                        <?php foreach($hsn as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                                echo '<option value="'.$value->id.'" '.$selected.'>'.$value->	HSNCode4digit.'</option>';
                                           
                                              $selected = "";
                                            if ($data->HSN) {
                                                if ($value->id == $data->HSN) {
                                                    $selected = "selected=selected";
                                                    echo '<option value="' . $data->HSN . '" ' . $selected . '>' . $value->HSNCode4digit . '</option>';
                                                }
                                                echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->HSNCode4digit . '</option>';
                                            } else {
                                                echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->HSNCode4digit . '</option>';
                                            }
                                        }
                                            ?> 
                                    </select>
                                </div>

                                <div class="col-md-2 form-group mb-3">
                                    <label for="GST">GST</label>
                                    <select class="form-control" name="GST" id="GST">
                                        <option value="">--Select--</option>
                                        <?php foreach($gst as $value)
                                            {
                                                // $selected="";
                                                // if(!empty($data[0]->FkStockId)){

                                                //     if($value->StockID == $data[0]->FkStockId) {
                                                //       $selected="selected=selected";
                                                //     } 
                                                // }  
                                                                
                                            //     echo '<option value="'.$value->id.'" '.$selected.'>'.$value->	GSTName.'</option>';
                                            // }
                                            $selected = "";
                                            if ($data->GST) {
                                                if ($value->id == $data->GST) {
                                                    $selected = "selected=selected";
                                                    echo '<option value="' . $data->GST . '" ' . $selected . '>' . $value->GSTName . '</option>';
                                                }
                                                echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->GSTName . '</option>';
                                            } else {
                                                echo '<option value="' . $value->id . '" ' . $selected . '>' . $value->GSTName . '</option>';
                                            }
                                        }
                                            ?> 
                                    </select>
                                </div>


                            </div>



                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="background-color: #a82eda;font-weight:900 ;color:white;"><i class="fa-solid fa-floppy-disk" style="color: white; margin-right:.2rem"></i>Save</button>
                                    <a class="btn btn-danger" style="color: white;" href="<?= base_url() ?>" type="button" name="cancel" id="cancel"><i class="fa-solid fa-xmark" style="color: white; margin-right:.2rem"></i>Cancel</a>
                                </div>
                            </div>
                    </div>
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
        var base_path = "<?php echo base_url(); ?>";
        var a = false;

        $(document).ready(function() {
            $("#btn_save").click(function() {
                // if (!a) {
                saveperform();
                // }
            });
        });

        function saveperform() {
            var id = $('#id').val();
            var ItemName = $('#ItemName').val();
            var ItemCategory = $("#ItemCategory").val();
            var BrandName = $("#BrandName").val();
            var Unit = $('#Unit').val();
            var MinStock = $('#MinStock').val();
            var MaxStock = $('#MaxStock').val();
            var PurchasePrice = $('#PurchasePrice').val();
            var SalePrice = $('#SalePrice').val();
            var Party = $('#Party').val();
            var ItemDescription = $('#ItemDescription').val();
            var HSN = $('#HSN').val();
            var GST = $('#GST').val();



            // Check if no gender is selected

            // Check if any of the required fields are empty or haven't been selected
            if (ItemName === "" || ItemCategory === "" || BrandName === "" || Unit === "" || MinStock === "" || MaxStock === "" || PurchasePrice === "" || SalePrice === "" || Party === "" || ItemDescription === "" || HSN === "" || GST === "") {
                Swal.fire(
                    'Opps!',
                    'Please Enter Required Fields!',
                    'error'
                );
            }
            else 
        {
            if(id > 0)
            {
                a = true;
                var form = $("#Form").closest("form");
                var formData = new FormData(form[0]);

                $.ajax({
                    url: base_path + "Inventory/ItemInformation/updateEquipments",
                    type: "POST",
                    data: formData,
                    processData: false,
             contentType: false,
             beforeSend: function(){
                $('#btn_save').prop('disabled', true);
                $('#btn_save').html('<i class="fa fa-spinner " style="padding-right:2%;"></i> Loading');
                }, 
             success: function(data) { 
                $("#Form").trigger("reset");
                $('#btn_save').html('<i class="fa fa-check-circle" style="font-size: 20px;color: #FFF;"></i>Save');
                $('#btn_save').prop('disabled', false);

        

                swal({
                title:"",
                text:"Data Update Successfully",
                type:"success",
                showCancelButton: false, 
                showConfirmButton: false,
                width: '1000px',
                timer:2000
            });
            window.location.href = base_path+"Inventory/ItemInformation/index";
                
                
            }
        });

        } else {
                a = true;

                $.ajax({
                    url: base_path + "Inventory/ItemInformation/insertItemInformation",
                    type: "POST",
                    data: $('#Form').serialize(),
                    beforeSend: function() {
                        $('#btn_save').prop('disabled', true);
                        $('#btn_save').html('Loading');
                    },
                    success: function(data) {
                        $('#btn_save').prop('disabled', false);
                        $('#btn_save').html('Save');
                        $("#Form").trigger("reset");

                        Swal.fire(
                            'Good job!',
                            'Data Submitted Successfully!',
                            'success'
                        );
                        window.location.href = base_path + "Inventory/ItemInformation/index";

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
    }
    </script>