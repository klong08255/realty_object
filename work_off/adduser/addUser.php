<div class="d-flex justify-content-start mb-2"><a href="officer.php?p=showMember" class = "btn btn-primary">ย้อนกลับ <</a></div>

        <?php
            if(!isset($_GET['id4edit'])){
        ?>
        <div class="card">
            <div class="card-header text-center alert alert-primary">
                <h3 class="font-weight-bold"><i class="fas fa-user-plus"></i> เพิ่มผู้ใช้งาน</h3>
            </div>
            <div class="card-body"> 
        
                    <form class="jumbotron" action="../work_off/adduser/chk_addUser.php" method="post">
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
                    <input type="text" class="form-control" id="inputName" name="first_name" required placeholder="ชื่อ">
                    </div>
                    <div class="form-group col-md-5">
                    <label>นามสกุล</label>
                    <input type="text" class="form-control" id="inputLastname" name="last_name" required placeholder="นามสกุล">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" required placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">เบอร์โทรติดต่อ</label>
                    <input type="text" class="form-control" id="inputUserlevel" name="phone_number" required placeholder="เบอร์โทร" maxlength="10">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">สถานะ</label>
                    <select id="inputState" class="form-control" name="user_level" required>
                    <option value="แอดมิน">แอดมิน</option>
                        <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                        <option value="ผู้บริหาร">ผู้บริหาร</option>
                    </select>
                    </div>
                </div>

                <div class="text-right">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-success">เพิ่มผู้ใช้งาน</button>
                </div>

                </form>

            

            </div>
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
            <div class="card-header text-center alert alert-warning">
                <h3 class="font-weight-bold"><i class="fas fa-user-edit"></i> แก้ไขผู้ใช้งาน</h3>
            </div>
            <div class="card-body"> 
        
                    <form class="jumbotron" action="../work_off/editUser/chkEdit.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Username</label>
                    <input type="text" class="form-control" id="inputUsername" name="id" value="<?php echo $fetch['id'];?>" hidden>
                    <input type="text" class="form-control" id="inputUsername" name="username" value="<?php echo $fetch['username'];?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="text" class="form-control" id="inputPassword" name="password" value="<?php echo $fetch['password'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label>คำนำหน้า</label>
                    <input type="text" class="form-control" id="inputUsername" name="title_name"  value="<?php echo $fetch['title_name'];?>">
                    </div>
                    <div class="form-group col-md-5">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" id="inputName" name="first_name" value="<?php echo $fetch['first_name'];?>">
                    </div>
                    <div class="form-group col-md-5">
                    <label>นามสกุล</label>
                    <input type="text" class="form-control" id="inputLastname" name="last_name"  value="<?php echo $fetch['last_name'];?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $fetch['email'];?>">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">เบอร์โทรติดต่อ</label>
                    <input type="text" class="form-control" id="inputUserlevel" name="phone_number" value="<?php echo $fetch['phone_number'];?>" maxlength="10">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">สถานะ</label>
                    <select id="inputState" class="form-control" name="user_level" required>
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