<!DOCTYPE html>
<html>
<head>
		<?php include'../public/head.php'; ?>
        <title>真喜聚_爱有惊喜</title>

      
</head>

<body>

	<div class="wrapper" id="top">
	
		<!-- Header section -->
		<?php include'../public/header.php'; ?>
		<!-- end header section -->


<!-- Section show current page and breadcrumb -->
		<section class="page-indecator">
			<div class="container">
				<h2 class="heading">爱有惊喜</h2>
				
				<!-- Breadcrumb pattern -->
				<ol class="breadcrumb">
				  <li><a href="../index.php">首页</a></li>
				  <li class="active">爱有惊喜</li>
				</ol>

				<!-- Default one color devider -->
				<div class="devider devider--bottom-m"></div>
			</div>
		</section>
		<!-- end section show current page and breadcrumb -->

		<section class="container">
			<h3 class="not-visible">Main conrainer</h3>

			<div class="shop-view">
				<span class="shop-view__results">86 条案例</span>
				<a class="shop-view__variant shop-view__variant--active" href="showcase.php"><i class="fa fa-th"></i></a>
			</div>
			
			<!-- ajax提交进行检索分类，下发对应数据 -->
			<!-- <form class="select select--thin select--size pull-right" name="select" method="get" action="#">
					<select class="select-box" id="select-box" name="select-box" tabindex="0">
								<option value="default" selected="selected">排序</option>
								<option value="默认" >默认</option>
								<option value="点击率" >点击率最高</option>
								<option value="价格比" >价格最低</option>
					</select>
			</form>

			<form class="select select--thin select--size pull-right1" name="select" method="get" action="#">
					<select class="select-box" id="select-box" name="select-box" tabindex="0">
								<option value="price" selected="selected">价格</option>
								<option value="不限" >不限</option>
								<option value="10000" >10000元以下</option>
								<option value="10000_30000" >10000元-30000元</option>
								<option value="30000_50000" >30000元-50000元</option>
								<option value="50000_100000" >50000元-10万元</option>
								<option value="100000" >10万元以上</option>
					</select>
			</form>
 -->



			<div class="row product-wrapper">
				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
						<div class="product__marker">卷</div>

						<div class="product__control">
							<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/1.png" alt="">
						</div>

						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
						<div class="product__marker">卷</div>

						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/2.png" alt="">
						</div>


						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/4.png" alt="">
						</div>


						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/3.png" alt="">
						</div>

						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/3.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
						
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/4.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
						<div class="product__marker">卷</div>

						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/1.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/2.png" alt="">
						</div>

						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/3.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/4.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->


				<!-- Product preview -->
				<div class="col-sm-6 col-md-4">
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/2.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/1.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>

						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/4.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
						
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				
				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>

						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/3.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
						
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

				<div class="col-sm-6 col-md-4">
					<!-- Product preview -->
					<div class="product product--round">
					<div class="product__marker">卷</div>
						<div class="product__control">
														<a class="product__control__item product__control-left" href="./showcase_detail.php"><i class="fa fa-th-large"></i></a>
							<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-user"></i></a>
						</div>

						<div class="product__photo">
							<img src="../images/showcase/2.png" alt="">
						</div>

						
						<span class="product__title">如花笑靥</span>
						<span class="product__p1"><img src="../images/aboutus/4.png" alt="" style="width:40px;height:40px;margin-right:10px;border-radius:20px">皓子</span>
						<br>
						<span class="product__p2">已成交：<strong>5</strong> 单</span>
						<br>
						<p class="product__price">￥5000.00</p>
					</div>
					<!-- end product preview -->
				</div><!-- end col -->

			</div><!-- end row -->

			<!-- Rectangle shapes -->
						<div class="pagination pagination--rect devider--top-large">
							<a class="pagination__prev" href="#"><i class="fa fa-angle-left"></i></a>
							<div class="pagination__block">
								<a class="pagination__item active-page" href="#">1</a>
								<a class="pagination__item" href="#">2</a>
								<a class="pagination__item mobile-small" href="#">3</a>
								<a class="pagination__item mobile-large" href="#">4</a>
								<a class="pagination__item mobile-large" href="#">5</a>
							</div>
							<a class="pagination__next" href="#"><i class="fa fa-angle-right"></i></a>
						</div>
		</section><!-- end container -->

		<!-- Colored devider -->
		<div class="devider-color bottom-space"></div>

		<!-- Footer section -->
		<?php include'../public/footer.php';?>
	
		<!-- end footer section -->

		<div class="top-scroll"><i class="fa fa-angle-up"></i></div>
	
	</div>

	<!-- JavaScript-->
		<!-- External-->
		<!-- jQuery 1.10.1--> 
<?php include'../public/script.php'; ?>

		<script>
			$(document).ready(function() {
		    	cart();
				selectBox();
		    	rangeSlider();
		    	shopPopup();
			});
		</script>

</body>
</html>
