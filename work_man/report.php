<?php
                include_once('../function.php');
                $insertUser = new queryData();
            ?>


            <div class="card">
                <div class="card-header" id="bg_hd_card_m2">
                    <h3 class="font-weight-bold text-center"><b><i class="fas fa-table"></i> ตารางข้อมูลผู้ใช้งานทั้งหมด 👨‍💻</b></h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped min-vw-100" id="myTable">
                        <thead class="text-center alert alert-success">
                            <tr id="bg_hd_table_m">
                                <th scope="col">ลำดับ</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">ชื่อ</th>
                                <th scope="col">email</th>
                                <th scope="col">หมายเลขโทรศัพท์</th>
                                <th scope="col">ตำแหน่ง</th>
                                

                            </tr>
                        </thead>
                        <tbody class="text-center">


                            <?php
                            $n=1;
                            $res = $insertUser->runQuery("SELECT * FROM user ORDER BY id");
                            while($num = mysqli_fetch_array($res))
                            {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $n;?>
                                </td>
                                <td>
                                    <?php echo $num['username'];?>
                                </td>
                                <td>
                                    <?php echo md5($num['password']);?>
                                </td>
                                <td>
                                    <?php echo $num['title_name']." ".$num['first_name']." ".$num['last_name'];?>
                                </td>
                                <td>
                                    <?php echo $num['email'];?>
                                </td>
                                <td>
                                    <?php echo $num['phone_number'];?>
                                </td>
                                <td>
                                    <?php echo $num['user_level'];?>
                                </td>
                            </tr>
                            <?php
                            $n++;
                            }
                            
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


            


            <?php
                    //
                    // ──────────────────────────────────────────────────────────── I ──────────
                    //!   :::::: F O R   D E L E T E : :  :   :    :     :        :          :
                    // ──────────────────────────────────────────────────────────────────────
                    //

                    
                    
                    if(isset($_GET['del']) == "chk"){
                        $id4del = $_GET['id4del'];
                        ?>
            <script>
            $(document).ready(function() {
                Swal.fire({
                    title: 'ต้องการลบหรือไม่?',
                    text: "คุณต้องการลบผู้ใช้งานหรือไม่!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ต้องการ',
                    cancelButtonText: 'ไม่ต้องการ'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'officer.php?p=showMember&chkDel=ok&id4del=<?php echo $id4del; ?>';
                    } else {
                        window.location.href = 'officer.php?p=showMember';
                    }
                })
            });
            </script>
            <?php
                    }

                    if(isset($_GET['chkDel'])=="ok"){
                        $delUser = new queryData();
                        $id4del = $_GET['id4del'];
                        $sql = $delUser->runQuery("DELETE FROM user WHERE id='$id4del' ");
                        if($sql){
                            ?>
            <script>
            Swal.fire({
                title:'ลบข้อมูลเรียบร้อยแล้ว!',
                icon:'success',
                showConfirmButton: false,
                timer:'2000'
            }).then(function(){
                window.location.href = 'officer.php?p=showMember';
            });
            </script>
            <?php
                        }else{
                            echo "Can't SQL";
                        }
                        
                    }
                    
            ?>