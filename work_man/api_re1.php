<?php
    require_once('../func_ajax.php');
    $sql4page = new queryData();

    if(isset($_POST['data1'])){

        $rs_arr = [];

        $sql1 = $sql4page->runQuery("SELECT COUNT(`id`) FROM `data_build` WHERE `status`='full' ");
        $fet1 = mysqli_fetch_array($sql1);
        if($sql1){
            $result1 = array(
                "category1" => "อาคารที่ถูกจองแล้วทั้งหมด",
                "sum1" =>  intval($fet1['COUNT(`id`)'])
            );
            array_push($rs_arr, $result1);
            // echo json_encode($result1, JSON_UNESCAPED_UNICODE);
          
        }else{
            echo"something went wrong in the database";
        }

        $sql2 = $sql4page->runQuery("SELECT COUNT(`id`) FROM `data_build` WHERE `status`='empty' ");
        $fet2 = mysqli_fetch_array($sql2);
        if($sql2){
            $result2 = array(
                "category1" => "อาคารที่ยังไม่ถูกจองทั้งหมด",
                "sum1" => intval($fet2['COUNT(`id`)']) 
            );
            array_push($rs_arr, $result2);
            
        }else{
            echo"something went wrong in the database";
        }
        echo json_encode($rs_arr, JSON_UNESCAPED_UNICODE);


    }

?>