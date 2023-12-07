<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thế giới di động</title>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <img src="{{asset('frontend/image/hinh1.png')}}" alt="" srcset="">
    </header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#"><img style="width: 150px;" src="{{asset('frontend/image/logo1.png')}}" alt="" srcset=""></a></li>
                <li id="adress-form"><a href="#">Đà Nẵng<i class='bx bxs-down-arrow'></i></a> 
                </li>
                <li><input type="text" placeholder="Bạn tìm gì..."><i class='bx bx-search-alt-2' ></i></li>
                <li><a href="cart.html"><button><i class='bx bx-cart'></i>Giỏ hàng</button></a></li>
                <li><a href="">Lịch sử<br>đơn hàng</a></li>
                <li><a href=""><span class="btn-content"><span class="btn-top"></span></span>Mua thẻ nạp ngay!</a></li>
                <li><a href="">24h Công nghệ</a></li>
                <li><a href="">Hỏi đáp</a></li>
                <li class="trang-thai-dang-nhap" ><a class="chinh-sua-user" href="#"><img src="{{asset('frontend/image/download.jpg')}}" alt=""></a>
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
                <li id="btn-dangnhap"><a href="#">Đăng nhập / Đăng ký</a></li>
                <div class="form-dang-nhap">
                    <div class="form-dang-nhap-content">
                        <div class="form-dang-nhap-content-dong">Đóng</div>
                        <h2>Đăng nhập</h2>
                        <form action="#" method="post">
                            <div class="input-container">
                            <i class='bx bxs-envelope'></i>
                                <input type="email" placeholder="Email" name="email" required>
                            </div>

                            <div class="input-container">
                            <i class='bx bxs-lock'></i>
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                            <a href="#">Quên mật khẩu</a>

                            <button type="submit" class="login-btn">Login</button>

                            <div class="no-account">
                                <label>Bạn chưa có tài khoản? </label>
                                <a href="#" id="btn-dang-ki">Đăng ký</a><br>
                            </div>
                            
                        </form>
                    </div>
                    <div class="form-dang-ki-content">
                        <div class="form-dang-ki-content-dong">Đóng</div>
                        <h2>Đăng kí</h2>
                        <form action="#" method="post">
                            <div class="input-container">
                            <i class='bx bxs-user-circle'></i>
                                <input type="text" placeholder="Họ và tên" name="hoten" required>
                            </div>
                            <div class="input-container">
                                <i class='bx bxs-user-circle'></i>
                                    <input type="text" placeholder="Tên tài khoản" name="tentaikhoan" required>
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
                                <input type="tel" placeholder="Số điện thoại" name="phone" required>
                            </div>

                            

                            <div class="input-container">
                            <i class='bx bxs-home'></i>
                                <input type="text" placeholder="Địa chỉ" name="address" required>
                            </div>
                            

                            <button type="submit" class="registration-btn">Register</button>
                            
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
                    <li><a href="product.html"><i class='bx bx-mobile'></i>Điện thoại</a></li>
                    <li><a href=""><i class='bx bx-laptop'></i>Laptop</a></li>
                    <li><a href=""><i class='bx bx-mobile'></i>Tablet</a></li>
                    <li><a href=""><i class='bx bx-headphone'></i>Phụ kiện<i style="margin-left: 6px;" class='bx bxs-down-arrow'></i></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Phụ kiện A</a></li>
                                <li><a href="#">Phụ kiện B</a></li>
                                <li><a href="#">Phụ kiện C</a></li>
                                <li><a href="#">Phụ kiện D</a></li>
                                <li><a href="#">Phụ kiện E</a></li>
                                <li><a href="#">Phụ kiện F</a></li>
                                <li><a href="#">Phụ kiện G</a></li>
                                <li><a href="#">Phụ kiện H</a></li>
                                <li><a href="#">Phụ kiện I</a></li>
                                <li><a href="#">Phụ kiện J</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href=""><i class='bx bxs-watch-alt'></i>Smart Watch</a></li>
                    <li><a href=""><i class='bx bxs-watch'></i>Đồng hồ</a></li>
                    <li><a href=""><i class='bx bxl-windows'></i>PC, Máy in<i style="margin-left: 6px;" class='bx bxs-down-arrow'></i></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Phụ kiện A</a></li>
                                <li><a href="#">Phụ kiện B</a></li>
                                <li><a href="#">Phụ kiện C</a></li>
                                <li><a href="#">Phụ kiện D</a></li>
                                <li><a href="#">Phụ kiện E</a></li>
                                <li><a href="#">Phụ kiện F</a></li>
                                <li><a href="#">Phụ kiện G</a></li>
                                <li><a href="#">Phụ kiện H</a></li>
                                <li><a href="#">Phụ kiện I</a></li>
                                <li><a href="#">Phụ kiện J</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Máy cũ giá rẻ</a></li>
                    <li><a href="">Sim, Thẻ cào</a></li>
                    <li><a href="">Trả góp, điện nước</a></li>
                </ul>
            </div>
        </div>
    </section> 