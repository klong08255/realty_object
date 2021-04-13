<div class="d-flex justify-content-start mb-2"><a href="officer.php?p=data_build" class = "btn btn-primary"><i class="fas fa-arrow-circle-left"></i> ย้อนกลับ</a></div>

        <?php
            if(!isset($_GET['id4edit'])){
        ?>
        <div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"><i class="fas fa-folder-plus"></i> เพิ่มข้อมูลอาคาร</h3>
            </div>
            <div class="card-body"> 
        
                    <form class="jumbotron" action="######" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>ที่อยู่ของอาคาร</label>
                    <textarea  class="form-control" id="inputBuild_address" name="build_address" required></textarea> 
                    </div>
                    <div class="form-group col-md-3">
                    <label>ค่าเช่า/เดือน</label>
                    <input type="number" class="form-control" id="inputRent_month" name="rent_month" required placeholder="กรอกค่าเช่า/เดือน">
                    </div>
                    <div class="form-group col-md-3">
                    <label>ค่าเช่า/ปี</label>
                    <input type="number" class="form-control" id="inputRent_year" name="rent_year" required placeholder="กรอกค่าเช่า/ปี">
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
                    <label>พื้นที่ใช้สอย</label>
                    <input type="text" class="form-control" id="inputUse_areal" name="use_area" required placeholder="กรอกพื้นที่ใช้สอย">
                    </div>
                    <div class="form-group col-md-2">
                    <label>เรตค่าเช่า</label>
                    <input type="number" class="form-control" id="inputRate" name="rate" required placeholder="กรอกเรตค่าเช่า">
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
                    <div class="form-group col-md-6">
                    <label>เลขประกันภัย</label>
                    <input type="text" class="form-control" id="inputNumber_insurance" name="number_insurance" required placeholder="กรอกเลขประกันภัย">
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
                <button type="submit" class="btn btn-success">เพิ่มข้อมูลอาคาร</button>
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

                    $sql = $edit->runQuery("SELECT * FROM user WHERE id='$id4edit' ");
                    if($sql){
                        $fetch = mysqli_fetch_array($sql);
                        ?>
        <div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold text-center"><i class="fas fa-user-edit text-success"></i> แก้ไขผู้ใช้งาน</h3>
            </div>
            <div class="card-body"> 
        
                    <form class="jumbotron" action="../work_off/editUser/chkEdit.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Username</label>
                    <input type="text" class="form-control border border-success" id="inputUsername" name="id" value="<?php echo $fetch['id'];?>" hidden>
                    <input type="text" class="form-control border border-success" id="inputUsername" name="username" value="<?php echo $fetch['username'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="text" class="form-control border border-success" id="inputPassword" name="password" value="<?php echo $fetch['password'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label>คำนำหน้า</label>
                    <input type="text" class="form-control border border-success" id="inputUsername" name="title_name"  value="<?php echo $fetch['title_name'];?>">
                    </div>
                    <div class="form-group col-md-5">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control border border-success" id="inputName" name="first_name" value="<?php echo $fetch['first_name'];?>">
                    </div>
                    <div class="form-group col-md-5">
                    <label>นามสกุล</label>
                    <input type="text" class="form-control border border-success" id="inputLastname" name="last_name"  value="<?php echo $fetch['last_name'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">E-mail</label>
                    <input type="email" class="form-control border border-success" id="inputEmail" name="email" value="<?php echo $fetch['email'];?>">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">เบอร์โทรติดต่อ</label>
                    <input type="text" class="form-control border border-success" id="inputUserlevel" name="phone_number" value="<?php echo $fetch['phone_number'];?>" maxlength="10">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">สถานะ</label>
                    <select id="inputState" class="form-control border border-success" name="user_level" required>
                        <option selected value="<?php echo $fetch['user_level'];?>"><?php echo $fetch['user_level'];?></option>
                        <option value="แอดมิน">แอดมิน</option>
                        <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                        <option value="ผู้บริหาร">ผู้บริหาร</option>
                    </select>
                    </div>
                </div>

                <div class="text-right">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-success">แก้ไขผู้ใช้งาน</button>
                </div>

                </form>

            

            </div>
        </div>
                <?php
            }else{
                echo"Can't SQL";
            }
    
                    
            
    }
    ?>