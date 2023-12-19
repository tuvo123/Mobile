<?php include('hearder.php') ?>
<?php include('../Model/pay.php'); ?>
<?php
  if($check_login == false){
    // header('Location:login.php');
   
    echo "<script>window.location='index.php'</script>"; 
 }
?>
<?php
    $pay = new Pay();

    if(isset($_GET['user_id'])){
        $user = $_GET['user_id'];
        $code = $_GET['order_Codes'];

        $delete_Order = $pay->delete_Order($user, $code);
    }

?>
<section class="thanhtoan">
        <div class="container">
            <div class="thanh-toan-box">
                <div class="thanh-toan-top">
                    <i class='bx bxs-check-circle'></i>
                    <i class='bx bxs-shopping-bag'></i>
                    <span>ĐẶT HÀNG THÀNH CÔNG</span>
                </div>

                <?php
              
                $show_infoUser = $pay->show_infoUser($user_id);

                // var_dump($show);
                if($show_infoUser){
                    while($show_pay = $show_infoUser->fetch(PDO::FETCH_ASSOC)){

                ?>
           
                <div class="thanh-toan-bottom">
                    <div class="thanh-toan-bottom-loi-co">
                        Cảm ơn Anh <span><?php echo $show_pay['fullname']?></span> đã cho <b style="color: Blue;">VATH</b> cơ hội được phục vụ.
                    </div>
                    <div class="thanh-toan-bottom-don-hang">
                        <div class="top">
                            <div class="madonhang">
                                <li>ĐƠN HÀNG:</li>
                                <li>#<?php echo $show_pay['order_code']?></li>
                            </div>
                            <div class="huydon">
                                <li><a href="order.php" style="font-weight:bold;">Quản lý đơn hàng</a></li>
                                <li><i class='bx bx-dots-horizontal-rounded'></i></li>
                                <li><a href="?user_id=<?php echo $show_pay['user_id']?>&order_Codes=<?php echo $show_pay['order_code']?>" style="color:red; font-weight:bold;">Hủy</a></li>
                            </div>
                        </div>
                        <div class="bottom">
                            <li><b>Người nhận hàng: </b><?php echo $show_pay['fullname']?>, <?php echo $show_pay['phone']?></li>
                            <li><b>Giao đên: </b><?php echo $show_pay['address']?> (nhân viên sẽ gọi xác nhận trước khi giao).</li>
                            <li><b>Tổng tiền: </b><span><?php $all_total = Session::get('all_total'); echo number_format(intval( $all_total),0,',','.'); ?><sup>đ</sup>(<?php echo Session::get('quantity'); ?>)</span></li>
                        </div>
                    </div>
                      <?php
                            }
                        }
                        ?>
                    <div class="thanh-toan-bottom-thong-bao">
                        <li>Đơn hàng chưa được thanh toán</li>
                    </div>
                    <div class="thanh-toan-bottom-hinh-thuc-thanh-toan">
                        <li>Chọn hình thức thanh toán:</li>

                    <form action="" method="post">
                        <input type="hidden" name="code" value="<?php echo Session::get('order_code')?>">
                        <!-- <input type="hidden" name="code" value="<?php echo Session::get('order_code')?>"> -->
                        <li><input type="radio" id="tienmat" name="tienmat" checked>
                            <i class='bx bx-money'></i>
                        <label for="tienmat">Thanh toán tiền mặt khi nhận hàng</label></li>

                        <!-- <li><input type="radio" id="chuyenkhoan" name="tienmat">
                            <i class='bx bx-money'></i>
                        <label for="chuyenkhoan">Chuyển khoản ngân hàng</label></li>
                        <li><input type="radio" id="atm" name="tienmat">
                            <i class='bx bx-money'></i>
                        <label for="atm">Qua thẻ ATM (có Internet Banking)</label></li>
                        <li><input type="radio" id="qr" name="tienmat">
                            <i class='bx bx-money'></i>
                        <label for="qr">Qua VNPAY-QR</label></li> -->
                        
                        <li><input type="radio" id="momo" name="tienmat">
                            <i class='bx bx-money'></i>
                        <label for="momo">Ví MoMo</label></li>
                    </div>
                    <div class="thanh-toan-bottom-xac-nhan">
                        <a href="#"><button type="submit" name="payment">XÁC NHẬN</button></a>
                    </div>
                    </form>

                    <div class="thanh-toan-bottom-chinh-sach">
                        <li>Xem chính sách hoàn tiền online</li>
                    </div>

                    <div class="thanh-toan-bottom-thoi-gian">
                        <h5>THỜI GIAN NHẬN HÀNG</h5>
                        <?php
                        $show_product = $pay->show_product($user_id);
                        if($show_product){
                            while($result_show = $show_product->fetch(PDO::FETCH_ASSOC)){
                   
                        ?>
                        <div class="thong-tin-sp">
                            <b>Giao trước 17h00 Hôm nay(07/12)</b>
                            <div class="san-pham">
                                <li><img src="../img_main/<?php echo $result_show['img_main'] ?>" alt=""></li>
                                <li><div class="tensp"><?php echo $result_show['tensp'] ?> <?php echo $result_show['dungluong1'] ?></div>
                                    <div class="mau">
                                        
                                        <span>Số lượng: <?php echo $result_show['quantity'] ?></span>
                                    </div></li>
                            </div>
                        </div>
                        <?php             
                            }
                        }
                        ?>
                        <a class="mau-them-sp" href="product.php"><div >Mua thêm sản phẩm khác </div></a> 
                    </div>
                </div>


            </div>
        </div>
    </section>
<?php include('footer.php') ?>