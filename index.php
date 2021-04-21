<?php 
    session_start();
    require_once('function.php');
    $connect_database = new DB_conn();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo title_web; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">  <!--- font --->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body id="bg_index">
    <section class="bg-min-vh-100%">
    <!---------------------------------------- ส่วนหัว -------------------------------------------------------->
        <div class="container-fluid " id="bg_index">
                    <div class="row p-2">
    <!---------------------------------------- logo ---------------------------------------------------------->
                        <div class="col-sm-1 col-xs d-flex align-items-center ">
                            <img src="image/upload/logowat.png" class="w-100 d-none d-xl-block">
                        </div>
    <!---------------------------------------- ชื่อระบบ -------------------------------------------------------->
                        <div class="col-sm text-black mt-4">
                            <h1 class="">อสังหาริมทรัพย์วัดนครสวรรค์พระอารามหลวง</h1>
                            <p><b>ระบบจัดการการเช่าอสังหาริมทรัพย์ของวัดนครสวรรค์พระอารามหลวง</b></p>
                        </div>
    <!---------------------------------------- login --------------------------------------------------------->
        <?php 
            if(!isset($_SESSION['id'])) {
                ?>
                <div class="col-xl d-flex align-items-center justify-content-end">
                    <div class="row">
                        <div class="col-sm">
                            <form action="check_login.php" method="post" class="">
                                <div class="row form-inline ">
                                    <div class="form group mr-2">
                                        <input type="text" class="form-control" name="username" placeholder="Username">    
                                    </div>
                                    <div class="form group mr-2">
                                        <input type="password" class="form-control" name="password" placeholder="Password">    
                                    </div> 
                                </div>
                                    <div class="row justify-content-end mt-2">
                                    <div class="form group mr-2">
                                        <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</button> 
                                                                            
                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

        <?php
        }
        if (isset($_SESSION['id'])){
            ?>
            <div class="col-xl d-flex align-items-center justify-content-end">
                <div class="row">
                    <div class="col-sm">
                    <form action="check_logout.php" method="post" class="">
                            <div class="row form-inline ">
                            <?php   
                                    //echo "เข้าสู่ระบบสำเร็จ :) ";
                                    echo "สวัสดี : ". $_SESSION['name']. " ". $_SESSION['lastname'];
                            ?>
                            
                            </div>

                            <div class="row form-inline justify-content-end mt-2">       
                            <button type="submit" class="btn btn-danger text-light" name="logout">ออกจากระบบ <i class="fas fa-sign-in-alt"></i></button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
                        
                    </div>
        </div>

    <!---------------------------------------- เมนู ----------------------------------------------------------->
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="index.php?p=home" class="ml-2 text-dark btn"><i class="fas fa-home"></i> หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=rent_data" class="ml-2 text-dark btn"><i class="fas fa-file-alt"></i> เอกสารที่ต้องใช้</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=all_news" class="ml-2 text-dark btn"><i class="fas fa-newspaper"></i> ข่าวทั้งหมด</a>
                    </li>
                    <li class="nav-item active">          
                        <a href="index.php?p=contact" class="ml-2 text-dark btn"><i class="fas fa-address-card"></i> ช่องทางการติดต่อ</a>
                    </li>
                    </ul>
    
                
                    </div>
            </nav>

    <!---------------------------------------- ดึงหน้า --------------------------------------------------------->   
        <?php 
            if(isset($_GET['p'])){

            switch ($_GET['p']){
                case "home":
                    include_once('home.php');
                break;
                case "contact":
                    include_once('contact.php');
                break;
                case "rent_data":
                    include_once('rentaldata.php');
                break;
                case "read_news":
                    include_once('readnews.php');
                break;
                case "all_news":
                    include_once('allnews.php');
                break;

                default:
                    include_once('home.php');
                break;

            }
        }
        if(!isset($_GET['p'])){
            ?>
                    <script>
                        window.location.href='index.php?p=home';
                    </script>
        <?php
        }
        ?>
    

    <!---------------------------------------- ส่วนล่าง footer ------------------------------------------------->
        <div class="container-fluid mt-2 bg-warning">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="image/upload/logo_nsru.png" style="width:75px;" >
                    <img src="image/upload/it4cd.png" style="width:150px;" >
                        <b><br> ©2020 กลุ่มวิจัยด้านเทคโนโลยีสารสนเทษเพื่อการพัฒนาชุมชน (IT4CD)</b>
                        <br><b>มหาวิทยาลัยราชภัฏนครสวรรค์</b>
                        <b><a href="https://www.facebook.com/kao.remember/" class="text-decoration-none text-primary"> <br> ติดต่อ noppakao.t@nsru.ac.th </a></b>
                </div>
            </div>
        </div>

    



    </section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>