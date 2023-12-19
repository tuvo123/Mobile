<?php
class Pay{
    function __construct()
    {
        
    }

    function show_infoUser($user_id){
        $db = new connect();
        $order_code = intval(Session::get('order_code')) ;
        $select = "SELECT hoadonban.*, users.*, users.name as fullname, sanpham.*,hinhanh.mau1 as mau1 FROM hoadonban INNER JOIN users ON hoadonban.user_id=users.id
        INNER JOIN sanpham ON hoadonban.product_id=sanpham.id INNER JOIN hinhanh ON hoadonban.product_id=hinhanh.sanpham_id WHERE hoadonban.user_id='$user_id' AND hoadonban.order_code='$order_code' LIMIT 1";
        $result = $db->getList($select);
        return $result;
    }

    function show_product($user_id){
        $db = new connect();
        $order_code = intval(Session::get('order_code')) ;
        $select = "SELECT hoadonban.*, users.*, users.name as fullname, sanpham.* FROM hoadonban INNER JOIN users ON hoadonban.user_id=users.id
        INNER JOIN sanpham ON hoadonban.product_id=sanpham.id WHERE hoadonban.user_id='$user_id' AND hoadonban.order_code='$order_code'";
        $result = $db->getList($select);
        return $result;
    }

    function delete_Order($user, $code){
        $db = new connect();
        $delete_detail = "DELETE FROM chitiet_hdonban WHERE order_code='$code'";
        $db->exec($delete_detail);
        $delete = "DELETE FROM hoadonban WHERE user_id='$user' AND order_code='$code'";
        $result = $db->exec($delete);
        return $result;
    }
}

?>