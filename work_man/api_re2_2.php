<?php
    require_once('../func_ajax.php');
    $sql4page = new queryData();

    if(isset($_POST['data2'])){

        $rs_arr = [];

        $sql1 = $sql4page->runQuery("SELECT COUNT(`id_rent`) from `people_rent` WHERE status_pay='ชำระแล้ว' ");
        $fet1 = mysqli_fetch_array($sql1);
        if($sql1){
            $result1 = array(
                "category2" => "ชำระแล้วทั้งหมด/คน",
                "sum2" =>  intval($fet1['COUNT(`id_rent`)'])
            );
            array_push($rs_arr, $result1);
            // echo json_encode($result1, JSON_UNESCAPED_UNICODE);
          
        }else{
            echo"something went wrong in the database";
        }

        $sql2 = $sql4page->runQuery("SELECT COUNT(`id_rent`) from `people_rent` WHERE status_pay='ยังไม่ชำระ' ");
        $fet2 = mysqli_fetch_array($sql2);
        if($sql2){
            $result2 = array(
                "category2" => "ยังไม่ชำระทั้งหมด/คน",
                "sum2" => intval($fet2['COUNT(`id_rent`)']) 
            );
            array_push($rs_arr, $result2);
            
        }else{
            echo"something went wrong in the database";
        }
        echo json_encode($rs_arr, JSON_UNESCAPED_UNICODE);


    }

?>