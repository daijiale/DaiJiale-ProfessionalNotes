<!--
author：daijiale
data：20150611
contact：www.daijiale.cn
-->
<!doctype html>
<html class="no-js">
<head>
  <title>真喜聚</title>
  <?php include'../public/admin_head.php';?>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<?php include'../public/admin_header.php';?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php include'../public/admin_sidebar.php';?>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">密码重置</strong> </div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">




      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label for="user-qq" class="am-u-sm-3 am-form-label">旧密码</label>
            <div class="am-u-sm-9">
              <input type="text" id="old_passpord" placeholder="旧密码">
           
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-password" class="am-u-sm-3 am-form-label">新密码</label>
            <div class="am-u-sm-9">
              <input type="password" id="password" placeholder="新密码">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-password" class="am-u-sm-3 am-form-label">再次输入新密码</label>
            <div class="am-u-sm-9">
              <input type="password" id="password2" placeholder="再次输入新密码">
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
