<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
    include_once('../../function.php');
    $insertUser = new queryData();
    
    $username = $_POST['username'];

    $password = $_POST['password'];

    $title_name = $_POST['title_name'];

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $email = $_POST['email'];

    $phone_number = $_POST['phone_number'];

    $user_level = $_POST['user_level'];


    //
    // ────────────────────────────────────────────── I ──────────
    //!   :::::: S Q L : :  :   :    :     :        :          :
    // ────────────────────────────────────────────────────────
    //

    $sql = $insertUser->runQuery("INSERT INTO user ( `username`, 
    `password`,
    `title_name`,
    `first_name`, 
    `last_name`, 
    `email`, 
    `phone_number`, 
    `user_level`) VALUE ('$username', 
    '$password', 
    '$title_name', 
    '$first_name', 
    '$last_name', 
    '$email', 
    '$phone_number', 
    '$user_level')
    ");
    if($sql){
            ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'เพิ่มผู้ใช้งานเรียบร้อยแล้ว',
        showConfirmButton: false,
        timer: 2000
    }).then(function(){
        window.location.href='../../tbh/officer.php?p=showMember';
    })
});
</script>
<?php
    }else{
        echo"Can't Insert into Database";
    }

    
    


?>