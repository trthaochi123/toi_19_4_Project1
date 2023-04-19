<?php
    foreach ($arr['product'] as $item) {
?>
    <link rel="stylesheet" href="?redirect=product">
    <link rel="stylesheet" href="./assets/css/product-detail.css">
    <div class="container" style=" margin-top: 50px">
        <div class="row mb-0">
            <div class="col-md-5">
                <!-- slide hình ảnh -->
                        <img src="img/<?= $item['image'] ?>" style="width: 450px">
                    
            </div>

            <!-- thông tin sản phẩm -->
            <div class="col-md-5" style="margin-top: 30px; text-align: left; margin-left: 10px;">
                <div class="infor-product">
                        <h1 style="line-height: 2;"><?= $item['name'] ?></h1>
                        <div class="is-divider small"></div>
                        <h2 style="color:red;line-height: 2;"><?= number_format($item['price']); ?>đ</h2>
                        <div class="desc" style="margin-bottom: 20px;">
                            <h3 style="line-height: 2; font-size: 20px;"><b>Vật liệu</b> </h3> 
                            <h10 style="margin-left: 5px;"><?= $item['material'] ?></h10>

                            <div class="desc">
                                <h3 style="line-height: 2;"><b>Kích thước</b> </h3> 
                                <h10 style="margin-left: 5px;"><?= $item['size'] ?></h10>
                        </div>
                 </div> 

                        <button id="add-to-cart-btn" class="primary-btn" style="margin-bottom: 20px;">
                            <a style="display:contents; color:black" href="index.php?redirect=cart&action=add&id=<?= $item['id'] ?>">Thêm vào giỏ hàng</a>
                        </button>

                        <div class="hotline-wrapper" style="line-height: 2; text-align: center; font-size: 14px;">
                            Liên hệ và tư vấn đặt mua:
                            <a class="hotline-phone" href="tel:18007200" style="color: red;">18007200</a>
                        </div>


        <a class="btn btn-light" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Đánh giá</a>
                          <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Bảo hành</button>
                        </p>
                        <div class="row">
                          <div class="col">
                            <div class="collapse multi-collapse " id="multiCollapseExample1">
                              <div class="card card-body active">
                              <?= $item['description'] ?>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                              <div class="card card-body">
                                <i class="fas fa-check"></i> <p style="color:black">Các sản phẩm nội thất tại Nhà xinh đa số đều được
                                  sản xuất tại nhà máy của công ty cổ phần xây dựng kiến trúc AA với đội ngũ nhân viên và công nhân
                                  ưu tú cùng cơ sở vật chất hiện đại
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <?php } ?> 
