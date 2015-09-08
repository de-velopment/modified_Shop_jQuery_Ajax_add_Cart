<?php
/*-----------------------------------------------
 File: seossAjaxAddCart.php
 Timestamp:2015-09-01T 13:52:46Z
 
 Copyright (C) 2015 Development, Gräfenhainichen www.de-velopment.de
 
 Released under the GNU General Public License
-----------------------------------------------*/
include('includes/application_top.php');

$ajaxCart = '';

if (isset ($_POST['products_id']) && is_numeric($_POST['products_id'])) {


				$cart_quantity = (xtc_remove_non_numeric($_POST['products_qty']) + $_SESSION['cart']->get_quantity(xtc_get_uprid($_POST['products_id'], isset($_POST['id'])?$_POST['id']:'')));
        if ($cart_quantity > MAX_PRODUCTS_QTY) {
          $cart_quantity = MAX_PRODUCTS_QTY;
        }
        if (isset($econda) && is_object($econda)) {
          $econda->_emptyCart();
          $old_quantity = $_SESSION['cart']->get_quantity(xtc_get_uprid($_POST['products_id'], isset($_POST['id'])?$_POST['id']:''));
          $econda->_addProduct($_POST['products_id'], $cart_quantity, $old_quantity);
        }

    if (isset($_POST['id']) && is_array($_POST['id'])) $_SESSION['temp_attribs'] = $_POST['id'];

  $_SESSION['cart']->add_cart((int)$_POST['products_id'], $cart_quantity, isset($_POST['id'])?$_POST['id']:'');
        
    if ($_SESSION['customers_status']['customers_status_show_price'] == 1) {
        define('DIR_WS_BOXES',DIR_FS_CATALOG .'templates/'.CURRENT_TEMPLATE. '/source/boxes/');
        $smarty = new Smarty();
        include(DIR_WS_BOXES . 'shopping_cart.php');
    }
   
    
    $ajaxCart = $box_shopping_cart;
    
	echo json_encode($ajaxCart);

}
?>
