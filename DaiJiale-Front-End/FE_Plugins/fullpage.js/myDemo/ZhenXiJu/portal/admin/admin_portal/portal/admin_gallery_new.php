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

    

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
        <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="am-g">
              <div class="am-u-md-4">
                <img class="am-img-circle am-img-thumbnail" src="http://amui.qiniudn.com/bw-2014-06-19.jpg?imageView/1/w/1000/h/1000/q/80" alt=""/>
              </div>
              <div class="am-u-md-8">
                <p>你可以<a href="#"></a>本地上传案例图像。 </p>
                <form class="am-form">
                  <div class="am-form-group">
                    <input type="file" id="user-pic">
                    <p class="am-form-help">请选择要上传的文件...</p>
                    <button type="button" class="am-btn am-btn-primary am-btn-xs">保存</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


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
    </div>
  </div>
  <!-- content end -->

</div>

<a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
<?php include '../public/admin_footer.php';?>

<?php include'../public/admin_script.php';?>
</body>
</html>
