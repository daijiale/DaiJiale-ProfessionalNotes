<!doctype html>
<html>
<head>

	<?php include'../public/head.php'; ?>
			<link rel="stylesheet" type="text/css" href="../css/tanchuceng/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/tanchuceng/demo.css" />
		<!-- common styles -->
		<link rel="stylesheet" type="text/css" href="../css/tanchuceng/dialog.css" />
		<!-- individual effect -->
		<link rel="stylesheet" type="text/css" href="../css/tanchuceng/dialog-laura.css" />
		<script src="../js/tanchuceng/snap.svg-min.js"></script>
		<script src="../js/tanchuceng/modernizr.custom.js"></script>
	<title>真喜聚_预约特惠</title>



</head>

<body background="../index_static/777_small.jpg">

	<div style="position:absolute; top:30%;left:10%;float:left">

		<img src="../images/100daijinjuan1.png" left="100px">

	</div>

	<div style="position:absolute; top:20%;left:60%;float:left">
		<h2>分享转发：</h2>
		<div class="share share--small">
			<a class="share__item share__item--qq" href="#"><i class="fa fa-qq"></i>QQ</a>
			<a class="share__item share__item--weixin" href="#"><i class="fa fa-weixin"></i>微信</a>
			<a class="share__item share__item--weibo" href="#"><i class="fa fa-weibo"></i>微博</a>
			<a class="share__item share__item--renren" href="#"><i class="fa fa-renren"></i>人人</a>
		</div>
		<h2>也可以复制下列网址转发：</h2>
		<input class="contact__field" name="contact-name" type="text" value="http://www.daijiale.cn">


	</div>

	<div style="position:absolute; bottom:15%;left:50%;float:left">
		<!-- <a class="btn btn-warning btn--decorated product__btn" href="./passport/login.php">抢</a> -->
		<a  data-dialog="somedialog" class="btn btn-warning btn--decorated product__btn trigger">抢</a>
	</div>
		

		
				
				<div id="somedialog" class="dialog">
					<div class="dialog__overlay"></div>
					<div class="dialog__content">
						<div class="morph-shape" data-morph-open="M0,33.699V0c0,0,13.458,0,40.125,0C66.793,0,80,0,80,0v33.974v0.103V60c0,0-13.333,0-40,0c-26.667,0-40,0-40,0V33.699" data-morph-close="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60
	C13.333,60,0,47.062,0,47.062V33.699">
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
								<path d="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60
	C13.333,60,0,47.062,0,47.062V33.699"></path>
							</svg>
						</div>
						<div class="dialog-inner">
							<h2><strong>恭喜您</strong>，已领取10元代金卷</h2><div><button class="action" data-dialog-close>关闭</button></div>
						</div>
					</div>
				</div>

	<?php include'../public/header.php'; ?>
	
	<?php include'../public/script.php'; ?>

	<script>
		$(document).ready(function() {
			staffSlider();
			scrollSlider();
		});
	</script>
		<script src="../js/tanchuceng/classie.js"></script>
		<script src="../js/tanchuceng/dialogFx.js"></script>
		<script>
			(function() {

				var dlgtrigger = document.querySelector( '[data-dialog]' ),

					somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
					// svg..
					morphEl = somedialog.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

			})();
		</script>

</body>
</html>
