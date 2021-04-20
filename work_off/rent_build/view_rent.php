            <?php
                if(!isset($_GET['id4view'])){
                    echo 'ไม่มีค่ามา';
                }elseif(isset($_GET['id4view'])){
                    $id4view = $_GET['id4view'];
            ?>



            <div class="card">
                <div class="card-header text-center ">
                    <h3 class="font-weight-bold"><i class="fas fa-folder-open"></i> ข้อมูลการเช่าอาคารอสังหาริมทรัพย์
                    </h3>
                </div>
                <div class="card-body">
                    <?php

                    $select4thispage=new queryData();

                    $res = $select4thispage->runQuery("SELECT data_build.*, people_rent.* FROM people_rent LEFT JOIN data_build ON people_rent.id_data_build = data_build.id WHERE id_rent='$id4view' ");
                    $num = mysqli_fetch_array($res);

                    $id_data_build = $num['id'];

                    ?>
                    <div class="text-right" id="hideInPagePrint">
                        <?php
                                if($num['status_rent'] =="เช่าอยู่"){
                            ?>
                        <a href="officer.php?p=view_rent&id4view=<?php echo $_GET['id4view']; ?>&cancelPromise=ok"
                            id="btnCancelPromiseRent" class="btn btn-warning">ยกเลิกสัญญาเช่า</a>
                        <?php
                            }elseif($num['status_rent'] =="ยกเลิกสัญญาเช่า"){
                                $res2 = $select4thispage->runQuery("SELECT * FROM data_build WHERE id='$num[id]' ");
                                $num2 = mysqli_fetch_array($res2);
                                if($num2['status'] =="empty"){
                                ?>
                        <a href="officer.php?p=view_rent&id4view=<?php echo $_GET['id4view']; ?>&doPromiseAgain=ok"
                            id="btnDoPromiseRentAgain" class="btn btn-success">ต่อสัญญาเช่า</a>
                        <?php
                                }
                            }
                            ?>

                        <button class="btn btn-primary ml-2" id="printPage">Print</button>
                    </div>
                    <hr>
                    <!-- แก้ กง งี้ -->


                    <H3 class="font-weight-bold text-success">ข้อมูลส่วนตัวผู้เช่า</H3>
                    <div class="alert alert-success font-weight-bold">

                        <text>สถานะการเช่า : </text><?php if($num['status_rent'] =="เช่าอยู่"){ ?><text
                            class="badge badge-success"><?php echo $num['status_rent']; ?></text><?php }else{ ?><text
                            class="badge badge-warning"><?php echo $num['status_rent']; ?></text><?php } ?>
                        <br>
                        <text>ชื่อ-นามสกุล : </text> <text><?php echo $num['name']; ?></text>
                        <br>
                        <text>อายุ : </text> <text><?php echo $num['age']; ?></text>
                        <br>
                        <text>เชื้อชาติ : </text> <text><?php echo $num['nationality']; ?></text>
                        <br>
                        <text>สัญชาติ : </text> <text><?php echo $num['nationality2']; ?></text>
                        <br>
                        <text>บ้านเลขที่ตามบัตรประชาชน : </text> <text><?php echo $num['address']; ?></text>
                        <br>
                        <text>เลขบัตรประจำตัวประชาชน : </text> <text><?php echo $num['id_card']; ?></text>
                        <br>
                        <text>วันเกิด : </text> <text><?php echo $num['brithday']; ?></text>
                        <br>
                        <text>โทรศัพท์ : </text> <text><?php echo $num['phone_number']; ?></text>
                    </div>
                    <hr>
                    <H3 class="font-weight-bold text-success">ข้อมูลการเช่า</H3>
                    <div class="alert alert-success font-weight-bold m-0">
                        <text>เช่าบ้านเลขที่ : </text> <text><?php echo $num['build_address']; ?></text>
                        <br>
                        <text>วันที่เริ่มเช่า : </text> <text><?php echo $num['datestart_rent']; ?></text>
                        <br>
                        <text>วันที่ครบกำหนด : </text> <text><?php echo $num['datestop_rent']; ?></text>
                        <br>
                        <text>สถานะจ่ายเงิน : </text> <text><?php echo $num['status_pay']; ?></text>
                        <br>
                        <text>...สิ่งที่ต้องเพิ่มจากตราง data_build พวกจำนวน พื้นที่ห้อง ราคารายปี เดือน ราคารวม
                            *ที่จำเป็นต้องรู้</text>

                    </div>
                </div>
            </div>

            <?php
                }
?>


            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            
            <script>
                $("#printPage").click(function(){
                    window.print();
                })
            </script>












            <?php
        if(isset($_GET['cancelPromise']) =="ok"){
        $id4view = $_GET['id4view'];
                    $updateStatusRent = new queryData();

                    $sql4update = $updateStatusRent->runQuery("UPDATE people_rent SET status_rent='ยกเลิกสัญญาเช่า' WHERE id_rent='$id4view' ");

                    $sql4update2 = $updateStatusRent->runQuery("UPDATE data_build SET status='empty' WHERE id='$id_data_build' ");


                    if($sql4update){
                        ?>
            <script>
Swal.fire({
    icon: 'success',
    title: 'ยกเลิกสัญญาเช่าเรียบร้อยแล้ว',
    showConfirmButton: false,
    timer: 2000
}).then(function() {
    window.location.href = 'officer.php?p=show_rent_mange';
});
            </script>
            <?php
                    }
                }
                
                ?>


            </script>



            <?php
        if(isset($_GET['doPromiseAgain']) =="ok"){
        $id4view = $_GET['id4view'];
                    $updateStatusRent2 = new queryData();

                    $sql4update3 = $updateStatusRent2->runQuery("UPDATE people_rent SET status_rent='เช่าอยู่' WHERE id_rent='$id4view' ");

                    $sql4update4 = $updateStatusRent2->runQuery("UPDATE data_build SET status='full' WHERE id='$id_data_build' ");


                    if($sql4update3){
                        ?>
            <script>
Swal.fire({
    icon: 'success',
    title: 'ต่อสัญญาเช่าเรียบร้อยแล้ว',
    showConfirmButton: false,
    timer: 2000
}).then(function() {
    window.location.href = 'officer.php?p=show_rent_mange';
});
            </script>
            <?php
                    }
                }
                
                ?>