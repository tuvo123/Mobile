<?php
    include("hearder.php");
    // include("slidebar.php");
    $pro = new Product();
    
    if(isset($_GET['edtsearch'])){
        $tongsptk = $pro->demsearch($_GET['edtsearch']);
        $sotongsp=$tongsptk->fetch();
    }
    elseif(isset($_GET['idtrade'])){
        $tongsptk = $pro->demfiltetrademark($_GET['idtrade']);
        $sotongsp=$tongsptk->fetch();
    }
    elseif(isset($_GET['giabe'])&&isset($_GET['gialon'])){
        $tongsptk = $pro->demloctheogia($_GET['giabe'],$_GET['gialon']);
        $sotongsp=$tongsptk->fetch();
    }
    elseif(isset($_GET['ram'])){
        $tongsptk = $pro->demloctheoram($_GET['ram']);
        $sotongsp=$tongsptk->fetch();
    }
    elseif(isset($_GET['rom'])){
        $tongsptk = $pro->demloctheorom($_GET['rom']);
        $sotongsp=$tongsptk->fetch();
    }
    elseif(isset($_GET['loaidt'])){
        $tongsptk = $pro->demloctheoloaidt($_GET['loaidt']);
        $sotongsp=$tongsptk->fetch();
    }
    else{
        $tongsp = $pro->gettongsp();
        $sotongsp = $tongsp->fetch();
    }
    
    
