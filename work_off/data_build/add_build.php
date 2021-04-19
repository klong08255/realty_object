<div class="d-flex justify-content-start mb-2"><a href="officer.php?p=data_build" class = "btn btn-primary"><i class="fas fa-arrow-circle-left"></i> ย้อนกลับ</a></div>

        <?php
            if(!isset($_GET['id4edit'])){
        ?>
        <div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"><i class="fas fa-folder-plus"></i> เพิ่มข้อมูลอาคาร</h3>
            </div>
            <div class="card-body"> 
        
                    <form class="jumbotron" action="../work_off/data_build/chk_addBuild.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>ที่อยู่ของอาคาร</label>
                    <textarea  class="form-control" id="inputBuild_address" name="build_address" required></textarea> 
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label>เงินประกันการเช่า</label>
                    <input type="number" class="form-control" id="inputRent_deposit" name="rent_deposit" required placeholder="กรอกเงินประกันการเช่า">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ค่าบำรุงการจดทะเบียน</label>
                    <input type="number" class="form-control" id="inputRegis_fee" name="regis_fee" required placeholder="กรอกค่าบำรุงการจดทะเบียน">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ความกว้าง</label>
                    <input type="number" class="form-control" id="inputWidth" name="width" required placeholder="กรอกความกว้าง">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ความยาว</label>
                    <input type="number" class="form-control" id="inputLenght" name="lenght" required placeholder="กรอกความยาว">
                    </div>
                    <div class="form-group col-md-2">
                    <label>จำนวนชั้น</label>
                    <input type="number" class="form-control" id="inputNumb_layer" name="numb_layer" required placeholder="กรอกจำนวนชั้น">
                    </div>
                    <div class="form-group col-md-2">
                    <label>จำนวนคูหา</label>
                    <input type="number" class="form-control" id="inputNumb_row" name="numb_row" required placeholder="กรอกจำนวนคูหา">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label for="inputState">ประเภท</label>
                    <select id="inputState" class="form-control" name="type" required placeholder="เลือก">
                        <option value="อาศัย">อาศัย</option>
                        <option value="ร้านค้า">ร้านค้า</option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label>เรตค่าเช่า</label>
                    <input type="text" class="form-control" id="inputRate" name="rate" required placeholder="กรอกเรตค่าเช่า">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ภาษีที่ดิน/ปี</label>
                    <input type="number" class="form-control" id="inputLand_tax" name="land_tax" required placeholder="กรอกภาษีที่ดิน/ปี">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ค่าธรรมเนียมสัญญา</label>
                    <input type="number" class="form-control" id="inputContract_fee" name="contract_fee" required placeholder="กรอกค่าธรรมเนียมสัญญา">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ค่าทำสัญญา</label>
                    <input type="number" class="form-control" id="inputContract_fee2" name="contract_fee2" required placeholder="กรอกค่าทำสัญญา">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label>เลขประกันภัย</label>
                    <input type="text" class="form-control" id="inputNumber_insurance" name="number_insurance" required placeholder="กรอกเลขประกันภัย">
                    </div>
                    <div class="form-group col-md-3">
                    <label>ค่าประกันอัคคีภัย</label>
                    <input type="text" class="form-control" id="inputInsurance_fire" name="insurance_fire" required placeholder="กรอกค่าประกันอัคคีภัย">
                    </div>
                    <div class="form-group col-md-3">
                    <label>วันที่เริ่มประกัน</label>
                    <input type="date" class="form-control" id="inputDate_insurance" name="date_insurance" required placeholder="กรอกวันที่เริ่มประกัน">
                    </div>
                    <div class="form-group col-md-3">
                    <label>วันที่หมดประกัน</label>
                    <input type="date" class="form-control" id="inputDate_insurance_stop" name="date_insurance_stop" required placeholder="กรอกวันที่หมดประกัน">
                    </div>
                </div>

                <div class="text-right">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-success" name="submit">เพิ่มข้อมูลอาคาร</button>
                </div>

                </div>
                

                </form>

            

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

                    $sql = $edit->runQuery("SELECT * FROM data_build WHERE id='$id4edit' ");
                    if($sql){
                        $fetch = mysqli_fetch_array($sql);
                        ?>
        <div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"><i class="fas fa-folder-plus"></i> แก้ไขข้อมูลอาคาร</h3>
            </div>
            <div class="card-body"> 
        
                    <form class="jumbotron" action="../work_off/data_build/chkEdit.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <input type="text" name="id4edit" value="<?php echo $id4edit ; ?>" hidden>
                    <label>ที่อยู่ของอาคาร</label>
                    <textarea  class="form-control" id="inputBuild_address" name="build_address" required><?php echo $fetch['build_address']; ?></textarea> 
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label>เงินประกันการเช่า</label>
                    <input type="number" class="form-control" id="inputRent_deposit" name="rent_deposit" required placeholder="กรอกเงินประกันการเช่า" value="<?php echo $fetch['rent_deposit']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ค่าบำรุงการจดทะเบียน</label>
                    <input type="number" class="form-control" id="inputRegis_fee" name="regis_fee" required placeholder="กรอกค่าบำรุงการจดทะเบียน" value="<?php echo $fetch['regis_fee']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ความกว้าง</label>
                    <input type="number" class="form-control" id="inputWidth" name="width" required placeholder="กรอกความกว้าง" value="<?php echo $fetch['width']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ความยาว</label>
                    <input type="number" class="form-control" id="inputLenght" name="lenght" required placeholder="กรอกความยาว" value="<?php echo $fetch['lenght']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label>จำนวนชั้น</label>
                    <input type="number" class="form-control" id="inputNumb_layer" name="numb_layer" required placeholder="กรอกจำนวนชั้น" value="<?php echo $fetch['numb_layer']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label>จำนวนคูหา</label>
                    <input type="number" class="form-control" id="inputNumb_row" name="numb_row" required placeholder="กรอกจำนวนคูหา" value="<?php echo $fetch['numb_row']; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label for="inputState">ประเภท</label>
                    <select id="inputState" class="form-control" name="type" required placeholder="เลือก">
                        <option value="อาศัย">อาศัย</option>
                        <option value="ร้านค้า">ร้านค้า</option>
                    </select>
                    </div>
                    
                    <div class="form-group col-md-2">
                    <label>เรตค่าเช่า</label>
                    <input type="text" class="form-control" id="inputRate" name="rate" required placeholder="กรอกเรตค่าเช่า" value="<?php echo $fetch['rate']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ภาษีที่ดิน/ปี</label>
                    <input type="number" class="form-control" id="inputLand_tax" name="land_tax" required placeholder="กรอกภาษีที่ดิน/ปี" value="<?php echo $fetch['land_tax']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ค่าธรรมเนียมสัญญา</label>
                    <input type="number" class="form-control" id="inputContract_fee" name="contract_fee" required placeholder="กรอกค่าธรรมเนียมสัญญา" value="<?php echo $fetch['contract_fee']; ?>">
                    </div>
                    <div class="form-group col-md-2">
                    <label>ค่าทำสัญญา</label>
                    <input type="number" class="form-control" id="inputContract_fee2" name="contract_fee2" required placeholder="กรอกค่าทำสัญญา" value="<?php echo $fetch['contract_fee2']; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label>เลขประกันภัย</label>
                    <input type="text" class="form-control" id="inputNumber_insurance" name="number_insurance" required placeholder="กรอกเลขประกันภัย" value="<?php echo $fetch['number_insurance']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                    <label>ค่าประกันอัคคีภัย</label>
                    <input type="number" class="form-control" id="inputInsurance_fire" name="insurance_fire" required placeholder="กรอกค่าประกันภัย"  value="<?php echo $fetch['insurance_fire']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                    <label>วันที่เริ่มประกัน</label>
                    <input type="date" class="form-control" id="inputDate_insurance" name="date_insurance" required placeholder="กรอกวันที่เริ่มประกัน" value="<?php echo $fetch['date_insurance']; ?>">
                    </div>
                    <div class="form-group col-md-3">
                    <label>วันที่หมดประกัน</label>
                    <input type="date" class="form-control" id="inputDate_insurance_stop" name="date_insurance_stop" required placeholder="กรอกวันที่หมดประกัน"  value="<?php echo $fetch['date_insurance']; ?>">
                    </div>
                </div>

                <div class="text-right">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-success" name="submit">แก้ไขข้อมูลอาคาร</button>
                </div>

                </div>
                

                </form>

            

            </div>
                <?php
            }else{
                echo"Can't SQL";
            }
    
                    
            
    }
    ?>