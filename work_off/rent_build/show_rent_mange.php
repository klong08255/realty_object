<?php
                include_once('../function.php');
                $insertUser = new queryData();
            ?>

            <div class="d-flex justify-content-end mb-2"><a href="officer.php?p=add_rent"
                    class="btn btn-success">เพิ่มข้อมูลการเช่าอาคารอสังหาริมทรัพย์ <i class="fas fa-plus-circle"></i></a></div>

            <div class="card">
                <div class="card-header" id="bg_hd_card_m2">
                    <h3 class="font-weight-bold text-center"><b><i class="fas fa-table"></i> ตรางจัดการการเช่าอาคารอสังหาริมทรัพย์</b></h3>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped w-100" id="myTable">
                        <thead class="text-center alert alert-success text-nowrap">
                            <tr id="bg_hd_table_m">
                                    <th>
                                        #
                                    </th>
                            </tr>
                        </thead>
                        <tbody class="text-left text-nowrap">


                            <?php
                            $n=1;
                            $res = $insertUser->runQuery("SELECT * FROM data_build ORDER BY id");
                            while($num = mysqli_fetch_array($res))
                            {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $n;?>
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
                    text: "คุณต้องการลบอาคารหรือไม่!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ต้องการ',
                    cancelButtonText: 'ไม่ต้องการ'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'officer.php?p=data_build&chkDel=ok&id4del=<?php echo $id4del; ?>';
                    } else {
                        window.location.href = 'officer.php?p=data_build';
                    }
                })
            });
            </script>
            <?php
                    }

                    if(isset($_GET['chkDel'])=="ok"){
                        $delUser = new queryData();
                        $id4del = $_GET['id4del'];
                        $sql = $delUser->runQuery("DELETE FROM data_build WHERE id='$id4del' ");
                        if($sql){
                            ?>
            <script>
            Swal.fire({
                title:'ลบข้อมูลเรียบร้อยแล้ว!',
                icon:'success',
                showConfirmButton: false,
                timer:'2000'
            }).then(function(){
                window.location.href = 'officer.php?p=data_build';
            });
            </script>
            <?php
                        }else{
                            echo "Can't SQL";
                        }
                        
                    }
                    
            ?>