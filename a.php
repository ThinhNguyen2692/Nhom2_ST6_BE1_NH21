<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Cart</title>
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
      </svg>
      <i class="bi bi-cart2"></i>
    <h1>Đặc hàng thành công</h1>
    <a href="index.php">a</a>
    <h5></h5>
   <a href=""></a>
   <i style="color:red;" class="bi bi-box"></i>

   
   
</body>
</html>
<?php
//7h 30m 02s 18-05-2016
 
$time = mktime(7,30,2,5,18,2016);
 
//$time là timestamp, sử dụng nó trong hàm date()
 
echo date("Y-m-d H:i:s",$time),'<br>';
 
//công thêm 5 phút
 
$time += 5*60;
 
echo '5 min after: ',date("Y-m-d H:i:s",$time),'<br>';
 
// và công thêm 1 ngày
 
echo ' 1 date after: ',date("Y-m-d H:i:s",($time+1*60*60*24));
 

?>