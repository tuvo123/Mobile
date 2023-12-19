<?php
class Order{
    function __construct()
    {
        
    }

    function show($user_id){
        $db = new connect();
        $order_code = intval(Session::get('order_code')) ;
        $select = "SELECT chitiet_hdonban.*, sanpham.*, hoadonban.* FROM chitiet_hdonban 
        INNER JOIN sanpham ON chitiet_hdonban.sanpham_id=sanpham.id INNER JOIN hoadonban
        ON chitiet_hdonban.mahdban=hoadonban.id WHERE hoadonban.user_id='$user_id' ORDER BY chitiet_hdonban.id DESC";
        $result = $db->getList($select);
        return $result;
    }

    function show_order_detail($user_id, $order_code){
        $db = new connect();
        $select = "SELECT hoadonban.*, sanpham.* FROM hoadonban 
        INNER JOIN sanpham ON hoadonban.product_id=sanpham.id WHERE
        hoadonban.user_id='$user_id' AND hoadonban.order_code='$order_code'";
        $result = $db->getList($select);
        return $result;
    }
}
?>