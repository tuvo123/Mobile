@include('user.hearder')
<section class="order">
        <div class="container">
            <div class="order-content">
                <div class="left">
                    <li>Anh <b>Nguyễn Văn A</b></li>
                    <li><i class='bx bxs-detail'></i>Đơn hàng đã mua</li>
                    <li><i class='bx bxs-contact' ></i>Thông tin và số địa chỉ</li>
                    <li>Đăng xuất</li>
                </div>
                <div class="right">
                    <div class="lich-su">
                        <li>Đơn hàng đã mua</li>
                        <li>Từ 07/12/2022 - 07/12/2023</li>
                    </div>
                    <div class="donhang">
                        <div class="top">
                            <li><b>Đơn hàng: </b> #01263</li>
                            <li>Đã nhận hàng</li>
                        </div>
                        <div class="bottom">
                            <div class="bottom-left">
                                <li><img src="{{asset('frontend/img_main/xiaomi-redmi-12-bac-thumb-600x600.jpg')}}" alt=""></li>
                                <li>Xiaomi Redmi Note 12 (6+128G) Bạc</li>
                            </div>
                            <div class="bottom-right">
                                <li>Tổng tiền: <span>4.990.000 <sup>đ</sup></span></li>
                                <li>Xem chi tiết</li>
                            </div>
                        </div>
                    </div>
                    <div class="donhang">
                        <div class="top">
                            <li><b>Đơn hàng: </b> #323445</li>
                            <li>Đã nhận hàng</li>
                        </div>
                        <div class="bottom">
                            <div class="bottom-left">
                                <li><img src="{{asset('frontend/img_main/iphone-15-pro-blue-thumbnew-600x600.jpg')}}" alt=""></li>
                                <li>iPhone 15 Pro (6+256G) Titan xanh</li>
                            </div>
                            <div class="bottom-right">
                                <li>Tổng tiền: <span>28.990.000 <sup>đ</sup></span></li>
                                <li>Xem chi tiết</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('user.footer')