<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
                include_once('../function.php');
                $insertUser = new queryData();
                $updatePeopleR = new queryData();
            ?>

<div class="card mb-4 ">
    <div class="card-header bg-primary text-light">
        <h3 class="font-weight-bold text-center"><b><i class="fas fa-table"></i>
                ตั้งชื่อเอาเอง</b></h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md">
                <canvas  class="w-100" id="myChart1"></canvas>
            </div>
            <div class="col-md">
                <canvas  class="w-100" id="chart_2"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(() => {
    $.ajax({
        method: 'post',
        url: '../work_man/api_re2.php',
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
                type: 'bar',
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


<!-- //! End Chart -->

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