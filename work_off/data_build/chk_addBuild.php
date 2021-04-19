<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<?php
    
    if(isset($_POST['submit'])){

        $build_address = $_POST['build_address'];
        $rent_deposit = $_POST['rent_deposit'];
        $regis_fee = $_POST['regis_fee'];
        $width = $_POST['width'];
        $lenght = $_POST['lenght'];
        $numb_layer = $_POST['numb_layer'];
        $numb_row = $_POST['numb_row'];
        $type = $_POST['type'];
        $rate = $_POST['rate'];
        $land_tax = $_POST['land_tax'];
        $contract_fee = $_POST['contract_fee'];
        $contract_fee2 = $_POST['contract_fee2'];
        $number_insurance = $_POST['number_insurance'];
        $date_insurance = $_POST['date_insurance'];
        $date_insurance_stop = $_POST['date_insurance_stop'];
        $insurance_fire = $_POST['insurance_fire'];

        //! Compute

        //*month
        $rent_month =$width * $lenght * $numb_layer * $rate;
        //*-------- 

        //*year
        $rent_year = intval($rent_month) * 12;
        //*--------

        //* total
        $total_pay = $rent_year + $rent_deposit + $regis_fee + $land_tax + $contract_fee + $contract_fee2 + $insurance_fire;
        //*--------
        
        //*พื้นที่ใช้สอย
        $use_area = $width * $lenght * $numb_layer * $numb_row;
        //*--------

        //!-----------

        //TODO: For SQL ------------------------------------------------
        
        include_once('../../function.php');
        $insertBuild = new queryData();

        $sql4build = $insertBuild->runQuery("INSERT INTO data_build(`build_address`, `rent_month`, `rent_year`, `rent_deposit`, `regis_fee`, `width`, `lenght`, `numb_layer`, `numb_row`, `type`, `use_area`, `rate`, `land_tax`, `contract_fee`, `contract_fee2`, `number_insurance`, `date_insurance`, `date_insurance_stop`,`insurance_fire`,`status`, `total_pay`) VALUE ('$build_address', 
        '$rent_month',
        '$rent_year',
        '$rent_deposit',
        '$regis_fee',
        '$width',
        '$lenght',
        '$numb_layer',
        '$numb_row',
        '$type',
        '$use_area',
        '$rate',
        '$land_tax',
        '$contract_fee',
        '$contract_fee2',
        '$number_insurance',
        '$date_insurance',
        '$date_insurance_stop',
        '$insurance_fire',
        'empty',
        '$total_pay'
        )");

        if($sql4build){
            ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'เพิ่มอาคารใหม่เรียบร้อยแล้ว',
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