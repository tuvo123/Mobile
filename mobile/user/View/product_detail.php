<?php 
include("hearder.php");
    $pd_detail = new Pd_detail();
    $idsp = $_GET['id'];
    $cctsp = $pd_detail->getdetail($idsp);
    while($ttsp=$cctsp->fetch()){
 ?>
    <section class="product-detail">
        <div class="container">
            <div class="product-detail-show">
                <div class="product-detail-show-top">
                    <div class="product-detail-show-top-thuong-hieu">
                        <li>Điện thoại</li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>Điện thoại <span><?php echo $ttsp['name'] ?></span></li>
                    </div>
                    <div class="product-detail-show-top-name-sp">
                        <div class="product-detail-show-top-name-sp-left">
                            <li>Điện thoại <span><?php echo $ttsp['tensp'] ?></span></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            
                            <span>7 đánh giá</span></li>
                            <li><i class='bx bxs-plus-circle'></i> So sánh</li>
                        </div>
                        <div class="product-detail-show-top-name-sp-right">
                            <li><i class='bx bxs-like' ></i> Thích 2</li>
                            <li>Chia sẻ</li>
                        </div>
                    </div>
                </div>
                <div class="product-detail-show-bottom">
                    <div class="product-detail-show-bottom-left">
                        <div class="product-detail-show-bottom-left-top">
                            <div class="product-detail-show-bottom-left-top-img mau0">
                                <div class="product-detail-show-bottom-left-top-img-slider">
                                    <a href=""><img src="../image/<?php echo $ttsp['hinh0_1'] ?>" alt=""></a>
                                    <a href=""><img src="../image/<?php echo $ttsp['hinh0_2'] ?>" alt=""></a>
                                    <a href=""><img src="../image/<?php echo $ttsp['hinh0_3'] ?>" alt=""></a>
                                    <a href=""><img src="../image/<?php echo $ttsp['hinh0_4'] ?>" alt=""></a>
                                </div>
                                
                                <div class="product-detail-show-bottom-left-top-img-btn">
                                    <i class='bx bx-chevron-left bx-slider-ip-left'></i>
                                    <i class='bx bx-chevron-right bx-slider-ip-right'></i>
                                </div>
                                
                            </div>
                            <?php 
                            for($i = 1;$i<5;$i++){
                            
                                if(!empty($ttsp['mau'.$i])){

                            ?>
                            <div class="product-detail-show-bottom-left-top-img mau<?php echo $i?>">
                            
                                <div class="product-detail-show-bottom-left-top-img-slider">
                                    <a href=""><img src="../img/<?php echo $ttsp['hinh'.$i.'_1'] ?>" alt=""></a>
                                    <a href=""><img src="../img/<?php echo $ttsp['hinh'.$i.'_2'] ?>" alt=""></a>
                                    <a href=""><img src="../img/<?php echo $ttsp['hinh'.$i.'_3'] ?>" alt=""></a>
                                    <a href=""><img src="../img/<?php echo $ttsp['hinh'.$i.'_4'] ?>" alt=""></a>
                                </div>
                                
                                
                                <div class="product-detail-show-bottom-left-top-img-btn">
                                    <i class='bx bx-chevron-left bx-slider-ip-left'></i>
                                    <i class='bx bx-chevron-right bx-slider-ip-right'></i>
                                </div>
                                
                            </div>
                            <?php
                                }
                            }
                            ?>
                            <div class="product-detail-show-bottom-left-top-img-dem-hinh">
                                <li>Vị trí hình</li>
                                <li id="vitrihinh">(1/4)</li>
                            </div>
                            <div class="product-detail-show-bottom-left-top-menu">
                                <li class="active btn-mau0"><div><img src="../image/icondacbiet.png" alt=""></div><p>Điểm nổi bật</p></li>
                                <?php 
                                for($i = 1;$i<5;$i++){
                                
                                    if(!empty($ttsp['mau'.$i])){

                                ?>
                                <li class="btn-mau<?php echo $i?>"><div><img src="../img/<?php echo $ttsp['hinh'.$i.'_0'] ?>" alt=""></div><p><?php echo $ttsp['mau'.$i] ?></p></li>
                                <?php }} ?>
                                <li class="openkt"><div><img src="../image/icontskt.png" alt=""></div><p>Thông số kĩ thuật</p></li>
                                <li class="opentt"><div><img src="../image/iconttsp.png" alt=""></div><p>Thông tin sản phẩm</p></li>
                            </div>
                            <div class="product-detail-show-bottom-left-top-chinh-sach-sp">

                                <li><div><img src="../image/iconphukien.png" alt=""></div><p>Hư gì đổi nấy <b>12 tháng</b> tại VATH (miễn phí tháng đầu)</p></li>
                                <li><div><img src="../image/iconbaohanh.png" alt=""></div><p>Bảo hành <b><?php echo $ttsp['baohanh'] ?></b> tại các trung tâm bảo hành hãng</p></li>
                                <li><div><img src="../image/icondonghop.png" alt=""></div><p><?php echo $ttsp['mota']?></p></li>
                            </div>
                            
                    
                                        
                            
                        </div>
                        
                    </div>
                    <div class="product-detail-show-tskt">
                        <div class="product-detail-show-tskt-kt">
                            <div class="product-detail-show-tskt-dong">Đóng</div>
                            <div class="product-detail-show-tskt-chtsp-top">
                                <li id="btn-tskt" class="active">Thông số kĩ thuật</li>
                                <li id = "btn-ttsp">Thông tin sản phẩm</li>
                            </div>
                            <div class="product-detail-show-tskt-chtsp-bottom">
                                <div class="product-detail-show-tskt-chtsp-bottom-tskt">
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Màn hình</h4>
                                        <li>
                                            <div class="sp-left">Công nghệ màn hình:</div>
                                            <div class="sp-right"><?php echo $ttsp['congnghe'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Độ phân giải:</div>
                                            <div class="sp-right"><?php echo $ttsp['mh_dophangiai'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Màn hình rộng:</div>
                                            <div class="sp-right"><?php echo $ttsp['mahinhtrong'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Độ sáng tối đa:</div>
                                            <div class="sp-right"><?php echo $ttsp['dosangtoida'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Mặt kính cảm ứng:</div>
                                            <div class="sp-right"><?php echo $ttsp['matkinhcamung'] ?></div>
                                        </li>
                                    </div>
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Camera sau</h4>
                                        <li>
                                            <div class="sp-left">Độ phân giải:</div>
                                            <div class="sp-right"><?php echo $ttsp['cs_dophangiai'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Quay phim:</div>
                                            <div class="sp-right"><?php echo $ttsp['quayphim'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Đèn Flash:</div>
                                            <div class="sp-right"><?php echo $ttsp['denflash'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Tính năng:</div>
                                            <div class="sp-right">
                                                <?php echo $ttsp['cs_tinhnang'] ?>
                                                </div>
                                        </li>
                                        
                                    </div>
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Camera trước</h4>
                                        <li>
                                            <div class="sp-left">Độ phân giải:</div>
                                            <div class="sp-right"><?php echo $ttsp['ct_dophangiai'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Tính năng: </div>
                                            <div class="sp-right"><?php echo $ttsp['ct_tinhnang'] ?></div>
                                        </li>
                                        
                                    </div>
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Hệ điều hành & CPU</h4>
                                        <li>
                                            <div class="sp-left">Hệ điều hành:</div>
                                            <div class="sp-right"><?php echo $ttsp['hedieuhanh'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Chip xử lý (CPU):</div>
                                            <div class="sp-right"><?php echo $ttsp['chipxuly'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Tốc độ CPU:</div>
                                            <div class="sp-right"><?php echo $ttsp['tocdocpu'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Chip đồ họa (GPU):</div>
                                            <div class="sp-right"><?php echo $ttsp['chipdohoa'] ?></div>
                                        </li>
                                        
                                    </div>
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Bộ nhớ & Lưu trữ</h4>
                                        <li>
                                            <div class="sp-left">RAM:</div>
                                            <div class="sp-right"><?php echo $ttsp['ram'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Dung lượng lưu trữ:</div>
                                            <div class="sp-right"><?php echo $ttsp['dungluong1'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Danh bạ:</div>
                                            <div class="sp-right"><?php echo $ttsp['danhba'] ?></div>
                                        </li>
                                        
                                    </div>
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Kết nối</h4>
                                        <li>
                                            <div class="sp-left">Mạng di động:</div>
                                            <div class="sp-right"><?php echo $ttsp['mangdidong'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Sim</div>
                                            <div class="sp-right"><?php echo $ttsp['thesim'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Wifi:</div>
                                            <div class="sp-right"><?php echo $ttsp['wifi'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">GPS:</div>
                                            <div class="sp-right"><?php echo $ttsp['gps'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Bluetooth:</div>
                                            <div class="sp-right"><?php echo $ttsp['bluetooth'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Cổng kết nối/sạc:</div>
                                            <div class="sp-right"><?php echo $ttsp['congsac'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Jack tai nghe:</div>
                                            <div class="sp-right"><?php echo $ttsp['tainghe'] ?></div>
                                        </li>
                                    </div>
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Pin & Sạc</h4>
                                        <li>
                                            <div class="sp-left">Loại pin:</div>
                                            <div class="sp-right"><?php echo $ttsp['loaipin'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Dung lượng pin:</div>
                                            <div class="sp-right"><?php echo $ttsp['dungluongpin'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Hỗ trợ sạc:</div>
                                            <div class="sp-right"><?php echo $ttsp['hotrosactoida'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Công nghệ pin:</div>
                                            <div class="sp-right"><?php echo $ttsp['congnghepin'] ?></div>
                                        </li>
                                        
                                    </div>
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Tiện ích</h4>
                                        <li>
                                            <div class="sp-left">Bảo mật nâng cao:</div>
                                            <div class="sp-right"><?php echo $ttsp['baomatnangcao'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Tính năng đặc biệt:</div>
                                            <div class="sp-right"><?php echo $ttsp['tinhnangdacbiet'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Kháng nước, bụi:</div>
                                            <div class="sp-right"><?php echo $ttsp['khangnuocvabui'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Ghi âm:</div>
                                            <div class="sp-right"><?php echo $ttsp['ghiam'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Xem phim:</div>
                                            <div class="sp-right"><?php echo $ttsp['xemphim'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Nghe nhạc:</div>
                                            <div class="sp-right"><?php echo $ttsp['nghenhac'] ?></div>
                                        </li>
                                    </div>
                                    <div class="product-detail-show-tskt-chtsp-bottom-tskt-sp">
                                        <h4>Thông tin chung</h4>
                                        <li>
                                            <div class="sp-left">Thiết kế: </div>
                                            <div class="sp-right"><?php echo $ttsp['thietke'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Chất liệu:</div>
                                            <div class="sp-right"><?php echo $ttsp['chatlieu'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Kích thước, khối lượng:</div>
                                            <div class="sp-right"><?php echo $ttsp['kichthuockhoiluong'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Thời điểm ra mắt:</div>
                                            <div class="sp-right"><?php echo $ttsp['thoidiemramat'] ?></div>
                                        </li>
                                        <li>
                                            <div class="sp-left">Hãng:</div>
                                            <div class="sp-right"><?php echo $ttsp['name'] ?></div>
                                        </li>
                                    </div>
                                </div>
                                <div class="product-detail-show-tskt-chtsp-bottom-ttsp">
                                    <img src="../image/sliderip152.jpg" alt="">
                                    <p><?php echo $ttsp['ttsanpham'] ?></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="product-detail-show-bottom-right">
                        <form action="#" method="post">
                        <div class="product-detail-show-bottom-right-dung-luong">
                            <?php
                            $dungluongchon=1;
                            $dungluongchonten="";
                            $giaban=$ttsp['gia1'];
                            if(!empty($ttsp['dungluong1'])){
                                $dungluongchonten=$ttsp['dungluong1'];
                            ?>
                            <input type="submit" name="dungluong1" id="dungluong1" class="active" value="<?php echo $ttsp['dungluong1'] ?>">
                            <?php  
                            
                            if(isset($_POST['dungluong1'])){
                                $giaban=$ttsp['gia1'];
                                $dungluongchon=1;
                                $dungluongchonten=$ttsp['dungluong1'];
                            }
                            }
                            ?>
                            <?php
                            if(!empty($ttsp['dungluong2'])){
                            ?>
                            
                            <input type="submit" name="dungluong2" id="dungluong2" value="<?php echo $ttsp['dungluong2'] ?>">
                            <?php 
                            if(isset($_POST['dungluong2'])){
                                $giaban=$ttsp['gia2'];
                                $dungluongchon=2;
                                $dungluongchonten=$ttsp['dungluong2'];
                            }
                            }
                            ?>
                            <?php
                            if(!empty($ttsp['dungluong3'])){
                            ?>
                            <input type="submit" name="dungluong3" id="dungluong3" value="<?php echo $ttsp['dungluong3'] ?>">
                            <?php 
                            if(isset($_POST['dungluong3'])){
                                $giaban=$ttsp['gia3'];
                                $dungluongchon=3;
                                $dungluongchonten=$ttsp['dungluong3'];
                            }
                            } ?>
                            <?php
                            if(!empty($ttsp['dungluong4'])){
                            ?>
                            <input type="submit" name="dungluong4" id="dungluong4" value="<?php echo $ttsp['dungluong4'] ?>">
                            <?php 
                            if(isset($_POST['dungluong4'])){
                                $giaban=$ttsp['gia4'];
                                $dungluongchon=4;
                                $dungluongchonten=$ttsp['dungluong4'];
                            }
                            } ?>
                            
                            
                        </div>
                        
                        <div class="product-detail-show-bottom-right-mau-dt">
                        <?php
                            $mauchon=1;
                            $mauchonten="";
                            if(!empty($ttsp['mau1'])){
                                $mauchonten=$ttsp['mau1'];
                            ?>
                            <input type="submit" name="chonmau1" id="chonmau1" class="active" value="<?php echo $ttsp['mau1'] ?>">
                            <?php 
                                if(isset($_POST['chonmau1'])){
                                    $mauchon=1;
                                    $mauchonten=$ttsp['mau1'];
                                }
                            } ?>
                            <?php
                            if(!empty($ttsp['mau2'])){
                            ?>
                            <input type="submit" name="chonmau2" id="chonmau2" value="<?php echo $ttsp['mau2'] ?>">
                            <?php 
                                if(isset($_POST['chonmau2'])){
                                    $mauchon=2;
                                    $mauchonten=$ttsp['mau2'];
                                }
                            } ?>
                            <?php
                            if(!empty($ttsp['mau3'])){
                            ?>
                            <input type="submit" name="chonmau3" id="chonmau3" value="<?php echo $ttsp['mau3'] ?>">
                            <?php 
                                if(isset($_POST['chonmau3'])){
                                    $mauchon=3;
                                    $mauchonten=$ttsp['mau3'];
                                }
                            } ?>
                            <?php
                            if(!empty($ttsp['mau4'])){
                            ?>
                            <input type="submit" name="chonmau4" id="chonmau4" value="<?php echo $ttsp['mau4'] ?>">
                            <?php 
                                if(isset($_POST['chonmau4'])){
                                    $mauchon=4;
                                    $mauchonten=$ttsp['mau4'];
                                }
                            } ?>


                        </div>
                        <script>
                            const demdungluong =document.querySelectorAll('.product-detail-show-bottom-right-dung-luong input');
                            let dluongchon = <?php echo $dungluongchon ?> 
                            for(let dluong = 1; dluong<=demdungluong.length;dluong++){
                                if(dluong == dluongchon){
                                    document.querySelector('#dungluong'+dluong).classList.add('active');
                                }
                                else {
                                    document.querySelector('#dungluong'+dluong).classList.remove('active');
                                }
                            }
                            
                            const demchonmau =document.querySelectorAll('.product-detail-show-bottom-right-mau-dt input');
                            let mauchon = <?php echo $mauchon ?> 
                            for(let mau = 1; mau<=demchonmau.length;mau++){
                                if(mau == mauchon){
                                    document.querySelector('#chonmau'+mau).classList.add('active');
                                }
                                else {
                                    document.querySelector('#chonmau'+mau).classList.remove('active');
                                }
                            }
                        </script>
                        <div class="product-detail-show-bottom-right-gia">
                            <li>Giá tại 
                                <span>Hồ Chí Minh <i class='bx bx-chevron-down'></i></span>
                            </li>
                            <li><b><?php echo number_format($giaban,0,',','.') ?><sup>đ</sup></b>* <p><?php $giagiam=$giaban+500000; $ptgiam=100-(($giaban/$giagiam)*100); echo number_format($giagiam,0,',','.') ?><sup>đ</sup></p>-<?php echo floor($ptgiam) ?>% <span>Trả góp 0%</span></li>
                            <!-- <li><img src="../image/imgtgdi.png" alt=""><b>+28.290</b>điểm tích lũy Quỳ Tặng VIP <i class='bx bx-bolt-circle'></i></li> -->
                        </div>
                        <div class="product-detail-show-bottom-right-button-mua">
                            <input type="submit" id="muangay" name="muangay" value="MUA NGAY">
                            <input type="submit" id="themvaogiohang" name="themvaogiohang" value="THÊM VÀO GIỎ HÀNG">
                        </div>
                        <?php 
                            if(isset($_POST['muangay'])){
                                $themhoadon=$pd_detail->inserthoadonw(1,1,date('Y-m-d H:i:s'),$giaban);
                                // $themhoadon=$pd_detail->inserthoadonw(1,1,$giaban);
                                $idhoadonmua = $pd_detail->getmahoadon();
                                $idhoadon = $idhoadonmua->fetch();
                                $themcthoadon = $pd_detail->insertchitiethoadon($idhoadon['id'],$ttsp['id'],1,$giaban,0,$giaban);
                                if($themcthoadon && $themhoadon){
                                    echo "<script>alert('Bạn đã đặt hàng thành công');window.location.href='pay.php?idhoadon='".$idhoadon['id'].";</script>";
                                }
                                
                                else{
                                    echo "<script>alert('Quá trình đặt hàng thất bại')</script>";
                                }
                            }
                            if(isset($_POST['themvaogiohang'])){
                                $spdt = $pd_detail->ktragiohang($ttsp['id']);
                                $ktsptsp = $spdt->fetch();
                                if($ktsptsp['sosp'] == 0){
                                    $themgiohang = $pd_detail->insertgiohang(1,$ttsp['id'],$dungluongchonten,$mauchonten,1,$giaban,'đã thêm');
                                    if($themgiohang){
                                        echo "<script>alert('Đã thêm vào giỏ hàng thành công')</script>";
                                    }
                                }
                                else{
                                    echo "<script>alert('Sản phẩm này đã có trong giỏ hàng')</script>";
                                }
                            }
                        ?>
                        
                        </form>
                        <div class="product-detail-show-bottom-right-khuyen-mai">
                            <div class="product-detail-show-bottom-right-khuyen-mai-top">
                                <li>Khuyến mãi</li>
                                <li>Giá và khuyến mãi áp dụng đặt và nhận hàng từ 00:00 | 01/10 - 23:00 | 31/12</li>
                            </div>
                            <div class="product-detail-show-bottom-right-khuyen-mai-tt">
                                <li><span>1</span><p> Thu cũ Đổi mới: Giảm đến 2 triệu (Tuỳ model máy cũ, Không kèm thanh toán qua cổng online, mua kèm)</p></li>
                                <li><span>2</span><p>Hoàn 200,000đ cho chủ thẻ tín dụng HOME CREDIT khi thanh toán đơn hàng từ 5,000,000đ</p></li>
                                <li><span>3</span><p>Nhập mã VNPAYVATH giảm từ 50,000đ đến 200,000đ (Áp dụng tùy giá trị đơn hàng) khi thanh toán qua VNPAY-QR</p></li>
                                <li><span>4</span><p>Nhập mã VNPAYTAO giảm ngay 200K cho đơn hàng từ 15 Triệu, chỉ áp dụng thanh toán VNPAY-QR tại cửa hàng</p></li>
                                <li><span>5</span><p>Nhập mã ZLPIP15 giảm ngay 300K cho đơn hàng từ 20 Triệu, chỉ áp dụng thanh toán qua Ví ZALOPAY tại cửa hàng </p></li>
                            </div>
                            <div class="product-detail-show-bottom-right-khuyen-mai-bottom">
                                <li><span>(*)</span>Giá hoặc khuyến mãi không áp dụng trả góp lãi suất đặc biệt (0%, 0.5%, 1%, 1.5%, 2%)</li>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="product-detail-show-sp-khac">
                    <div class="product-detail-show-sp-khac-top">
                        <div class="product-detail-show-sp-khac-top-xemthem">
                            <h6>Xem thêm điện thoại</h6>
                            <a href="product.php">Xem tất cả <i class='bx bxs-right-arrow'></i></a>
                        </div>
                        
                        <div class="product-detail-show-sp-khac-top-phan-loai">
                            <a href='product.php?idtrade=1'>iPhone</a>
                            <a href='product.php?edtsearch=iPhone 15'>iPhone 15 (Plus, Pro, Pro Max)</a>
                            <a href='product.php?ram=8'>8 GB</a>
                            <a href='product.php?loaidt=ios'>iPhone (iOS)</a>
                            <a href='product.php?rom=128'>128 GB</a>
                        </div>
                    </div>
                    <div class="product-content-items">
                    <script>
                        let vitridl=[];
                        let demdl=[];
                        let chudl=[];
                    </script>
                        <?php

                            $spnb = $pro->getProductSlider(5);
    
                        $demo = 0;
                        $vitri = array();
                        $spgiab = array();
                        $giagiamsp = array();
                        $ptramgiamgia = array();
                        while($sp = $spnb -> fetch()){
                            $demo = $demo+1;
                        ?>
                     
                    <div class="product-content-item" onclick="window.location.href='product_detail.php?id=<?php echo $sp['id']?>';">
                    <form action="#" method="post">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="<?php echo '../img_main/'.$sp['img_main'] ?>" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="../image/icon-50x50-2.png" alt="">GIÁ RẺ QUÁ</li>
                            <li><a href="#"><?php echo $sp['tensp'] ?></a></li>
                            <li>
                                <a href="#">6.7"</a>
                                <a href="#">Super Retina XDR</a>
                            </li>
                            <li>
                                <?php
                                $vitri[$sp['id']]=1;
                                $spgiab[$sp['id']]= $sp['gia1'];
                                if($sp['dungluong1']!=""){
                                ?>
                                <input type="submit" name="dungluong1<?php echo $sp['id']?>" id="dungluong1<?php echo $sp['id']?>" class="active" value="<?php echo $sp['dungluong1'] ?>">
                                <?php
                                    if(isset($_POST['dungluong1'.$sp['id']])){
                                        $vitri[$sp['id']]=1;
                                        $spgiab[$sp['id']]= $sp['gia1'];
                                    }
                                }
                                if($sp['dungluong2']!=""){
                                ?>
                                <input type="submit" name="dungluong2<?php echo $sp['id']?>" id="dungluong2<?php echo $sp['id']?>" value="<?php echo $sp['dungluong2'] ?>">
                                <?php
                                    if(isset($_POST['dungluong2'.$sp['id']])){
                                        $vitri[$sp['id']]=2;
                                        $spgiab[$sp['id']]= $sp['gia2'];
                                    }
                                }
                                if($sp['dungluong3']!=""){
                                ?>
                                <input type="submit" name="dungluong3<?php echo $sp['id']?>" id="dungluong3<?php echo $sp['id']?>" value="<?php echo $sp['dungluong3'] ?>">
                                <?php
                                   if(isset($_POST['dungluong3'.$sp['id']])){
                                    $vitri[$sp['id']]=3;
                                    $spgiab[$sp['id']]= $sp['gia3'];
                                }
                                }
                                if($sp['dungluong4']!=""){
                                ?>
                                <input type="submit" name="dungluong4<?php echo $sp['id']?>" id="dungluong4<?php echo $sp['id']?>" value="<?php echo $sp['dungluong4'] ?>">
                                <?php
                                if(isset($_POST['dungluong4'.$sp['id']])){
                                    $vitri[$sp['id']]=4;
                                    $spgiab[$sp['id']]= $sp['gia4'];
                                }
                                }
                                ?>
                            </li>
                            
                            <?php 
                            
                            $giagiamsp[$sp['id']]=$spgiab[$sp['id']]+500000;
                            $ptramgiamgia[$sp['id']] = 100-(($spgiab[$sp['id']]/$giagiamsp[$sp['id']])*100);
                            ?>
                            <li><p><?php echo number_format($giagiamsp[$sp['id']],0,',','.') ?><sup>đ</sup></p><span>-<?php echo floor($ptramgiamgia[$sp['id']]) ?>%</span></li>
                            <li><?php echo number_format($spgiab[$sp['id']],0,',','.') ?><sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                            <script>
                                demdl[<?php echo $sp['id']?>] = document.querySelectorAll(".product-content-item:nth-child(<?php echo $demo ?>) .product-content-item-title li:nth-child(4) input");
                                vitridl[<?php echo $sp['id']?>] = <?php echo $vitri[$sp['id']]?>;
                                for(chudl[<?php echo $sp['id']?>] = 1;chudl[<?php echo $sp['id']?>]<=demdl[<?php echo $sp['id']?>].length;chudl[<?php echo $sp['id']?>]++){
                                    if(chudl[<?php echo $sp['id']?>]==vitridl[<?php echo $sp['id']?>]){
                                        document.querySelector(".product-content-item:nth-child(<?php echo $demo ?>) .product-content-item-title li:nth-child(4) input:nth-child("+chudl[<?php echo $sp['id']?>]+")").classList.add('active');
                                    }
                                    else{
                                        document.querySelector(".product-content-item:nth-child(<?php echo $demo ?>) .product-content-item-title li:nth-child(4) input:nth-child("+chudl[<?php echo $sp['id']?>]+")").classList.remove('active');
                                    }
                                }
                            </script>
                        </div>
                        
                    </form>
                    </div>
                    <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <script src="../js/pd_detail.js"></script>
<?php include('footer.php'); ?>