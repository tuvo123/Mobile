<?php
class Cart{
    function __construct()
    {
        
    }

    function show($user_id){
        $db = new connect();
        $select = "SELECT giohang.*,giohang.id as cart_id, sanpham.*, users.*
         From giohang INNER JOIN sanpham ON giohang.sanpham_id = sanpham.id INNER JOIN users ON giohang.user_id = users.id WHERE giohang.user_id=$user_id ORDER BY giohang.id DESC";
        $result = $db->getList($select);
        return $result;
    }

    function insert_info_user($user_id, $fullname, $phone, $tinh, $huyen, $phuong, $xa){
        $db = new connect();
        // Tất cả các thông tin phải khác null thì mới thêm vào cơ sở dữ liệu
        if ( $fullname != null && $phone != null && $tinh != null &&
        $huyen != null && $phuong != null && $xa != null){
        $update = "UPDATE users SET name='$fullname', address='$xa - $phuong - $huyen - $tinh', phone='$phone' WHERE id='$user_id'";
        $db->exec($update);

        $query = "SELECT giohang.*,giohang.id as cart_id, sanpham.*, sanpham.gia1 as product_gia1, users.*
        FROM giohang INNER JOIN sanpham ON giohang.sanpham_id = sanpham.id INNER JOIN users ON giohang.user_id = users.id WHERE giohang.user_id=$user_id";
        $get_product = $db->getList($query);

        $currentDate = new DateTime(); // Ngày tháng năm hiện tại
        $ngaythang = $currentDate->format('Y-m-d H:i:s'); 
        $order_Code = rand(000000, 999999);
        Session::set('order_code', $order_Code);
        $sp_id = Session::get('sanpham_id');
        $soluong = Session::get('quantity');
        $total = Session::get('all_total');

        if($get_product ){

            while($result = $get_product->fetch()){
                $product_id = $result['sanpham_id'];
                $price = $result['product_gia1'];
                $quantity = $result['soluong'];
                $total = $price * $quantity;
          
                $insert_hoadonban = "INSERT INTO hoadonban(user_id, tongtien, created_at, trangthai, order_code, product_id, quantity, price)
            VALUES('$user_id', '$total', '$ngaythang', '0', '$order_Code', '$product_id','$quantity','$price')";
            $result_insert = $db->exec($insert_hoadonban);
            if($result_insert){
                // echo "<span style='color: blue;''>Thêm thông tin thành công</span>";
                echo "<script>window.location='pay.php'</script>"; 
            }else{
                $msg = "<span style='color: red;''>Thêm thông tin thất bại</span>";
                return $msg; 
            }
        }
    }

    $select = "SELECT * FROM hoadonban WHERE user_id='$user_id' AND order_code='$order_Code' LIMIT 1";
    $re = $db->getList($select);
    if($re){
        while($r = $re->fetch()){
            $ma = $r['id'];
            $insert_chitiet_hdon = "INSERT INTO chitiet_hdonban(mahdban,sanpham_id, soluongban, thanhtien, order_code)VALUES('$ma','$sp_id','$soluong','$total', '$order_Code')";
            $a = $db->exec($insert_chitiet_hdon);
            if($a){
                // echo "<span style='color: blue;''>Thêm thông tin thành công</span>";
              
                echo "<script>window.location='pay.php'</script>"; 
            }else{
                $msg = "<span style='color: red;''>Thêm thông tin thất bại</span>";
                return $msg; 
            }
        }
    }

    }else{

        $query = "SELECT giohang.*,giohang.id as cart_id, sanpham.*, users.*
        From giohang INNER JOIN sanpham ON giohang.sanpham_id = sanpham.id INNER JOIN users ON giohang.user_id = users.id WHERE giohang.user_id='$user_id'";
        $get_product = $db->getList($query);

        $currentDate = new DateTime(); // Ngày tháng năm hiện tại
        $ngaythang = $currentDate->format('Y-m-d H:i:s'); 
        $order_Code = rand(000000, 999999);
        Session::set('order_code', $order_Code);
        $sp_id = Session::get('sanpham_id');
        $soluong = Session::get('quantity');
        $total = Session::get('all_total');

        if($get_product ){
            while($result = $get_product->fetch()){
                $product_id = $result['sanpham_id'];
                $price = $result['gia1'];
                $quantity = $result['soluong'];
                $total = $price * $quantity;
          
                    $insert_hoadonban = "INSERT INTO hoadonban(user_id, tongtien, created_at, trangthai, order_code, product_id, quantity, price)
                    VALUES('$user_id', '$total', '$ngaythang', '0', '$order_Code', '$product_id','$quantity','$price')";
                    $result_insert = $db->exec($insert_hoadonban);
                    if($result_insert){
                        echo "<span style='color: blue;''>Thêm thông tin thành công</span>";
                      
                        // echo "<script>window.location='pay.php'</script>"; 
                    }else{
                        $msg = "<span style='color: red;''>Thêm thông tin thất bại</span>";
                        return $msg; 
                    }
                }  
            }

            $select = "SELECT * FROM hoadonban WHERE user_id='$user_id' AND order_code='$order_Code' LIMIT 1";
            $re = $db->getList($select);
            if($re){
                while($r = $re->fetch()){
                    $ma = $r['id'];
                    $insert_chitiet_hdon = "INSERT INTO chitiet_hdonban(mahdban,sanpham_id, soluongban, thanhtien, order_code)VALUES('$ma','$sp_id','$soluong','$total', '$order_Code')";
                    $a = $db->exec($insert_chitiet_hdon);
                    if($a){
                        // echo "<span style='color: blue;''>Thêm thông tin thành công</span>";
                      
                        echo "<script>window.location='pay.php'</script>"; 
                    }else{
                        $msg = "<span style='color: red;''>Thêm thông tin thất bại</span>";
                        return $msg; 
                    }
                }
            }
        }
    }
    

    function delete($delete_id){
        $db = new connect();
        $delete = "DELETE FROM giohang WHERE id=$delete_id";
        $result = $db->exec($delete);
        if($result){
            echo "<script> window.location = 'cart.php' </script>";
            $msg = "<span style='color: blue;''>Xoá thành công</span>";
            return $msg;
        }else{
            $msg = "<span style='color: red;''>Xoá thất bại</span>";
            return $msg;  
        }
    }

    function ma_giamgia($giamgia){
        $db = new connect();
        $giam = "SELECT * FROM magiamgia WHERE ma_giamgia LIMIT 1";
        $result = $db->getList($giam);
        return $result;
    }
}

?>