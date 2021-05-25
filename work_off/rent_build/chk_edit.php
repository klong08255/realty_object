<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
        include_once('../../function.php');

        if(isset($_POST['submit'])){
            $id4edit = $_POST['id4edit'];
            $id4data_b = $_POST['id4data_b'];
            $name = $_POST['name'];
            $id_card = $_POST['card_id4people'];
            $address = $_POST['address'];
            $brithday = $_POST['brithday'];
            $age = $_POST['age'];
            $nationality = $_POST['nationality'];
            $nationality2 = $_POST['nationality2'];
            $phone_number = $_POST['phone_number'];
            $status_pay = $_POST['status_pay'];
            $datestart_rent = $_POST['datestart_rent'];
            $datestop_rent = $_POST['datestop_rent'];

            if(isset($_FILES['slip_receipt'])){

                $check = getimagesize($_FILES['slip_receipt']['tmp_name']);
                if($check){
                    // image 
            $path = "../../image/slip_chk/";
            $tmp = explode('.', $_FILES['slip_receipt']['name']);
            $countTmp = count($tmp); 
            $countTmp--;
            $randomnum = rand(1,9999999999);
            $newnamef = round(microtime(true)).$randomnum.".".$tmp[$countTmp]; //! เชื่อมชื่อใหม่กับนามสกุล
            $moved = move_uploaded_file($_FILES['slip_receipt']['tmp_name'], $path.$newnamef);
            if($moved){
                 //todo: SQL Zone 4 Edit

            $func4Edit = new queryData();
            $sql = $func4Edit->runQuery("UPDATE people_rent SET `name`='$name',`age`='$age',`nationality`='$nationality',`nationality2`='$nationality2',`address`='$address',`phone_number`='$phone_number',`id_card`='$id_card',`brithday`='$brithday',`status_pay`='$status_pay',`datestart_rent`='$datestart_rent',`datestop_rent`='$datestop_rent', `evidence_pay`='$newnamef' WHERE id_rent='$id4edit' ");
            if($sql){
                ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'แก้ไขข้อมูลเรียบร้อยแล้ว',
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location.href = '../../tbh/officer.php?p=show_rent_mange';
    })
});
</script>
<?php
            }else{
                echo"Can't SQL";
            }

            //todo:------------------
            }
                }else{
                    ?>
<script>
alert("โปรดใช้ไฟล์รูปภาพเท่านั้นในการอัพโหลด")
history.back()
</script>
<?php
                }


            }else{
                  //todo: SQL Zone 4 Edit

            $func4Edit = new queryData();
            $sql = $func4Edit->runQuery("UPDATE people_rent SET `name`='$name',`age`='$age',`nationality`='$nationality',`nationality2`='$nationality2',`address`='$address',`phone_number`='$phone_number',`id_card`='$id_card',`brithday`='$brithday',`status_pay`='$status_pay',`datestart_rent`='$datestart_rent',`datestop_rent`='$datestop_rent', `evidence_pay`='-' WHERE id_rent='$id4edit' ");
            if($sql){
                ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'แก้ไขข้อมูลเรียบร้อยแล้ว',
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location.href = '../../tbh/officer.php?p=show_rent_mange';
    })
});
</script>
<?php
            }else{
                echo"Can't SQL";
            }

            //todo:------------------
            }

           

        }else{
            header("Location: ../../tbh/officer.php?p=show_rent_mange");
        }
?>