<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            ออกใบส่งออกสินค้า
                        </header>
                        <!-- <form data-validate="parsley" action="#"> -->
                            <?php echo form_open('product/product_exportinsert','data-validate="parsley"') ?>
                            <div class="panel-body">
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>สินค้า</label>
                                        <select name="product" class="form-control m-b " required>
                                            <option value="" disabled selected>กรุณาเลือกสินค้าที่ต้องการส่งออก</option>
                                            <?php foreach ($product_list as $product_list) { ?>
                                                <option value="<?php $product_list['product_code'] ?>"><?php echo $product_list['product_code'], ' - ', $product_list['product_name'], ' / ', $product_list['product_unit'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>รหัสการส่งออกสินค้า</label>
                                        <input type="text" name="export_id" class="form-control" id="input-id-1" placeholder="รหัสการส่งออกสินค้า" required>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ผู้รับสินค้า</label>
                                        <input type="text" name="export_reciever" class="form-control" id="input-id-1" placeholder="ผู้รับ" required>
                                    </div>

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>วันที่ส่งออก</label>
                                        <input class="input-sm input-s datepicker-input form-control" name="export_date" size="16" type="text" value="" data-date-format="dd-mm-yyyy">
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ราคาต่อหน่วย</label>
                                        <div class="input-group m-b">
                                            <input type="number" class="form-control" name="export_price">
                                            <span class="input-group-addon">TH</span>
                                            <!-- <span class="input-group-addon">.00</span> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>จำนวนที่ส่งออก</label>
                                        <input type="number" class="form-control" placeholder="ป้อนจำนวนส่งออก" name="export_amount" required>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ราคารวม</label>
                                        <input type="number" class="form-control" id="input-id-1" name="export_sumprice" readonly>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>Vat 7%</label>
                                        <input type="number" class="form-control" id="input-id-1" name="export_vat" readonly>
                                    </div>

                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-4">
                                        <label>ราคารวมภาษี</label>
                                        <input type="number" class="form-control" id="input-id-1" name="export_includevat" readonly>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                                </div>
                            </div>
                    </section>
                    <?php form_close() ?>

                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>