
<div class="d-flex justify-content-start mb-2"><a href="officer.php?p=p4_show_tenant" class = "btn btn-primary"><i class="fas fa-arrow-circle-left"></i> ย้อนกลับ</a></div>


<div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"><i class="fas fa-user-plus"></i> ตารางจัดการข้อมูลผู้เช่า</h3>
            </div>
            <div class="card-body"> 
        
                    <form class="jumbotron" action="../work_off/adduser/chk_addUser.php" method="post">
                
                <div class="form-row">
                <div class="form-group col-md-1">
                    <label>คำนำหน้าชื่อ</label>
                    <select id="inputState" class="form-control" name="user_level" required >
                        <option value="แอดมิน">นาย</option>
                        <option value="เจ้าหน้าที่">นาง</option>
                        <option value="ผู้บริหาร">นางสาว</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" id="inputName" name="first_name" required placeholder="ชื่อ">
                    </div>
                    <div class="form-group col-md-4">
                    <label>นามสกุล</label>
                    <input type="text" class="form-control" id="inputLastname" name="last_name" required placeholder="นามสกุล">
                    </div>
                    <div class="form-group col-md-3">
                    <label>บัตรประจำตัวประชาชน</label>
                    <input type="text" class="form-control" id="inputIdcard" name="idcard" required placeholder="บัตรประจำตัวประชาชน">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label>ที่อยู่ตามบัตรประชาชน</label>
                    <input type="email" class="form-control" id="inputAddress_idcard" name="address_idcard" required placeholder="บ้านเลขที่">
                    </div>
                    <div class="form-group col-md-3">
                    <label>วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="inputBrithday" name="brithday" required placeholder="" value="">
                    </div>
                    <div class="form-group col-md-3">
                    <label>เบอร์โทรติดต่อ</label>
                    <input type="text" class="form-control" id="inputPhone_number" name="phone_number" required placeholder="เบอร์โทร" maxlength="10">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label>E-mail</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" required placeholder="E-mail">
                    </div>
                    
                </div>

                <div class="text-right">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-success">เพิ่มผู้ใช้งาน</button>
                </div>

                </form>

            

            </div>
        </div>

        
        

               

                </form>

            

            </div>
        </div>