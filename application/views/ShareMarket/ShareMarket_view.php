<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Share Market</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body bg-white">
                        <form role="form" id="Form" action="" method="post">
                            <div class="row">
                                <div class="col-md-3 col-9 form-group mb-3">
                                    <label for="stockName">Stock Name*</label>
                                    <select class="form-control" name="stockName" id="stockName">
                                        <option value="0">-Select-</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                        <option value="CM">CM</option>
                                        <option vlaue="DCM">DCM</option>
                                    </select>
                                </div>
                                <div class="col-md-0  form-group text-right mt-4">
                                    <button class="btn btn-primary">+</button>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="CurrentPrice"> Current Price*</label>
                                    <input class="form-control" id="CurrentPrice" type="text"
                                        placeholder="Enter Current Price" name="CurrentPrice" value="" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="FirstInvestment"> First Investment*</label>
                                    <input class="form-control" id="FirstInvestment" placeholder="Enter Amount"
                                        type="text" name="FirstInvestment" value="" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Leverage">Leverage*</label>
                                    <select class="form-control" name="Leverage" id="Leverage">
                                        <option value="0">-Select-</option>
                                        <option value="MP">MP</option>
                                        <option value="PM">PM</option>
                                        <option value="CM">CM</option>
                                        <option vlaue="DCM">DCM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Quantity">Quantity(Stock)*</label>
                                    <input class="form-control" type="text" placeholder="Quantity" id="Quantity"
                                        name="Quantity" value="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                    <label for="totalInvestment">Total 1st Investment*</label>
                                    <input class="form-control" type="text" placeholder="Total Amount"
                                        id="totalInvestment" name="totalInvestment" value="" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Date">Date*</label>
                                    <input class="form-control" type="date" 
                                        id="Date" name="Date" value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Leverage">Buy/Sell*</label>
                                    <select class="form-control" name="Leverage" id="Leverage">
                                        <option value="0">-Select-</option>
                                        <option value="Buy">Buy</option>
                                        <option value="Sell">Sell</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                    <label for="2ndDate">1nd Date</label>
                                    <input class="form-control" type="date"
                                        id="2ndDate" name="2ndDate" value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="NewPrice">New Price</label>
                                    <input class="form-control" type="text" placeholder="Enter NewPrice"
                                        id="NewPrice" name="NewPrice"/>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Profit/Loss">Profit/Loss(%)</label>
                                    <input class="form-control" type="text" 
                                        id="Profit/Loss" name="Profit/Loss"/>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Profit/Loss">Profit/Loss(Amt)</label>
                                    <input class="form-control" type="text" 
                                        id="Profit/Loss" name="Profit/Loss"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 form-group mb-3">
                                    <label for="2ndDate">2nd Investment</label>
                                    <input class="form-control" type="text" placeholder="Text Investment"
                                        id="2ndDate" name="2ndDate" value="" />
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="NewPrice">Average Price</label>
                                    <input class="form-control" type="text" 
                                        id="NewPrice" name="NewPrice"/>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Profit/Loss">Total 2nd Investment</label>
                                    <input class="form-control" type="text" 
                                        id="Profit/Loss" name="Profit/Loss"/>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Profit/Loss">2nd Quantity(stock)</label>
                                    <input class="form-control" type="text" 
                                        id="Profit/Loss" name="Profit/Loss"/>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Profit/Loss">Total Stock</label>
                                    <input class="form-control" type="text" 
                                        id="Profit/Loss" name="Profit/Loss"/>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                    <label for="Profit/Loss">Total Investment</label>
                                    <input class="form-control" type="text" 
                                        id="Profit/Loss" name="Profit/Loss"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 form-group mb-3">
                                <label for="ExpectLoss">Expect Loss(%)</label>
                                    <input class="form-control" type="text" 
                                        id="ExpectLoss" name="ExpectLoss"/>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                <label for="ExpectLoss">Expect Loss(Amt)</label>
                                    <input class="form-control" type="text" 
                                        id="ExpectLoss" name="ExpectLoss"/>
                                </div>
                                <div class="col-md-4  mb-3"></div>
                                <div class="col-md-2 form-group mb-3">
                                <label for="ExpectLoss">Highest Price</label>
                                    <input class="form-control" type="text" 
                                        id="ExpectLoss" name="ExpectLoss"/>
                                </div>
                                <div class="col-md-2 form-group mb-3">
                                <label for="ExpectLoss">Lowest Price</label>
                                    <input class="form-control" type="text" 
                                        id="ExpectLoss" name="ExpectLoss"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="border-radius:20px">
                                        Submit</button>
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save" style="border-radius:20px; background-color:red;">
                                        Edit</button>
                                    <!-- <a class="btn btn-warning text-white" href="<?= base_url() ?>Teacher/index">
                                        Edit</a> -->
                                    <!-- <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel">Cancel</button> -->

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