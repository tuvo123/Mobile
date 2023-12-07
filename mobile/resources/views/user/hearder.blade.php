<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thế giới di động</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>
<body>
    <header>
        <img src="frontend/image/hinh1.png" alt="" srcset="">
    </header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#"><img style="width: 150px;" src="frontend/image/logo1.png" alt="" srcset=""></a></li>
                <li id="adress-form"><a href="#">Đà Nẵng<i class='bx bxs-down-arrow'></i></a> 
                </li>
                <li><input type="text" placeholder="Bạn tìm gì..."><i class='bx bx-search-alt-2' ></i></li>
                <li><a href=""><button><i class='bx bx-cart'></i>Giỏ hàng</button></a></li>
                <li><a href="">Lịch sử<br>đơn hàng</a></li>
                <li><a href=""><span class="btn-content"><span class="btn-top"></span></span>Mua thẻ nạp ngay!</a></li>
                <li><a href="">24h Công nghệ</a></li>
                <li><a href="">Hỏi đáp</a></li>
                <li><a href="">Game app</a></li>
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