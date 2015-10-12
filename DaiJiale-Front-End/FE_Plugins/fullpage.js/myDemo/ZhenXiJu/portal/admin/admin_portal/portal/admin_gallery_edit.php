<!--
author：daijiale
data：20150611
contact：www.daijiale.cn
-->
<!doctype html>
<html class="no-js">
<head>
<title>真喜聚</title>
    <?php include '../public/admin_head.php';?>
</head>

<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<?php include '../public/admin_header.php';?>


<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php include '../public/admin_sidebar.php';?>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">案例修改</strong></div>
    </div>

  
		<section class="container">
			<div class="product product--single">
						<div class="row">
							<div class="col-sm-4">
								<!-- Preview slider main area -->
								<div id="slideshow"  class="slideshow slidershow-large-normal"><img alt="" src="../../../../images/showcase/2.png"  /></div>
								
							
							</div><!-- end col -->

						
						</div><!-- end row -->
					</div>
     <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">案例名</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" placeholder="案例名">
         
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-phone" class="am-u-sm-3 am-form-label">案例标价</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-phone" placeholder="案例标价">
            </div>
          </div>




          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">案例简介</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro" placeholder="输入案例简介"></textarea>
              <small>500字以内写出你的案例简介...</small>
            </div>
          </div>

           <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">案例视频外链</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro" placeholder="输入案例优酷视频链接"></textarea>
            </div>
          </div>


          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="button" class="am-btn am-btn-primary">保存修改</button>
            </div>
          </div>
        </form>
      </div>
					

					
						           

						
		</section><!-- end container -->
</div>
</div>

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
<?php include '../public/admin_footer.php';?>

<?php include'../public/admin_script.php';?>
</body>
</html>
