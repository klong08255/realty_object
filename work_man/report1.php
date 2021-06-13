<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
                include_once('../function.php');
                $insertUser = new queryData();
            ?>

<div class="card mb-4 ">
    <div class="card-header bg-primary text-light">
        <h3 class="font-weight-bold text-center"><b><i class="fas fa-table"></i>
                ตั้งชื่อเอาเอง</b></h3>
    </div>
    <div class="card-body">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 p-3">
                <canvas  class="w-100" id="myChart1"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(() => {
    $.ajax({
        method: 'post',
        url: '../work_man/api_re1.php',
        dataType: 'json',
        data: {
            data1: "ok"
        },
        success: (data1) => {
            console.log(data1)
            var name_category1 = []
            var value_cate1 = []

            for (var key1 in data1) {
                name_category1.push(data1[key1].category1)
                value_cate1.push(data1[key1].sum1)
            }

            console.log(name_category1)
            console.log(value_cate1)

            var ctx = document.getElementById('myChart1').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: name_category1,
                    datasets: [{
                        label: 'ยอดเงิน/บาท',
                        data: value_cate1,
                        backgroundColor: [
                            'rgb(0, 153, 51, 0.2)',
                            'rgb(204, 0, 0, 0.2)'
                        ],
                        borderColor: [
                            'rgb(0, 153, 51)',
                            'rgb(204, 0, 0)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        },
                        x: {
                            beginAtZero: true
                        }
                    }
                }
            });

        }
    })

    // !2

    $.ajax({
        method: 'post',
        url: '../work_man/api_re2_2.php',
        dataType: 'json',
        data: {
            data2: "ok"
        },
        success: (data2) => {
            console.log(data2)
            var name_category2 = []
            var value_cate2 = []

            for (var key2 in data2) {
                name_category2.push(data2[key2].category2)
                value_cate2.push(data2[key2].sum2)
            }

            console.log(name_category2)
            console.log(value_cate2)

            var ctx2 = document.getElementById('chart_2').getContext('2d');
            var chart_2 = new Chart(ctx2, {
                type: 'pie',
                data: {
                    labels: name_category2,
                    datasets: [{
                        label: 'ยอดผู้ชำระและยังไม่ชำระเงิน/คน',
                        data: value_cate2,
                        backgroundColor: [
                            'rgb(51, 102, 255, 0.2)',
                            'rgb(204, 0, 0, 0.2)'
                        ],
                        borderColor: [
                            'rgb(51, 102, 255)',
                            'rgb(204, 0, 0)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    })

    
})
</script>

        
            <div class="card">
                <div class="card-header" id="bg_hd_card_m2">
                    <h3 class="font-weight-bold text-center"><b><i class="fas fa-table"></i> ตารางข้อมูลอาคารอสังหาริมทรัพย์</b></h3>
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
                                        ค่าเช่า/เดือน
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
                                        ภาษีที่ดิน/ปี
                                    </th>
                                    <th>
                                        ค่าธรรมเนียมสัญญา
                                    </th>
                                    <th>
                                        ค่าทำสัญญา
                                    </th>
                                    <th>
                                        ประกันอัคคีภัย
                                    </th>
                                    <th>
                                        ความกว้าง (ตร.ม.)
                                    </th>
                                    <th>
                                        ความยาว (ตร.ม.)
                                    </th>
                                    <th>
                                        จำนวนชั้น
                                    </th>
                                    <th>
                                        จำนวนคูหา
                                    </th>
                                    <th>
                                        ประเภท (อาศัย/ร้านค้า)	
                                    </th>
                                    <th>
                                        พื้นที่ใช้สอย (ตร.ม.)
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
                                    <div class="alert alert-success p-1 w-100 text-center">ว่าง</div>
                                    <?php
                                    }else{
                                        $res2 = $insertUser->runQuery("SELECT * FROM people_rent WHERE status_rent='เช่าอยู่' and id_data_build='$num[id]' ");
                                        $num2 = mysqli_fetch_array($res2);
                                    ?>
                                    <a href="manager.php?p=view_rent&id4view=<?php echo $num2['id_rent']; ?>" class=""><button class="alert alert-danger p-1 w-100">ไม่ว่าง</button></a>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php echo $num['build_address'];?>
                                </td>
                                <td>
                                    <?php echo number_format($num['rent_month']);?><text> บาท</text>
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
                                    <?php echo $num['width'];?>
                                </td>
                                <td>
                                    <?php echo $num['lenght'];?>
                                </td>
                                <td>
                                    <?php echo $num['numb_layer'];?>
                                </td>
                                <td>
                                    <?php echo $num['numb_row'];?>
                                </td>
                                <td>
                                    <?php echo $num['type'];?>
                                </td>
                                <td>
                                    <?php echo $num['use_area'];?>
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