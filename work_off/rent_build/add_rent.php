<div class="d-flex justify-content-start mb-2"><a href="officer.php?p=show_rent_mange" class = "btn btn-primary"><i class="fas fa-arrow-circle-left"></i> ย้อนกลับ</a></div>

        <?php
            if(!isset($_GET['id4edit'])){
        ?>
        <div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"><i class="fas fa-folder-plus"></i> เพิ่มข้อมูลการเช่าอาคารอสังหาริมทรัพย์</h3>
            </div>
            <div class="card-body"> 
        
                <form class="jumbotron" action="###" method="post">
                    <div class="form-row">
                        
                        <div class="form-group col-md-4">
                            <label for="inputState">ตารางbuild</label>
                                <select id="inputState" class="form-control" name="type" required placeholder="เลือก">
                                
                                                <option selected value="">----:: โปรดเลือกอาคารที่ต้องการเช่า ::----</option>

                                                <?php
                                    $selectTable_D_B = new queryData();
                                    
                                    $sql1 = $selectTable_D_B->runQuery("SELECT * FROM data_build WHERE status='empty' ");
                                    if($sql1){
                                        while($num1 = mysqli_fetch_array($sql1)){
                                            ?>
                                                <option class="text-wrap" value=""><?php echo $num1['build_address']; ?></option>
                                            <?php
                                        }
                                    }else{
                                        echo"Can't SQL1";
                                    }
                                ?>
                                    

                                    
                                </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label>ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" id="inputName" name="name" required placeholder="กรอกชื่อ-นามสกุล">
                        </div>
                        <div class="form-group col-md-2">
                        <label>เลขประจำตัวประชาชน</label>
                        <input type="number" class="form-control" id="inputId_card" name="id_card" required placeholder="กรอกเลขประจำตัวประชาชน" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;">
                        </div>
                        <div class="form-group col-md-4">
                        <label>บ้านเลขที่ตามบัตรประชาชน</label>
                        <textarea  class="form-control" id="inputAddress" name="address" required></textarea>
                        </div>
                        <div class="form-group col-md-2">
                        <label>วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="inputBrithday" name="brithday" required placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                        <label>อายุ</label>
                        <input type="number" class="form-control" id="inputAge" name="age" required placeholder="กรอกอายุ">
                        </div>
                        <div class="form-group col-md-2">
                        <label>เชื้อชาติ</label>
                        <input type="text" class="form-control" id="inputNationality" name="nationality" required placeholder="กรอกเชื้อชาติ">
                        </div>
                        <div class="form-group col-md-2">
                        <label>สัญชาติ</label>
                        <input type="text" class="form-control" id="inputNationality2" name="nationality2" required placeholder="กรอกสัญชาติ">
                        </div>
                        <div class="form-group col-md-2">
                        <label>โทรศัพท์</label>
                        <input type="text" class="form-control" id="inputPhone_number" name="phone_number" required placeholder="กรอกเบอร์โทรศัพท์">
                        </div>
                        <div class="form-group col-md-2">
                        <label>สถานะชำระเงิน</label>
                            <select id="inputState" class="form-control" name="type" required placeholder="เลือก">
                                <option value="ชำระแล้ว">ชำระแล้ว</option>
                                <option value="ยังไม่ชำะ">ยังไม่ชำะ</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label>วันที่เริ่มเช่า</label>
                        <input type="date" class="form-control" id="input" name="" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label>วันที่ครบสัญญาเช่า</label>
                        <input type="date" class="form-control" id="input" name="" required>
                        </div>
                    </div>

                <div class="text-right">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success" name="submit">เพิ่มข้อมูลการเช่า</button>
                </div>
                <!-- แก้กงงี้ -->
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
        
                <?php
            }else{
                echo"Can't SQL";
            }
    
                    
            
    }
    ?>