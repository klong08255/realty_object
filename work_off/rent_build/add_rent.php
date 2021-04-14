<div class="d-flex justify-content-start mb-2"><a href="officer.php?p=show_rent_mange" class = "btn btn-primary"><i class="fas fa-arrow-circle-left"></i> ย้อนกลับ</a></div>

        <?php
            if(!isset($_GET['id4edit'])){
        ?>
        <div class="card">
            <div class="card-header text-center">
                <h3 class="font-weight-bold"><i class="fas fa-folder-plus"></i> เพิ่มข้อมูลการเช่าอาคารอสังหาริมทรัพย์</h3>
            </div>
            <div class="card-body"> 
        
                <form class="jumbotron" action="###" method="post">

                <!-- แก้กงงี้ -->
                </form>

            

            </div>
        

        <?php
            }
            //
            // ──────────────────────────────────────────────────────── I ──────────
            //!   :::::: F O R   E D I T : :  :   :    :     :        :          :
            // ──────────────────────────────────────────────────────────────────
            //

            
            if(isset($_GET['id4edit'])){
                        $id4edit = $_GET['id4edit'];
                    $edit = new queryData();

                    $sql = $edit->runQuery("SELECT * FROM data_build WHERE id='$id4edit' ");
                    if($sql){
                        $fetch = mysqli_fetch_array($sql);
                        ?>
        
                <?php
            }else{
                echo"Can't SQL";
            }
    
                    
            
    }
    ?>