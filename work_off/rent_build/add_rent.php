<div class="d-flex justify-content-start mb-2"><a href="officer.php?p=show_rent_mange" class = "btn btn-primary"><i class="fas fa-arrow-circle-left"></i> ย้อนกลับ</a></div>

        <?php
            if(!isset($_GET['id4edit'])){
        ?>
        <div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"><i class="fas fa-folder-plus"></i> เพิ่มข้อมูลการเช่าอาคารอสังหาริมทรัพย์</h3>
            </div>
            <div class="card-body"> 
        
                <form class="jumbotron" action="../work_off/rent_build/chk_add.php" method="post" enctype="multipart/form-data" >
                    <div class="form-row">
                        
                        <div class="form-group col-md-4">
                            <label for="inputState">เลือกข้อมูลอาคาร</label>
                                <select id="" class="form-control" name="type" required placeholder="เลือก">
                                
                                                <option selected value="">----:: โปรดเลือกข้อมูลอาคาร ::----</option>

                                                <?php
                                    $selectTable_D_B = new queryData();
                                    
                                    $sql1 = $selectTable_D_B->runQuery("SELECT * FROM data_build WHERE status='empty' ");
                                    if($sql1){
                                        while($num1 = mysqli_fetch_array($sql1)){
                                            ?>
                                                <option class="text-wrap" value="<?php echo $num1['id'];?>"><?php echo $num1['build_address']; ?></option>
                                            <?php
                                        }
                                    }else{
                                        echo"Can't SQL1";
                                    }
                                ?>
                                </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" id="inputName" name="name" required placeholder="กรอกชื่อ-นามสกุล">
                        </div>
                        <div class="form-group col-md-1">
                            <label>ประเภท</label>
                            <select id="inputState" class="form-control" name="prefix" required >
                                <option value="อาศัย">อาศัย</option>
                                <option value="ค้าขาย">ค้าขาย</option>
                                <option value="บริษัท">บริษัท</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>ชื่อร้านค้า/บ้าน</label>
                        <input type="text" class="form-control" id="inputNamebuild" name="namebuild" required placeholder="ชื่ออาคาร">
                        </div>
                    </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>วันที่เริ่มเช่า</label>
                            <input type="date" class="form-control" id="input" name="datestart_rent" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label>วันที่สิ้นสุดการเช่า</label>
                            <input type="date" class="form-control" id="input" name="datestop_rent" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>เลขที่กรมธรรม์ประกันภัยอาคาร</label>
                                <input type="text" class="form-control" id="inputInsurance_number" name="insurance_number" required placeholder="กรอกเลขที่กรมธรรม์ประกันภัยอาคาร">
                            </div>
                            <div class="form-group col-md-2">
                                <label>วันที่เริ่มประกัน</label>
                                <input type="date" class="form-control" id="inputDate_insurance" name="date_insurance" required placeholder="" value="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>วันที่สิ้นสุดประกัน</label>
                                <input type="date" class="form-control" id="inputDate_insurance_stop" name="date_insurance_stop" required placeholder="" value="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>เรตค่าเช่า</label>
                                <input type="number" class="form-control" id="inputRate" name="rate" required placeholder="กรอกเรตค่าเช่า" maxlength="10">
                            </div>
                            <div class="form-group col-md-2">
                                <label>ค่าเช่า/เดือน</label>
                                <input type="number" class="form-control" id="inputRent_month" name="rent_month" required placeholder="ค่าเช่า/เดือน">
                            </div>                   
                            <div class="form-group col-md-2">
                                <label>ค่าเช่า/ปี</label>
                                <input type="number" class="form-control" id="inputRent_year" name="rent_year" required placeholder="ค่าเช่า/เดือน">
                            </div>
                            <div class="form-group col-md-2">
                                <label>ค่าธรรมเนียมการทำสัญญา</label>
                                <input type="number" class="form-control" id="inputContract_fee" name="contract_fee" required placeholder="ค่าธรรมเนียมการทำสัญญา">
                            </div>
                            <div class="form-group col-md-2">
                                <label>ค่าบำรุงการจดทะเบียน</label>
                                <input type="number" class="form-control" id="inputRegis_fee" name="regis_fee" required placeholder="ค่าบำรุงการจดทะเบียน" value="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>ค่าประกันอัคคีภัย</label>
                                <input type="number" class="form-control" id="inputFire_insurance" name="fire_insurance" required placeholder="ค่าประกันอัคคีภัย" value="">
                            </div>
                        </div>    
                        
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>รวมทั้งสิ้น</label>
                                <input type="number" class="form-control" id="inputSum" name="sum" required placeholder="รวมทั้งสิ้น" value="">
                            </div>
                            <div id="show_img" class="form-group col-md-2 " >
                                <label>หลักฐานการชำระเงิน</label>
                                <input type="file" class="" id="img" name="slip_receipt" required>
                            </div>
                        </div>
                            
                    




            </div>
                    
                    </div>

                <div class="text-right">
                    <button type="reset" class="btn btn-warning">ยกเลิก</button>
                    <button type="submit" class="btn btn-success" name="submit">เพิ่มข้อมูลการเช่า</button>
                </div>
                <!-- แก้ตรงงงี้ -->
                </form>
                    ทำเพิ่มข้อมูลการเช่า
                    

            

            </div>
        

        <?php
            }
            //
            // ──────────────────────────────────────────────────────── I ──────────
            //!   :::::: F O R   E D I T : :  :   :    :     :        :          :
            // ──────────────────────────────────────────────────────────────────
            //

            
            if(isset($_GET['id4edit'])){
                        $id4edit = $_GET['id4edit'];
                    $edit = new queryData();

                    $sql = $edit->runQuery("SELECT data_build.*, people_rent.* FROM people_rent LEFT JOIN data_build ON people_rent.id_data_build = data_build.id WHERE id_rent='$id4edit' ");
                    if($sql){
                        $fetch = mysqli_fetch_array($sql);
                        ?>
                        <div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"> แก้ไขข้อมูลข้อมูลการเช่าอาคารอสังหาริมทรัพย์</h3>
            </div>
            <div class="card-body"> 
        
                <form class="jumbotron" action="../work_off/rent_build/chk_edit.php" method="post" enctype="multipart/form-data" >
                    <input type="text" name="id4edit" value="<?php echo $fetch['id_rent'];?>" hidden="true">
                    <input type="text" name="id4data_b" value="<?php echo $fetch['id'];?>" hidden="true">
                    <div class="form-row">
                    
                        
                        <div class="form-group col-md-4">
                            <label for="inputState">ที่อยู่อาคารที่คุณเลือก</label>
                            <textarea rows="" class="form-control" readOnly="true" required><?php echo $fetch['build_address'];?></textarea>
                            
                        </div>
                        <div class="form-group col-md-2">
                        <label>ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" id="inputName" name="name" required placeholder="กรอกชื่อ-นามสกุล" value="<?php echo $fetch['name'];?>">
                        </div>
                        <div class="form-group col-md-2">
                        <label>เลขประจำตัวประชาชน</label>
                        <input type="text" class="form-control" id="inputId_card" name="card_id4people" required placeholder="กรอกเลขประจำตัวประชาชน" maxlength="13" value="<?php echo $fetch['id_card'];?>">
                        </div>
                        <div class="form-group col-md-4">
                        <label>บ้านเลขที่ตามบัตรประชาชน</label>
                        <textarea  class="form-control" id="inputAddress" name="address" required><?php echo $fetch['address'];?></textarea>
                        </div>
                        <div class="form-group col-md-2">
                        <label>วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="inputBrithday" name="brithday" required placeholder="" value="<?php echo $fetch['brithday'];?>">
                        </div>
                        <div class="form-group col-md-2">
                        <label>อายุ</label>
                        <input type="number" class="form-control" id="inputAge" name="age" required placeholder="กรอกอายุ" value="<?php echo $fetch['age'];?>">
                        </div>
                        <div class="form-group col-md-2">
                        <label>เชื้อชาติ</label>
                        <input type="text" class="form-control" id="inputNationality" name="nationality" required placeholder="กรอกเชื้อชาติ" value="<?php echo $fetch['nationality'];?>">
                        </div>
                        <div class="form-group col-md-2">
                        <label>สัญชาติ</label>
                        <input type="text" class="form-control" id="inputNationality2" name="nationality2" required placeholder="กรอกสัญชาติ" value="<?php echo $fetch['nationality2'];?>">
                        </div>
                        <div class="form-group col-md-2">
                        <label>โทรศัพท์</label>
                        <input type="text" class="form-control" id="inputPhone_number" name="phone_number" required placeholder="กรอกเบอร์โทรศัพท์" maxlength="10" value="<?php echo $fetch['phone_number'];?>">
                        </div>
                        <div class="form-group col-md-2">
                        <label>สถานะชำระเงิน</label>
                            <select id="inputState" class="form-control" name="status_pay" required placeholder="เลือก">
                                <option value="ชำระแล้ว">ชำระแล้ว</option>
                                <option value="ยังไม่ชำระ">ยังไม่ชำระ</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label>วันที่เริ่มเช่า</label>
                        <input type="date" class="form-control" id="input" name="datestart_rent" required value="<?php echo $fetch['datestart_rent'];?>">
                        </div>
                        <div class="form-group col-md-2">
                        <label>วันที่ครบกำหนด</label>
                        <input type="date" class="form-control" id="input" name="datestop_rent" required value="<?php echo $fetch['datestop_rent'];?>">
                        </div>
                        <div id="show_img" class="form-group col-md-2 ">
                        <label>ภาพหลักฐานการจ่ายเงิน</label>
                        <input type="file" class="" id="img" name="slip_receipt" required>
                        </div>
                    </div>

                <div class="text-right">
                    <button  type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success" name="submit">แก้ไขข้อมูลข้อมูลการเช่า</button>
                </div>
                <!-- แก้กงงี้ -->
                </form>
                    
                    

            

            </div>
        
                <?php
            }else{
                echo"Can't SQL";
            }
    
                    
            
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    
        $("#inputState").change(()=>{
           
                if($("#inputState").val() == "ยังไม่ชำระ"){
                    $("#show_img").attr('hidden', true)
                    $("#img").attr('type', '')
                    $("#img").attr('required', false)
                }
                if($("#inputState").val() == "ชำระแล้ว"){
                    $("#show_img").attr('hidden', false)
                    $("#img").attr('type', 'file')
                    $("#img").attr('required', true)
                }
        
        })
    </script>