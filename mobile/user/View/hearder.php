<?php
    include("../Model/connect.php");
  include("../Model/product.php");
    include("../Model/pd_detail.php");
    
    session_start();
?>
<?php
  include("../Model/login.php");
  include_once("../lib/session.php");
  Session::init();
?>
<?php
$check_login = Session::get('userlogin');
$user_id = Session::get('userId');
?>
<?php
  $user_login = new Login();

  // Đăng ký
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $hash = $_POST['password'];
      $password = hash('sha256', $hash);
      $phone = $_POST['phone'];
      $address = $_POST['address'];
  
      $user_register = $user_login->register($fullname, $username, $email, $password, $phone, $address);
  }

  // Đăng nhập
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
      $email = $_POST['email'];
      $hash = $_POST['password'];
      $password = hash('sha256', $hash);

      $user_signin = $user_login->login($email, $password);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VATH</title>
    <link rel="icon" type="image/x-icon" href="../image/logoVathhead.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product_detail.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/order.css">
    <link rel="stylesheet" href="../css/pay.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    
    <header>
        <img src="../image/hinh1.png" alt="" srcset="">
    </header>
    <!-- <a href="/user/home.php">Chuyển sang user</a> -->
    <div>

    <!-- Thông báo đăng ký thành công -->
                      <?php
                            // $massege = Session::get('message');
                            // if($massege){
                            //    echo "<span class='text-alert' style='color:blue; text-align: center; width:100%;'>$massege</span>";
                            //     Session::put('message', null);
                            // }
                            ?>
    </div>
    <nav>
        <div class="container">
            <ul>
                <li><a href="index.php"><img style="width: 90px;" src="../image/logoVath.png" alt="" srcset=""></a></li>
                <li id="adress-form"><a href="#">Đà Nẵng<i class='bx bxs-down-arrow'></i></a> 
                </li>
                <li>
                    <form action="product.php" method="get">
                        <input name="edtsearch" type="text" placeholder="Bạn tìm gì...">
                        <button><i class='bx bx-search-alt-2' ></i></button>
                    </form>
                </li>
                <li><a href="cart.php"><button><i class='bx bx-cart'></i>Giỏ hàng</button></a></li>
                <li><a href="order.php">Lịch sử<br>đơn hàng</a></li>
                <li id="muathecao"><a href=""><span class="btn-content"><span class="btn-top"></span></span>Mua thẻ nạp ngay!</a></li>
                <li id="24hcongnghe"><a href="">24h Công nghệ</a></li>
                <li id="hoidap"><a href="">Hỏi đáp</a></li>
                <?php
                  if($check_login == false){
                    ?>
                <li class="trang-thai-dang-nhap" style="display:none;"></li>
                <li id="btn-dangnhap" style="display:block;"><a href="#">Đăng nhập</a></li>
                
                <?php
                  }
                ?>
                <?php
                if($check_login == true){
                ?>
                <li class="trang-thai-dang-nhap" style="display:block;"><a class="chinh-sua-user" href="#"><img src="../image/download.jpg" alt=""></a>
                <div class="formuser" style="display: none;">
                    <div class="formuser-top">
                        <div class="formuser-top-img">
                            <div class="formuser-top-img-edit">
                                 <img src="../image/download.jpg" alt="" >
                            </div>
                           
                            
                        </div>
                        <div class="formuser-top-file">
                            
                                <input type="file" accept="image/*" name="addanh" id="addanh" style="display: none;">
                                <label for="addanh">
                                    <i class='bx bxs-pencil'></i>
                                </label>

                        </div>
                    </div>
                    <?php 
                        $pro=new Product();
                        $ttdangnhap= $pro->getInformationUser($user_id);
                       while($infor=$ttdangnhap->fetch()){                        
                    ?>
                    <div class="formuser-bottom">
                        <span><div class="ttincanhan-left">
                            Họ và tên:
                        </div>
                        <div class="ttincanhan-right">
                            <?php echo $infor['name']; ?>
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Tên TK:
                        </div>
                        <div class="ttincanhan-right">
                        <?php echo $infor['username']; ?>
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Số ĐT:
                        </div>
                        <div class="ttincanhan-right">
                        <?php echo $infor['phone']; ?>
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Email:
                        </div>
                        <div class="ttincanhan-right">
                        <?php echo $infor['email']; ?>
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Địa chỉ:
                        </div>
                        <div class="ttincanhan-right">
                        <?php echo $infor['address']; ?>
                        </div> </span>

                    </div>
                    <?php
                    $oldpass=$infor['password'];
                        }                        
                    ?>
                <form action="" method="post">    
                    <div class="formuser-edit">
                        <span><div class="ttincanhan-left">
                            Họ và tên:
                        </div>
                        <div class="ttincanhan-right">
                            <input  type="text" placeholder="Nhập tên" name="txtHoten" id="txtHoten">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Tên TK:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập tên tài khoản" name="txtTentk" id="txtTentk">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Số ĐT:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập số ĐT" name="txtSodt" id="txtSodt">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Email:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập Email" name="txtEmail" id="txtEmail">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Địa chỉ:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="text" placeholder="Nhập địa chỉ" name="txtDiachi" id="txtDiachi">
                        </div> </span>

                    </div>
                    <div class="formuser-edit-password">
                        <span><div class="ttincanhan-left">
                            Nhập mật khẩu cũ:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="password" placeholder="Nhập MK cũ" name="txtPass">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Nhập mật khẩu mới:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="password" placeholder="Nhập MK mới" name="txtNewpass">
                        </div> </span>
                        <span><div class="ttincanhan-left">
                            Nhập lại mật khẩu:
                        </div>
                        <div class="ttincanhan-right">
                            <input type="password" placeholder="Nhập lại MK" name="txtRepass">
                        </div> </span>                        
                    </div>
                    <style>
                        #Luuthaydoi{
                            border-radius:100%;
                        }
                        #chuyensangadmin{
                            border-radius:100%;
                        }
                        #dangxuat{
                            border-radius:100%;
                        }
                        
                    </style>
                    <div class="formuse-dangxuat">
                        <button id="chinhsuatk"  class="chinh-sua-tk"><i class='bx bx-edit-alt' style="font-size: 20px;padding:10px;"></i><label class="thongbao-user" style="display:none;">Chỉnh sửa thông tin</label></button>       
                        <button id="chinhsuamk" class="chinh-sua-mk"><i class='bx bx-key' style="font-size: 20px;padding:10px;"></i><label class="thongbao-user" style="display:none;">Đổi mật khẩu</label></button>
                        <button id="chinhsuaql" name="Quaylai" class="chinh-sua-ql" style="display:none;"><i class='bx bx-arrow-back' style="font-size: 20px;padding:10px;"></i><label  class="thongbao-user" style="display:none;">Quay lại</label></button>
                        <button type="submit" id="Luuthaydoi" name="Luuthaydoi" value=""><label class="chinh-sua-luu" for="Luuthaydoi" ><i class='bx bxs-save' style="font-size: 20px;padding:10px;"></i><label style="display:none;" class="thongbao-user">Lưu thay đổi</label></label></button>
                        <button type="submit" name="Chuyensangadmin" id="chuyensangadmin"><label class="chuyen-admin" for="Chuyensangadmin"><i class='bx bxs-user-circle' style="font-size: 20px; padding:10px;"></i></label></button><label style="display:none;"  class="thongbao-user">Chuyển sang admin</label>
                        <button type="submit" name="Dangxuat" id="dangxuat" ><label class="dang-xuat" for="Dangxuat"><i class='bx bx-log-out' style="font-size: 20px; padding:10px;"></i><label  class="thongbao-user" style="display:none;">Đăng xuất</label></label></button>
                        
                    </div>
                </form> 
                <?php 
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $Hoten=$_POST['txtHoten'];
                    $Tentk=$_POST['txtTentk'];
                    $Sodt=$_POST['txtSodt'];
                    $Email=$_POST['txtEmail'];
                    $Diachi=$_POST['txtDiachi'];
                    $pass=$_POST['txtPass'];
                    $Newpass=$_POST['txtNewpass'];
                    $Repass=$_POST['txtRepass'];
                    $pro=new Product();
                    if(isset($_POST['Luuthaydoi'])){                        
                         if(!empty($pass)&&!empty($Newpass)&&(!empty($Repass))){
                                    $ttdangnhap= $pro->getInformationUser($user_id);
                                    
                            while($infor=$ttdangnhap->fetch()){ 
                                $oldpass=$infor['password'];
                            } 
                            
                            if($pass==$oldpass&&$Newpass==$Repass){
                                $update=$pro->UpdatePass(2,$Newpass); 
                                echo "<script>    
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Thông báo',
                                                text: 'Cập nhật mật khẩu thành công!.',
                                                confirmButtonText: 'Đóng',
                                                timer: 3000, 
                                                timerProgressBar: true, 
                                            });
                                            event.preventDefault();
                                </script>;";
                            }
                            else{
                                if($pass!=$oldpass){
                                    echo "<script>    
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Thông báo',
                                                text: 'Mật khẩu không đúng!.',
                                                confirmButtonText: 'Đóng',
                                                timer: 3000, 
                                                timerProgressBar: true, 
                                            });
                                            event.preventDefault();
                                </script>;";
                                }
                                else if($Newpass!=$Repass){
                                    echo "<script>
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Thông báo',
                                                text: 'Nhập lại mật khẩu không khớp!.',
                                                confirmButtonText: 'Đóng',
                                                timer: 3000, 
                                                timerProgressBar: true, 
                                            });
                                            event.preventDefault();
                                </script>;";
                                }
                            }

                        }
                        else{ 
                            $update=$pro->UpdateInformationUser($user_id,$Hoten,$Tentk,$Email,$Sodt,$Diachi);
                            echo "<script>    
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Thông báo',
                                                text: 'Cập nhật mật khẩu thành công!.',
                                                confirmButtonText: 'Đóng',
                                                timer: 3000, 
                                                timerProgressBar: true, 
                                            });
                                            event.preventDefault();
                                </script>;";
                        }
                    }
                    if(isset($_POST['Dangxuat'])){
                        echo '<script>document.querySelector(".dang-xuat").addEventListener("click", function(){
                            document.querySelector(".formuser").style.display = "none";
                            document.querySelector(".trang-thai-dang-nhap").style.display = "none";
                            document.querySelector(".btn-dang-nhap").style.display="block";
                            btndn.style.display = "flex";
                            document.querySelector(".form-dang-nhap").style.display = "flex";
                            document.querySelector(".form-dang-nhap-content").style.display = "block";
                            event.preventDefault();
                        })</script>;';
                    }
                        ob_start();
                        Session::destroy();
                        echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
                        ob_end_flush(); 
                } ?>
                </div>
                </li>
                <?php
                
                ?>

                <!-- Đăng nhập -->
                
                <?php
                }
                ?>

                <div class="form-dang-nhap">
                    <div class="form-dang-nhap-content">
                        <div class="form-dang-nhap-content-dong">Đóng</div>
                        <h2>Đăng nhập</h2>
                        <?php
                            if(isset($user_signin)){
                                echo $user_signin;
                            }
                        ?>
                        <form action="" method="post">
             
                            <div class="input-container">
                            <i class='bx bxs-envelope'></i>
                                <input type="email" placeholder="Email" name="email" required>
                            </div>

                            <div class="input-container">
                            <i class='bx bxs-lock'></i>
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                            <a href="#">Quên mật khẩu</a>

                            <button type="submit" name="login" class="login-btn">Đăng nhập</button>

                            <div class="no-account">
                                <label>Bạn chưa có tài khoản? </label>
                                <a href="#" id="btn-dang-ki">Đăng ký</a><br>
                            </div>
                    
                        </form>
                    </div>
                    <div class="form-dang-ki-content">
                        <div class="form-dang-ki-content-dong">Đóng</div>
                        <h2>Đăng kí</h2>
                        
                        <?php
                        if(isset($user_register)){
                            echo $user_register;
                            // unset($_SESSION['insert_customer']) ;
                            // $_SESSION['insert_customer']= $insert_customer;                      
                        }
                        ?>
                        <form action="" method="post">
                     
                            <div class="input-container">
                            <i class='bx bxs-user-circle'></i>
                                <input type="text" placeholder="Họ và tên" name="fullname" required>
                            </div>
                            <div class="input-container">
                                <i class='bx bxs-user-circle'></i>
                                    <input type="text" placeholder="Tên tài khoản" name="username" required>
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
                            <button type="submit" name="register" id="sign-up-btn" class="registration-btn">Đăng ký</button>
                            
                        </form>
                    </div>
                    <script>
                    const btndn = document.querySelector("#btn-dangnhap");
                    btndn.addEventListener("click",function(){
                        document.querySelector(".form-dang-nhap").style.display = "flex";
                        document.querySelector(".form-dang-nhap-content").style.display = "block";
                    })
                    const btndk = document.querySelector("#btn-dang-ki");
                        btndk.addEventListener("click",function(){
                            document.querySelector(".form-dang-nhap-content").style.display  = "none";
                            document.querySelector(".form-dang-ki-content").style.display = "block";
                        })
                </script>
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
                    <li><a href="product.php"><i class='bx bx-mobile'></i>Điện thoại</a></li>
                    
                        <?php 
                        $pro = new Product();
                        for($dthoai = 1;$dthoai<10;$dthoai++){
                        $iphone = $pro->filtetrademark($dthoai);
                        $thuonghieu = $pro -> gettrademark($dthoai);
                        ?>
                    <li>
                        <a href="product.php?idtrade=<?php echo $dthoai ?>"><img src="../image/<?php while($qqqq = $thuonghieu->fetch()){ echo $qqqq['avatar'];} ?>" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                                <ul>
                                    <?php
                                    if($dthoai>=6){
                                    ?>
                                    <li><a href="#">Sản phẩm hiện đã hết hàng</a></li>
                                    <?php
                                    }else{
                                        while($spiphone = $iphone->fetch()){ ?>
                                            <li><a href="product_detail.php?id=<?php echo $spiphone['id'] ?>"><?php echo $spiphone['tensp'] ?></a></li>
                                    <?php }
                                    }
                                     ?>
                                </ul>
                            </div>
                    </li>
                    <?php } ?>
                    <!-- <li>
                        <a href=""><img src="../image/samsungnew-220x48-1.png" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
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
                        <a href=""><img src="../image/logo-xiaomi-220x48-5.png" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
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
                        <a href=""><img src="../image/vivo-logo-220-220x48-3.png" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
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
                        <a href=""><img src="../image/OPPO42-b_5.jpg" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
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
                    <li><a href=""><img src="../image/Realme42-b_37.png" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
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
                        <a href=""><img src="../image/Mobell42-b_19.jpg" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
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
                        <a href=""><img src="../image/Masstel42-b_0.png" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Masstel PLAY</a></li>
                                <li><a href="#">Masstel FAMI</a></li>
                                <li><a href="#">Masstel IZI</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=""><img src="../image/Nokia42-b_21.jpg" style="width: 100px; height:20px; border: 1px solid #ddd; border-radius: 40px; background-color:#fff"></img></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Nokia G11 Plus</a></li>
                                <li><a href="#">Nokia G11 Plus</a></li>
                                <li><a href="#">Nokia C31</a></li>
                                <li><a href="#">Phụ kiện D</a></li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </section>