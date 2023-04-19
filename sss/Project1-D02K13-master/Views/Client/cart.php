<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="shortcut icon" href="img/favicon-16x16.png">
    <title>DALLAS Furniture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<script>
    function buyNow() {
        document.getElementById('buy-now').submit();
    }
</script>

<body>
    <div class="main">
    <header class="header">
            <!-- thong bao ngắn -->
            <nav class="header__navbar">
                <p>Ưu đãi đến 50% tất cả sản phẩm đến 26.3. Đừng bỏ lỡ</p>
            </nav>

            <!-- BEGIN NAV -->
            <!-- nav 1 -->
            <div class="container">
                <nav class="header__navbar--elm">
                        <ul class="header__navbar-list">
                            <img src="./img/vn flag.png" alt="tieng viet">
                            <li class="header__navbar-item">Viet Nam</li>
                            <li class="header__navbar-phoneicon">
                                <i class="fa-solid fa-phone"></i>
                            </li>
                            <a class="header__navbar-phone header__navbar-phone-icon-hover" href="tel:1900 7220">1900 7220</a>
                            <li class="header__navbar-item">
                                <a href="?redirect=gioi_thieu" class="header__navbar-item-link">Giới thiệu</a>
                            </li>
                            
                        </ul>

                    <ul class="header__navbar-icon">
                        <li class="header__navbar-item">
                            <i class="ti-location-pin"></i>
                        </li>
                        <a class="header__navbar-item" href="?redirect=cart">
                            <i class="ti-shopping-cart" >
                                          <span class="mt-3">
                                 <?php
                                  if(isset($_SESSION["cart"])){
                                      $totals = 0;
                                      foreach($arr['product'] as $prd_id=>$qtt){
                                          $totals++;
                                      }
                                      echo $totals;
                                  }
                                  else{
                                      echo 0;
                                  }
                                  ?>
                              </span>
                            </i>
                        </a>
                        <li class="header__navbar-item">
                            <a href="" class="login__navbar-item login__navbar-item--strong">Đăng nhập</a>
                            <i class="ti-user"></i>  
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- nav 2 -->
            <div class="container"> 
                <div class="menu__navbar">
                    <ul id="menu_nav">

                      <!-- 3 gạch icon -->
                        <li class ="menu__navbar-btn-icon">
                            <button class="btn btn-primary my-5 btn-light bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <img class="menu_navbar-menu-icon" src="./img/menu_icon.png" alt="">
                            </button>

                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <img class="menu__navbar-logo" src="./img/logo.jpg" alt="logo">
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body ">
                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Sofa và Armchair
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Sofa</a></li>
                              <li><a class="dropdown-item" href="#">Armchair</a></li>
                              <li><a class="dropdown-item" href="#">Ghế dài</a></li>
                              <li><a class="dropdown-item" href="#">Ghế thư giãn</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Bàn
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Bàn nước</a></li>
                              <li><a class="dropdown-item" href="#">Bàn ăn</a></li>
                              <li><a class="dropdown-item" href="#">Bàn làm việc</a></li>
                              <li><a class="dropdown-item" href="#">Bàn trang điểm</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Ghế
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Ghế ăn</a></li>
                              <li><a class="dropdown-item" href="#">Ghế bar</a></li>
                              <li><a class="dropdown-item" href="#">Ghế làm việc</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Giường ngủ
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Giường</a></li>
                              <li><a class="dropdown-item" href="#">Bàn đầu giường</a></li>
                              <li><a class="dropdown-item" href="#">Nệm</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                                Tủ và Kệ
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Tủ tivi</a></li>
                              <li><a class="dropdown-item" href="#">Tủ trưng bày</a></li>
                              <li><a class="dropdown-item" href="#">Tủ rượu</a></li>
                              <li><a class="dropdown-item" href="#">Tủ quần áo</a></li>
                              <li><a class="dropdown-item" href="#">Tủ giày</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                                Bếp
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Tủ bếp</a></li>
                              <li><a class="dropdown-item" href="#">Quầy bar</a></li>
                              <li><a class="dropdown-item" href="#">Phụ kiện bếp</a></li>
                            </ul>
                          </div>

                        </div>
                            </div>
                        </li>

                        <!-- Logo navbar -->
                        <li>
                             <a class ="menu__navbar-logo-office" href=" ">
                                <img class="menu__navbar-logo-office-item" src="img/logo.jpg" >
                            </a> 
                        </li>

                        <!-- Menu Item -->
                        <li class="menu_nav-text">
                          <?php
                              foreach($arr['category'] as $item) {
                              ?>
                              <li class="menu-item">
                                <a href="?redirect=product"><?= $item['cat_name'] ?></a>
                              </li>
                              <?php } ?>
                        </li>
                        
                        <li>
                          <a class ="menu__navbar-menu-item" href="?redirect=thietke_noithat">THIẾT KẾ NỘI THẤT</a>
                        </li>
                        <li>
                          <a class ="menu__navbar-menu-item" href="?redirect=bo_suu_tap">BỘ SƯU TẬP</a>
                        </li>

                        <!-- Search BTN -->
                        <li>
                          <div class="container">
                            <form id="animated">
                              <i class="fa fa-search" aria-hidden="true"></i><input type="text" name="search" placeholder="Tìm sản phẩm...">
                            </form>
                        </li>
                        <!-- END Search BTN -->

                    </ul>

                    <!-- END NAV -->
                </div>
            </div>    

        </header>
        <!-- CART -->
        <h1 class="thongtindonhang" style="text-align: center; margin-top: 51px;">THÔNG TIN ĐƠN HÀNG</h1>
        <div class="small-container cart-page" style="margin: 80px; margin-top: 58px;">
        <?php
                    if(isset($_SESSION['cart'])) {
                    ?>
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                </tr>
                <form method="post" action="?redirect=<?= $redirect ?>&action=update">
                <?php
                            $total_price_all = 0;
                            foreach ($arr['product'] as $productID => $item) {
                                $total_price = $item['amount'] * $item["price"];
                                $total_price_all += $total_price; // Tính tổng tiền sản phẩm trong giỏ hành
                            ?>
                <tr>
                    <td >
                      <div class="cart-info">
                        <img style="width:500px; height:200px" src="img/<?= $item['image'] ?>">
                          <div>
                            <h5 style="font-size: 2.25rem;"><?= $item['name'] ?></h5>
                            <br>
                            <button style="font-size: 16px; background-color: red; border-radius: 3px; width: 68px; height: 31px;">
                                <a style="color: #fff;" href="?redirect=cart&action=del&id=<?= $productID ?>">XOÁ</a>
                            </button>
                         </div>
                      </div>
                    </td>
                    <td>
                      <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                        <input style="width:fit-content" type="number" id="quantity" name="qtt[<?= $productID ?>]" class="form-control form-blue quantity" value="<?= $item['amount'] ?>" min="1" max="<?= $item['quantity'] ?>">
                      </div>
                    </td>
                    <td>
                    <div class="cart-price col-lg-3 col-md-3 col-sm-12" style="width:100%; font-size:15px"><b><?= number_format($item['price']); ?>đ</b></div>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <button id="update-cart" style="font-size:16px; background-color: #f7e746; color: #000;" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ hàng</button>
                                </div>
            <div class="total-price">
              <table>
                <tr>
                  <td style="font-size: 20px;">Tổng</td>
                  <td>
                  <div style="width:100%; font-size:18px" class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?= number_format($total_price_all); ?>đ</b></div>
                  </td>
                </tr>
              </table>
            </div>

        </div>
        </form>
      
     <!--	Customer Info	-->
     <h1 class="thongtinkhachhang" style="text-align: center; margin-top: 97px; margin-bottom: 25px;">THÔNG TIN KHÁCH HÀNG</h1>
     <div id="customer">
                        <form id="buy-now" method="post" action="?redirect=cart&action=checkaccess" style="width: 1314px; margin-left: 182px;">
                            <div class="row">

                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12" >
                                    <input style="font-size: 15px;" placeholder="Họ và tên (bắt buộc)" type="text" name="fullname" class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                    <input style="font-size: 15px;" placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                    <input style="font-size: 15px;" placeholder="Email (bắt buộc)" type="text" name="email" class="form-control" required>
                                </div>
                                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                    <input style="font-size: 15px; margin-top:10px; margin-bottom: 30px;" placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="address" class="form-control" required>
                                </div>

                            </div>
                        </form>
                        
                        <div class="row">
                              
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="?redirect=success" onClick="buyNow()">
                                <button class="button-38" role="button" style="width: 150px; height: 46px; background-color: #38a838; color: #fff; margin-bottom: 20px; margin-left: 751px;">MUA NGAY</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--	End Customer Info	-->
    
                    <?php } else {
                        echo '<div class="alert alert-danger mt-3">Giỏ hàng của bạn hiện không có sản phẩm nào !</div>';
                    } ?>
    <!-- FOOTER -->

<footer class="footer" style="margin-top: 30px;">
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!-- ---- Include the above in your HEAD tag -------- -->
          
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
          <footer class="footer_area">
                <div class="container">
                  <div class="row">				
                    <div class="col-md-3 col-sm-6">
                      <div class="single_ftr">
                        <h4 class="sf_title"><Label>LIÊN HỆ</Label></h4>
                        <ul>
                          <li>151 Hoàng Diệu, Ba Đình, Hà Nội</li>
                          <li>(+84) 979 667 841 <br> (+084) 336 987 8245</li>
                          <li>dallasfurniture.com</li>
                        </ul>
                      </div>
                    </div> <!--  End Col -->
                    
                    <div class="col-md-3 col-sm-6">
                      <div class="single_ftr">
                        <h4 class="sf_title">THÔNG TIN</h4>
                        <ul>
                          <li>Về Chúng Tôi</li>
                          <li>Điều khoản và giấy phép</li>
                          <li>Liên hệ chúng tôi</li>
                        </ul>
                      </div>
                    </div> <!--  End Col -->
                    
                    <div class="col-md-3 col-sm-6">
                      <div class="single_ftr">
                        <h4 class="sf_title">DỊCH VỤ</h4>
                        <ul>
                          <li>Bản Đồ</li>
                          <li>Giỏ Hàng</li>
                          <li>Tài khoản của tôi</li>
                          <li>Lịch sử giao hàng</li>
                        </ul>
                      </div>
                    </div> <!--  End Col -->	
                    
                    <div class="col-md-3 col-sm-6">
                      <div class="single_ftr">
                        <h4 class="sf_title">Ý KIẾN KHÁCH HÀNG</h4>
                        <div class="newsletter_form">
                          <h7>Chúng tôi rất mong chờ nhận được ý kiến của quý vị</h7>
                          <form method="post" class="form-inline">				
                            <input name="EMAIL" id="email" placeholder="Email của bạn" class="form-control" type="email">
                              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </form>
                        </div>
                      </div>
                    </div> <!--  End Col -->
                    
                  </div>
                </div>
            
              
                <div class="ftr_btm_area">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="ftr_social_icon">
                          <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa fa-cc-discover"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-amex"></i></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <h7 class="copyright_text text-center">© 2023 All Rights Reserved Dallas Furniture</h7>
                      </div>
                      
                      <div class="col-sm-4">
                        <div class="payment_mthd_icon text-right">
                          <ul>
                            
                            <img class="ddk_logo" src="img/dadangky.png" alt="">
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
        </footer>    

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>



</html>