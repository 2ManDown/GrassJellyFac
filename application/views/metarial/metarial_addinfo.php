<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            เพิ่มข้อมูลวัตถุดิบ
                        </header>
                        <?php echo form_open('Metarial/metarial_insert_db') ?>
                        <!-- <form data-validate="parsley" action="#"> -->
                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>รหัสวัตถุดิบ</label>
                                    <input type="text" name="metarial_code" class="form-control" placeholder="กรอกรหัสวัตถุดิบ" required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคาต่อหน่วย</label>
                                    <input type="text" name="metarial_price" class="form-control" placeholder="กรอกราคาต่อหน่วย" required>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ชื่อวัตถุดิบ</label>
                                    <input type="text" name="metarial_name" class="form-control" placeholder="กรอกชื่อวัตถุดิบ" required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>หน่วยนับ</label>
                                    <input type="text" name="metarial_unit" class="form-control" placeholder="จำนวนนำเข้า" required>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ปริมาตร</label>
                                    <input type="text" name="metarial_volume" class="form-control" placeholder="กรอกปริมาตร" required>
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันหมดอายุ</label>
                                    <input name="metarial_expdate" class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                            </div>
                        </div>
                    </section>
                    <!-- </form> -->
                    <?php echo form_close() ?>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>