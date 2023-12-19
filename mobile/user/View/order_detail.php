<?php include('hearder.php')?>
<?php include('../Model/order.php');?>
<?php
    $order_detail = new Order();
    if(!isset($_GET['code']) || $_GET['code']== NULL){
        echo "<script>window.location='orderdetail.php'</script>";
     }else{
         $order_code = $_GET['code'];
     }
?>
<style>
    .title-detail{
        padding-top: 20px;
        padding-bottom: 10px;;
    }
    table{
        width: 100%;
        border-collapse: collapse;
        padding: 10px;
    }
    th{
        border-bottom: 1px solid #CCCCCC;
        color: #808080;
        font-weight: bold;
        padding-bottom: 5px;
    }
    td{
        padding-top: 5px;
        color: #333;
        border-bottom: 1px solid #CCCCCC;
        padding: 10px 3px 10px 3px;
    }
    .container-content-table{
        padding-bottom: 20px;
    }
    .img{
        width: 80px;
        height: 80px;
    }
    .exit{
        padding-bottom: 20px;
    }
    .trolai{
        padding: 5px 5px 5px 5px;
        background-color: blue;
        font-weight: bold;
        font-size: 15px;
        border-radius: 5px;
        color: #fff;
    }
</style>
<section class="order">
        <div class="container">
           <div class="container-content">
            <div class="container-content-table">
           <h2 class="title-detail">Chi tiết đơn hàng</h2>
			<table>
				<tr>
                    <th>STT</th>
                    <th>Mã đơn hàng</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th>Ngày đặt</th>
                    <th>Ảnh</th>
				</tr>
                <tbody>
                    <?php
                    $show = $order_detail->show_order_detail($user_id, $order_code);
                    if($show){
                        $i = 0;
                        $all_total = 0;
                        while($result_show = $show->fetch(PDO::FETCH_ASSOC)){
                            $i++;
                            // $total = $result['price'];
                            $all_total += $result_show['tongtien'];
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $i?></td>
                        <td style="text-align: center;"><?php echo $result_show['order_code']?></td>
                        <td><?php echo $result_show['tensp']?></td>
                        <td><?php echo $result_show['quantity']?></td>
                        <td><?php echo number_format(intval($result_show['price']),0,',','.') ?><sup>đ</sup></td>
                        <td><?php echo number_format(intval($result_show['tongtien']),0,',','.')?> <sup>đ</sup></td>
                        <td><?php echo $result_show['created_at']?></td>
                        <td><img src="../img_main/<?php echo $result_show['img_main']?>" alt="" class="img"></td>
                    </tr>
                    <?php
                                               
                        }
                    }
                    ?>
                    <tr>
                        <?php if(isset($all_total)){?>
                        <td>Tổng tiền: </td>
                        <td style="color: red;"><?php echo number_format(intval($all_total),0,',','.') ?> <sup>đ</sup></td>
                        <?php } ?>
                    </tr>
                </tbody>
			</table>
            </div>
           </div> 
           <div class="exit">
            <a class="trolai" href="order.php">< Trở lại</a>
           </div>
        </div>
</section>

<?php include('footer.php')?>