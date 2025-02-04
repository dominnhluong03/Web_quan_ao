<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/app.js"></script>
    <link rel="shortcut icon" href="./image/Logo/main-logo.png" type="image/x-icon">
</head>

<body>
    <div class="fluid-container">
        <!-- header -->
        <div id="fixed-menu">
            <div class="header row">
                <div class="center col-md-12 col-sm-12 col-xl-12 col-12">
                    <img src="./image/logo/chuong.webp" alt="">
                    <a href="index.php?act=main_page">MIỄN PHÍ VẬN CHUYỂN VỚI HÓA ĐƠN TỪ 299K</a>
                </div>
            </div>
            <!-- responsive_mobile -->
            <div class="container-fluid" id="res_mobile">
                <div class="menu row">
                    <div id="toggle" class="col-2 col-md-2 col-sm-2 col-xl-2">
                        <i id="toggle" class="bi bi-list"></i>
                    </div>

                    <div class="logo col-7 col-md-7 col-sm-7 col-xl-7">
                        <a href="index.php?act=main_page">
                            <img src="./image/Logo/logo.webp" alt="logo">
                        </a>
                    </div>
                    <div class="col-3 col-md-3 col-sm-3 col-xl-3">
                        <div class="icon row">
                            <div class="search-icon col-4 col-md-4 col-sm-4 col-xl-4" id="search">
                                <i class="bi bi-search"></i>
                            </div>
                            <div class="login col-4 col-md-4 col-sm-4 col-xl-4" id="login">
                                <i class="bi bi-person-circle "></i>
                            </div>
                            <div class="cart col-4 col-md-4 col-sm-4 col-xl-4" id="cart">
                                <i class="bi bi-bag "></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- navbar -->
                <div class="navbar row" id="main-menu">
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="index.php?act=new_collection">
                            <span>NEW COLLECTION</span>
                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="index.php?act=john_henry"><span id="johnHenry">JOHN HENRY</span></a>

                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="index.php?act=freelancer"><span id="freelancer">FREELANCER</span></a>

                    </div>
                    <div class="support">
                        <p class="sup_header">BẠN CẦN HỖ TRỢ?</p>
                        <div class="phoneNumber">
                            <i class="bi bi-telephone-forward"></i>
                            <p>Liên hệ: 0987592443</p>
                        </div>
                        <div class="email">
                            <i class="bi bi-envelope-paper"></i>
                            <p>quytrinh439@gmail.com</p>
                        </div>
                    </div>
                </div>
                <!-- john henry -->
                <div class="johnHenry row" id="jh">
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="comeBack" id="comeBack1">
                            <i class="bi bi-chevron-left"></i> QUAY VỀ
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="index.php?act=john_henry">Xem tất cả "JOHN HENRY"</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <span id="ao-jh">- ÁO JH</span>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <span id="quan-jh">- QUẦN JH</span>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <span id="phu-kien-jh">- PHỤ KIÊN JH</span>
                    </div>
                </div>
                <div class="ao_jh row" id="ao_jh">
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="comeBackJh1" id="comeBackJh1">
                            <i class="bi bi-chevron-left"></i> QUAY VỀ
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="../pages/john_henry.html">Xem tất cả "ÁO JH"</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- ÁO POLO</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- ÁO SƠ MI</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- ÁO THUN</a>
                    </div>
                </div>
                <div class="quan_jh row" id="quan_jh">
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="comeBackJh2" id="comeBackJh2">
                            <i class="bi bi-chevron-left"></i> QUAY VỀ
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="../pages/john_henry.html">Xem tất cả "QUẦN JH"</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- QUẦN KHAKU</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- QUẦN JEANS</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- QUẦN SHORT</a>
                    </div>
                </div>
                <div class="phu_kien_jh row" id="phu_kien_jh">
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="comeBackJh3" id="comeBackJh3">
                            <i class="bi bi-chevron-left"></i> QUAY VỀ
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="../pages/john_henry.html">Xem tất cả "PHỤ KIỆN JH"</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- NÓN LƯỠI TRAI</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- MẮT KÍNH CAO CẤP</a>
                    </div>
                </div>
                <!-- freelancer -->
                <div class="freelancer row" id="free">
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="comeBack" id="comeBack2">
                            <i class="bi bi-chevron-left"></i> QUAY VỀ
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="../pages/freelancer.html">Xem tất cả "FREELANCER"</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <span id="ao-free">- ÁO FREELANCER</span>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <span id="quan-free">- QUẦN FREELANCER</span>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- PHỤ KIÊN NỮ</a>
                    </div>
                </div>
                <div class="ao_free row" id="ao_free">
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="comeBackFree1" id="comeBackFree1">
                            <i class="bi bi-chevron-left"></i> QUAY VỀ
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="../pages/freelancer.html">Xem tất cả "Áo FREELANCER"</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- ÁO T-SHIRT NỮ </a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- ÁO SƠ MI NỮ</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- ÁO POLO NỮ</a>
                    </div>
                </div>
                <div class="quan_free row" id="quan_free">
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="comeBackFree2" id="comeBackFree2">
                            <i class="bi bi-chevron-left"></i> QUAY VỀ
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="../pages/freelancer.html">Xem tất cả "QUẦN FREELANCER"</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- QUẦN JEANS NỮ</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- QUẦN TÂY NỮ</a>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                        <a href="">- QUẦN SHORT NỮ</a>
                    </div>
                </div>
                <!-- search -->
                <div class="search" id="sea">
                    <p>Tìm Kiếm</p>
                    <form action="search.php">
                        <div class="search-box">
                            <input type="text " class="form-control" placeholder="Tìm kiếm " name="search">
                            <button onclick="performSearch() " name="search_product">
                                <i class="bi bi-search "></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- info-user -->
                <div class="info-user" id="user">
                    <div id="userProfileBox" class="user-profile-box card">
                        <div class="card-header">
                            Thông tin tài khoản
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <?php
                                    require("config.php");

                                    // Lấy thông tin từ biểu mẫu hoặc session
                                    $user_email = $_SESSION['email']; // Thay thế bằng cách lấy từ session hoặc cách khác

                                    // Thực hiện truy vấn SQL để lấy id dựa trên email
                                    $sql_id = "SELECT user_id FROM users WHERE email = ?";

                                    // Sử dụng prepared statement để tránh SQL injection
                                    $stmt_id = $conn->prepare($sql_id);
                                    $stmt_id->bind_param("s", $user_email);

                                    // Thực hiện truy vấn
                                    $stmt_id->execute();

                                    // Lấy kết quả
                                    $result_id = $stmt_id->get_result();

                                    // Kiểm tra xem có dữ liệu trả về không
                                    if ($result_id->num_rows > 0) {
                                        $row_id = $result_id->fetch_assoc();
                                        $this_id = $row_id['user_id'];

                                        // Thực hiện truy vấn để lấy thông tin người dùng dựa trên id
                                        $sql_name = "SELECT full_name FROM users WHERE user_id = $this_id";
                                        $result_name = $conn->query($sql_name);

                                        if ($result_name->num_rows > 0) {
                                            $row_name = $result_name->fetch_assoc();
                                            echo '<span>' . $row_name["full_name"] . '</span>';
                                        } else {
                                            echo "Không tìm thấy thông tin người dùng.";
                                        }
                                    } else {
                                        echo "Không tìm thấy thông tin người dùng.";
                                    }
                                ?>
                                <a href="index.php?act=account">Tài khoản của tôi</a>
                                <a href="index.php?act=logout">Đăng xuất</a>
                            </div>

                        </div>
                    </div>

                </div><!-- cart -->
                <div class="cart" id="car">
                    <div class="card">
                        <div class="card-header">Giỏ hàng</div>
                        <div class="card-body">
                            <i class="bi bi-cart2"></i>
                            <p>Hiện chưa có sản phẩm</p>
                            <hr>
                            <div class="cart-view">
                                <table>
                                    <tbody>
                                        <tr class="total-row">
                                            <td class="text-left">TỔNG TIỀN:</td>
                                            <td class="text-right">0đ</td>
                                        </tr>
                                        <tr class="action-row">
                                            <td>
                                                <a href="./pages/cart.html" class="linktocart button dark">
                                                    <span>XEM GIỎ HÀNG</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="./pages/cart.html" class="linktocart button dark">
                                                    <span>THANH TOÁN</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="cart-policy">
                                <h4 class="head">Thân Gửi Qúy Khách Hàng:</h4>
                                <div class="body">
                                    <ul>
                                        <li>
                                            Sản phẩm mua được phép đổi trong vòng 7 ngày (tính từ ngày quý khách
                                            nhận
                                            được hàng). Chúng tôi không chấp nhận hủy đơn hàng.
                                        </li>
                                        <li>
                                            Chính sách đổi trả này chỉ áp dụng đối với SẢN PHẨM NGUYÊN GIÁ, không áp
                                            dụng đối với các sản phẩm ƯU ĐÃI.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive web -->
            <div class="container" id="res_web">
                <div class="menu row">
                    <div class="logo col3 col-md-3 col-sm-3 col-xl-3">
                        <a href="index.php?act=main_page">
                            <img src="./image/Logo/logo.webp" alt="logo_web">
                        </a>
                    </div>
                    <div class="col-7 col-md-7 col-sm-7 col-xl-7">
                        <div class="navbar row">
                            <div class="col-4 col-md-4 col-sm-4 col-xl-4">
                                <a href="index.php?act=new_collection">
                                    <span>NEW COLLECTION</span>
                                </a>
                            </div>
                            <div class="hien1 col-4 col-md-4 col-sm-4 col-xl-4">
                                <div class="menu_item1">
                                    <a href="index.php?act=john_henry">
                                        <span>JOHN HENRY</span>
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                    <div class="product-list">
                                        <!-- Cột 1 -->
                                        <div class="column">
                                            <div class="product">
                                                <h3>
                                                    <a href="#">
                                                        ÁO JH
                                                    </a>
                                                </h3>
                                                <div class="title">
                                                    <div>
                                                        <a href="" title="ao-polo">ÁO POLO</a>
                                                    </div>
                                                    <div>
                                                        <a href="" title="ao-so-mi">ÁO SƠ MI</a>
                                                    </div>
                                                    <div>
                                                        <a href="" title="ao-thun">ÁO THUN</a>
                                                    </div>
                                                    <div>
                                                        <a href="" title="ao-khoac">ÁO KHOÁC</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Cột 2 -->
                                        <div class="column">
                                            <div class="product">
                                                <h3>
                                                    <a href="#">
                                                        QUẦN JH
                                                    </a>
                                                </h3>
                                                <div class="title">
                                                    <div>
                                                        <a href="" title="phu_kien-khaki">QUẦN KHAKI</a>
                                                    </div>
                                                    <div>
                                                        <a href="" title="quan-jeans">QUẦN JEANS</a>
                                                    </div>
                                                    <div>
                                                        <a href="" title="quan-short">QUẦN SHORT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Cột 3 -->
                                        <div class="column">
                                            <div class="product">
                                                <h3>
                                                    <a href="#">
                                                        PHỤ KIỆN JH
                                                    </a>
                                                </h3>
                                                <div class="title">
                                                    <div>
                                                        <a href="" title="phu-kien-non-luoi-trai">NÓN LƯỠI TRAI</a>
                                                    </div>
                                                    <div>
                                                        <a href="" title="phu-kien-mat-kinh">
                                                            MẮT KÍNH CAO CẤP
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hien1 col-4 col-md-4 col-sm-4 col-xl-4">
                                <div class="menu_item2">
                                    <a href="index.php?act=freelancer">
                                        <span>FREELANCER</span>
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                    <div class="product-list">
                                        <div class="column">
                                            <div class="product">
                                                <div class="title">
                                                    <div class="menu-item">
                                                        <div class="h1">
                                                            <a href="" title="ao-nu">ÁO NỮ</a>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </div>
                                                        <div class="hien2 col1">
                                                            <div>
                                                                <a href="">ÁO T-SHIRST</a>
                                                            </div>
                                                            <div>
                                                                <a href="">ÁO SƠ MI</a>
                                                            </div>
                                                            <div>
                                                                <a href="">ÁO POLO</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item">
                                                        <div class="h1">
                                                            <a href="" title="quan-nu">QUẦN NỮ</a>
                                                            <i class="bi bi-chevron-right"></i>
                                                        </div>
                                                        <div class="hien2 col2">
                                                            <div>
                                                                <a href="">QUẦN JEANS</a>
                                                            </div>
                                                            <div>
                                                                <a href="">QUẦN TÂY</a>
                                                            </div>
                                                            <div>
                                                                <a href="">QUẦN SHORT</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="" title="phu-kien-nu">PHỤ KIỆN NỮ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-2 col-sm-2 col-xl-2">
                        <div class="icon row">
                            <!-- tìm kiếm -->
                            <div class="search-icon col-4 col-md-4 col-sm-4 col-xl-4" id="searchIcon">
                                <i class=" bi bi-search"></i>
                            </div>
                            <div class="search-box card" id="searchBox">
                                <h6 class="card-heart">TÌM KIẾM</h6>
                                <form action="search.php" method="get">
                                    <div class="form-control search-input">
                                        <input type="text " class="form-control" placeholder="Tìm kiếm " name="search">
                                        <button onclick="performSearch() " name="search_product">
                                            <i class="bi bi-search "></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- tài khoản -->
                            <div class="login col-4 col-md-4 col-sm-4 col-xl-4" id="loginIcon">
                                <i class="bi bi-person-circle "></i>
                            </div>
                            <div id="userBox" class="user-profile-box card">
                                <div class=" card-header">
                                    Thông tin tài khoản
                                </div>
                                <div class="card-body">
                                    <?php
                                        require("config.php");

                                        // Lấy thông tin từ biểu mẫu hoặc session
                                        $user_email = $_SESSION['email']; // Thay thế bằng cách lấy từ session hoặc cách khác

                                        // Thực hiện truy vấn SQL để lấy id dựa trên email
                                        $sql_id = "SELECT user_id FROM users WHERE email = ?";

                                        // Sử dụng prepared statement để tránh SQL injection
                                        $stmt_id = $conn->prepare($sql_id);
                                        $stmt_id->bind_param("s", $user_email);

                                        // Thực hiện truy vấn
                                        $stmt_id->execute();

                                        // Lấy kết quả
                                        $result_id = $stmt_id->get_result();

                                        // Kiểm tra xem có dữ liệu trả về không
                                        if ($result_id->num_rows > 0) {
                                            $row_id = $result_id->fetch_assoc();
                                            $this_id = $row_id['user_id'];

                                            // Thực hiện truy vấn để lấy thông tin người dùng dựa trên id
                                            $sql_name = "SELECT full_name FROM users WHERE user_id = $this_id";
                                            $result_name = $conn->query($sql_name);

                                            if ($result_name->num_rows > 0) {
                                                $row_name = $result_name->fetch_assoc();
                                                echo '<span>' . $row_name["full_name"] . '</span>';
                                            } else {
                                                echo "Không tìm thấy thông tin người dùng.";
                                            }
                                        } else {
                                            echo "Không tìm thấy thông tin người dùng.";
                                        }
                                    ?>
                                    <a href="index.php?act=account">Tài khoản của tôi</a>
                                    <a href="index.php?act=logout">Đăng xuất</a>
                                </div>
                            </div>

                            <!-- giỏ hàng -->
                            <div class="cart col-4 col-md-4 col-sm-4 col-xl-4" id="cartIcon">
                                <i class=" bi bi-bag "></i>
                            </div>
                            <div class=" cart-box card" id="cartBox">
                                <div class="card-header">Giỏ hàng</div>
                                <div class="card-body">
                                    <i class="bi bi-cart2"></i>
                                    <p>Hiện chưa có sản phẩm</p>
                                    <hr>
                                    <div class="cart-view">
                                        <table>
                                            <tbody>
                                                <tr class="total-row">
                                                    <td class="text-left">TỔNG TIỀN:</td>
                                                    <td class="text-right">0đ</td>
                                                </tr>
                                                <tr class="action-row">
                                                    <td>
                                                        <a href="index.php?act=cart" class="linktocart button dark">
                                                            <span>XEM GIỎ HÀNG</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="index.php?act=cart" class="linktocart button dark">
                                                            <span>THANH TOÁN</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="cart-policy">
                                        <h4 class="head">Thân Gửi Qúy Khách Hàng:</h4>
                                        <div class="body">
                                            <ul>
                                                <li>
                                                    Sản phẩm mua được phép đổi trong vòng 7 ngày (tính từ ngày
                                                    quý
                                                    khách
                                                    nhận được hàng). Chúng tôi không chấp nhận hủy đơn hàng.
                                                </li>
                                                <li>
                                                    Chính sách đổi trả này chỉ áp dụng đối với SẢN PHẨM NGUYÊN
                                                    GIÁ,
                                                    không áp dụng đối với các sản phẩm ƯU ĐÃI.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        //xử lý icon web nhỏ hơn 768px

        $('#toggle').click(function() {
            $('#jh,#ao_jh,quan_jh,#phu_kien_jh, #free,#ao_free,#quan_free,#sea,#user,#car')
                .hide();
            $('#main-menu').slideToggle();
        });
        $('#comeBack1').click(function() {
            $('#sea, #user, #car,#jh').hide();
            $('#main-menu').slideToggle();
        });
        $('#comeBack2').click(function() {
            $('#sea, #user, #car,#free').hide();
            $('#main-menu').slideToggle();
        });
        //xử lý john henry
        $('#johnHenry').click(function() {
            $('#sea, #user, #car,#main-menu').hide();
            $('#jh').slideToggle();
        });
        $('#ao-jh').click(function() {
            $('#sea, #user, #car,#jh').hide();
            $('#ao_jh').slideToggle();
        });
        $('#quan-jh').click(function() {
            $('#sea, #user, #car,#jh').hide();
            $('#quan_jh').slideToggle();
        });
        $('#phu-kien-jh').click(function() {
            $('#sea, #user, #car,#jh').hide();
            $('#phu_kien_jh').slideToggle();
        });
        $('#comeBackJh1').click(function() {
            $('#sea, #user, #car,#ao_jh').hide();
            $('#jh').slideToggle();
        });
        $('#comeBackJh2').click(function() {
            $('#sea, #user, #car,#quan_jh').hide();
            $('#jh').slideToggle();
        });
        $('#comeBackJh3').click(function() {
            $('#sea, #user, #car,#phu_kien_jh').hide();
            $('#jh').slideToggle();
        });
        //xử lý freelancer
        $('#freelancer').click(function() {
            $('#sea, #user, #car,#main-menu').hide();
            $('#free').slideToggle();
        })
        $('#ao-free').click(function() {
            $('#sea, #user, #car,#free').hide();
            $('#ao_free').slideToggle();
        })
        $('#quan-free').click(function() {
            $('#sea, #user, #car,#free').hide();
            $('#quan_free').slideToggle();
        });
        $('#comeBackFree1').click(function() {
            $('#sea, #user, #car,#ao_free').hide();
            $('#free').slideToggle();
        });
        $('#comeBackFree2').click(function() {
            $('#sea, #user, #car,#quan_free').hide();
            $('#free').slideToggle();
        });
        //xử lý icon
        $('#search').click(function() {
            $('#sea').slideToggle();
            $('#user, #car,#main-menu,#jh,#free,#ao_jh,#quan_jh,#phu_kien_jh,#ao_free,#quan_free')
                .hide();
        });

        $('#login').click(function() {
            $('#user').slideToggle();
            $('#sea, #car,#main-menu,#jh,#free,#ao_jh,#quan_jh,#phu_kien_jh,#ao_free,#quan_free')
                .hide();
        });

        $('#cart').click(function() {
            $('#car').slideToggle();
            $('#sea, #user,#main-menu,#jh,#free,#ao_jh,#quan_jh,#phu_kien_jh,#ao_free,#quan_free')
                .hide();
        });
        //xử lý icon web màn hình lớn hơn 768px
        $('#searchIcon').click(function() {
            $('#userBox, #cartBox').hide();
            $('#searchBox').slideToggle();
        });
        $('#loginIcon').click(function() {
            $('#searchBox, #cartBox').hide();
            $('#userBox').slideToggle();
        });

        $('#cartIcon').click(function() {
            $('#userBox, #searchBox').hide();
            $('#cartBox').slideToggle();
        });
    });
    </script>
    </div>
</body>

</html>