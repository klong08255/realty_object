<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<?php
    
    if(isset($_POST['submit'])){

        $id4edit = $_POST['id4edit'];
        $build_address = $_POST['build_address'];
        $rent_month = $_POST['rent_month'];
        $rent_year = $_POST['rent_year'];
        $rent_deposit = $_POST['rent_deposit'];
        $regis_fee = $_POST['regis_fee'];
        $width = $_POST['width'];
        $lenght = $_POST['lenght'];
        $numb_layer = $_POST['numb_layer'];
        $numb_row = $_POST['numb_row'];
        $type = $_POST['type'];
        $use_area = $_POST['use_area'];
        $rate = $_POST['rate'];
        $land_tax = $_POST['land_tax'];
        $contract_fee = $_POST['contract_fee'];
        $contract_fee2 = $_POST['contract_fee2'];
        $number_insurance = $_POST['number_insurance'];
        $date_insurance = $_POST['date_insurance'];
        $date_insurance_stop = $_POST['date_insurance_stop'];

        //TODO: For SQL ------------------------------------------------
        
        include_once('../../function.php');
        $insertBuild = new queryData();

        $sql4build = $insertBuild->runQuery("UPDATE data_build SET `build_address`='$build_address',`rent_month`='$rent_month',`rent_year`='$rent_year',`rent_deposit`='$rent_deposit',`regis_fee`='$regis_fee',`width`='$width',`lenght`='$lenght',`numb_layer`='$numb_layer',`numb_row`='$numb_row',`type`='$type',`use_area`='$use_area',`rate`='$rate',`land_tax`='$land_tax',`contract_fee`='$contract_fee',`contract_fee2`='$contract_fee2',`number_insurance`='$number_insurance',`date_insurance`='$date_insurance',`date_insurance_stop`='$date_insurance_stop' WHERE id='$id4edit' ");

        if($sql4build){
            ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'แก้ไขอาคารใหม่เรียบร้อยแล้ว',
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location.href = '../../tbh/officer.php?p=data_build';
    })
});
</script>
<?php
        }else{
            echo"NoSQL";

        }
        



        //todo--------------------------------------------------------------

    }

?>