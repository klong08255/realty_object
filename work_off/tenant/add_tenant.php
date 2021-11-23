
<div class="d-flex justify-content-start mb-2"><a href="officer.php?p=p4_show_tenant" class = "btn btn-primary"><i class="fas fa-arrow-circle-left"></i> ย้อนกลับ</a></div>

<div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"><i class="fas fa-user-plus"></i> เพิ่มข้อมูลผู้เช่า</h3>
            </div>
            <div class="card-body"> 
        
                    <form class="jumbotron" action="../work_off/adduser/chk_addUser.php" method="post">
                
                <div class="form-row">
                <div class="form-group col-md-1">
                    <label>คำนำหน้าชื่อ</label>
                    <select id="inputState" class="form-control" name="prefix" required >
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label>ชื่อ-นามสกุล</label>
                    <input type="text" class="form-control" id="inputName" name="name" required placeholder="กรอกชื่อ-นามสกุล">
                    </div>
                    <div class="form-group col-md-3">
                    <label>บัตรประจำตัวประชาชน</label>
                    <input type="text" class="form-control" id="inputIdcard" name="idcard" required placeholder="กรอกบัตรประจำตัวประชาชน">
                    </div>
                    <div class="form-group col-md-2">
                    <label>เชื้อชาติ</label>
                    <input type="text" class="form-control" id="inputNationality" name="nationality" required placeholder="กรอกเชื้อชาติ">
                    </div>
                    <div class="form-group col-md-2">
                    <label>สัญชาติ</label>
                    <input type="text" class="form-control" id="inputNationality2" name="nationality2" required placeholder="กรอกสัญชาติ">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label>ที่อยู่ตามบัตรประชาชน</label>
                    <input type="address_idcard" class="form-control" id="inputAddress_idcard" name="address_idcard" required placeholder="กรอกบ้านเลขที่">
                    </div>
                    <div class="form-group col-md-3">
                    <label>วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="inputBrithday" name="brithday" required placeholder="" value="">
                    </div>
                    <div class="form-group col-md-1">
                    <label>อายุ</label>
                        <input type="text" class="form-control" id="inputAge" name="age" required placeholder="" value="อายุ">
                    </div>
                    <div class="form-group col-md-2">
                    <label>เบอร์โทรติดต่อ</label>
                    <input type="text" class="form-control" id="inputPhone_number" name="phone_number" required placeholder="กรอกเบอร์โทร" maxlength="10">
                    </div>
                    <div class="form-group col-md-3">
                    <label>E-mail</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" required placeholder="กรอก E-mail">
                    </div>
                </div>
                

                    <div class="text-right">
                        <button type="reset" class="btn btn-warning">ยกเลิก</button>
                        <button type="submit" class="btn btn-success">เพิ่มผู้ใช้งาน</button>
                    </div>

                </form>
            </div>
        </div>


/**ทำเพิ่มข้อมูล