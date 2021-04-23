<?php
                include_once('../function.php');
                $insertUser = new queryData();
            ?>

            <div class="d-flex justify-content-end mb-2"><a href="officer.php?p=add_build"
                    class="btn btn-success">เพิ่มข้อมูลอาคาร <i class="fas fa-plus-circle"></i></a></div>

            <div class="card">
                <div class="card-header" id="bg_hd_card_m2">
                    <h3 class="font-weight-bold text-center"><b><i class="fas fa-table"></i> ตารางจัดการข้อมูลอาคารอสังหาริมทรัพย์</b></h3>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped w-100" id="myTable">
                        <thead class="text-center alert alert-success text-nowrap w-100">
                            <tr id="bg_hd_table_m">
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        สถานะอาคาร
                                    </th>
                                    <th>
                                        ที่อยู่ของอาคาร
                                    </th>
                                    
                                    <th>
                                        ค่าเช่า/ปี
                                    </th>
                                    <th>
                                        เงินประกันการเช่า
                                    </th>
                                    <th>
                                        ค่าบำรุงการจดทะเบียน	
                                    </th>
                                    <th>
                                        ค่าภาษีที่ดิน/ปี
                                    </th>
                                    <th>
                                        ค่าธรรมเนียมสัญญา
                                    </th>
                                    <th>
                                        ค่าทำสัญญา
                                    </th>
                                    <th>
                                        ค่าประกันอัคคีภัย
                                    </th>
                                    
                                    <th>
                                        จำนวนชั้น
                                    </th>
                                    <th>
                                        จำนวนคูหา
                                    </th>
                                    <th>
                                        พื้นที่ใช้สอย (ตร.ม.)
                                    </th>
                                    <th>
                                        ประเภท (อาศัย/ร้านค้า)	
                                    </th>
                                    <th>
                                        เรตค่าเช่า
                                    </th>
                                    <th>
                                        เลขประกันภัย
                                    </th>
                                    <th>
                                        วันที่เริ่มประกัน
                                    </th>
                                    <th>
                                        วันที่หมดประกัน
                                    </th>
                                    <th>
                                        ราคาค่าใช้จ่ายทั้งหมด
                                    </th>
                                    <th>
                                        จัดการข้อมูล
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
                                <td>
                                    <?php
                                    if($num['status'] =="empty"){
                                    ?>
                                    <a href="officer.php?p=add_rent"><button class="alert alert-success p-1 w-100">ว่าง</button></a>
                                    <?php
                                    }else{
                                        $res2 = $insertUser->runQuery("SELECT * FROM people_rent WHERE status_rent='เช่าอยู่' and id_data_build='$num[id]' ");
                                        $num2 = mysqli_fetch_array($res2);
                                    ?>
                                    <a href="officer.php?p=view_rent&id4view=<?php echo $num2['id_rent']; ?>" class=""><button class="alert alert-danger p-1 w-100">ไม่ว่าง</button></a>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php echo $num['build_address'];?>
                                </td>
                                
                                <td>
                                    <?php echo number_format($num['rent_year']);?><text> บาท</text>
                                </td>
                                <td>
                                    <?php echo number_format($num['rent_deposit']);?><text> บาท</text>
                                </td>
                                <td>
                                    <?php echo number_format($num['regis_fee']);?><text> บาท</text>
                                </td>
                                <td>
                                    <?php echo number_format($num['land_tax']);?><text> บาท</text>
                                </td>
                                <td>
                                    <?php echo number_format($num['contract_fee']);?><text> บาท</text>
                                </td>
                                <td>
                                    <?php echo number_format($num['contract_fee2']);?><text> บาท</text>
                                </td>
                                <td class="text-nowrap">
                                    <?php echo number_format($num['insurance_fire']);?><text> บาท</text>
                                </td>
                                
                                <td>
                                    <?php echo $num['numb_layer'];?>
                                </td>
                                <td>
                                    <?php echo $num['numb_row'];?>
                                </td>
                                <td>
                                    <?php echo number_format($num['use_area']);?>
                                </td>
                                <td>
                                    <?php echo $num['type'];?>
                                </td>
                                <td>
                                    <?php echo $num['rate'];?>
                                </td>
                                
                                <td>
                                    <?php echo $num['number_insurance'];?>
                                </td>
                                <td class="text-nowrap">
                                    <?php echo $num['date_insurance'];?>
                                </td>
                                <td class="text-nowrap">
                                    <?php echo $num['date_insurance_stop'];?>
                                </td>
                                
                                <td class="text-nowrap">
                                    <?php echo number_format($num['total_pay']);?><text> บาท</text>
                                </td>
                                <td class="text-nowrap">
                                    <a href="officer.php?p=add_build&id4edit=<?php echo $num['id']; ?>"><button class="btn btn-warning text-light">แก้ไข</button></a>

                                    <a href="officer.php?p=data_build&id4del=<?php echo $num['id']; ?>&del=chk">
                                    <button class="btn btn-danger text-light">ลบ</button>
                                    </a>
                                    
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