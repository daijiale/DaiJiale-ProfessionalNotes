<!doctype html>
<html lang="en-us">
<head>
<?php include'../public/head.php'; ?>
         <title>真喜聚_任务</title>
</head>

<body>

	<div class="wrapper" id="top">
	
		<!-- Header section -->
		<?php include'../public/header.php'; ?>
		<!-- end header section -->

		
		
		<!-- Section show current page and breadcrumb -->
		<section class="page-indecator">
			<div class="container">
				<h2 class="heading">任务</h2>
				
				<!-- Breadcrumb pattern -->
				<ol class="breadcrumb">
				  <li><a href="../index.php">首页</a></li>
				  <li class="active">任务</li>
				</ol>

				<!-- Default one color devider -->
				<div class="devider devider--bottom-md"></div>
			</div>
		</section>
		<!-- end section show current page and breadcrumb -->

		<section class="container">
			<div class="row">
				<div class="col-sm-8 cut-section">
					<!-- Accordion blocks -->
							<div class="panel-group accordion accordion--blocks" id="accordion">

							 
				

							  <!-- Accordion panel -->
							  <div class="panel panel-default page1">
							  	<!-- accordion panel heading -->
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="collapsed accordion-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							        	<span class="marker">
		                                    <span class="marker__close"><i class="fa fa-plus"></i></span>
		                                    <span class="marker__open"><i class="fa fa-minus"></i></span>
		                                </span>
							          每日任务一
						
							        </a>
							      </h4>
							    </div><!-- end accordion panel heading -->
							    <!-- accordion panel body -->
							    <div id="collapseOne" class="panel-collapse collapse">
							      <div class="panel-body">
	                       		<strong>说明：</strong>完成任务即可获得50元代金卷<br><strong>任务：</strong>超过6个用户来“抢”代金卷即算完成任务
			                          <div class="order-btn">
			                            <a href="./task_detail.php" class='btn btn-warning btn--decorated pull-right check__btn'><i class='icon-cart'></i>领取任务</a>
			                          </div>
							      </div>
							    </div><!-- end accordion panel body -->
							  </div> <!-- end accordion panel -->

							  		  <!-- Accordion panel -->
							  <div class="panel panel-default page2">
							  	<!-- accordion panel heading -->
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="collapsed accordion-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							        	<span class="marker">
		                                    <span class="marker__close"><i class="fa fa-plus"></i></span>
		                                    <span class="marker__open"><i class="fa fa-minus"></i></span>
		                                </span>
							          每日任务二
						
							        </a>
							      </h4>
							    </div><!-- end accordion panel heading -->
							    <!-- accordion panel body -->
							    <div id="collapseTwo" class="panel-collapse collapse">
							      <div class="panel-body">
	                       		<strong>说明：</strong>完成任务即可获得100元代金卷<br><strong>任务：</strong>超过10个用户来“抢”代金卷即算完成任务
			                          <div class="order-btn">
			                            <a href="./task_detail.php" class='btn btn-warning btn--decorated pull-right check__btn'><i class='icon-cart'></i>领取任务</a>
			                          </div>
							      </div>
							    </div><!-- end accordion panel body -->
							  </div> <!-- end accordion panel -->

							  		  <!-- Accordion panel -->
							  <div class="panel panel-default page3">
							  	<!-- accordion panel heading -->
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="collapsed accordion-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							        	<span class="marker">
		                                    <span class="marker__close"><i class="fa fa-plus"></i></span>
		                                    <span class="marker__open"><i class="fa fa-minus"></i></span>
		                                </span>
							          每日任务三
						
							        </a>
							      </h4>
							    </div><!-- end accordion panel heading -->
							    <!-- accordion panel body -->
							    <div id="collapseThree" class="panel-collapse collapse">
							      <div class="panel-body">
	                       		<strong>说明：</strong>完成任务即可获得200元代金卷<br><strong>任务：</strong>超过15个用户来“抢”代金卷即算完成任务
			                          <div class="order-btn">
			                            <a href="./task_detail.php"  class='btn btn-warning btn--decorated pull-right check__btn'><i class='icon-cart'></i>领取任务</a>
			                          </div>
							      </div>
							    </div><!-- end accordion panel body -->
							  </div> <!-- end accordion panel -->


							</div><!-- end accordion blocks -->
				</div> <!-- end col -->

				<aside class="col-sm-4">
					<div class="sidebar">
						<div class='shopping-result'>
	                        <h3 class="heading-helper heading-helper--large shopping-result__heading">每日签到</h3>

	                        <table class="table--short">
	                          <colgroup class="col-half col--dark">
	                          <colgroup class="col-half col--light">
	                          <tr>
	                            <td>   签到即得<strong> ￥5 </strong>代金卷</td>
	                     
	                          </tr>
	                          <tr>
	                            <td>   每天限签1次</td>
	             
	                          </tr>
	                    
	                        </table>

	                        <div class="checkout__sum"><a href="./passport/login.php"  class='btn btn-warning btn--decorated pull-right check__btn'><i class='icon-cart'></i>签到领奖</a></div>
	                    </div>

						<!-- <h2 class="heading heading--section-separate">说明</h2> -->

		<!-- 				<ul class="list list--marker">
							<li class="list__item"><a class="list__link" href="#">任务FAQs</a></li>
	
						</ul> -->
					</div>
				</aside><!-- end col -->
			</div><!-- end row -->
		</section><!-- end container -->

		<!-- Colored devider -->
		<div class="devider-color bottom-space--uni"></div>

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
				checkNext();
				selectBox();
			});
		</script>

</body>
</html>
