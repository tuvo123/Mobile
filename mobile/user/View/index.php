<?php 
    include("hearder.php");
    include("slidebar.php");
?>
    <section class="baner-one">
        <div class="container">
            <img src="../image/ban3.png" alt="">
        </div>
    </section>
    <section class="slider-product-one">
        <div class="container">
            <div class="slider-product-one-content">
                <div class="slider-product-one-content-title">
                    <h2>Săn Sale Online Mỗi Ngày</h2>
                </div>
                <div class="slider-product-one-content-container">
                    <div class="slider-product-one-content-items-content">
                    <?php 
                        $pro = new Product();
                        for($i = 0;$i<3;$i++){
                    ?>
                        <div class="slider-product-one-content-items">
                            <?php 
                                $result = $pro->getProductSlider($i);
                                while($sp = $result->fetch()){
                            ?>
                            <div class="slider-product-one-content-item" onclick="window.location.href='product_detail.php?id=<?php echo $sp['id']?>';">
                                <img src="../img_main/<?php echo $sp['img_main'] ?>" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="../image/icon.png" alt=""><p>Trợ giá mùa giáng sinh</p></li>
                                    <li><?php echo $sp['tensp'] ?></li>
                                    <li>Online giá rẻ</li>
                                    <?php $giaban=$sp['gia1'];
                                    $giagiam=$giaban+500000;
                                    $ptgiam=100-(($giaban/$giagiam)*100) ?>
                                    <li><p><?php echo number_format($giagiam,0,',','.')  ?><sup>đ</sup></p><span>-<?php echo floor($ptgiam) ?>%</span> </li>
                                    <li><?php echo number_format($giaban,0,',','.')  ?><sup>đ</sup></li>
                                    <li>Quà 400.000<sup>đ</sup></li>
                                    <li>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                    </li>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    <?php }   ?>

                    </div>
                    <div class="slider-product-one-content-btn">
                        <i class='bx bx-chevron-left bx-chevron-left-two'></i>
                        <i class='bx bx-chevron-right bx-chevron-right-two'></i>
                    </div>
                </div>
                
            </div>    
            
        </div>
    </section>
    <section class="product-gallery-one">
        <div class="container">
            <div class="product-gallery-one-content">
                <div class="product-gallery-one-content-title">
                    <h2>ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                    <ul>
                        <li><a href="">Samsung Galaxy A72</a></li>
                        <li><a href="">Iphone 14 Pro Max</a></li>
                        <li><a href="">Xiaomi Note 12</a></li>
                        <li><a href="">Xem tất cả</a></li>
                    </ul>
                </div>
                <div class="product-gallery-one-content-product">
                    <?php 
                    $spnb = $pro->getProductSlider(3);
                    while($spmoibat = $spnb->fetch()){ ?>
                    <div class="product-gallery-one-content-product-items" onclick="window.location.href='product_detail.php?id=<?php echo $spmoibat['id']?>';">
                        <img src="../img_main/<?php echo $spmoibat['img_main'] ?>" alt="">
                        <div class="product-gallery-one-content-product-item-text">
                            <li><img src="../image/icon.png" alt=""><p>Trợ giá mùa giáng sinh</p></li>
                            <li><?php echo $spmoibat['tensp'] ?></li>
                            <li>Online giá rẻ</li>
                            <?php $giaban=$spmoibat['gia1'];
                            $giagiam=$giaban+500000;
                            $ptgiam=100-(($giaban/$giagiam)*100) ?>
                            <li><p><?php echo number_format($giagiam,0,',','.')  ?><sup>đ</sup></p><span>-<?php echo floor($ptgiam) ?>%</span> </li>
                            <li><?php echo number_format($giaban,0,',','.')  ?><sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <?php } ?>
                   
                </div>
            </div>
        </div>
    </section>
    <section class="product-gallery-two">
        <div class="container">
            <div class="product-gallery-two-content">
                <div class="product-gallery-two-content-right">
                    <img src="../image/MHD-1920x570.png" alt="">
                </div>
                <div class="product-gallery-two-content-left">
                    <div class="product-gallery-two-content-left-top">
                        <li class="active">Điện thoại thông minh</li>
                        <li>Điện thoại thời trang nam</li>
                        <li>Điện thoại thời trang nữ</li>
                        <li>Định vị trẻ em</li>
                        <li><a href="">Xem tất cả<i class='bx bxs-right-arrow'></i></a></li>
                    </div>
                    <div class="product-gallery-two-content-left-bottom">
                        <?php 
                        $spthk = $pro->getProductThietKe(2);
                        while($sptke = $spthk->fetch()){
                        ?>
                        <div class="product-gallery-two-content-left-bottom-item" onclick="window.location.href='product_detail.php?id=<?php echo $sptke['id']?>';">
                            <img src="../img_main/<?php echo $sptke['img_main'] ?>" alt="">
                            <div class="product-gallery-two-content-left-bottom-item-text">
                                <li>Ưu đãi khủng</li>
                                <li><?php echo $sptke['tensp'] ?></li>
                                <li><?php echo $sptke['dungluong1'] ?></li>
                                <li><?php echo number_format($sptke['gia1'],0,',','.')?><sup>đ</sup></li>
                                <!-- <li>{{$loadProductEnd->baohanh}}</li> -->
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tintuc">
        <div class="container">
            <div class="tintuc-content">
                <div class="tintuc-content-left">
                    <div class="tintuc-content-left-top">
                        <h2>24H CÔNG NGHỆ</h2>
                        <a href="">XEM TẤT CẢ<i class='bx bxs-right-arrow'></i></a>
                    </div>
                    <div class="tintuc-content-left-bottom">
                        <li>
                            <img src="../image/news1.png" alt="">
                            <p>Mua điện thoại Xiaomi chưa tới 7 triệu mà còn được giảm thêm đến 1.2 triệu đồng, xem ngay</p>
                        </li>
                        <li>
                            <img src="../image/news2.png" alt="">
                            <p>Mua điện thoại Xiaomi chưa tới 7 triệu mà còn được giảm thêm đến 1.2 triệu đồng, xem ngay</p>
                        </li>
                        <li>
                            <img src="../image/news3.png" alt="">
                            <p>Mua điện thoại Xiaomi chưa tới 7 triệu mà còn được giảm thêm đến 1.2 triệu đồng, xem ngay</p>
                        </li>
                    </div>
                </div>
                <div class="tintuc-content-right">
                    <img src="../image/news4.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="thuong-hieu">
        <div class="container">
            <div class="thuong-hieu-content">
                <h2>CHUYÊN TRANG THƯƠNG HIỆU</h2>
                <div class="thuong-hieu-content-slider">
                    <div class="thuong-hieu-content-slider-container">
                        <div class="thuong-hieu-content-slider-imgs">
                            <div class="thuong-hieu-content-slider-img">
                                <img src="../image/th1.png" alt="">
                            </div>
                            <div class="thuong-hieu-content-slider-img">
                                <img src="../image/th2.png" alt="">
                            </div>
                            <div class="thuong-hieu-content-slider-img">
                                <img src="../image/th3.png" alt="">
                            </div>
                            <div class="thuong-hieu-content-slider-img">
                                <img src="../image/th4.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="thuong-hieu-content-slider-btn">
                        <i class='bx bx-chevron-left bx-chevron-left-three'></i>
                        <i class='bx bx-chevron-right bx-chevron-right-three'></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="chuoi-deal">
        <div class="container">
            <div class="chuoi-deal-content">
                <h2>CHUỖI MỚI DEAL KHỦNG</h2>
                <div class="chuoi-deal-content-slider">
                    <div class="chuoi-deal-content-slider-item">
                        <div class="chuoi-deal-content-slider-container">
                            <div class="chuoi-deal-content-slider-imgs">
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="../image/chuoideal1.png" alt="">
                                </div>
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="../image/chuoideal2.png" alt="">
                                </div>
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="../image/chuoideal3.png" alt="">
                                </div>                
                            </div>
                            <div class="chuoi-deal-content-slider-imgs">                            
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="../image/chuoideal4.png" alt="">
                                </div>
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="../image/chuoideal5.png" alt="">
                                </div>
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="../image/chuoideal6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chuoi-deal-content-slider-btn">
                        <i class='bx bx-chevron-left bx-chevron-left-four'></i>
                        <i class='bx bx-chevron-right bx-chevron-right-four'></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tim-kiem-nhieu">
        <div class="container">
            <div class="tim-kiem-nhieu-content">
                <h2>TÌM KIẾM NHIỀU</h2>
                <div class="tim-kiem-nhieu-content-item">
                    <a href="product.php?edtsearch=iphone 15">iphone 15</a>
                    <a href="product.php?edtsearch=iphone 15 128gb">iphone 15 128gb</li>
                    <a href="product.php?edtsearch=iphone 15 plus">iphone 15 plus</li>
                    <a href="product.php?edtsearch=iphone 15 pro max">iphone 15 pro max</li>
                    <a href="product.php?edtsearch=oppo find n3">Oppo Find N3</li>
                    <a href="product.php?edtsearch=oppo find n3 flip">Oppo find N3 Flip</li>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/index.js"></script>
   <!-- Footer -->
<?php include("footer.php") ?>