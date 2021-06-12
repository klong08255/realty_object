<?php
    require_once('../func_ajax.php');
    $sql4page = new queryData();

    if(isset($_POST['data1'])){

        $rs_arr = [];

        $sql1 = $sql4page->runQuery("SELECT sum(data_build.total_pay) from `people_rent` left join `data_build` on people_rent.id_data_build = data_build.id WHERE people_rent.status_pay='ชำระแล้ว' ");
        $fet1 = mysqli_fetch_array($sql1);
        if($sql1){
            $result1 = array(
                "category1" => "ยอดเงินที่ชำระแล้วทั้งหมด",
                "sum1" =>  intval($fet1['sum(data_build.total_pay)'])
            );
            array_push($rs_arr, $result1);
            // echo json_encode($result1, JSON_UNESCAPED_UNICODE);
          
        }else{
            echo"something went wrong in the database";
        }

        $sql2 = $sql4page->runQuery("SELECT sum(data_build.total_pay) from `people_rent` left join `data_build` on people_rent.id_data_build = data_build.id WHERE people_rent.status_pay='ยังไม่ชำระ' ");
        $fet2 = mysqli_fetch_array($sql2);
        if($sql2){
            $result2 = array(
                "category1" => "ยอดเงินยังไม่ชำระทั้งหมด",
                "sum1" => intval($fet2['sum(data_build.total_pay)']) 
            );
            array_push($rs_arr, $result2);
            
        }else{
            echo"something went wrong in the database";
        }
        echo json_encode($rs_arr, JSON_UNESCAPED_UNICODE);


    }

?>