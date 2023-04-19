
<div class="products" style="margin-left: 20px;">
          <h3 style="margin-top: 15px; text-align: center;">Sản phẩm nổi bật</h3>
          <div class="product-list row">
          <?php
                foreach ($arr['featured'] as $item) {
            ?>
              <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                  <div class="product-item card text-center" style="margin-top: 15px;">
                  <a href="?redirect=product&id=<?= $item['id'] ?>"><img src="img/<?= $item['image'] ?>"></a>
                      <h4><a style="display:contents; color:black" href="?redirect=product&id=<?= $item['id'] ?>"><?= $item['name'] ?></a></h4>
                      <h5>Giá bán: <span style="color: red; font-size: 20px"><?= number_format($item['price']); ?>đ</span></h5>
                  </div>
              </div>
              <?php } ?>
          </div>
        </div>


        <div class="products">
          <h3 style="margin-top: 15px; text-align: center;">Sản phẩm mới</h3>
          <div class="product-list row">
          <?php
                foreach ($arr['new'] as $item) {
            ?>
              <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                  <div class="product-item card text-center" style="margin-top: 15px;">
                      <a href="?redirect=product&id=<?= $item['id'] ?>"><img src="img/<?= $item['image'] ?>"></a>
                      <h4><a style="display:contents; color:black" href="?redirect=product&id=<?= $item['id'] ?>"><?= $item['name'] ?></a></h4>
                      <h5>Giá bán: <span style="color: red; font-size: 20px"><?= number_format($item['price']); ?>đ</span></h5>
                  </div>
              </div>
              <?php } ?> 
          </div> 
      </div>