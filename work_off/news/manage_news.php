
<?php
    $slN = new DB_conn();
    $del = new DB_conn();
    $news_select = new DB_conn();


    if(isset($_GET['del_id'])){
            //! del in folder
        
        $idS = $_GET['del_id'];
            $path = "../image/news/";
            $resSFDinFol = $news_select->selNForEdit($idS);
            $numSFDinFol = mysqli_fetch_array($resSFDinFol);
            if($numSFDinFol){
                $nameold = $numSFDinFol['news_cover'];
                $file = $path.$nameold;
                
                
            

        
                $id = $_GET['del_id'];
                $delSucc = $del->delnews($id, $file);
            }
        

        

        

    }//! ปีกการับ isset GET del



?>
<div class="d-flex justify-content-end mb-2"><a href="officer.php?p=p2_add_news" class = "btn btn-success">เพิ่มข่าวประชาสัมพันธ์ <i class="fas fa-plus-circle"></i></a></div>


<div class="card">
    <div class="card-header" id="bg_hd_card_m2">
        <h3 class="text-center"><b> <i class="fas fa-table"></i> ตารางจัดการข่าวประชาสัมพันธ์</b></h3>
    </div>
    <div class="card-body bg-light">
                    <table class="table table-striped" id="myTable">
                <thead>
                    <tr id="bg_hd_table_m">
                    <th scope="col">ลำดับ</th>
                    <th scope="col">รูปข่าวประชาสัมพันธ์</th>
                    <th scope="col">หัวข้อข่าว</th>
                    <th scope="col">สรุปหัวข้อข่าว</th>
                    <th scope="col">โพสต์โดย</th>
                    <th scope="col" class="text-center">จัดการข่าว</th>
                    </tr>
                </thead>
                <tbody>


                <?php
                $n=1;
                $res = $slN->slN_m2();
                while($num = mysqli_fetch_array($res))
                {
                ?>
                    <tr>
                    <th scope="row"><?php $num['id']; echo $n;?></th>
                    <td>
                        <div style="width:100px;">
                                    <img src="../image/news/<?php echo $num['news_cover']; ?>" class="card-img" title="รูปภาพข่าว">
                        </div>
                    </td>
                    <td><?php echo $num['news_title']; ?></td>
                    <td><?php echo $num['news_summary']; ?>.</td>
                    <td><?php echo $num['news_author']; ?></td>
                    <td class="text-center">

                    <a href="officer.php?p=p3_edit_news&edit_id=<?php echo $num['id']; ?>" class="btn btn-warning text-light">แก้ไข <i class="fas fa-edit"></i></a>
                    <a href="officer.php?p=p1&del_id=<?php echo $num['id']; ?>" class="btn btn-danger text-light">ลบ <i class="fas fa-trash-alt"></i></a>

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

<!-- function Data table-->
<script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

</script>


