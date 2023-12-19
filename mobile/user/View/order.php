<?php include('hearder.php') ?>
<?php
    include('../Model/order.php');
    if($check_login == false){
        echo "<script>window.location='index.php'</script>";
    }
    $order = new Order();
?>
<section class="order">
        <div class="container">
            <div class="order-content">
                <div class="left">
                    <li>Anh <b><?php echo Session::get('userFullName');?></b></li>
                    <li><i class='bx bxs-detail'></i>Đơn hàng đã mua</li>
                    <li><i class='bx bxs-contact' ></i>Thông tin và số địa chỉ</li>
                    <?php
                        //     ob_start();
                        //    if(isset($_GET['dang_xuat'])&&$_GET['dang_xuat']=='dang_xuat'){
                        //     Session::destroy();
                        
                        //     echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
                     
                        //   }
                        //   ob_end_flush(); 
                        ?>
                    <!-- <li><a href="?dang_xuat=dang_xuat">Đăng xuất</a></li> -->
                    <li>VATH</li>
                </div>
                <div class="right">
                    <div class="lich-su">
                        <li>Đơn hàng đã mua</li>
                        <!-- <li>Từ 07/12/2022 - 07/12/2023</li> -->
                    </div>

                    <?php
                    $show = $order->show($user_id);
                    if($show){
                        $total = 0;
                       while($result_show = $show->fetch()){
                        $total += $result_show['thanhtien'];
                    ?>
                    <div class="donhang">
                        <div class="top">
                            <li><b>Đơn hàng: </b> #<?php echo $result_show['order_code']?></li>
                            <?php 
                            if($result_show['trangthai'] == '0'){
                            ?>
                            <li>Đang giao hàng</li>
                            <?php
                            }else{
                            ?>
                             <li>Đã nhận hàng</li>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="bottom">
                            <div class="bottom-left">
                                <!-- <li><img src="../img_main/<?php echo $result_show['img_main'] ?>" alt=""></li> -->
                                <!-- <li><?php echo Session::get('userFullName') ?> (6+128G) Bạc</li> -->
                                <li style="color:red; font-weight:bold;"><?php echo Session::get('userFullName') ?></li>
                                <li><?php echo $result_show['created_at']?></li>
                            </div>
                            <style>
                              

                            </style>
                            <div class="bottom-right">
                                <li>Tổng tiền: <span style="font-weight: bold;"><?php echo number_format(intval($result_show['thanhtien']),0,',','.')  ?><sup>đ</sup></span></li>
                                <li class="li"><a href="order_detail.php?code=<?php echo $result_show['order_code']?>" class="order_detail">Xem chi tiết</a></li>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
           
                </div>
            </div>
        </div>
    </section>
<?php include('footer.php') ?>