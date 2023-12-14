@include('user.hearder')
@include('user.slidebar')
<section class="boloc">
        <div class="container">
            <div class="boloc-content">
                <div class="boloc-du-loai">
                    <li class="fiter-open"><i class='bx bx-filter-alt'></i> Bộ lọc</li>
                    <li id="bocloc-hang">Hãng <i class='bx bxs-down-arrow'></i>
                    
                    <div class="boloc-du-loai-hang">
                        <div class="muiten"></div>
                        <a href=""><img src="{{asset('frontend/image/logo-iphone-220x48.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/samsungnew-220x48-1.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/OPPO42-b_5.jpg')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/logo-xiaomi-220x48-5.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/vivo-logo-220-220x48-3.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/Realme42-b_37.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/Nokia42-b_21.jpg')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/Masstel42-b_0.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/Mobell42-b_19.jpg')}}" alt=""></a>
                        <a href=""><img src="{{asset('frontend/image/Itel42-b_54.jpg')}}" alt=""></a>
    
                    </div>
                    </li>
                    <li id="boloc-gia">Giá <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-gia">
                            <div class="muiten"></div>
                            <a href="">Dưới 2 triệu</a>
                            <a href="">Từ 2 - 4 triệu</a>
                            <a href="">Từ 4 - 7 triệu</a>
                            <a href="">Từ 7 - 13 triệu</a>
                            <a href="">Từ 13 - 20 triệu</a>
                            <a href="">Trên 20 triệu</a>
                        </div>
                    </li>
                    <li id="boloc-loai-dt">Loại điện thoại <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-dt">
                            <div class="muiten"></div>
                            <a href=""><div><img src="{{asset('frontend/img_main/oppo-a77s-den-thumb-1-2-600x600.jpg')}}" alt=""></div><br>Android</a>
                            <a href=""><div><img src="{{asset('frontend/img_main/iphone-14-pro-max-tim-thumb-600x600.jpg')}}" alt=""></div><br>iPhone (iOS)</a>
                            <a href=""><div><img src="{{asset('frontend/img_main/nokia-110-4g-blue-600x600.jpg')}}" alt=""></div><br>Điện thoại phổ thông</a>
                        
                        </div>
                    </li>
                    <li id="boloc-nhu-cau">Nhu cầu <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-nhu-cau">
                                <div class="muiten"></div>
                                <a href="">Chơi game / Cấu hình cao</a>
                                <a href="">Pin khủng trên 5000 mAh</a>
                                <a href="">Chụp ảnh, quay phim</a>
                                <a href="">Livestream</a>
                                <a href="">Mỏng nhẹ</a>
                            </div>
                        
                    </li>
                    <li id="boloc-ram">RAM <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-ram">
                            <div class="muiten"></div>
                            <a href="">2 GB</a>
                            <a href="">3 GB</a>
                            <a href="">4 GB</a>
                            <a href="">6 GB</a>
                            <a href="">8 GB</a>
                            <a href="">12 GB</a>
                        </div>
                    </li>
                    <li id="boloc-dung-luong">Dung lượng <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-dung-luong">
                            <div class="muiten"></div>
                            <a href="">32 GB</a>
                            <a href="">64 GB</a>
                            <a href="">128 GB</a>
                            <a href="">256 GB</a>
                            <a href="">512 GB</a>
                            <a href="">1 TB</a>
                        </div>
                    </li>
                    <li id="boloc-tc-sac">Tính năng sạc <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-tc-sac">
                            <div class="muiten"></div>
                            <a href="">Sạc nhanh (từ 20W)</a>
                            <a href="">Sạc siêu nhanh (từ 60W)</a>
                            <a href="">Sạc không dây</a>
                        </div>
                    </li>
                    <li id="boloc-tn-db">Tính năng đặc biệt <i class='bx bxs-down-arrow'></i>
                        <div class="boloc-du-loai-tn-db">
                            <div class="muiten"></div>
                            <a href="">Kháng nước, bụi</a>
                            <a href="">Hỗ trợ 5G</a>
                            <a href="">Bảo mật khuôn mặt</a>
                        </div>
                    </li>
                </div>

                <div class="boloc-theo-hang">
                    <a href="#"><img src="{{asset('frontend/image/logo-iphone-220x48.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/samsungnew-220x48-1.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/OPPO42-b_5.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/logo-xiaomi-220x48-5.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/vivo-logo-220-220x48-3.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/Realme42-b_37.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/Nokia42-b_21.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/Masstel42-b_0.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/Mobell42-b_19.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('frontend/image/Itel42-b_54.jpg')}}" alt=""></a>
                </div>
                <h6>Chọn điện thoại theo nhu cầu</h6>
                <div class="boloc-theo-nhu-cau">
                    <li>Chơi game / Cấu hình cao</li>
                    <li>Pin khủng trên 5000 mAh</li>
                    <li>Chụp ảnh, quay phim</li>
                    <li>Livestream</li>
                    <li>Mỏng nhẹ</li>
                </div>
                <div class="boloc-bottom">
                    <div class="boloc-bottom-left">
                        <li><b>103 Điện thoại</b></li>
                        <li><input type="checkbox" name="" id=""> <img src="{{asset('frontend/image/icon-thunder.png')}}" alt="">GIAO NHANH</li>
                        <li><input type="checkbox" name="" id=""> Giảm giá</li>
                        <li><input type="checkbox"> Góp 0% - 1%</li>
                        <li><input type="checkbox"> Đặc quyền tại Thế giới di động</li>
                        <li><input type="checkbox"> Mới</li>
                    </div>
                    <div class="boloc-bottom-right">
                        <select name="" id="">
                            <option value="">Xếp theo: Nổi bật</option>
                            <option value="">% Giảm</option>
                            <option value="">Giá từ cao đến thấp</option>
                            <option value="">Giá từ thấp đến cao</option>
                        </select>
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
                            <a href=""><img src="{{asset('frontend/image/logo-iphone-220x48.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/samsungnew-220x48-1.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/OPPO42-b_5.jpg')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/logo-xiaomi-220x48-5.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/vivo-logo-220-220x48-3.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/Realme42-b_37.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/Nokia42-b_21.jpg')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/Masstel42-b_0.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/Mobell42-b_19.jpg')}}" alt=""></a>
                            <a href=""><img src="{{asset('frontend/image/Itel42-b_54.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="bocloc-form-content-loc-theo-loai">
                        <div class="bocloc-form-content-loc-theo-gia">
                            <p>Giá</p>
                            <div class="bocloc-form-content-loc-theo-gia-hien">
                                <li>Dưới 2 triệu</li>
                                <li>Từ 2 - 4 triệu</li>
                                <li>Từ 4 - 7 triệu</li>
                                <li>Từ 7 - 13 triệu</li>
                                <li>Từ 13 - 20 triệu</li>
                                <li>Trên 20 triệu</li>
                            </div>
                        
                        </div>
                        <div class="bocloc-form-content-loc-theo-loai-dt">
                            <p>Loại điện thoại</p>
                            <div class="bocloc-form-content-loc-theo-loai-dt-img">
                                <li><img src="{{asset('frontend/img_main/oppo-a77s-den-thumb-1-2-600x600.jpg')}}" alt=""><br>Android</li>
                                <li><img src="{{asset('frontend/img_main/iphone-14-pro-max-tim-thumb-600x600.jpg')}}" alt=""><br>iPhone (iOS)</li>
                                <li><img src="{{asset('frontend/img_main/nokia-110-4g-blue-600x600.jpg')}}" alt=""><br>Điện thoại phổ thông</li>
            
                            </div>
                            
                        </div>
                        <div class="bocloc-form-content-loc-theo-nhu-cau">
                            <p>Theo nhu cầu</p>
                            <div class="bocloc-form-content-loc-theo-nhu-cau-container">
                                <li>Chơi game / Cấu hình cao</li>
                                <li>Pin khủng trên 5000 mAh</li>
                                <li>Chụp ảnh, quay phim</li>
                                <li>Livestream</li>
                                <li>Mỏng nhẹ</li>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="bocloc-form-content-loc-theo-loai">
                        <div class="bocloc-form-content-loc-theo-gia">
                            <p>RAM</p>
                            <div class="bocloc-form-content-loc-theo-gia-hien">
                                <li>2 GB</li>
                                <li>3 GB</li>
                                <li>4 GB</li>
                                <li>6 GB</li>
                                <li>8 GB</li>
                                <li>12 GB</li>
                            </div>
                        
                        </div>
                        <div class="bocloc-form-content-loc-theo-loai-dt">
                            <p>Dung lượng lưu trữ</p>
                            <div class="bocloc-form-content-loc-theo-loai-dt-img">
                                <li>32 GB</li>
                                <li>64 GB</li>
                                <li>128 GB</li>
                                <li>256 GB</li>
                                <li>512 GB</li>
                                <li>1 TB</li>
                            </div>
                            
                        </div>
                        <div class="bocloc-form-content-loc-theo-nhu-cau">
                            <p>Tinh năng sạc</p>
                            <div class="bocloc-form-content-loc-theo-nhu-cau-container">
                                <li>Sạc nhanh (từ 20W)</li>
                                <li>Sạc siêu nhanh (từ 60W)</li>
                                <li>Sạc không dây</li>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="bocloc-form-content-loc-theo-loai">
                        <div class="bocloc-form-content-loc-theo-gia">
                            <p>RAM</p>
                            <div class="bocloc-form-content-loc-theo-gia-hien">
                                <li>Kháng nước, bụi</li>
                                <li>Hỗ trợ 5G</li>
                                <li>Bảo mật khuôn mặt</li>
                                
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
                <div class="product-content-items">
                    @foreach($loadsp as $sp)
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/'.$sp->img_main)}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li><a href="/user/product_detail">{{$sp->tensp}}</a></li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <?php
                                if($sp->dungluong1!=""){
                                ?>
                                <a href="" class="active">{{$sp->dungluong1}}</a>
                                <?php
                                }
                                if($sp->dungluong2!=""){
                                ?>
                                <a href="">{{$sp->dungluong2}}</a>
                                <?php
                                }
                                if($sp->dungluong3!=""){
                                ?>
                                <a href="">{{$sp->dungluong3}}</a>
                                <?php
                                }
                                if($sp->dungluong4!=""){
                                ?>
                                <a href="">{{$sp->dungluong4}}</a>
                                <?php
                                }
                                ?>
                            </li>
                            <li><p>{{$sp->gia1}}<sup>đ</sup></p><span>-2%</span></li>
                            <li>{{$sp->gia1}}<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/oppo-find-x5-pro-trang-thumb-1-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Oppo Find X5 Pro</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>12.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>12.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/realme-11-pro-5g-green-thumb-1-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Realme 11 Pro</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>10.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>10.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/xiaomi-redmi-note-12-vang-1-thumb-momo-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Xiaomi Redmi Note 12</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>7.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>7.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/samsung-galaxy-a24-black-thumb-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Samsung Galaxy A24</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>8.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>8.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/iphone-15-pro-blue-thumbnew-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>iPhone 15 Pro</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>28.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>28.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/oppo-reno10-blue-thumbnew-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Oppo Reno 10</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>9.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>9.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/xiaomi-redmi-note-12-8gb-256gb.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Xiaomi Redmi Note 12</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>5.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>5.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/itel-it9010-thumb-1-2-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Itel It9010</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>2.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>2.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/vivo-y36-xanh-thumbnew-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Vivo Y36</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>7.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>7.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/vivo-y16-vang-thumb-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Vivo Y16</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>6.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>6.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/xiaomi-redmi-12-pro-4g-xanh-thumb-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Xiaomi Redmi 12 Pro</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>10.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>10.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/samsung-galaxy-a04-thumb-xanh-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Samsung Galaxy A04</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>6.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>6.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/oppo-reno10-pro-grey-thumbnew-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Oppo Reno10 Pro</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>10.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>10.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/nokia-215-xanh-ngoc-new-600x600-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Nokia 215</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>2.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>2.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/realme-c35-vang-thumb-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Realme C35</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>5.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>5.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/oppo-reno10-blue-thumbnew-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Oppo Reno10</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>8.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>8.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/iPhone-14-thumb-tim-1-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>iPhone 14</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>16.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>16.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/masstel-izi-10-4g-xanh-thumb-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Masstel Izi 10</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>4.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>4.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div>
                    </div>
                    <div class="product-content-item">
                        <div class="product-content-item-uu-dai">
                            <a href="">Trả góp 0%</a>
                        </div>
                        <div class="product-content-item-img">
                            <img src="{{asset('frontend/img_main/Galaxy-S22-Ultra-Burgundy-600x600.jpg')}}" alt="">
                        </div>
                        <div class="product-content-item-title">
                            <li><img src="{{asset('frontend/image/icon-50x50-2.png')}}" alt="">GIÁ RẺ QUÁ</li>
                            <li>Samsung Galaxy S22 Ultra</li>
                            <li>
                                <a href="">6.7"</a>
                                <a href="">Super Retina XDR</a>
                            </li>
                            <li>
                                <a href="" class="active">256GB</a>
                                <a href="">512GB</a>
                                <a href="">1TB</a>
                            </li>
                            <li><p>15.999.000<sup>đ</sup></p><span>-2%</span></li>
                            <li>15.290.000<sup>đ</sup></li>
                            <li>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                            </li>
                        </div> 
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="xemthem">
        <div class="container">
            <div class="xemthem-content">
                <a href="">Xem thêm 83 Điện thoại <i class='bx bxs-down-arrow' ></i></a>
            </div>
        </div>
    </section>
@include('user.footer')