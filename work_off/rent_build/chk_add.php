<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php

include_once('../../function.php');
$insertRent = new queryData();

if(isset($_POST['submit'])){
    $type = $_POST['type'];
    $name = $_POST['name'];
    $card_id4people = $_POST['card_id4people'];
    $address = $_POST['address'];
    $brithday = $_POST['brithday'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];
    $nationality2 = $_POST['nationality2'];
    $phone_number = $_POST['phone_number'];
    $status_pay = $_POST['status_pay'];
    $datestart_rent = $_POST['datestart_rent'];
    $datestop_rent = $_POST['datestop_rent'];

    //todo : SQL Zone
        $sql = $insertRent->runQuery("INSERT INTO people_rent(`id_data_build`, `name`, `age`, `nationality`, `nationality2`, `address`, `phone_number`, `id_card`, `brithday`, `status_pay`, `datestart_rent`, `datestop_rent`) VALUE (
            '$type',
            '$name',
            '$age',
            '$nationality',
            '$nationality2',
            '$address',
            '$phone_number',
            '$card_id4people',
            '$brithday',
            '$status_pay',
            '$datestart_rent',
            '$datestop_rent'
        )");

        if($sql){
            $sql2 = $insertRent->runQuery("UPDATE data_build SET status='full' WHERE id='$type' ");
            if($sql2){
                ?>
                    <script>
                        $(document).ready(function(){
                            Swal.fire({
                                                icon: 'success',
                                                title: 'เช่าอาคารใหม่เรียบร้อยแล้ว',
                                                showConfirmButton: false,
                                                timer: 2000
                                            }).then(function() {
                                                window.location.href = '../../tbh/officer.php?p=show_rent_mange';
                                            })
                        });
                    </script>
                <?php
            }else{
                echo"Can't SQL2";
            }
        }else{
            echo"Can't SQL";
        }
    // todo:---------------------------------------------

}else{
    echo"Where r u come from ?";
}

?>