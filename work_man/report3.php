<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
                include_once('../function.php');
                $insertUser = new queryData();
                $updatePeopleR = new queryData();
            ?>

<div class="card">
    <div class="card-header" id="bg_hd_card_m2">
        <h3 class="font-weight-bold text-center"><b><i class="fas fa-table"></i>
                ตารางจัดการการเช่าอาคารอสังหาริมทรัพย์</b></h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped w-100" id="myTable">
                <thead class="text-center alert alert-success text-nowrap">
                    <tr id="bg_hd_table_m">
                        <th>
                            ชื่อ-นามสกุล
                        </th>
                        <th>
                            เช่าบ้านเลขที่
                        </th>
                        <th>
                            วันที่เริ่มเช่า
                        </th>
                        <th>
                            วันที่ครบกำหนด
                        </th>
                        <th>
                            อายุ
                        </th>
                        <th>
                            เชื้อชาติ
                        </th>
                        <th>
                            สัญชาติ
                        </th>
                        <th>
                            บ้านเลขที่ตามบัตรประชาชน
                        </th>
                        <th>
                            โทรศัพท์
                        </th>
                        <th>
                            เลขบัตรประจำตัวประชาชน
                        </th>
                        <th>
                            วันเกิด
                        </th>
                        <th>
                            สถานะจ่ายเงิน
                        </th>
                        <th>
                            ดูข้อมูล
                        </th>
                    </tr>
                </thead>
                <tbody class="text-left text-nowrap">


                    <?php
                            
                            $res = $insertUser->runQuery("SELECT data_build.*, people_rent.* FROM people_rent LEFT JOIN data_build ON people_rent.id_data_build = data_build.id");
                            while($num = mysqli_fetch_array($res))
                            {
                                $data_buildID = $num['id_data_build'];
                            ?>
                    <tr>
                        <td>
                            <?php echo$num['name']; ?>
                        </td>
                        <td>
                            <?php
                                        echo$num['build_address'];
                                    ?>
                        </td>
                        <td>
                            <?php echo$num['datestart_rent']; ?>
                        </td>
                        <td>
                            
                            <?php echo$num['datestop_rent']; ?>
                            <?php         
                                        if($num['status'] =="full"){
                                                    $nowDate = date('Y-m-d');
                                                    if($nowDate > $num['datestop_rent']){
                                                        $sqlupdatePeopleR1 = $updatePeopleR->runQuery("UPDATE data_build SET status='empty' ");
                                                        $sqlupdatePeopleR2 = $updatePeopleR->runQuery("UPDATE people_rent SET status_rent='ยกเลิกสัญญาเช่า' ");
                                                        
                                                        
                                                        if($sqlupdatePeopleR1 && $sqlupdatePeopleR2){
                                                            ?>
                            <script>
                            $(document).ready(function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'คุณ : <?php echo $num['name']; ?> ครบกำหนดสัญญาเช่าแล้ว',
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(function() {
                                    location.reload();
                                })
                            });
                            </script>
                            <?php
                                                        }
                                                    }
                                                }
                                    ?>
                        </td>
                        <td>
                            <?php echo$num['age']; ?>
                        </td>
                        <td>
                            <?php echo$num['nationality']; ?>
                        </td>
                        <td>
                            <?php echo$num['nationality2']; ?>
                        </td>
                        <td>
                            <?php echo$num['address']; ?>
                        </td>
                        <td>
                            <?php echo$num['phone_number']; ?>
                        </td>
                        <td>
                            <?php echo$num['id_card']; ?>
                        </td>
                        <td>
                            <?php echo$num['brithday']; ?>
                        </td>
                        <td>
                            <?php echo$num['status_pay']; ?>
                        </td>
                        <td>

                            <a href="manager.php?p=view_rent&id4view=<?php echo $num['id_rent']; ?>"
                                class="btn btn-primary w-100">ดูข้อมูล</a>
                            
                        </td>

                    </tr>
                    <?php
                            }
                            
                            ?>

                </tbody>
            </table>
        </div>
    </div>
</div>






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
        text: "คุณต้องการลบข้อมูลการเช่าอาคารหรือไม่!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ต้องการ',
        cancelButtonText: 'ไม่ต้องการ'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href =
                'officer.php?p=show_rent_mange&chkDel=ok&id4del=<?php echo $id4del; ?>';
        } else {
            window.location.href = 'officer.php?p=show_rent_mange';
        }
    })
});
</script>
<?php
                    }

                    if(isset($_GET['chkDel'])=="ok"){
                        $delUser = new queryData();
                        $id4del = $_GET['id4del'];
                        $sql = $delUser->runQuery("DELETE FROM people_rent WHERE id_rent='$id4del' ");
                        $sqlUpdate = $delUser->runQuery("UPDATE data_build SET status='empty' WHERE id='$data_buildID' "); 
                        if($sql && $sqlUpdate){
                            ?>
<script>
Swal.fire({
    title: 'ลบข้อมูลเรียบร้อยแล้ว!',
    icon: 'success',
    showConfirmButton: false,
    timer: '2000'
}).then(function() {
    window.location.href = 'officer.php?p=show_rent_mange';
});
</script>
<?php
                        }else{
                            echo "Can't SQL";
                        }
                        
                    }
                    
            ?>