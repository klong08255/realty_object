<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php
    session_start();
    require_once('function.php');
    $condb= new DB_conn();
    $login_f= new DB_conn();

    if(!isset($_POST['submit'])){
        header("Location: index.php"); //เปิดหน้า index
    }else{
        $username = $_POST['username']; //ดึงค่าจาก username
        $password = $_POST['password']; //ดึงค่าจาก password

        $res = $login_f->login_form($username, $password);
        $num = mysqli_fetch_array($res);

        if($num > 0){
            $_SESSION['id'] = $num['id']; //id
            $_SESSION['name'] = $num['first_name']; //รับค่าชื่อจริง
            $_SESSION['lastname'] = $num['last_name']; //รับค่านามสกุล
            $_SESSION['user_level'] = $num['user_level']; //รับค่า level
            
            if($_SESSION['user_level']=="แอดมิน"){
                echo"<script>";
                    echo "setTimeout(function () { 
                        swal({
                        title: 'รหัสผ่านถูกต้อง',
                        text: 'ยินดีต้อนรับคุณ (แอดมิน)',
                        type: 'success',
                        confirmButtonText: 'OK'
                        },
                        function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'tbh/admin.php?p=showMember';
                        }
                        }); }, 1000);";
                echo"</script>";
                
            }
            if($_SESSION['user_level']=="ผู้บริหาร"){
                echo"<script>";
                    echo "setTimeout(function () { 
                        swal({
                        title: 'รหัสผ่านถูกต้อง',
                        text: 'ยินดีต้อนรับคุณ (ผู้บริหาร)',
                        type: 'success',
                        confirmButtonText: 'OK'
                        },
                        function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'tbh/manager.php?p=1';
                        }
                        }); }, 1000);";
                echo"</script>";
            }
            if($_SESSION['user_level']=="เจ้าหน้าที่"){
                echo"<script>";
                    echo "setTimeout(function () { 
                        swal({
                        title: 'รหัสผ่านถูกต้อง',
                        text: 'ยินดีต้อนรับคุณ (เจ้าหน้าที่)',
                        type: 'success',
                        confirmButtonText: 'OK'
                        },
                        function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'tbh/officer.php?p=p1';
                        }
                        }); }, 1000);";
                echo"</script>";
            }
            
        }else{

            echo"<script>";
                echo "setTimeout(function () { 
                    swal({
                    title: 'รหัสผ่านไม่ถูกต้อง',
                    text: 'กรุณาตรวจสอบใหม่',
                    type: 'error',
                    confirmButtonText: 'OK'
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        window.location.href = 'index.php?p=home';
                    }
                    }); }, 1000);";
            echo"</script>";
        }
    }
?>