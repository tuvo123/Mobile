<?php 
include('hearder.php');
include_once('../Model/cart.php');

$cart = new Cart();


?>
<?php
  if($check_login == false){
    // header('Location:login.php');
   
    echo "<script>window.location='index.php'</script>"; 
 }
?>
<?php
    $show_cart = $cart->show($user_id);

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dathang'])){
      
        if(isset($_POST['noinhan']) ){
            $noinhan = $_POST['noinhan'];
            Session::set('noinhan', $noinhan);
        }else{
            echo "";
        }
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $tinh = $_POST['tinh'];
        $huyen = $_POST['huyen'];
        $phuong = $_POST['phuong'];
        $sonha = $_POST['sonha'];
        // $quantity = $_POST['quantity'];
        // $product_id = $_POST['product_id'];
        // $total = $_POST['total'];

        $insert_info_user = $cart->insert_info_user($user_id, $fullname, $phone, $tinh, $huyen, $phuong, $sonha);
    }

    if(isset($_GET['delete'])){
        $delete_id = intval($_GET['delete']) ;
        $delete_cart = $cart->delete($delete_id);
    }

    // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ma_giamgia'])){
    //     $giamgia = $_POST['giamgia'];

    //     $magiam = $cart->ma_giamgia($giamgia);
    // }
