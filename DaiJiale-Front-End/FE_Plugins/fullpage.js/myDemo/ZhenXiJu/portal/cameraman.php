<!DOCTYPE html>
<html>
<head>
     
       <?php include'../public/head.php'; ?>
       <title>真喜聚——摄像师</title>

</head>

<body>

	<div class="wrapper" id="top">
	
<!-- Header section -->
		<?php include'../public/header.php'; ?>
		<!-- end header section -->

		
		
		<!-- Section show current page and breadcrumb -->
		<section class="page-indecator">
			<div class="container">
				<h2 class="heading">摄像师</h2>
				
				<!-- Breadcrumb pattern -->
				<ol class="breadcrumb">
				  <li><a href="../index.php">首页</a></li>
				  <li class="active">摄像师</li>
				</ol>

				<!-- Default one color devider -->
				<div class="devider devider--bottom-m"></div>
			</div>
		</section>
		<!-- end section show current page and breadcrumb -->

		<section class="container product-wrapper">
			<h3 class="not-visible">Main conrainer</h3>
			
				<div class="shop-view">
						<span class="shop-view__results">54位</span>
						<a class="shop-view__variant" href="wedding_planner.php"><i class="fa fa-th"></i></a>
						
					</div>

<!-- ajax提交进行检索分类，下发对应数据 -->
			<form class="select select--thin select--size pull-right" name="select" method="get" action="#">
					<select class="select-box" id="select-box" name="select-box" tabindex="0">
								<option value="order" selected="selected">排序</option>
								<option value="默认" >默认</option>
								<option value="成交量" >成交量最高</option>
								<option value="星级别" >星级最高</option>
					</select>
			</form>

		
							
				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/2.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->
				

	
				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/3.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->

				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/4.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->

				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/5.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->

				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/6.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->

				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/5.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->

				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/4.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->
				

				
				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/3.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->

				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/2.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->

				<!-- Product preview list -->	
				<div class="product product--list">
					<div class="row">
						<div class="col-sm-8 col-md-9 separate-block">
							<div class="product__photo product__photo--bordered">
								<!-- <div class="product__marker">新加入</div> -->	

									<img src="../images/aboutus/1.png" alt="">

									<div class="product__control">
										<a class="product__control__item product__control-left" href="./planner.php"><i class="fa fa-share"></i></a>
										<a class="product__control__item product__control-right" href="./planner.php"><i class="fa fa-comment"></i></a>
									</div>
							</div>

							<a class="product__title" href="planner.php">皓子</a>
							<div class="product-rating">
								<div class="score"></div>
							</div>
							<span class="product__comment"><a class = "product__comment" href="./planner.php">已成交 <strong>5</strong> 单</span></a>

							<p class="product__info">个人简介：禧百年中式婚礼馆将现代时尚和传统古典相结合，打造出符合当代年轻人审美的新中式婚礼场景，再运用传统中式婚礼中的环节，呈现出既有传统意义又有视觉享受的完美婚礼，颠覆传统婚礼“土气”的形象。我们坚持把婚礼的现场做的更美，细节做的更好，让更多的人感受到汉唐婚礼的庄重、民国婚礼的喜庆以及中国风婚礼的唯美</p>
							<!-- <a class="link product__link" href="planner.php"><i class="fa fa-plus-circle"></i>更多详情</a> -->



						</div><!-- end col -->

						<div class="col-sm-4 col-md-3">
							<div class="product__action">
								<p class="product__price">星级：4.5</p>
								<a class="btn btn-warning btn--decorated product__btn" href="./planner.php">一键预约</a>
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
				</div>
				<!-- end product preview list -->







				<!-- Rectangle shapes -->
								<div class="pagination pagination--rect devider--top-larger">
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
		    	ratyDefault();
		    	shopPopup();
			});
		</script>

</body>
</html>
