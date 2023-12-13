<?php
use Illuminate\Support\Facades\Session;
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thế giới di động</title>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/product_detail.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/product.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/order.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/pay.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <img src="{{asset('frontend/image/hinh1.png')}}" alt="" srcset="">
    </header>
    <div>

    <!-- Thông báo đăng ký thành công -->
                      <?php
                            $massege = Session::get('message');
                            if($massege){
                               echo "<span class='text-alert' style='color:blue; text-align: center; width:100%;'>$massege</span>";
                                Session::put('message', null);
                            }
                            ?>
    </div>
    <nav>
        <div class="container">
            <ul>
                <li><a href="/user/main"><img style="width: 90px;" src="{{asset('frontend/image/logoVath.png')}}" alt="" srcset=""></a></li>
                <li id="adress-form"><a href="#">Đà Nẵng<i class='bx bxs-down-arrow'></i></a> 
                </li>
                <li><input type="text" placeholder="Bạn tìm gì..."><i class='bx bx-search-alt-2' ></i></li>
                <li><a href="/user/cart"><button><i class='bx bx-cart'></i>Giỏ hàng</button></a></li>
                <li><a href="/user/order">Lịch sử<br>đơn hàng</a></li>
                <li><a href=""><span class="btn-content"><span class="btn-top"></span></span>Mua thẻ nạp ngay!</a></li>
                <li><a href="">24h Công nghệ</a></li>
                <li><a href="">Hỏi đáp</a></li>
                <?php
                $check_login = intval(Session::get('status')) ;
                if($check_login == 1){
                ?>
                <li class="trang-thai-dang-nhap" style="display:block;"><a class="chinh-sua-user" href="#"><img src="{{asset('frontend/image/download.jpg')}}" alt=""></a>
                <div class="formuser">
                    <div class="formuser-top">
                        <div class="formuser-top-img">
                            <div class="formuser-top-img-edit">
                                 <img src="{{asset('frontend/image/download.jpg')}}" alt="">
                            </div>
                           
                            
                        </div>
                        <div class="formuser-top-file">
                            
                            <input type="file" name="addanh" id="addanh" style="display: none;">
                            <label for="addanh">
                                <i class='bx bxs-pencil'></i>
                            </label>
                        </div>
                    </div>
                    <div class="formuser-bottom">
                        <span><div class="ttincanhan-left">
                            Họ và tên:
                        </div>
                        <div class="ttincanhan-right">
                            Nguyễn Văn B
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Tên TK:
                        </div>
                        <div class="ttincanhan-right">
                            nguyenvanb
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Số ĐT:
                        </div>
                        <div class="ttincanhan-right">
                            0123456789
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Email:
                        </div>
                        <div class="ttincanhan-right">
                            nguyenvanb@gmail.com
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Địa chỉ:
                        </div>
                        <div class="ttincanhan-right">
                            Vườn Lài, Tân Phú, TP.Hồ Chí Minh
                        </div> </span>

                    </div>
                    <div class="formuser-edit">
                        <span><div class="ttincanhan-left">
                            Họ và tên:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập tên">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Tên TK:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập tên tài khoản">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Số ĐT:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập số ĐT">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Email:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập Email">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Địa chỉ:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập địa chỉ">
                        </div> </span>

                    </div>
                    <div class="formuser-edit-password">
                        <span><div class="ttincanhan-left">
                            Nhập mật khẩu cũ:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="password" placeholder="Nhập MK cũ">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Nhập mật khẩu mới:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="password" placeholder="Nhập MK mới">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Nhập lại mật khẩu:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="password" placeholder="Nhập lại MK">
                        </div> </span>                        
                    </div>
                    <div class="formuse-dangxuat">
                        <span class="chinh-sua-tk"><i class='bx bx-edit-alt'></i><div class="thongbao-user">Chỉnh sửa thông tin</div></span>
                        <span class="chinh-sua-mk"><i class='bx bx-key'></i><div class="thongbao-user">Đổi mật khẩu</div></span>
                        <span class="chinh-sua-ql"><i class='bx bx-arrow-back'></i><div class="thongbao-user">Quay lại</div></span>
                        <span class="chinh-sua-luu"><i class='bx bxs-save'></i><div class="thongbao-user">Lưu thay đổi</div></span>
                        <span class="chuyen-admin"><i class='bx bxs-user-circle'></i><div class="thongbao-user">Chuyển sang admin</div></span>
                        <span class="dang-xuat"><i class='bx bx-log-out'></i><div class="thongbao-user">Đăng xuất</div></span>

                    </div>
                </div>
                </li>
                <?php
                }
                ?>

                <!-- Đăng nhập -->
                <li id="btn-dangnhap"><a href="#">Đăng nhập</a></li>
                <?php
                
                ?>
                <div class="form-dang-nhap">
                    <div class="form-dang-nhap-content">
                        <div class="form-dang-nhap-content-dong">Đóng</div>
                        <h2>Đăng nhập</h2>
                        <form action="{{URL::to('dang-nhap')}}" method="post">
             
                            <div class="input-container">
                            <i class='bx bxs-envelope'></i>
                                <input type="email" placeholder="Email" name="email" required>
                            </div>

                            <div class="input-container">
                            <i class='bx bxs-lock'></i>
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                            <a href="#">Quên mật khẩu</a>

                            <button type="submit" class="login-btn">Đăng nhập</button>

                            <div class="no-account">
                                <label>Bạn chưa có tài khoản? </label>
                                <a href="#" id="btn-dang-ki">Đăng ký</a><br>
                            </div>
                            @csrf
                        </form>
                    </div>
                    <div class="form-dang-ki-content">
                        <div class="form-dang-ki-content-dong">Đóng</div>
                        <h2>Đăng kí</h2>
                        
                        <form action="{{URL::to('dang-ky')}}" method="post">
                     
                            <div class="input-container">
                            <i class='bx bxs-user-circle'></i>
                                <input type="text" placeholder="Họ và tên" name="fullname" required>
                            </div>
                            <div class="input-container">
                                <i class='bx bxs-user-circle'></i>
                                    <input type="text" placeholder="Tên tài khoản" name="useranme" required>
                                </div>
                            <div class="input-container">
                            <i class='bx bxs-envelope'></i>
                                <input type="email" placeholder="Email" name="email" required>
                            </div>

                            <div class="input-container">
                            <i class='bx bxs-lock'></i>
                                <input type="password" placeholder="Mật khẩu" name="password" required>
                            <!-- <i class='bx bx-low-vision'></i> -->
                            </div>

                            <div class="input-container">
                            <i class='bx bxs-phone'></i>
                                <input type="tel" placeholder="Số điện thoại" name="sdt" required>
                            </div>

                            

                            <div class="input-container">
                            <i class='bx bxs-home'></i>
                                <input type="text" placeholder="Địa chỉ" name="diachi" required>
                            </div>
                        
                            
                            @csrf
                            <button type="submit" class="registration-btn">Đăng ký</button>
                            
                        </form>
                    </div>
                </div>
                <div class="adress-form">
                    <div class="adress-form-content">
                        <h2>Chọn địa chỉ nhận hàng <span id="adress-close">X Đóng</span></h2>
                        <form action="">
                            <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian</p>
                            <select name="a">
                                <option value="#">--Chọn địa điểm</option>
                                <option value="#">Đà Nẵng</option>
                            </select>
                            <select name="ac">
                                <option value="#">--Chọn Quận/Huyện</option>
                                <option value="#">Đà Nẵng</option>
                            </select>
                            <select name="ab">
                                <option value="#">--Chọn Phường/Xã</option>
                                <option value="#">Đà Nẵng</option>
                            </select>
                            <input type="text" placeholder="Số nhà, Tên đường">
                            <button>Xác nhận</button>
                        </form>
                    </div>
                </div>
            </ul>
        </div>
        
    </nav>
    <section class="menu-bar">
        <div class="container">
            <div class="menu-bar-content">
                <ul>
                    <li><a href="/user/product"><i class='bx bx-mobile'></i>Điện thoại</a></li>
                    <li>
                        <a href=""><img src="{{asset('frontend/image/logo-iphone-220x48.png')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                                <ul>
                                    <li><a href="#">Iphone 15 Pro Max</a></li>
                                    <li><a href="#">Iphone 15 Pro</a></li>
                                    <li><a href="#">Iphone 15 Plus</a></li>
                                    <li><a href="#">Iphone 15 </a></li>
                                    <li><a href="#">Iphone 14 Pro Max</a></li>
                                    <li><a href="#">Iphone 14 Pro</a></li>
                                    <li><a href="#">Iphone 12 Pro Max</a></li>
                                    <li><a href="#">Iphone 12 Plus</a></li>
                                    <li><a href="#">Iphone 11 Pro Max</a></li>
                                    <li><a href="#">Iphone 11</a></li>
                                </ul>
                            </div>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('frontend/image/samsungnew-220x48-1.png')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Samsung Galaxy A23 6GB</a></li>
                                <li><a href="#">Samsung Galaxy A04</a></li>
                                <li><a href="#">Samsung Galaxy A13</a></li>
                                <li><a href="#">Samsung Galaxy A53 5G 128GB</a></li>
                                <li><a href="#">Samsung Galaxy A73 5G 128GB</a></li>
                                <li><a href="#">Samsung Galaxy S20 FE (8GB/256GB)</a></li>                                
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('frontend/image/logo-xiaomi-220x48-5.png')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#"> Điện thoại POCO C40</a></li>
                                <li><a href="#">Xiaomi Redmi Note 11 (6GB/128GB)</a></li>
                                <li><a href="#">Xiaomi Redmi Note 11S 5G</a></li>
                                <li><a href="#">Xiaomi Redmi 10 (2022)</a></li>
