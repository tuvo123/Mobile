<?php

use function Laravel\Prompts\alert;

    // $filepath = realpath(dirname(__FILE__));

       include_once('../lib/session.php');
    //    Session::checkSession();
       include_once('../format/format.php');
       include_once('connect.php');
?>

<?php
class Login{
    
    function __construct()
    {
        
    }

    function register($fullname, $username, $email, $password, $phone, $address){
        $db = new connect();
        $check_login = "SELECT COUNT(*) as a FROM users WHERE email='$email' LIMIT 1";
        $result_check = $db->getList($check_login);
        $count = 0;
        while($rsc=$result_check->fetch()){
            $count = $rsc['a'];
        }
        // Kiểm tra email có trùng nhau hay không
        $checkemail = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $resultCheck = $db->getList($checkemail);
        
        if($count >= 1){
            // header("Location: register.php");
            // echo "<script>show();</script>";
            #$msg=$_SESSION['login-fullname'].$_SESSION['login-email'].$_SESSION['login-signupuser'].$_SESSION['login-password'];
            $msg = "<span class='error' style='color:  #FF0000;'>Email đã tồn tại. Vui lòng thử lại với email khác!</span>
            <script>window.addEventListener('DOMContentLoaded', function() {
                
            
                var nameInput = document.getElementById('login-fullname');
                nameInput.value = '". $fullname."';
                var emailInput = document.getElementById('login-email');
                emailInput.value = '".$email."';
                emailInput.style.color = '#FF0000';
                emailInput.style.caretColor = 'black';
                emailInput.focus();
                var userInput = document.getElementById('login-signupuser');
                userInput.value = '".$username."';
                var passInput = document.getElementById('hiiddenpassword');
                passInput.value = '';
                var btn = document.getElementById('sign-up-btn');
                btn.click();
              });</script>";
            return $msg;
        }else{
        $query = "INSERT INTO users(username,name,email,address,phone,password)VALUES('$username','$fullname','$email','$address','$phone','$password')";
        $result = $db->exec($query);
        if($result){
            unset($_SESSION['login-fullname']);
            unset($_SESSION['login-email']);
            unset($_SESSION['login-signupuser']);
            unset($_SESSION['login-password']);
            $alert = "
            <script>    
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Thông báo',
                                                text: 'Đăng kí tài khoản thành công!.',
                                                confirmButtonText: 'Đóng',
                                                timer: 3000, 
                                                timerProgressBar: true, 
                                            });
                                            event.preventDefault();
            
            window.addEventListener('DOMContentLoaded', function() {
                
            
                var nameInput = document.getElementById('login-fullname');
                nameInput.value = '". $fullname."';
                var emailInput = document.getElementById('login-email');
                emailInput.value = '".$email."';
                emailInput.style.color = 'black';                
                var userInput = document.getElementById('login-signupuser');
                userInput.value = '".$username."';
                var passInput = document.getElementById('hiiddenpassword');
                passInput.value = '';
                var btn = document.getElementById('sign-up-btn');
                btn.click();
              });</script>";
            // header('Location: index.php');
            
            return $alert;
        }else {
        
            $msg = "
            <script>    
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Thông báo',
                                                text: 'Đăng kí tài khoản thất bại!.',
                                                confirmButtonText: 'Đóng',
                                                timer: 3000, 
                                                timerProgressBar: true, 
                                            });
                                            event.preventDefault();
                                </script>;
            <script>window.addEventListener('DOMContentLoaded', function() {
                var btn = document.getElementById('sign-up-btn');
                btn.click();
            
                var nameInput = document.getElementById('login-fullname');
                nameInput.value = ". $_SESSION['login-fullname'].";
                var emailInput = document.getElementById('login-email');
                emailInput.value = ".$_SESSION['login-email'].";
                emailInput.style.color = '#FF0000';
                emailInput.style.caretColor = 'black';
                emailInput.focus();
                var userInput = document.getElementById('login-signupuser');
                userInput.value = ".$_SESSION['login-signupuser'].";
                var passInput = document.getElementById('hiiddenpassword');
                passInput.value = '';
              });</script>";
            return $msg;
             }
         }
    }

    function login($email, $password){
        $db = new connect();
     
        // Kiểm tra nếu trùng email thì thông báo 
        $check_login = "SELECT COUNT(*) as a FROM users WHERE email='$email' AND password='$password' LIMIT 1";
        $result_check = $db->getList($check_login);
        $count = 0;
        while($rsc=$result_check->fetch()){
            $count = $rsc['a'];
        }
        
        $check_logins = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
        $result_checks = $db->getList($check_logins);
        // return $result_check;
        if($count == 1){
        //   header('Location:index.php');
          $value = $result_checks->fetch(PDO::FETCH_ASSOC);
          Session::set('userlogin', true);
          Session::set('userId', $value['id']);
          Session::set('userFullName', $value['name']);
          Session::set('userName', $value['username']);

          echo "<script>
            
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Thông báo',
                                                text: 'Đăng nhập thành công!.',
                                                confirmButtonText: 'Đóng',
                                                timer: 3000, 
                                                timerProgressBar: true, 
                                            });
                                            event.preventDefault();
                                
          window.location='index.php'</script>";

        }else{
            $msg = "<script>    
                    Swal.fire({
                        icon: 'error',
                        title: 'Thông báo',
                        text: 'Sai tài khoản hoặc mật khẩu.',
                        confirmButtonText: 'Đóng',
                        timer: 3000, 
                        timerProgressBar: true, 
                    });
                    event.preventDefault();
        </script>;";
            return $msg;
            }
        }
}

?>

<script>
    window.addEventListener('DOMContentLoaded', function() {
    var btn = document.getElementById('sign-up-btn');
    btn.click();
  });
 </script>
