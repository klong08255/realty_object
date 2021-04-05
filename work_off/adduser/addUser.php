
<div class="card">
    <div class="card-header text-center">
        <h3 class="font-weight-bold"><i class="fas fa-user-plus"></i> เพิ่มผู้ใช้งาน</h3>
    </div>
    <div class="card-body">
            <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label>Username</label>
            <input type="text" class="form-control" id="inputUsername" name="username" required placeholder="Username">
            </div>
            <div class="form-group col-md-6">
            <label>Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password" required placeholder="Password">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
            <label>คำนำหน้า</label>
            <input type="text" class="form-control" id="inputUsername" name="title_name" required placeholder="คำนำหน้า">
            </div>
            <div class="form-group col-md-5">
            <label>ชื่อ</label>
            <input type="password" class="form-control" id="inputName" name="first_name" required placeholder="ชื่อ">
            </div>
            <div class="form-group col-md-5">
            <label>นามสกุล</label>
            <input type="password" class="form-control" id="inputLastname" name="last_name" required placeholder="นามสกุล">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputCity">E-mail</label>
            <input type="email" class="form-control" id="inputEmail" name="email" required placeholder="E-mail">
            </div>
            <div class="form-group col-md-4">
            <label for="inputCity">เบอร์โทรติดต่อ</label>
            <input type="text" class="form-control" id="inputUserlevel" name="user_level" required placeholder="เบอร์โทร">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">สถานะ</label>
            <select id="inputState" class="form-control" name="title_name" required>
                <option selected>เลือก</option>
                <option>เจ้าหน้าที่</option>
                <option>ผู้บริหาร</option>
            </select>
            </div>
        </div>
    
        <button type="submit" class="btn btn-success">เพิ่ม</button>
        </form>
    </div>
</div>