?>
<section class="cart">
        <div class="container">
            <div class="cart-quay-lai">
                <li><a href="product.php"><i class='bx bx-chevron-left'></i>Mua thêm sản phẩm khác</a></li>
                <li>Giỏ hàng của bạn</li>
            </div>
            <form action="" method="post">
            <div class="cart-box">
                <?php 
                if(isset($delete_cart)){
                    echo $delete_cart;
                }
                ?>
                <?php
                if($show_cart){
                    $all_total = 0;
                    $quantity = 0;
                    while($result_show = $show_cart->fetch(PDO::FETCH_ASSOC)){
                        $quantity += $result_show['soluong'];
                        $total = $result_show['gia1'] * $result_show['soluong'];
                        $all_total += $total;
                        
                ?>
                <div class="cart-box-san-pham">
                    <div class="cart-box-san-pham-left">
                        <div class="cart-box-san-pham-left-img">
                            <div class="cart-box-san-pham-left-img-anh">
                                <img src="../img_main/<?php echo $result_show['img_main']?>" alt="">
                            </div>
                            <div class="cart-box-san-pham-left-img-btnxoa">
                                <i class='bx bx-x-circle'></i> <span><a href="?delete=<?php echo $result_show['cart_id'];?>">Xoá</a></span>
                            </div>
                        </div>
                        <div class="cart-box-san-pham-left-content">
                            <li><?php echo $result_show['tensp']?></li>
                            <li>5 khuyến mãi <i class='bx bxs-down-arrow'></i></li>
                            <li>Màu: <?php echo $result_show['mau']?> <i class='bx bxs-down-arrow'></i></li>
                        </div>
                    </div>
                    <?php $giaban=$result_show['gia1'];
                            $giagiam=$giaban+500000;
                            $ptgiam=100-(($giaban/$giagiam)*100) ?>
                    <div class="cart-box-san-pham-right">
                        <li><?php   echo number_format(intval($giaban),0,',','.') ;?><sup>đ</sup></li>
                        <li><?php   echo number_format(intval($giagiam),0,',','.') ;?> <sup>đ</sup></li>
                        <li>
                            <span class="giam-sl">-</span>
                            <?php Session::set('sanpham_id',$result_show['sanpham_id'] ); ?>
                            <!-- <input type="hidden" name="product_id" value="<?php echo $result_show['sanpham_id']?>">
                            <input type="hidden" name="quantity" value="<?php echo $result_show['soluong']?>">
                            <input type="hidden" name="total" value="<?php echo $total?>"> -->
                            <span class="sl-sp"><?php echo $result_show['soluong']?></span>
                            <span class="tang-sl">+</span>
                        </li>
                    </div>
                </div>
                <?php
           

                }
            }
            ?>
         
                <div class="cart-box-tinh-tong" style="padding-top: 10px;">
                    <li>Tạm tính (<span><?php if($quantity){Session::set('quantity', $quantity); echo $quantity;}?></span> sản phẩm):</li>
                
                    <li style="font-weight: bold;"><?php
                    if($all_total){
                        Session::set('all_total', $all_total);
                        echo number_format(intval($all_total),0,',','.') ; 
                    ?><sup>đ</sup></li>
                    <?php
                    }else{
                    ?>
                    <li style="color: red;">Chưa có sản phẩm nào trong giỏ hàng</li>
                    <?php
                    }
                    ?>
                </div>
               
         
                <div class="cart-box-thong-tin-kh">
                    <div class="cart-box-thong-tin-khach-hang">
                        <h5>Thông tin khách hàng</h5>
                        <?php
                        if(isset($insert_info_user)){
                            echo $insert_info_user;
                        }
                        ?>
                        <!-- <div class="cart-box-radio-btn">
                            <li><input type="radio" id="nam" value="Nam" name="gioitinh">
                            <label for="nam">Nam</label></li>
                            <li><input type="radio" id="nu" value="Nữ" name="gioitinh">
                                <label for="nu">Nữ</label></li>
                        </div> -->
                        <div class="cart-box-edit-text">
                            <input type="text" name="fullname" placeholder="Họ và tên">
                            <input type="text" name="phone" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="cart-box-thong-tin-dia-chi">
                        <h5>Chọn cách thức nhận hàng</h5>
                        <div class="cart-box-radio-btn">
                            <li><input type="radio" id="giaotannoi" name="noinhan" value="Giao hàng tận nơi">
                            <label for="giaotannoi">Giao tận nơi</label></li>
                            <li><input type="radio" id="nhantaisieuthi" name="noinhan" value="Nhận tại siêu thị">
                                <label for="nhantaisieuthi">Nhận tại siêu thị</label></li>
                        </div>
                        <div class="cart-box-edit-text">
                            <input type="text" name="tinh" placeholder="Nhập tỉnh/thành phố">
                            <input type="text" name="huyen" placeholder="Nhập quận/huyện">
                            <input type="text" name="phuong" placeholder="Nhập phường/xã">
                            <input type="text" name="sonha" placeholder="Nhập số nhà, tên đường">
                        </div>
                    </div>
                    <!-- <div class="cart-box-edit-khac">
                        <input type="text" placeholder="Yêu cầu khác (Nếu có)">
                    </div> -->
                    <!-- <div class="cart-box-thong-tin-khac">
                        <li><input type="checkbox" id="chknguoinhankhac" name="nhanhang">
                        <label for="chknguoinhankhac">Gọi người khác nhận hàng (nếu có)</label></li>
                        <li><input type="checkbox" id="chkchuyendulieu" name="chuyendulieu">
                            <label for="chkchuyendulieu">Chuyển danh bạ, dữ liệu qua máy mới</label></li>
                        <li><input type="checkbox" id="chkxuathoadon" name="xuathoadon">
                            <label for="chkxuathoadon">Xuất hóa đơn công ty</label></li>
                    </div> -->
                </div>
                <div class="cart-box-thanh-toan">
                    <form action="" method="post">
                    <div class="cart-box-giam-gia">
                        <!-- <li>Mã giảm gia/Phiếu mua hàng</li>
                        <input type="hidden" name="">
                        <li><input type="text" name="giamgia" placeholder="Nhập Mã giảm/Phiếu mua hàng"><input type="submit" name="ma_giamgia" value="Áp dụng" style="cursor:pointer;"></li> -->
                    </div>
                    </form>
                    <div class="cart-box-tinh-tong-tien">
                        <li>Tổng tiền:</li>
                        <li style="font-weight: bold;"><?php
                          if($all_total){
                            echo number_format(intval($all_total),0,',','.') ; 
                         }?><sup>đ</sup></li>
                    </div>
                    <!-- <div class="cart-box-diem-tich-luy">
                        <li>Điểm tích lũy:</li>
                        <li><span>28.290</span>điểm</li>
                    </div> -->
                    <div class="cart-box-chk-xac-nhan">
                        <input type="checkbox" id="chkxacnhan" name="chkxacnhan">
                        <label for="chkxacnhan">Tôi đồng ý với <span>Chính sách xử lý dữ liệu cá nhân</span> của Thế Giới Di Động</label>
                    </div>
                    <div class="cart-box-button-dat-hang">
                        <!-- <a href="pay.php"><input type="button" value="ĐẶT HÀNG"></a> -->
                        <input type="submit" name="dathang" value="ĐẶT HÀNG">
                    </div>
                    <div class="cart-box-thong-bao">
                        <li>Bạn có thể chọn hình thức thanh toán sau khi đặt hàng</li>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../js/cart.js"></script>
<?php include('footer.php');?>