?>
<section class="boloc">
        <div class="container">
            <div class="boloc-content">
                <div class="boloc-du-loai">
                    <li class="fiter-open"><i class='bx bx-filter-alt'></i> Bộ lọc</li>
                    <li id="bocloc-hang">Hãng <i class='bx bxs-down-arrow'></i>
                    
                    <div class="boloc-du-loai-hang">
                        <div class="muiten"></div>
                        <?php
                        for($dthoai = 1;$dthoai<10;$dthoai++){
                            $iphone = $pro->filtetrademark($dthoai);
                            $thuonghieu = $pro -> gettrademark($dthoai);
                            ?>
                        <a href="product.php?idtrade=<?php echo $dthoai ?>"><img src="../image/<?php while($qqqq = $thuonghieu->fetch()){ echo $qqqq['avatar'];} ?>" alt=""></a>
                        <?php } ?>
                        
    
                    </div>
                    </li>
                    <li id="boloc-gia">Giá <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-gia">
                            <div class="muiten"></div>
                            <a href="product.php?giabe=0&gialon=2000000">Dưới 2 triệu</a>
                            <a href="product.php?giabe=2000000&gialon=4000000">Từ 2 - 4 triệu</a>
                            <a href="product.php?giabe=4000000&gialon=7000000">Từ 4 - 7 triệu</a>
                            <a href="product.php?giabe=7000000&gialon=13000000">Từ 7 - 13 triệu</a>
                            <a href="product.php?giabe=13000000&gialon=20000000">Từ 13 - 20 triệu</a>
                            <a href="product.php?giabe=20000000&gialon=28000000">Từ 20 - 28 triệu</a>
                            <a href="product.php?giabe=28000000&gialon=50000000">Trên 28 triệu</a>
                        </div>
                    </li>
                    <li id="boloc-loai-dt">Loại điện thoại <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-dt">
                            <div class="muiten"></div>
                            <a href="product.php?loaidt=android"><div><img src="../img_main/oppo-a77s-den-thumb-1-2-600x600.jpg" alt=""></div><br>Android</a>
                            <a href="product.php?loaidt=ios"><div><img src="../img_main/iphone-14-pro-max-tim-thumb-600x600.jpg" alt=""></div><br>iPhone (iOS)</a>
                            <a href="product.php?loaidt=dtpt"><div><img src="../img_main/nokia-110-4g-blue-600x600.jpg" alt=""></div><br>Điện thoại phổ thông</a>
                        
                        </div>
                    </li>
                    <li id="boloc-ram">RAM <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-ram">
                            <div class="muiten"></div>
                            <a href="product.php?ram=2">2 GB</a>
                            <a href="product.php?ram=3">3 GB</a>
                            <a href="product.php?ram=4">4 GB</a>
                            <a href="product.php?ram=6">6 GB</a>
                            <a href="product.php?ram=8">8 GB</a>
                            <a href="product.php?ram=12">12 GB</a>
                        </div>
                    </li>
                    <li id="boloc-dung-luong">Dung lượng <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-dung-luong">
                            <div class="muiten"></div>
                            <a href="product.php?rom=32">32 GB</a>
                            <a href="product.php?rom=64">64 GB</a>
                            <a href="product.php?rom=128">128 GB</a>
                            <a href="product.php?rom=256">256 GB</a>
                            <a href="product.php?rom=512">512 GB</a>
                            <a href="product.php?rom=1">1 TB</a>
                        </div>
                    </li>
                </div>

                <div class="boloc-theo-hang">
                <?php
                        for($dthoai = 1;$dthoai<10;$dthoai++){
                            $iphone = $pro->filtetrademark($dthoai);
                            $thuonghieu = $pro -> gettrademark($dthoai);
                            ?>
                        <a href="product.php?idtrade=<?php echo $dthoai ?>"><img src="../image/<?php while($qqqq = $thuonghieu->fetch()){ echo $qqqq['avatar'];} ?>" alt=""></a>
                        <?php } ?>
                </div>
                <div class="boloc-bottom">
                    <div class="boloc-bottom-left">
                        <li><b><?php echo $sotongsp['tongsp'] ?> Điện thoại</b></li>
                    </div>
                    <div class="boloc-bottom-right">
                        <form action="#" method="post">
                        <select name="sapxepgia" id="sapxepgia" onchange="this.form.submit()">
                            <option value="giangaunhien" <?php if(isset($_POST['sapxepgia']) && $_POST['sapxepgia']=='giangaunhien'){unset($_SESSION['chonsapxepgia']);echo 'selected';}elseif(isset($_SESSION['chonsapxepgia'])&&$_SESSION['chonsapxepgia']=='giangaunhien'){echo 'selected';}?>>Giá ngẫu nhiên</option>
                            <option value="giacdt" <?php if(isset($_POST['sapxepgia']) && $_POST['sapxepgia']=='giacdt'){unset($_SESSION['chonsapxepgia']);echo 'selected';}elseif(isset($_SESSION['chonsapxepgia'])&&$_SESSION['chonsapxepgia']=='giacdt'){echo 'selected';}?>>Giá từ cao đến thấp</option>
                            <option value="giatdc" <?php if(isset($_POST['sapxepgia']) && $_POST['sapxepgia']=='giatdc'){unset($_SESSION['chonsapxepgia']);echo 'selected';}elseif(isset($_SESSION['chonsapxepgia'])&&$_SESSION['chonsapxepgia']=='giatdc'){echo 'selected';}?>>Giá từ thấp đến cao</option>
                        </select>
                        <?php 
                        if(isset($_POST['sapxepgia'])){
                            $sapxepgia = $_POST['sapxepgia'];
                            unset($_SESSION['chonsapxepgia']);
                            $_SESSION['chonsapxepgia'] = $sapxepgia;
                        }elseif(isset($_SESSION['chonsapxepgia'])){
                            $sapxepgia=$_SESSION['chonsapxepgia'];
                        }
                        else{
                            $sapxepgia='giangaunhien';
                        }
                        ?>
                    </form>
                    </div>
                </div>
            </div>
            <div class="bocloc-form">
                <div class="bocloc-form-content">
                    <div class="bocloc-form-content-dong">
                
                        <li id="filter-close">X Đóng</li>
                    </div>
                    <div class="bocloc-form-content-theo-hang">
                        <p>Hãng</p>
                        <div class="bocloc-form-content-theo-hang-cac-hang">
                        <?php
                        for($dthoai = 1;$dthoai<10;$dthoai++){
                            $iphone = $pro->filtetrademark($dthoai);
                            $thuonghieu = $pro -> gettrademark($dthoai);
                            ?>
                        <a href="product.php?idtrade=<?php echo $dthoai ?>"><img src="../image/<?php while($qqqq = $thuonghieu->fetch()){ echo $qqqq['avatar'];} ?>" alt=""></a>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="bocloc-form-content-loc-theo-loai">
                        <div class="bocloc-form-content-loc-theo-gia">
                            <p>Giá</p>
                            <div class="bocloc-form-content-loc-theo-gia-hien">
                                <a href="product.php?giabe=0&gialon=2000000">Dưới 2 triệu</a>
                                <a href="product.php?giabe=2000000&gialon=4000000">Từ 2 - 4 triệu</a>
                                <a href="product.php?giabe=4000000&gialon=7000000">Từ 4 - 7 triệu</a>
                                <a href="product.php?giabe=7000000&gialon=13000000">Từ 7 - 13 triệu</a>
                                <a href="product.php?giabe=13000000&gialon=20000000">Từ 13 - 20 triệu</a>
                                <a href="product.php?giabe=20000000&gialon=28000000">Từ 20 - 28 triệu</a>
                                <a href="product.php?giabe=28000000&gialon=50000000">Trên 28 triệu</a>
                            </div>
                        
                        </div>
                        <div class="bocloc-form-content-loc-theo-loai-dt">
                            <p>Loại điện thoại</p>
                            <div class="bocloc-form-content-loc-theo-loai-dt-img">
                                <a href="product.php?loaidt=android"><div><img src="../img_main/oppo-a77s-den-thumb-1-2-600x600.jpg" alt=""></div><br>Android</a>
                                <a href="product.php?loaidt=ios"><div><img src="../img_main/iphone-14-pro-max-tim-thumb-600x600.jpg" alt=""></div><br>iPhone (iOS)</a>
                                <a href="product.php?loaidt=dtpt"><div><img src="../img_main/nokia-110-4g-blue-600x600.jpg" alt=""></div><br>Điện thoại phổ thông</a>
                            
                            </div>
                            
                        </div>
                        <div class="bocloc-form-content-loc-theo-loai-dt">
                            <p>Dung lượng lưu trữ</p>
                            <div class="bocloc-form-content-loc-theo-loai-dt-img">
                                <a href="product.php?rom=32">32 GB</a>
                                <a href="product.php?rom=64">64 GB</a>
                                <a href="product.php?rom=128">128 GB</a>
                                <a href="product.php?rom=256">256 GB</a>
                                <a href="product.php?rom=512">512 GB</a>
                                <a href="product.php?rom=1">1 TB</a>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="bocloc-form-content-loc-theo-loai">
                        <div class="bocloc-form-content-loc-theo-gia">
                            <p>RAM</p>
                            <div class="bocloc-form-content-loc-theo-gia-hien">
                                <a href="product.php?ram=2">2 GB</a>
                                <a href="product.php?ram=3">3 GB</a>
                                <a href="product.php?ram=4">4 GB</a>
                                <a href="product.php?ram=6">6 GB</a>
                                <a href="product.php?ram=8">8 GB</a>
                                <a href="product.php?ram=12">12 GB</a>
                            </div>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="product-content">
                <?php if(isset($_GET['edtsearch'])){

                ?>
                <div class="thong-bao-sp">Sản phẩm được tìm kiếm: <span><?php echo $_GET['edtsearch'] ?></span></div>
                <?php

                }
                elseif(isset($_GET['idtrade'])){
                    $tenth=$pro->gettrademark($_GET['idtrade']);
                    $tenthuonghieu= $tenth->fetch();
                    ?>
                    <div class="thong-bao-sp">Sản phẩm thuộc hãng: <span><?php echo $tenthuonghieu['name'] ?></span></div>
                    <?php
                }elseif(isset($_GET['giabe'])&&isset($_GET['gialon'])){
                ?>
                <div class="thong-bao-sp">Sản phẩm được lọc theo giá từ: <span><?php echo number_format($_GET['giabe'],0,',','.') ?></span> đến <span><?php echo number_format($_GET['gialon'],0,',','.') ?></span></div>
                <?php
                }elseif(isset($_GET['ram'])){
                ?>
                <div class="thong-bao-sp">Sản phẩm được lọc theo ram: <span><?php echo $_GET['ram'].' GB' ?></span></div>
                <?php   
                }elseif(isset($_GET['loaidt'])){
                    if($_GET['loaidt']=='android'){
                        $tenloaidt='Android';
                    }elseif($_GET['loaidt']=='ios'){
                        $tenloaidt='iPhone (iOS)';
                    }else $tenloaidt="Điện thoại phổ thông";
                ?>
                <div class="thong-bao-sp">Sản phẩm được lọc theo loại điện thoại: <span><?php echo $tenloaidt ?></span></div>
                <?php
                }
                elseif(isset($_GET['rom'])){
                    ?>
                    <div class="thong-bao-sp">Sản phẩm được lọc theo dung lượng: <span><?php echo $_GET['rom'].' GB' ?></span></div>
                    <?php   
                    }
                ?>
                <script>
                    let vitridl=[];
                    let demdl=[];
                    let chudl=[];
                </script>
                <div class="product-content-items">
                    <?php 
                    $pro = new Product();
                    if(isset($_GET['edtsearch'])){
                        $search = $_GET['edtsearch'];
                        $result = $pro->search($search);
                    }
                    elseif(isset($_GET['idtrade'])){
                        $idtrade = $_GET['idtrade'];
                        $result = $pro->filtetrademark($idtrade);
                    }
                    elseif(isset($_GET['ram'])){
                        $ram = $_GET['ram'];
                        $result = $pro->loctheoram($ram);
                    }
                    elseif(isset($_GET['rom'])){
                        $rom = $_GET['rom'];
                        $result = $pro->loctheorom($rom);
                    }
                    elseif(isset($_GET['loaidt'])){
                        $loaidt = $_GET['loaidt'];
                        $result = $pro->loctheoloaidt($loaidt);
                    }
                    elseif(isset($_GET['giabe'])&&isset($_GET['gialon'])){
                        $giabe = $_GET['giabe'];
                        $gialon=$_GET['gialon'];
                        $result = $pro->loctheogia($giabe,$gialon);
                    }
                    else{
                        if(isset($_GET['pi'])){
                            $result = $pro->getProduct($_GET['pi'],$sapxepgia);
                            
                        }
                        else{
                            $result = $pro->getProduct(0,$sapxepgia);
                        }
                    }
                    $demo = 0;
                    $vitri = array();
                    $spgiab = array();
                    $giagiamsp = array();
                    $ptramgiamgia = array();
                    while($sp = $result -> fetch()){
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
                                <a href="#"><?php echo $sp['mahinhtrong'] ?></a>
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
    </section>
    <?php
        if(isset($_GET['pi'])){
            $pi=$_GET['pi']+1;
            
        }else{
            $pi=1;
        } $sotongspxt=$sotongsp['tongsp']-20-10*($pi-1);
        if($sotongspxt>0){
    ?>
    <section class="xemthem">
        <div class="container">
            <div class="xemthem-content">
                
                <a href="product.php?pi=<?php echo $pi ?>">Xem thêm <?php echo $sotongspxt ?> Điện thoại <i class='bx bxs-down-arrow' ></i></a>
            </div>
        </div>
    </section>
    <?php } ?>  
    <script src="../js/product.js"></script>
<?php include("footer.php"); ?>