<div class="card-body">
                            <div class="col-md-12">
                                <h4 style="text-align:right;margin-right: 41%;">Payment Mode</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <hr>
                                        <!--Mode of Payment-->
                                        <div class="form-group row">
                                            <label for="name">Mode of Payment<span style="color:red;">*</span></label>
                                            <select class="form-control" name="make_of_payment" id="make_of_payment" style="width:48%">
                                                <option value="">--select--</option>
                                                <option>COD</option>
                                                <option>PREPAID</option>
                                            </select>
                                        </div>
                                        <!--end of Mode of Payment-->
                                        <!--Total Amount-->
                                        <div class="form-group row">
                                            <label for="name">Total Amount</label>
                                            <input type="text" name="total_amount" id="total_ahhmount">
                                        </div>
                                        <!--end of Total Amount-->
                                        <!--Discount-->
                                        <div class="form-group row">
                                            <label for="name">Discount</label>
                                            <input type="text" name="discount" id="discount">
                                        </div>
                                        <!--end of Discount-->

                                        <!--CGST-->
                                        <div class="form-group row">
                                            <label for="name">CGST(%)</label>
                                            <input type="text" name="cgst" id="cgst">
                                        </div>
                                        <!--end of CGST-->
                                        <!--SGST-->
                                        <div class="form-group row">
                                            <label for="name">SGST(%)</label>
                                            <input type="text" name="sgst" id="sgst">
                                        </div>
                                        <!--end of SGST-->

                                        <!--IGST-->
                                        <div class="form-group row">
                                            <label for="name">IGST(%)</label>
                                            <input type="text" name="igst" id="igst" onchange="total_cal()">
                                        </div>
                                        <!--IGST-->
                                        <!--Net Amount-->
                                        <div class="form-group row">
                                            <label for="name">Net Amount(Rs.)</label>
                                            <input type="text" name="net_amount" id="net_amount">
                                        </div>
                                        <!--Net Amount-->

                                        <!--Pay Amount-->
                                        <div class="form-group row">
                                            <label for="name">Pay Amount(Rs.)</label>
                                            <input type="text" name="pay_amount" id="pay_amount">
                                        </div>
                                        <!--end of Pay Amount-->
                                        <!--Balance-->
                                        <div class="form-group row">
                                            <label for="name">Balance(Rs.)</label>
                                            <input type="text" name="balance" id="balance">
                                        </div>
                                        <!--end of balance-->
                                    </div>
                                </div>
                            </div>
                    </div>