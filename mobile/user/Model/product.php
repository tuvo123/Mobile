<?php
    class Product{
        public function __construct(){
            
        }
        function getProduct($opset,$sapxep){
            $db = new connect();
            if($sapxep=='giangaunhien'){
                $select = "select * from sanpham sp,manhinh mh where sp.id=mh.sanpham_id limit 20+($opset*10)";
            }elseif($sapxep=='giacdt'){
                $select = "select * from sanpham sp,manhinh mh where sp.id=mh.sanpham_id order by cast(gia1 as real) desc limit 20+($opset*10) ";
            }elseif($sapxep=='giatdc'){
                $select = "select * from sanpham sp,manhinh mh where sp.id=mh.sanpham_id order by cast(gia1 as real) asc limit 20+($opset*10) ";
            }
            
            $result = $db ->getList($select);
            return $result;
        }
        function getProductSlider($opset){
            $db = new connect();
            $select = "select * from sanpham limit 5 offset ($opset*5)";
            $result = $db ->getList($select);
            return $result;
        }
        function getProductThietKe($opset){
            $db = new connect();
            $select = "select * from sanpham limit 4 offset ($opset*4)";
            $result = $db ->getList($select);
            return $result;
        }
        function filtetrademark($id){
            $db = new connect();
            $select = "select * from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and trademark_id = $id";
            $result = $db ->getList($select);
            return $result;
        }
        function demfiltetrademark($id){
            $db = new connect();
            $select = "select count(*) as tongsp from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and trademark_id = $id";
            $result = $db ->getList($select);
            return $result;
        }
        function loctheoram($id){
            $db = new connect();
            $select = "select * from sanpham sp,bonho bn,manhinh mn where sp.id= mn.sanpham_id and sp.id = bn.sanpham_id and cast(cast(trim(substring(ram,1,2)) as int) as real) = $id";
            $result = $db ->getList($select);
            return $result;
        }
        function demloctheoram($id){
            $db = new connect();
            $select = "select count(*) as tongsp from sanpham sp,bonho bn ,manhinh mn where sp.id= mn.sanpham_id and sp.id = bn.sanpham_id and cast(cast(trim(substring(ram,1,2)) as int) as real) = $id";
            $result = $db ->getList($select);
            return $result;
        }
        function loctheorom($id){
            $db = new connect();
            $select = "select *  from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and coalesce(trim(left(dungluong1,length(dungluong1)-2)),'') = '$id'";
            $result = $db ->getList($select);
            return $result;
        }
        function demloctheorom($id){
            $db = new connect();
            $select = "select count(*) as tongsp from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and coalesce(trim(left(dungluong1,length(dungluong1)-2)),'') = '$id'";
            $result = $db ->getList($select);
            return $result;
        }
        function loctheoloaidt($id){
            $db = new connect();
            if($id=='android'){
                $query = "select * from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and trademark_id != 1";
            }
            elseif($id == 'ios'){
                $query = "select * from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and trademark_id = 1";
            }
            else {
                $query = "select * from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and trademark_id = 9";
            }
            $result = $db -> getList($query);
            return $result;
        }
        function demloctheoloaidt($id){
            $db = new connect();
            if($id=='android'){
                $query = "select count(*) as tongsp from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and trademark_id != 1";
            }
            elseif($id == 'ios'){
                $query = "select count(*) as tongsp from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and trademark_id = 1";
            }
            else {
                $query = "select count(*) as tongsp from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and trademark_id = 9";
            }
            $result = $db -> getList($query);
            return $result;
        }
        function search($name){
            $db = new connect();
            $select = "select * from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and lower(tensp) like lower('%$name%')";
            $result = $db ->getList($select);
            return $result;
        }
        function demsearch($name){
            $db = new connect();
            $select = "select count(*) as tongsp from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and lower(tensp) like lower('%$name%')";
            $result = $db ->getList($select);
            return $result;
        }
        function gettrademark($id){
            $db = new connect();
            $select = "select * from trademark where id = $id";
            $result = $db ->getList($select);
            return $result;
        }
        function gettongsp (){
            $db = new connect();
            $query = "select count(*) as tongsp from sanpham";
            $result = $db ->exec($query);
            return $result;
        }
        function loctheogia($giabe,$gialon){
            $db=new connect();
            $query = "select * from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and cast(gia1 as real)>$giabe and cast(gia1 as real)<$gialon";
            $result = $db->exec($query);
            return $result;
        }
        function demloctheogia($giabe,$gialon){
            $db=new connect();
            $query = "select count(*) as tongsp from sanpham sp,manhinh mn where sp.id= mn.sanpham_id and cast(gia1 as real)>$giabe and cast(gia1 as real)<$gialon";
            $result = $db->exec($query);
            return $result;
        }
        function getInformationUser($id){
            $db=new connect();
            $select="SELECT * FROM users WHERE id=$id LIMIT 1";
            $result=$db->getList($select);
            return $result;
        }
        function UpdateInformationUser($id,$hoten,$tentaikhoan,$email,$sodt,$diachi){
            $db=new connect();
            $insert="UPDATE  users SET name='$hoten', username='$tentaikhoan', email='$email', phone='$sodt', address='$diachi' WHERE id='$id'";
            $result=$db->exec($insert);
            return $result;
        }
        function UpdatePass($id,$newpass){
            $db=new connect();
            $insert="UPDATE users SET password='$newpass' WHERE id='$id'";
            $result=$db->exec($insert);
            return $result;
        }

    }
?>