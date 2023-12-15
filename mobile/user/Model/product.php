<?php
    class Product{
        public function __construct(){
            
        }
        function getProduct(){
            $db = new connect();
            $select = "select * from sanpham";
            $result = $db ->getList($select);
            return $result;
        }
        function getProductSlider($opset){
            $db = new connect();
            $select = "select * from sanpham limit 5 offset ($opset*5)";
            $result = $db ->getList($select);
            return $result;
        }
        function getProductThietKe($opset){
            $db = new connect();
            $select = "select * from sanpham limit 4 offset ($opset*4)";
            $result = $db ->getList($select);
            return $result;
        }
    }
?>