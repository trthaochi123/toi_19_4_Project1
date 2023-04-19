<?php
$redirect = $_GET['redirect'] ?? '';

if($redirect == ''){
    require_once('Model/Client/index_model.php');
    require_once('Views/Client/index.php');
}else{
    switch($redirect){
        case 'product':
            require_once('Model/Client/Product/product_model.php');
            require_once('Views/Client/index.php');
            require_once('Views/Client/product_detail.php'); 
            ;break;
        case 'cate':
            require_once('Model/Client/Product/product_model.php'); 
            require_once('Views/Client/index.php');
            require_once('Views/Client/category_product.php');
            ;break;
        case 'cart':
            require_once('Controller/Client/Cart/cart_controller.php');
            require_once('Views/Client/cart.php');
            ; break;
        case 'gioi_thieu': require_once('Views/Client/gioithieu.php'); break;
        case 'thietke_noithat': require_once('Views/Client/tknt.php'); break;
        case 'bo_suu_tap': require_once('Views/Client/bst.php'); break;
        case 'success': require_once('Views/Client/success.php'); break;
    }
}

?>