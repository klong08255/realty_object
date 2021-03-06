<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
                include_once('../function.php');
                $insertUser = new queryData();
                $updatePeopleR = new queryData();
            ?>

<div class="d-flex justify-content-end mb-2"><a href="officer.php?p=add_rent"
        class="btn btn-success">เพิ่มข้อมูลการเช่าอาคารอสังหาริมทรัพย์ <i class="fas fa-plus-circle"></i></a></div>

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
                            #
                        </th>
                        <th>
                            สถานะ
                        </th>
                        <th>
                            บ้านเลขที่
                        </th>
                        <th>
                            ชื่อ-นามสกุล
                        </th>
                        <th>
                            ประเภท
                        </th>  
                        <th>
                            ชื่อร้านค้า/บ้าน
                        </th>
                        <th>
                            วันที่เริ่มเช่า
                        </th>
                        <th>
                            วันที่สิ้นสุดการเช่า
                        </th>  
                        <th>
                            เลขที่กรมธรรม์ประกันภัยอาคาร
                        </th>  
                        <th>
                            วันที่เริ่มประกัน
                        </th>
                        <th?>
                            วันที่สิ้นสุดประกัน
                        </th>
                        <th>
                            เรตค่าเช่า 
                        </th>
                        <th>
                            ค่าเช่า/เดือน
                        </th>
                        <th>
                            ค่าเช่า/ปี
                        </th>
                        <th>
                            ค่าธรรมเนียมการทำสัญญา 
                        </th>
                        <th>
                            ค่าบำรุงการจดทะเบียน
                        </th>
                        <th>
                            ค่าประกันอัคคีภัย 
                        </th>
                        <th>
                            รวมทั้งสิ้น 
                        </th>
                        <th>
                            หลักฐานการชำระเงิน
                        </th>
                        <th>
                            จัดการข้อมูล
                        </th>
                    </tr>
                </thead>
                <tbody class="text-left text-nowrap">


                    <?php
                            
                            $res = $insertUser->runQuery("SELECT data_build.*, people_rent.* FROM people_rent LEFT JOIN data_build ON people_rent.id_data_build = data_build.id ");
                            $i = 1;
                            while($num = mysqli_fetch_array($res))
                            {
                                $data_buildID = $num['id_data_build'];
                            ?>
                    <tr>
                        <td>
                        <?=$i;?>
                        <?php $i++;?>
                        </td>
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
                                                   
                                                    if($num['status_rent'] == "เช่าอยู่" && $nowDate > $num['datestop_rent']){
                                                        $sqlupdatePeopleR1 = $updatePeopleR->runQuery("UPDATE data_build SET status='empty' where id=$num[id_data_build] ");
                                                        $sqlupdatePeopleR2 = $updatePeopleR->runQuery("UPDATE people_rent SET status_rent='ยกเลิกสัญญาเช่า' where id_rent=$num[id_rent] ");
                                                        
                                                        
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
                                                    } //ต้องมี else if
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

                            <a href="officer.php?p=view_rent&id4view=<?php echo $num['id_rent']; ?>"
                                class="btn btn-primary text-light">ดูข้อมูล</a>
                            <a href="officer.php?p=add_rent&id4edit=<?php echo $num['id_rent']; ?>"
                                class="btn btn-warning text-light">แก้ไข</a>
                            <a href="officer.php?p=show_rent_mange&del=chk&id4del=<?php echo $num['id_rent']; ?>"
                                class="btn btn-danger text-light">ลบ</a>
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