</ul>
                        </div>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('frontend/image/vivo-logo-220-220x48-3.png')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Vivo Y12s (2021) (3GB/32GB)</a></li>
                                <li><a href="#">Vivo Y12s (4GB/128GB)</a></li>
                                <li><a href="#">Vivo Y21</a></li>
                                <li><a href="#">Vivo Y53s</a></li>
                                <li><a href="#">Vivo V21 5G</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('frontend/image/OPPO42-b_5.jpg')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">OPPO Reno8 5G</a></li>
                                <li><a href="#">OPPO Reno8</a></li>
                                <li><a href="#">OPPO A96</a></li>
                                <li><a href="#">OPPO A57 128GB</a></li>
                                <li><a href="#">OPPO A17</a></li>
                                <li><a href="#">OPPO Reno8 Z 5G</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href=""><img src="{{asset('frontend/image/Realme42-b_37.png')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">realme C30s (2GB/32GB)</a></li>
                                <li><a href="#">realme C55 6GB</a></li>
                                <li><a href="#"> realme C53 (6GB/128GB)</a></li>
                                <li><a href="#">realme Series C</a></li>
                                <li><a href="#">realme Series 9</a></li>
                                <li><a href="#">realme Series 8</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('frontend/image/Mobell42-b_19.jpg')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Mobell S37Phụ kiện A</a></li>
                                <li><a href="#">Mobell S40</a></li>
                                <li><a href="#">Mobell S61</a></li>
                                <li><a href="#">Mobell Rock 3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('frontend/image/Masstel42-b_0.png')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Masstel PLAY</a></li>
                                <li><a href="#">Masstel FAMI</a></li>
                                <li><a href="#">Masstel IZI</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=""><img src="{{asset('frontend/image/Nokia42-b_21.jpg')}}" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Nokia G11 Plus</a></li>
                                <li><a href="#">Nokia G11 Plus</a></li>
                                <li><a href="#">Nokia C31</a></li>
                                <li><a href="#">Phụ kiện D</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>