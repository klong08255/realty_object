<?php 
    session_start();
    require_once('../function.php');
    $connect_database = new DB_conn();  
    if(isset($_SESSION['user_level'])=="ผู้บิรหาร"){
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title><?php echo title_web_m; ?></title>
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/print.css?version=<?php echo filemtime('css/print.css'); ?>">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">  <!--- font --->
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>

    <body class="sb-nav-fixed" style="font-family: 'Mitr', sans-serif;">
        <!--------------------------------------- navbar-------------------------------------------------->
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <a class="navbar-brand"><i class="fa fa-user-tie"></i> ผู้บริหาร</a>
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
                <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">    </form>
        <!--------------------------------------- logout ------------------------------------------------->
                <div class="text-light">
                        <i class="fa fa-circle text-success"></i> ยินดีต้อนรับ, คุณ : <?php echo $_SESSION['user_level']; ?>  
                        <a href="../check_logout.php?logout"><button class="btn btn-danger ml-2">ออกจากระบบ <i class="fa fa-sign-out-alt"></i></button></a>
                </div>
            </nav>
        <!--------------------------------------- เมนู ---------------------------------------------------->   
            <div id="layoutSidenav">
                    <div id="layoutSidenav_nav">
                        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" >
                            <div class="sb-sidenav-menu">
                                <div class="nav">
                                    <a class="nav-link collapsed" href="manager.php?p=1"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon "><i class="fas fa-file"></i></div>
                                        ตารางข้อมูลผู้ใช้งานทั้งหมด
                                    </a>
                                    <a class="nav-link collapsed" href="manager.php?p=2"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon "><i class="fas fa-file"></i></div>
                                        ตารางข้อมูลอาคารอสังหาริมทรัพย์
                                    </a>
                                    <a class="nav-link collapsed" href="manager.php?p=3"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon "><i class="fas fa-file"></i></div>
                                        ตารางข้อมูลการเช่าอาคารอสังหาริมทรัพย์
                                    </a>      
                                </div>
                            </div>   
                        </nav>
                </div>
        <!------------------------------------------------------------------------------------------------->
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <br>
            
        <!--------------------------------------- ดีงค่า  -------------------------------------------------->
            <?php 
                    switch ($_GET['p']){
                        case 1 :{
                            include_once('../work_man/report.php');
                        break;
                        }                       
                        case 2 :{
                            include_once('../work_man/report2.php');
                        break;
                        }    
                        case 3 :{
                            include_once('../work_man/report3.php');
                        break;
                        }  
                        case 'view_rent' :{
                            include_once('../work_man/view_rent.php');
                        break;
                        }  
                        
                        
                    }
                ?>

                    </div>
                </div>
            
                <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
        </script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous">
        </script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

<?php
    }else{
        header("Location: ../index.php");
    }
    ?>

    <!-- function Data tab le-->
<script type="text/javascript" charset="utf-8">
        $(document).ready( function () {
            $('#myTable').DataTable({
                
                "oLanguage": {
                    "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                    "sSearch": "ค้นหา :",
                    "aaSorting" :[[0,'desc']],
                    "oPaginate": {
                    "sFirst":    "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext":     "ถัดไป",
                    "sLast":     "หน้าสุดท้าย"
                    },
                },
                "scrollX": true 
                        
            });
        } );

</script>