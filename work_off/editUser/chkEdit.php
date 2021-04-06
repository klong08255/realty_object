<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
    include_once('../../function.php');
    $editUser = new queryData();
    
    $id = $_POST['id'];
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

    $sql = $editUser->runQuery("UPDATE user SET 
    username='$username', 
    password='$password', 
    title_name='$title_name', 
    first_name='$first_name', 
    last_name='$last_name', 
    email='$email', 
    phone_number='$phone_number',
    user_level='$user_level' WHERE id='$id' ");
    if($sql){
            ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'แก้ไขข้อมูลผู้ใช้งานเรียบร้อยแล้ว',
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