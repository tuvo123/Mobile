<?php 
class Pd_detail{
    public function __construct(){

    }
    function getdetail($id){
        $connect = new connect();
        $query = "select * from trademark td, sanpham sp,hinhanh ha,manhinh mh,cameratruoc ct,camerasau cs,hedieuhanh hdh,bonho bn, ketnoi kn,pin pn,tienich ti,thongtinchung ttc where sp.id=$id and td.id=sp.trademark_id and sp.id=ha.sanpham_id and sp.id=mh.sanpham_id and sp.id=ct.sanpham_id and sp.id=cs.sanpham_id and sp.id=hdh.sanpham_id and sp.id=bn.sanpham_id and sp.id=kn.sanpham_id and sp.id=pn.sanpham_id and sp.id=ti.sanpham_id and sp.id=ttc.sanpham_id";
        $result = $connect -> getList($query);
        return $result;
    }
    function insertgiohang($userid, $idsp,$dungluong,$mau,$soluong,$thanhtien,$trangthai){
        $connect = new connect();
        $query = "INSERT INTO giohang(
            user_id, sanpham_id, soluong, thanhtien, trangthai, dungluong, mau)
            VALUES ('$userid', '$idsp', '$soluong', '$thanhtien', '$trangthai', '$dungluong','$mau')";
        $result = $connect->exec($query);
        return $result;
    }
    function inserthoadonw($department_id,$userid, $ngaytao,$tongtien){
        $connect = new connect();
        $query = "INSERT INTO hoadonmua(department_id, user_id, created_at, tongtien)
            VALUES ('$department_id', '$userid','$ngaytao' , '$tongtien')";
        $result = $connect->exec($query);
        return $result;
    }
    // function inserthoadonw($department_id,$userid, $tongtien){
    //     $connect = new connect();
    //     $query = "INSERT INTO hoadonmua(department_id, user_id,tongtien)
    //         VALUES ($department_id, $userid, $tongtien)";
    //     $result = $connect->exec($query);
    //     return $result;
    // }
    function getmahoadon(){
        $connect=new connect();
        $query = "select id from hoadonmua order by id desc limit 1";
        $result = $connect->exec($query);
        return $result;
    }
    function insertchitiethoadon($mahd,$idsp,$slmua,$giamua,$giamgia,$thanhtien){
        $connect = new connect();
        $query = "INSERT INTO chitiet_hdonmua(
            mahdmua, sanpham_id, soluongmua, giamua, giamgia, thanhtien)
            VALUES ($mahd, $idsp, '$slmua', '$giamua', '$giamgia', '$thanhtien');";
        $result = $connect->exec($query);
        return $result;
    }
    function ktragiohang($id){
        $connect =new connect();
        $query = "select count(*) as sosp from giohang where sanpham_id=$id limit 1";
        $result = $connect->getList($query);
        return $result;
    }
}
?>