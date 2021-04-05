<?php 
    $slN = New DB_conn();
?>
<!---------------------------------------- รูปสไลด์ -------------------------------------------------------->
    <div class="container mt-3 mb-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/upload/bander1.png" class="d-block w-100" alt="...">
            </div>
                <div class="carousel-item">
                    <img src="image/upload/bander2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/upload/bander3.png" class="d-block w-100" alt="...">
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
    </div>

            <hr>
<!---------------------------------------- เนื้อหาข่าว ------------------------------------>
        
        <div class="container justify-content-center">
        <div class="card mt-4 mb-4">

        <div class="card-header ">
            <h3 class="mb-0"><i class="fa fa-newspaper-o text-success" aria-hidden="true"></i> ข่าวประชาสัมพันธ์ </h3>
        </div>
        <div class="card-body">
        
                        
                            <?php

                                $res = $slN->slN_index();
                                while($num = mysqli_fetch_array($res))
                                {
                                ?>
                                <div class="card mb-4 max-w-100">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                    <img src="image/news/<?php echo $num['news_cover']; ?>" class="card-img w-100" title="รูปภาพข่าว">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <div><h4 class="card-title"><?php echo $num['news_title']; ?></h4></div>

                                        <div><span class="badge badge-danger text-warning d-inline">ข่าวใหม่ !</span> <p class="d-inline text-secondary font-weight-light">ผู้เขียนข่าวโดย คุณ, <?php echo $num['news_author']; ?> > โพสต์เมื่อ : <?php echo $num['date_create']; ?></p> </div>

                                        <div class="mt-3"><p><?php echo $num['news_summary']; ?></p></div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="index.php?p=read_news&readN_page_id=<?php echo $num['id']; ?>" class="btn btn-primary">อ่านต่อ <i class="fas fa-book-reader"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <?php
                                }
                                ?>
                        
        </div>
        </div>
        </div>
