<!doctype html>
<html>
<head>
	   
        <?php include'../public/head.php'; ?>
         <title>真喜聚_预约特惠</title>

    
    
</head>

<body background="../index_static/777_small.jpg">

	<div style="position:absolute; top:30%;left:25%;float:left">
	
	<img src="../index_static/gift-image.png" left="100px">

	</div>

	<div style="position:absolute; top:30%;left:50%;float:left">
		<h2>标题,主描述</h2>
		<p class="p-white ">对于礼包的详细描述,具体的领取流程和要求,礼包里面含有的内容等的描述</p>
	</div>

	<div style="position:absolute; bottom:15%;left:50%;float:left">
		<a class="btn btn-warning btn--decorated product__btn" href="#">预约获取</a>
	</div>

	<?php include'../public/header.php'; ?>
	
<?php include'../public/script.php'; ?>

		<script>
			$(document).ready(function() {
				staffSlider();
				scrollSlider();
			});
		</script>

</body>
</html>
