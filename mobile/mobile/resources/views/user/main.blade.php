@include('user.hearder')

<!-- SliderBar -->
@include('user.slidebar')
    <section class="slider-product-one">
        <div class="container">
            <div class="slider-product-one-content">
                <div class="slider-product-one-content-title">
                    <h2>Săn Sale Online Mỗi Ngày</h2>
                </div>
                <div class="slider-product-one-content-container">
                    <div class="slider-product-one-content-items-content">

                        <div class="slider-product-one-content-items">
                        @foreach ($loadSaleProductIP as $loadSalePro)
                            <div class="slider-product-one-content-item">
                                <img src="{{asset('frontend/img_main/'.$loadSalePro->image)}}" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="{{asset('frontend/image/icon.png')}}" alt=""><p>Trợ giá mùa dịch</p></li>
                                    <li>{{$loadSalePro->tensp}}</li>
                                    <li>Online giá rẻ</li>
                                    <li><p>{{ number_format(intval($loadSalePro->gia2), 0, ',', '.') }}<sup>đ</sup></p><span>-6%</span> </li>
                                    <li>{{ number_format(intval($loadSalePro->gia1), 0, ',', '.') }}<sup>đ</sup></li>
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
                            @endforeach
                        </div>

                        <div class="slider-product-one-content-items">
                            @foreach ($loadSaleProductDesc as $loadSaleProductDesc)
                            <div class="slider-product-one-content-item">
                                <img src="{{asset('frontend/img_main/'.$loadSaleProductDesc->image)}}" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="{{asset('frontend/image/icon.png')}}" alt=""><p>Trợ giá mùa dịch</p></li>
                                    <li>{{$loadSaleProductDesc->tensp}}</li>
                                    <li>Online giá rẻ</li>
                                    <li><p>{{number_format(intval($loadSaleProductDesc->gia2), 0, ',', '.')}}<sup>đ</sup></p><span>-6%</span></li>
                                    <li>{{number_format(intval($loadSaleProductDesc->gia1), 0, ',', '.')}}<sup>đ</sup></li>
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
                            @endforeach
                        </div>

                        <div class="slider-product-one-content-items">
                            @foreach ($loadSaleProduct as $loadSaleProduct)
                            <div class="slider-product-one-content-item">
                                <img src="{{asset('frontend/img_main/'.$loadSaleProduct->image)}}" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="{{asset('frontend/image/icon.png')}}" alt=""><p>Trợ giá mùa dịch</p></li>
                                    <li>{{$loadSaleProduct->tensp}}</li>
                                    <li>Online giá rẻ</li>
                                    <li><p>{{number_format(intval($loadSaleProduct->gia2), 0,',', '.')}}<sup>đ</sup></p><span>-6%</span></li>
                                    <li>{{number_format(intval($loadSaleProduct->gia1), 0,',', '.')}}<sup>đ</sup></li>
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
                            @endforeach
                        </div>
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
                    @foreach ($loadPro as $pro)
                    <div class="product-gallery-one-content-product-items">
                        <img src="{{asset('frontend/img_main/'.$pro->image)}}" alt="">
                        <div class="product-gallery-one-content-product-item-text">
                            <li><img src="{{asset('frontend/image/icon.png')}}" alt=""><p>Trợ giá mùa dịch</p></li>
                            <li>{{$pro->tensp}}</li>
                            <li>Online giá rẻ</li>
                            <li><p>{{number_format(intval($pro->gia2),0,',','.') }}<sup>đ</sup></p><span>-6%</span></li>
                            <li>{{number_format(intval($pro->gia1),0,',','.') }}<sup>đ</sup></li>
                            <li>{{$pro->baohanh}}<sup></sup></li>
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
                   
                </div>
            </div>
        </div>
    </section>
    <section class="product-gallery-two">
        <div class="container">
            <div class="product-gallery-two-content">
                <div class="product-gallery-two-content-right">
                    <img src="{{asset('frontend/image/MHD-1920x570.png')}}" alt="">
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
                        @foreach ($loadProductEnd as $loadProductEnd)
                        <div class="product-gallery-two-content-left-bottom-item">
                            <img src="{{asset('frontend/img_main/'.$loadProductEnd->image)}}" alt="">
                            <div class="product-gallery-two-content-left-bottom-item-text">
                                <li>Ưu đãi khủng</li>
                                <li>{{$loadProductEnd->tensp}}</li>
                                <li>{{$loadProductEnd->dungluong1}}</li>
                                <li>{{number_format(intval($loadProductEnd->gia1),0,',','.')}}<sup>đ</sup></li>
                                <li>{{$loadProductEnd->baohanh}}</li>
                            </div>
                        </div>
                        @endforeach
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
                            <img src="{{asset('frontend/image/news1.png')}}" alt="">
                            <p>Mua điện thoại Xiaomi chưa tới 7 triệu mà còn được giảm thêm đến 1.2 triệu đồng, xem ngay</p>
                        </li>
                        <li>
                            <img src="{{asset('frontend/image/news2.png')}}" alt="">
                            <p>Mua điện thoại Xiaomi chưa tới 7 triệu mà còn được giảm thêm đến 1.2 triệu đồng, xem ngay</p>
                        </li>
                        <li>
                            <img src="{{asset('frontend/image/news3.png')}}" alt="">
                            <p>Mua điện thoại Xiaomi chưa tới 7 triệu mà còn được giảm thêm đến 1.2 triệu đồng, xem ngay</p>
                        </li>
                    </div>
                </div>
                <div class="tintuc-content-right">
                    <img src="{{asset('frontend/image/news4.png')}}" alt="">
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
                                <img src="{{asset('frontend/image/th1.png')}}" alt="">
                            </div>
                            <div class="thuong-hieu-content-slider-img">
                                <img src="{{asset('frontend/image/th2.png')}}" alt="">
                            </div>
                            <div class="thuong-hieu-content-slider-img">
                                <img src="{{asset('frontend/image/th3.png')}}" alt="">
                            </div>
                            <div class="thuong-hieu-content-slider-img">
                                <img src="{{asset('frontend/image/th4.png')}}" alt="">
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
                                    <img src="{{asset('frontend/image/chuoideal1.png')}}" alt="">
                                </div>
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="{{asset('frontend/image/chuoideal2.png')}}" alt="">
                                </div>
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="{{asset('frontend/image/chuoideal3.png')}}" alt="">
                                </div>                
                            </div>
                            <div class="chuoi-deal-content-slider-imgs">                            
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="{{asset('frontend/image/chuoideal4.png')}}" alt="">
                                </div>
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="{{asset('frontend/image/chuoideal5.png')}}" alt="">
                                </div>
                                <div class="chuoi-deal-content-slider-img">
                                    <img src="{{asset('frontend/image/chuoideal6.png')}}" alt="">
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
                    <li>iphone 15</li>
                    <li>iphone 15 128gb</li>
                    <li>inphone 15 plus</li>
                    <li>iphone 15 pro max</li>
                    <li>bàn phím máy tính</li>
                    <li>loa jbl</li>
                    <li>airtag</li>
                    <li>lg gram</li>
                    <li>đồng hồ lacoste</li>
                    <li>laptop đồ họa</li>
                    <li>phụ kiện samsung</li>
                    <li>đồng hồ quartz</li>
                    <li>đồng hồ thông minh chống nước</li>
                    <li>macbook</li>
                    <li>rog</li>
                    <li>orient star</li>
                    <li>samsung tabs</li>
                    <li>máy in brother</li>
                    <li>khóa cửa điện tử</li>
                    <li>đồng hồ mặt vuông</li>
                    <li>màn hình asus</li>
                    <li>mac air</li>
                    <li>Oppo Find N3</li>
                    <li>Oppo find N3 Flip</li>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
   @include('user.footer')