<link rel="stylesheet" href="../admin/assets/css/contact.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
include('config/code-generator.php');


require_once('partials/_head.php');
?>

<body>
    <!-- Sidenav -->
    <?php
    require_once('partials/_sidebar.php');
    ?>
    <!-- Main content -->
    <div class="main-content" style="background-color: #CCCCCC;">
        <!-- Top navbar -->
        <?php
        require_once('partials/_topnav.php');
        ?>
        <!-- Header -->
        <div style="background-image: url(assets/img/theme/restro00.jpg); background-size: cover;" class="header  pb-8 pt-5 pt-md-8">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container-fluid">
                <div class="header-body">
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="row" style="margin-left: 40px; margin-top:10px">
            <div class="col-sm-7" style="border:solid black 10px;">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.940960311356!2d105.8110241!3d21.0350482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab14af7ae18f%3A0x5f79b92cf564a477!2zTmcuIDQ5IFAuIExpbmggTGFuZywgQ-G7kW5nIFbhu4ssIEJhIMSQw6xuaCwgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1681284790255!5m2!1svi!2s" 
                     style="border:0;" allowfullscreen="1" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                     width="678" height="680">
                    </iframe>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact_1">
                    <h2>Tsuruya - Linh Lang</h2>
                    <button type="button" class="btn btn-primary">Liên hệ</button>
                    <p>Hoặc gọi tới : <span>1900.2280</span></p>
                    <p>Để đặt chỗ và được tư vấn</p>
                </div>

                <div class="contact_2">
                    <div class="time">
                        <h3>Giờ hoạt động</h3>
                        <ul class="list-group list-group-flush">
                            <li><span>Thứ hai:</span> 11:30 - 13:30 & 17:50 - 22:30</li>
                            <li><span>Thứ ba:</span> 11:30 - 13:30 & 17:50 - 22:30</li>
                            <li><span>Thứ tư:</span> 11:30 - 13:30 & 17:50 - 22:30</li>
                            <li><span>Thứ năm:</span> 11:30 - 13:30 & 17:50 - 22:30</li>
                            <li><span>Thứ sáu:</span> 11:30 - 13:30 & 17:50 - 22:30</li>
                            <li><span>Thứ bảy:</span> 11:30 - 13:30 & 17:50 - 22:30</li>
                            <li><span>Chủ nhật:</span> 11:30 - 13:30 & 17:50 - 22:30</li>
                        </ul>
                    </div>

                    <div class="row" style="margin-left: 10px; border-top: solid 0.5px;width: 360px;">
                        <div style="margin-top: 10px; margin-left: 30px;">
                            <h3>Thông tin thêm</h3>
                            <ul class="list-group list-group-flush">
                                <li>
                                    <i class="fas fa-car"></i>
                                    Chỗ đỗ xe
                                </li>
                                <li>
                                    <i class="fas fa-person-booth"></i>
                                    Phòng riêng
                                </li>
                                <li>
                                    <i class="fas fa-receipt"></i>
                                    Có xuất hóa đơn
                                </li>
                                <li>
                                    <i class="fas fa-wifi"></i>
                                    Wifi
                                </li>
                                <li>
                                    <i class="fas fa-credit-card"></i>
                                    Thanh toán thẻ
                                </li>
                                <li>
                                    <i class="fas fa-holly-berry"></i>
                                    Trang trí
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                require_once('partials/_scripts.php');
                ?>
            </div>
        </div>

        <?php require_once('partials/_footer.php'); ?>
    </div>

    <!-- Argon Scripts -->
    <?php
    require_once('partials/_scripts.php');
    ?>
</body>

</html>