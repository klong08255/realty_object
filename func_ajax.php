<?php
define('DB_server','localhost');
define('DB_user','root');
define('DB_password','');
define('DB_name','realty_object');

define('title_web','ระบบจัดการการเช่าอสังหาริมทรัพย์ของวัดนครสวรรค์พระอารามหลวง');
define('title_web_m','ผู้บริหาร');
define('title_web_off','เจ้าหน้าที่');

class DB_conn{
    //? ฟังก์ชั่นเชื่อมต่อฐานข้อมูล
    function __construct(){
        $conn = mysqli_connect(DB_server, DB_user, DB_password, DB_name);
        $this->dbcon = $conn;
        mysqli_set_charset($this->dbcon, "utf8"); // ! Set ตัวหนังสือ เป็น UTF8

        if (mysqli_connect_errno()) {
            echo"เชื่อมต่อ Database ไม่สำเร็จ!";
        }else{
            // ! echo"เชื่อมต่อ Database สำเร็จแล้ว";
        }

    }    
   
}
class queryData extends DB_conn{
    public function runQuery($query){
            $re = mysqli_query($this->dbcon, $query);
            return $re;
    }
    

}

?>