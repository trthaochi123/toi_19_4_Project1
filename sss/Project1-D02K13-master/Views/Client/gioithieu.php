<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
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
                              foreach ( $arr['category'] as $item) {
                              ?>
                              <li class="menu-item">
                                <a href="?redirect=cate&cat_id=<?= $item['cat_id']; ?>"><?= $item['cat_name'] ?></a>
                              </li>
                              <?php } ?>
                        </li>
                        
                        <li>
                          <a class ="menu__navbar-menu-item" href="?redirect=thietke_noithat">THIẾT KẾ NỘI THẤT</a>
                        </li>
                        <li>
                          <a class ="menu__navbar-menu-item" href="?redirect=bo_suu_tap">BỘ SƯU TẬP</a>
                        

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

        <div id="slider" style="background: url('img/slider_banner.jpeg') top center / cover no-repeat;">

            <div class="text_banner_gioithieu">
                <div class="text_banner-heading">ƯU ĐÃI ĐẾN</div>
                <div class="text_banner-number">50%</div>
                <div class="text_banner-description">Tất cả sản phẩm từ 16 - 26/4/2023</div>
                <button class="button-38" role="button">XEM THÊM</button>
            </div>
        </div>

        <div id="content">
          <!-- section 1 -->
          <div class="content-section1">
              <div class="layout-item">
                <img class="section1-img" src="img/section1-img1.jpeg" alt="" class="layout-image">
              </div>
          
              <div class="layout-item">
                <img class="section1-img" src="img/section1-img2.jpeg" alt="" class="layout-image">
              </div>

              <div class="layout-item">
                <img class="section1-img" src="img/section1-img3.jpeg" alt="" class="layout-image">
              </div>
            
              <div class="layout-item">
                <img class="section1-img" src="img/section1-img4.jpeg" alt="" class="layout-image">
              </div>

              <div class="layout-item">
                <img class="section1-img" src="img/section1-img5.jpeg" alt="" class="layout-image">
              </div>
          
              <div class="layout-item">
                <img class="section1-img" src="img/section1-img6.jpeg" alt="" class="layout-image">
              </div>

          </div>

          <div class="content-sub_section-text">
            <h1>Không gian Sống</h1>
            <h2>Sự tinh tế của bạn thể hiện ở gu thẩm mỹ, cách sắp xếp các nội thất cũng như vật dụng trong nhà. Một không gian Sống tinh tế sẽ giúp cho chất lượng sinh hoạt cũng như nghỉ ngơi của bạn thăng hoa hơn.</h2>
          </div>

            <!-- section 2 -->
          <div class="content-section2">
            <div class="section2-item">
              <img class="section2-img1" src="img/section2-img1.jpeg" alt="">
            </div>

            <div class="section2-item">
              <div class="section2-sub_content">
                <h3 class="section2-text">Thiết Kế Nội Thất</h3>
                <h4>Quý khách có thể gặp đội ngũ tư vấn thiết kế chuyên nghiệp để được hướng dẫn hay tư vấn giúp quý khách hàng thực hiện trọn vẹn ý thích của mình.</h4>
                <button class="section2-button" role="button">XEM THÊM</button>
              </div>
            </div>

            <div class="section2-item">
              <img class="section2-img2" src="img/section2-img2.jpeg" alt="">
            </div>

          </div>

          <!-- section 3 -->
          <div class="content-section3">
            <div class="heading">Góc cảm hứng</div>
            <div class="section3-carousel">
              <input type="radio" id="s-1" name="slider-control" checked="checked">
              <input type="radio" id="s-2" name="slider-control">
              <input type="radio" id="s-3" name="slider-control">
              <div class="js-slider">

                <figure class="js-slider_item img-1">
                  <div class="js-slider_img">
                    <img class="c-img-w-full" src="img/section3-img1.jpeg" alt="">
                  </div>
                  <figcaption class="wo-caption">
                    <h3 class="wo-h3">
                      <div class="c-label">Giải pháp thiết kế cho không gian văn phòng</div>
                    </h3>
                    <ul class="wo-credit">
                      <li>Người đăng: Nguyễn Chí </li>
                      <li>Ngày đăng tải: 13:11 19/03/2023</li>
                    </ul>
                  </figcaption>
                </figure>

                <figure class="js-slider_item img-3">
                  <div class="js-slider_img">
                    <img class="c-img-w-full" src="img/section3-img2.jpeg" alt="">
                  </div>
                  <figcaption class="wo-caption">
                    <h3 class="wo-h3">
                      <div class="c-label">Không gian tươi sáng đón ngày mới</div>
                    </h3>
                    <ul class="wo-credit">
                      <li>Người đăng: Nguyễn Chí </li>
                      <li>Ngày đăng tải: 13:11 19/03/2023</li>
                    </ul>
                  </figcaption>
                </figure>

                <figure class="js-slider_item img-2">
                  <div class="js-slider_img">
                    <img class="c-img-w-full" src="img/section3-img3.jpeg" alt="">
                  </div>
                  <figcaption class="wo-caption">
                    <h3 class="wo-h3">
                      <div class="c-label">Gợi ý quà tặng cho ngày 8 tháng 3</div>
                    </h3>
                    <ul class="wo-credit">
                      <li>Người đăng: Lã Thanh </li>
                      <li>Ngày đăng tải: 09:23 02/03/2023</li>
                    </ul>
                  </figcaption>
                </figure>


                <div class="js-slider_nav">
                  <label class="js-slider_nav_item s-nav-1 prev" for="s-3"></label>
                  <label class="js-slider_nav_item s-nav-1 next" for="s-2"></label>
                  <label class="js-slider_nav_item s-nav-2 prev" for="s-1"></label>
                  <label class="js-slider_nav_item s-nav-2 next" for="s-3"></label>
                  <label class="js-slider_nav_item s-nav-3 prev" for="s-2"></label>
                  <label class="js-slider_nav_item s-nav-3 next" for="s-1"></label>
                </div>
                <div class="js-slider_indicator">
                  <div class="js-slider-indi indi-1"></div>
                  <div class="js-slider-indi indi-2"></div>
                  <div class="js-slider-indi indi-3"></div>
                </div>
              </div>
            </div>

          </div>

          <!-- END S3 -->

          <!-- section4 -->
          <div class="content-section4">
            <div class="slider-section4">
              <img class="section4-img1" src="img/section4-img1.png" alt="aboutus">
            </div>
            <div class="heading-section4">VỀ CHÚNG TÔI
              <h5>" Tổ ấm của người tinh tế "</h5>
              <h6>Trong suốt hơn 22 năm qua, cảm hứng từ gu thẩm mỹ tinh tế và tinh thần “Việt” đã giúp Dallas tạo ra những thiết kế độc đáo, hợp thời và chất lượng. Dallas nằm trong top 10 cửa hàng nội thất có tiếng tại Việt Nam.</h6>
            </div>
          </div>

          <!-- END S4 -->
        </div>

        <!-- FOOTER -->

        <footer class="footer">
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!------ Include the above in your HEAD tag ---------->
          
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