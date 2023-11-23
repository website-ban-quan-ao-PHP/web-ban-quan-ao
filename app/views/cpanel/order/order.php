
<?php
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
		echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
?>
<h3 style="text-align: center;"> Liệt đơn hàng </h3>

<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      	$i =0;
      	foreach ($order as $key => $ord) {
      		$i++;
      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['order_code'] ?></td>
        <td><?php echo $ord['order_date'] ?></td>
        <td><?php  if($ord['order_status']==0) {
			         	echo 'Đơn hàng mới';
			     	}else{
			     		echo 'Đã xử lý';
			     	} 
			     	?>
			     		
		    </td>

        <td><a href="<?php echo BASE_URL?>/order/order_details/<?php echo $ord['order_code'] ?>">Xem đơn hàng</a> 
      </tr>


      <?php 
      	}
       ?>


    </tbody>
  </table>