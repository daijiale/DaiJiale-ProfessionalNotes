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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改资料</strong></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
        <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="am-g">
              <div class="am-u-md-4">
                <img class="am-img-circle am-img-thumbnail" src="http://amui.qiniudn.com/bw-2014-06-19.jpg?imageView/1/w/1000/h/1000/q/80" alt=""/>
              </div>
              <div class="am-u-md-8">
                <p>你可以使用<a href="#">gravatar.com</a>提供的头像或者使用本地上传头像。 </p>
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

        <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="user-info">
              <p>等级信息</p>
              <div class="am-progress am-progress-sm">
                <div class="am-progress-bar" style="width: 60%"></div>
              </div>
              <p class="user-info-order">当前等级：<strong>LV8</strong> 活跃天数：<strong>587</strong> 距离下一级别：<strong>160</strong></p>
            </div>
          </div>
        </div>

      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">昵称/Name</label>
            <div class="am-u-sm-9">
              <input type="password" id="user-name" placeholder="姓名 / Name">
              <small>修改你的昵称。</small>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-phone" class="am-u-sm-3 am-form-label">手机/Telephone</label>
            <div class="am-u-sm-9">
              <input type="email" id="user-phone" placeholder="输入你的电话号码 / Telephone">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-jobs" class="am-u-sm-3 am-form-label">职业类型/Jobs</label>
            <div class="am-u-sm-9">
            <select data-am-selected="{btnSize: 'sm'}">
            <option value="option1">策划师</option>
            <option value="option2">主持人</option>
            <option value="option3">化妆师</option>
            <option value="option4">场地布置</option>
            <option value="option5">摄像师</option>
            <option value="option6">摄影师</option>
          
          </select>
        
            </div>
          </div>



          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">简介/Intro</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro" placeholder="输入个人简介"></textarea>
              <small>500字以内写出你的个人介绍...</small>
            </div>
          </div>

           <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">服务范围/Service</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro" placeholder="输入个人简介"></textarea>
              <small>1000字以内写出你的服务范围...</small>
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
