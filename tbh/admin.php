<?php 
    session_start();
    require_once('../function.php');
    $connect_database = new DB_conn();  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>แอดมิน</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=Trirong:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>

    <body class="sb-nav-fixed" style="font-family: 'Itim', cursive;font-family: 'Trirong', serif;">
    <!--------------------------------------- navbar-------------------------------------------------->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand">แอดมิน</font></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>
    <!--------------------------------------- logout-------------------------------------------------->
            <div class="text-light">
                    <i class="fa fa-circle text-success"></i> ยินดีต้อนรับ, คุณ : <?php echo $_SESSION['user_level']; ?>  
                    <a href="../check_logout.php?logout"><button class="btn btn-danger ml-2">ออกจากระบบ <i class="fa fa-sign-out-alt"></i></button></a>
            </div>
        </nav>
    <!--------------------------------------- เมนู ----------------------------------------------------->
        <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" >
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                            <a class="nav-link collapsed" href="admin.php?p=showMember" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon "><i class="fas fa-user-cog"></i></div>
                            จัดการผู้ใช้งาน
                        </a>    
                            
                            
                            </div>
                        </div>   
                    </nav>
            </div>
    <!--------------------------------------- ตาราง ----------------------------------------------------->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <br>

            <?php 
                        switch ($_GET['p']){
            
            //*เพิ่มผู้ใช้
                    case 'p4' :{
                        include_once('../work_off/adduser/manage_user.php');
                    break;
                    }
                    case 'adduser' :{
                        include_once('../work_off/adduser/addUser.php');
                    break;
                    }          
                    case 'showMember' :{
                        include_once('../work_off/adduser/showMember.php');
                    break;
                    }   
            
                }
            ?>

            </div>
                    </div>
                        
                    
                
            
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
