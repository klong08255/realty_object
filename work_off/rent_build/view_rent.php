            <?php
                if(!isset($_GET['id4view'])){
                    echo 'ไม่มีค่ามา';
                }elseif(isset($_GET['id4view'])){
                    $id4view = $_GET['id4view'];
            ?>            
                        
                        

<div class="card">
    <div class="card-header text-center ">
        <h3 class="font-weight-bold"><i class="fas fa-folder-open"></i> ข้อมูลการเช่าอาคารอสังหาริมทรัพย์</h3>
    </div>
    <div class="card-body">
    <!-- แก้ กง งี้ -->
                        <?php

                            $select4thispage=new queryData();
                            
                            $res = $select4thispage->runQuery("SELECT data_build.build_address, people_rent.* FROM people_rent LEFT JOIN data_build ON people_rent.id_data_build = data_build.id WHERE id_rent='$id4view' ");
                            $num = mysqli_fetch_array($res);
                            
                        ?>

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
    <br>
    <text>เช่าบ้านเลขที่ : </text> <text><?php echo $num['build_address']; ?></text>
    <br>
    <text>วันที่เริ่มเช่า : </text> <text><?php echo $num['datestart_rent']; ?></text>
    <br>
    <text>วันที่ครบกำหนด : </text> <text><?php echo $num['datestop_rent']; ?></text>
    <br>
    <text>สถานะจ่ายเงิน : </text> <text><?php echo $num['status_pay']; ?></text>
    <br>
    </div>
</div>

<?php
                }
?>
