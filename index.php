<?php
    $servername = "localhost";
    $username = "root";
    $HPassword = "";
    $database = "vidu";
    $conn = new mysqli($servername, $username, $HPassword,$database);

    $sql = " SELECT * FROM `book` ";
    $query = mysqli_query($conn,$sql);  
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Amour.vn-Mua sắm nước hoa rẻ nhất</title>
    <meta name="description" content=".">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://Amour.vn/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <style>
        img[alt="www.000webhost.com"] {
            display: none;
        }
    </style>
</head>

<body>
    <!-- code cho nut like share facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="index.php" style="color: #black;"><b>Amour</b>.vn</a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small" placeholder="Tìm kiếm trên Amour...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">              
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                                khoản</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="register.php">Đăng ký</a>
                            <a class="dropdown-item nutdangnhap text-center" href="login.php">Đăng nhập</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
                        
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>



    <!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-red">
            <div class="row justify">
                <div class="col-md-3">
                    <div class="categoryheader">
                        <div class="noidungheader text-red">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Amour</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- noi dung danh muc sach(categories) + banner slider -->
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
                    <!-- CATEGORIES -->
                    <div class="categorycontent">
                        <ul>
                            <li> <a href="#"> 1st Collection</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">1st Collection
                                            </a></li>
                                    <div class="content trai">
                                        <li><a href="#">1st Collection</a></li>
                                        <li><a href="#">1st Collection</a></li>
                                        <li><a href="#">1st Collection</a></li>
                                        <li><a href="#">1st Collection</a></li>
                                        <li><a href="#">1st Collection</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">1st Collectionh</a></li>
                                        <li><a href="#">1st Collection</a></li>
                                        <li><a href="#">1st Collection</a></li>
                                        <li><a href="#">1st Collection</a></li>
                                        <li><a href="#">1st Collection</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">2st Collection</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">2st Collection</a></li>
                                    <div class="content trai">
                                        <li><a href="#">2st Collection</a></li>
                                        <li><a href="#">2st Collection</a></li>
                                        <li><a href="#">2st Collection</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">2st Collection</a></li>
                                        <li><a href="#">2st Collection</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">3st Collection</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">3st Collection</a></li>
                                    <div class="content trai">
                                        <li><a href="#">3st Collection </a></li>
                                        <li><a href="#">3st Collection </a></li>
                                        <li><a href="#">3st Collection</a></li>
                                        <li><a href="#">3st Collection</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">3st Collection</a></li>
                                        <li><a href="#">3st Collection</a></li>
                                        <li><a href="#">3st Collection</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">4st Collection</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">4st Collection</a></li>
                                    <div class="content trai">
                                        <li><a href="#">4st Collectioni</a></li>
                                        <li><a href="#">4st Collection </a></li>
                                        <li><a href="#">4st Collection</a></li>
                                        <li><a href="#">4st Collection</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">4st Collectionn</a></li>
                                        <li><a href="#">4st Collection</a></li>
                                        <li><a href="#">4st Collectionp</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Nước hoa cho Nam</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Nước hoa cho Nam</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Nước hoa cho Nam</a></li>
                                        <li><a href="#">Nước hoa cho Nam</a></li>
                                        <li><a href="#">Nước hoa cho Nam</a></li>
                                        <li><a href="#">Nước hoa cho Nam</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Nước hoa cho Nam</a></li>
                                        <li><a href="#">Nước hoa cho Nam</a></li>
                                        <li><a href="#">Nước hoa cho Nam</a></li>
                                        <li><a href="#">Nước hoa cho Nam</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Nước hoa cho Nữ</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Nước hoa cho Nữ</a></li>
                                 <div class="content trai">
                                        <li><a href="#">Nước hoa cho Nữ<a></li>
                                        <li><a href="#">Nước hoa cho Nữ</a></li>
                                        <li><a href="#">Nước hoa cho Nữ</a></li>
                                        <li><a href="#">Nước hoa cho Nữn</a></li>
                                        <li><a href="#">Nước hoa cho Nữ</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Nước hoa cho Nữ</a></li>
                                        <li><a href="#">Nước hoa cho Nữ</a></li>
                                        <li><a href="#">Nước hoa cho Nữ</a></li>
                                        <li><a href="#">Nước hoa cho Nữ</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Nước hoa Unisex</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Nước hoa Unisex</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Nước hoa Unisex</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Nước hoa Unisex</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Best Seller</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Best Seller</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Best Seller</a></li>
                                        <li><a href="#">Best Seller</a></li>
                                        <li><a href="#">Best Seller</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Best Seller</a></li>
                                        <li><a href="#">Best Seller</a></li>
                                        <li><a href="#">Best Seller</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Thông tin doanh nghiệp</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Thông tin doanh nghiệp</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Thông tin doanh nghiệp</a></li>
                                        <li><a href="#">Thông tin doanh nghiệp</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Thông tin doanh nghiệp</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Chi tiết liên hệ</a><i class="fa fa-chevron-right float-right"></i>

                            </li>
                            <li><a href="#">Phương thức thanh toán</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Phương thức thanh toán</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Phương thức thanh toán</a></li>
                                        <li><a href="#">Phương thức thanh toán</a></li>
                                        <li><a href="#">Phương thức thanh toán</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Phương thức thanh toán</a></li>
                                        <li><a href="#">Phương thức thanh toán</a></li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="https://lh3.googleusercontent.com/pw/AL9nZEVxCXEZ4gsYs6FoCoNXUAI7Qvo3PNsgncAgRFa-qPzGom8OH1Pyk1JcLohS5wABunAxcArNgh-_vGkhWTYP7tamIWCBy5ZUKXa0U3w085JtzPeT4tjaMzt6CKJw5nLA3_MjjWawr_DKsbURDpBEqTbu=w1879-h940-no?authuser=0" class="img-fluid" style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="https://lh3.googleusercontent.com/pw/AL9nZEXqprG0P54NXs_8t6gFcJB0-T9r73vgptbhPMhs1DQJlT3bo6uztIOMaE65xWM8sb6xe_27UYJyp5h5Th0UX5xgbBULDrXCn7gLe3csnaVuHlXWPLFK1awhT_mJMPKr5tBXFFl0NoQU0tNGrzmt8PjR=w1879-h940-no?authuser=0" class="img-fluid" style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="https://lh3.googleusercontent.com/pw/AL9nZEXwnSGwUrXFcutkSBAveOHfaOwJIOrSHRpLlCc61sxFK7sY_xSuBaVjElMARyr0Rc8vJM4Ms0LhWeF-HAepgC3zTfnzxjAyNewF3eEYmJh_TWcUVBP78C3r14ksI1Gj6lIgXYh4_mohPvXT2znnjPih=w1879-h940-no?authuser=0" class="img-fluid" style="height: 386px;" alt="Third slide"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nước hoa mới  -->
    <section class="_1khoi sachmoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                   
                    <!-- 1 san pham -->
                    <?php
                        while ($row = mysqli_fetch_assoc($query)) {?>
                            <div class="card">
                                <a href="Lap-trinh-ke-hoach-kinh-doanh-hieu-qua.html" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="By">
                                    <img class="card-img-top anh" src="images/<?= $row['imgURL']; ?>" alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten"><?= $row['tensach']?></h3>
                                        <!-- <small class="tacgia text-muted">Brian Finch</small> -->
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi"><!--111.200 ₫--><?= $row['gia'] ?>&nbsp;₫</div>
                                            <!-- <div class="giacu text-muted">139.000 ₫</div> -->
                                            <!-- <div class="sale">-20%</div> -->
                                        </div>
                                        <div class="danhgia">
                                            <ul class="d-flex" style="list-style: none;">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><span class="text-muted">1000 nhận xét</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                           
                        <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- khoi sach combo hot  -->
    <section class="_1khoi combohot mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header -->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">nước hoa - GIẢM ĐẾN 25%</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn">
                            <img class="card-img-top anh" src="https://lh3.googleusercontent.com/pw/AL9nZEVYhhzEVGEM8gIAPGlJI_IScfTOsmAlCloj8zPjduRQlFMqC28gjtQ6n9WUedGwYW4JkuttLq2Dn1cSoHMOvu1wM_op42HLaK_Dqj1dHpojBe0ETJ7CETxBQT0c_je9pV8AQncHYYNWAgOsHdXWGofC=s970-no?authuser=0" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Gorgeous Crystal for Her - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">1.125.000 ₫</div>
                                    <div class="giacu text-muted">1.500.000 ₫</div>
                                    <div class="sale">-25%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted"> 850 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Ocean Blue - 100ml">
                            <img class="card-img-top anh" src="https://lh3.googleusercontent.com/pw/AL9nZEUL-efy5xsGi4PtJjNVYZAHnPkMT2rZZpKkl3zR_k_kdYKXaE0bZpjBCjs1UBk_arbSB7o2r5m33GI6dU0d7Pg-M4Aw4S6rdtP1u0KEixnWKfVLjVf37rN-oI0bfCsNyLfHsolRIPrzpRHHi6HYd2my=s970-no?authuser=0" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Ocean Blue - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">1.125.000 ₫</div>
                                    <div class="giacu text-muted">1.500.000 đ</div>
                                    <div class="sale">-25%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">860 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Midnight Girl EDP - 100ml">
                            <img class="card-img-top anh" src="https://lh3.googleusercontent.com/pw/AL9nZEX-G98M8f-nwSe-7CX0Zgd582qNM_-lUEZ_uKaeD9AdFobcdMNsr5p79EKEyTl7-LQahH2Sk1MwSFTerM-ZLhBvfRQlk0F32bMHuKwVTdorK1xM6e8OBEmueiVJcf0FVEjPumeYubp6LBiqrwtxV2BG=s970-no?authuser=0" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Midnight Girl EDP - 100ml
                                </h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">1.125.000 đ</div>
                                    <div class="giacu text-muted">1.500.000 ₫</div>
                                    <div class="sale">-25%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">1000 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Love Story EDP - 100ml">
                            <img class="card-img-top anh" src="https://lh3.googleusercontent.com/pw/AL9nZEXjGVYXdOU1uxlF96cE0QPSkAU9SlDKke2pCq2Dm9HnuBhL0fnF2-DavyVcBs8Mwnes0SN1AzCT6w0BeIDDdAd4y3J65XquUs8wdzGSadyxPCOopCp48Y6yf_WIkMQ12_jLiCd_LqWhfXvhNrAKSpuc=s970-no?authuser=0" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Love Story EDP - 100ml</h3>
                                <small class="tacgia text-muted"> Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">1.125.000 ₫</div>
                                    <div class="giacu text-muted">1.500.000 ₫</div>
                                    <div class="sale">-25%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted"> 780 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Guility for Women - 100ml">
                            <img class="card-img-top anh" src="https://lh3.googleusercontent.com/pw/AL9nZEU_MBjXrzXhfPctHQ4p2smLn1XkkiHbpVyYzuu-x3dMXwUg-gKyblDV96rdDxiucexiiFe8c61sOb8LCLor7F24A_SA1FGjvFNpm0AtB50t75vpNATNsrMiaQSUT1viWguzq9kIJLAyPcDzwU4AKFx0=s970-no?authuser=0" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Guility for Women - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">1.500.000 ₫</div>
                                    <div class="giacu text-muted">1.125.000 ₫</div>
                                    <div class="sale">-25%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">1000 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Sexy Senorita for Women EDP - 100ml">
                            <img class="card-img-top anh" src="" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Sexy Senorita for Women EDP - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">1.125.000 ₫</div>
                                    <div class="giacu text-muted">1.500.000 ₫</div>
                                    <div class="sale">-25%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted"> 790 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Wood for Her - 100ml">
                            <img class="card-img-top anh" src="" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Wood for Her - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">1.125.000 ₫</div>
                                    <div class="giacu text-muted">1.500.000 ₫</div>
                                    <div class="sale">-25%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">860 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Wood & Sea Salt EDP - 100ml">
                            <img class="card-img-top anh" src="https://lh3.googleusercontent.com/1k5ov0NBEcUW28bjxv_qnrUwOvhPNX7kLTwTcgq2E0d9xPPYBb9LNvrRQwRRfMflK5sJZfOaAMvuZ58FCl4H-CGOnMY9E_ThwIN1ucxlgOdqnvt9vusdtSdevWmn-z88SFJNRVYS-FSiE2XZn_jOalNiJWisx591bXu-4LHDOFYWMvFKlEvKC9XF1xmMttA5PXcVFPFsXJ2YMw9C4Jp9zKuvFJYagw1MEWEl6vIamNY1KyqFnIZnAtGns1dpfZpupmwnyBAspPLIjdZ2iqoSCe_wGv16kk-HtHzMJSmcsm4SW7rwxtrcy_ybOQdptsByyYhVA2k1HS9LwSeONQI7SpoELc-hRRCjkGmAlFKyH1RUrblOLtbQLmxgkKzFCt2lmKLiZmDrby8Z4fLaXl_Y8OM98t1no0QlWiMmXThZ1-3Gl-l18Pt2agNLbSEW1zdesiH3zHnoZVWkEJL9L_uwF0EXfSEBaCMEypZl8Cepzx7v5EGyY9jDob3Umg09G9gRgtEe-w1PToOVkTx4aDof5WEUlN78GoSKzDYlijx9Wwwb78x8PpRNM_YmWkEJJ4NF_earXo4YutgGk447LHVrqN-EeXjE3LWf1-1SPN5M4Sge2qg7MrLTt3S0wuED7mHvIofQtAs3BmNFF6cLJr0Y96BfXJTQZWnWBBs0Yv9ZvhLOBaSm6QqWCGOUf7s2GXltkqQ_DsNkqfBuHs1K-TuzG1BvGA4oYIijoTH53O1SefysQyxZfubqqdTn7FmKBN1h1nAEaXeqD5szEjiGsniQDYzVsX5AVEu_bE11KEEYUOBy5v3j2990-oDqQ9T54kzB63jLbYMRnBb0C1_4xuCQMc34lT8ZOcf1soLwS26ZMrmvT_Ucc36PZmLMI-nU6y-LSPhADPnHxRnwd849QgEF630hEOw0ZuCQaKNwvrMoDA3naWo4ceXLFmdCL0QU8_RdP3opNOQHb2qL6fAaEXYOGqFe4ZedFwqIxtnED-9EuoQdLkfB2sU5BeedroEirqMmV8bpdLvsq-OU5PBYAbwNUHKHXXuq4eSHPCl9D5U1hIDsIIbSy3zeHmpwo7Rsc8-75ZvDeTJkRf7_qrWyrdKPhMMcBCCojBGtsIdNOorC43xK9ik13rw_V3jz_rSSX1euFehH=s328-no?authuser=0" alt="combo-phong-cach-song">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Wood & Sea Salt EDP - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">1.125.000 ₫</div>
                                    <div class="giacu text-muted">1.500.000 ₫</div>
                                    <div class="sale">-25%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">800 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- khoi sach sap phathanh  -->
    <section class="_1khoi sapphathanh mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">Bộ sưu tập sắp phát hành</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <!-- 1 san pham -->
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Peach Pear for Her EDP - 100ml">
                            <img class="card-img-top anh" src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t39.30808-6/314520163_2385600704928666_7063516747246174588_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_ohc=97o3rC0NsZIAX9OYqMa&_nc_ht=scontent.fsgn2-4.fna&oh=00_AfCUJ5o_Ge5Zbd54AXDMtpwV06gWxF4z2a9wyZLdVThGWQ&oe=636A6343" alt="ngoai-giao-cua-chinh-quyen-sai-gon">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Peach Pear for Her EDP - 100mln</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted"> 0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Black Leather for Her - 100ml">
                            <img class="card-img-top anh" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t39.30808-6/314600209_2385600764928660_2758374288864938998_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_ohc=y0UKnqFgEScAX8-vROT&_nc_ht=scontent.fsgn2-2.fna&oh=00_AfAtaXdIT8UvAafpaErzlrZ70r5M-PnJ685gqQmdrbXJzg&oe=636A98EF" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Black Leather for Her - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Sexy Blooming EDP - 100ml">
                            <img class="card-img-top anh" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t39.30808-6/314580080_2385600778261992_4497674356320941813_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_ohc=BaeK7D497kgAX8RyiJR&_nc_ht=scontent.fsgn2-1.fna&oh=00_AfBSbJtKw-YCWjJp0pw5jcxs-vkqFXZJpg6wERy_Ekeewg&oe=636A851B" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Sexy Blooming EDP - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Daisy Fresh for Her - 100ml">
                            <img class="card-img-top anh" src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t39.30808-6/314511369_2385600791595324_9027506793811521452_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_ohc=ukdV-fiEPioAX-P3JIP&_nc_ht=scontent.fsgn2-4.fna&oh=00_AfDAtiLfFOZ2BqOcloNNE-hfXYQJP8ZCfLf08gvezJ4Cuw&oe=6368CBB1" alt="#">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Amour Daisy Fresh for Her - 100ml</h3>
                                <small class="tacgia text-muted">Amour</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- div _1khoi -- khoi sachnendoc -->
    <section class="_1khoi sachnendoc bg-white mt-4">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h2 class="header text-uppercase" style="font-weight: 400;">Danh sách bán chạy</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                    <!-- 1 san pham -->
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Sugar Candy For Her - 100ml">
                                <img class="card-img-top anh" src="https://scontent.fsgn2-5.fna.fbcdn.net/v/t39.30808-6/314557675_2385600534928683_2065918516872188988_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=QMdzUr0ZtPUAX-bNhid&_nc_ht=scontent.fsgn2-5.fna&oh=00_AfA2q_1VhX_SGx2JV5awMm3aYfSo9pr_NfyBHRd6gmN7eQ&oe=63698B0B" alt="#">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Amour Sugar Candy For Her - 100ml</h3>
                                    <small class="thoigian text-muted">9/11/2022</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Rhythm for Women - 100ml">
                                <img class="card-img-top anh" src="https://scontent.fsgn2-6.fna.fbcdn.net/v/t39.30808-6/314561625_2385600501595353_4003652369065935621_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=qLoiqZtOUN8AX_Blvg0&_nc_ht=scontent.fsgn2-6.fna&oh=00_AfBbDfncfJc041uamy7kktkfQBnMF-mN_B39WLoVni9c6A&oe=636971F2" alt="#">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Amour Rhythm for Women - 100ml</h3>
                                    <small class="thoigian text-muted">9/11/2022</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Princess EDP - 100ml">
                                <img class="card-img-top anh" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t39.30808-6/314419177_2385600541595349_7213987648097008085_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_ohc=9KFtbP5Rh00AX9muYde&_nc_ht=scontent.fsgn2-1.fna&oh=00_AfAaT4w2TqXXstkJyOcbfQVsEyh2xRnhZDI55rHaHrjN_Q&oe=636A2E1F" alt="vua-gia-long">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Amour Princess EDP - 100ml</h3>
                                    <small class="thoigian text-muted">9/11/2022</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Under The Melon Trees - 100ml">
                                <img class="card-img-top anh" src="https://scontent.fsgn2-6.fna.fbcdn.net/v/t39.30808-6/314453303_2385600684928668_8983147452054453237_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=jxNrKxjjqpYAX8_mzuE&tn=ZKqw_APVwdV2iMjw&_nc_ht=scontent.fsgn2-6.fna&oh=00_AfDF_RSW3kUYLzaQvfXucIxSOiBO4-maNPdNCOX4Y6AEGQ&oe=636A4CB2" alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Amour Under The melon Trees - 100ml</h3>
                                    <small class="thoigian text-muted">9/11/2022</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card cuoicung">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Amour Moutain Water - 100ml">
                                <img class="card-img-top anh" src="https://scontent.fsgn2-7.fna.fbcdn.net/v/t39.30808-6/314487127_2385600674928669_8617995851917400905_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_ohc=fdJSZ2TjNlQAX__SJaP&_nc_ht=scontent.fsgn2-7.fna&oh=00_AfDQ9ueOf7vLfG9j4ANzphan780H_zkKQyQ0zDz3LR2fqg&oe=636921AA" alt="dai-dich-tren-con-duong-to-lua">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Amour Moutain Water - 100ml</h3>
                                    <small class="thoigian text-muted">9/11/2022</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#" style="background:#117dcf;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>
 <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
 <section class="abovefooter text-white" style="background-color: #117dcf;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-books.png" alt="icon-books">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">Nhiều mùi hương đặc biệt</h6>
                            <p class="detail">Chọn lọc bởi Amour</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-ship.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                            <p class="detail">Từ 500.000đ ở TP.HCM</p>
                            <p class="detail">Từ 1.000.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-gift.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h6>
                            <p class="detail">Gói quà</p>
                            <p class="detail">Khắc tên theo yêu cầu</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-return.png" alt="icon-return">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h6>
                            <p class="detail">Hàng bị lỗi được đổi trả nhanh chóng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h6 class="header text-uppercase font-weight-bold">Về Amour</h6>
                        <a href="#">Giới thiệu về Amour</a>
                        <a href="#">Tuyển dụng</a>
                        <a href="#">Hotline:</a>
                        <a href="#">0923.345.054</a>
                        <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h6 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h6>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h6>
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h6>
                        <img src="images/visa-payment.jpg" alt="visa-payment">
                        <img src="images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="images/jcb-payment.jpg" alt="jcb-payment">
                        <img src="images/atm-payment.jpg" alt="atm-payment">
                        <img src="images/cod-payment.jpg" alt="cod-payment">
                        <img src="images/payoo-payment.jpg" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

</body>

</html>