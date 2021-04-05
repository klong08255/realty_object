<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php 
        define('DB_server','localhost');
        define('DB_user','root');
        define('DB_password','');
        define('DB_name','realty_object');

        define('title_web','ระบบจัดการการเช่าอสังหาริมทรัพย์ของวัดนครสวรรค์พระอารามหลวง');
        define('title_web_m','ผู้บริหาร');
        define('title_web_off','เจ้าหน้าที่');

        class DB_conn{
                function __construct(){
                        $conn = mysqli_connect(DB_server, DB_user, DB_password, DB_name);
                        $this->dbcon = $conn;
                        mysqli_set_charset($this->dbcon, "utf8"); //set ตัวหนังสือ เป็น UTF8

                        if (mysqli_connect_errno()) {
                                echo"เชื่อมต่อ Database ไม่สำเร็จ!";
                        }else{
                        //? echo"เชื่อมต่อ Database สำเร็จแล้ว";
                        }
                        
                        }
                        //? ฟังก์ชั่น login
                        public function login_form($username, $password){
                        $re = mysqli_query($this->dbcon, "SELECT * FROM user WHERE username ='$username' AND password = '$password'");
                        return $re;
                        }
                
                        //? ฟังก์ชั่น logout
                        public function logout_form(){
                                session_start();
                                session_destroy();
                                header("Location: index.php?p=home");
                        }

                        //? ฟังก์ชั่น ดึงข่าว
                        public function slN_m2(){
                        $re = mysqli_query($this->dbcon, "SELECT * FROM news");
                        return $re;
                        }

                        //? ฟังก์ชั่น เพิ่มข่าวจากเจ้าหน้าที่
                        public function inst_news($newsT, $newsS, $newsD, $newsAT, $newNF1){
                                $result = mysqli_query($this->dbcon, "INSERT INTO news(
                                news_title,
                                news_summary,
                                news_description,
                                news_author,	
                                news_cover)
                                VALUE('$newsT',
                                '$newsS',
                                '$newsD',
                                '$newsAT',
                                '$newNF1')
                                ");
                        return $result;

                        }
                        //? ฟังก์ชั่น ดึงข่าวหน้า มาโชว์หน้า EDIT News
                        public function selNForEdit($idS){
                                $re = mysqli_query($this->dbcon, "SELECT * FROM news WHERE id='$idS'");
                                return $re;
                        }
                        //? ฟังก์ชั่นดึงข่าว no picture 
                        public function edit_newsNoPic($newsT, $newsS, $newsD, $newsAT,$idIns){
                                $result = mysqli_query($this->dbcon, "UPDATE news SET
                                news_title='$newsT',
                                news_summary='$newsS',
                                news_description='$newsD',
                                news_author='$newsAT' WHERE id='$idIns'");
                
                                return $result;
                        }

                        //? ฟังก์ชั่น แก้ไขข่าว
                        public function edit_news($newsT, $newsS, $newsD, $newsAT, $newNF1, $idIns){
                                $result = mysqli_query($this->dbcon, "UPDATE news SET
                                news_title='$newsT',
                                news_summary='$newsS',
                                news_description='$newsD',
                                news_author='$newsAT',	
                                news_cover='$newNF1' WHERE id='$idIns'");

                                return $result;
                        }

                        //? ฟังก์ชั่น del ข่าว
                        public function delnews($id, $file){
                                
                                $re = mysqli_query($this->dbcon, "DELETE FROM news WHERE id='$id'");
                                unlink($file);
                        
                                if($re){
                                echo"<script>";
                                        echo "setTimeout(function () { 
                                        swal({
                                        title: 'ลบข้อมูลเรียบร้อยแล้ว',
                                        text: 'ลบข้อมูลข่าวประชาสัมพันธ์เรียบร้อยแล้ว',
                                        type: 'success',
                                        confirmButtonText: 'OK'
                                        },
                                        function(isConfirm){
                                        if (isConfirm) {
                                                window.location.href = 'officer.php?p=p1';
                                        }
                                        }); }, 800);";
                                
                                echo"</script>";
                                }
                                return $re;
                        }

                        //? ฟังก์ชั่น ดึงข่าวหน้าแรก
                        public function slN_index(){
                                $re = mysqli_query($this->dbcon, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
                                return $re;
                        }

                        //? ฟังก์ชั่น อ่านข่าว id
                        public function slrN_id($id){
                                $re = mysqli_query($this->dbcon, "SELECT * FROM news WHERE id='$id'");
                                return $re;
                        }

                        //? ฟังก์ชั่น ดึงข่าว ทั้งหมด
                        public function newsAll(){
                                $re = mysqli_query($this->dbcon, "SELECT * FROM news ORDER BY id DESC");
                                return $re;
                        }
                }










?>