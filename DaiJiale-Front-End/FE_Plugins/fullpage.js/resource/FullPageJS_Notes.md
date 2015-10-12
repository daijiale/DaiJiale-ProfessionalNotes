# Fullpage.js-API介绍以及使用教程

## 插件引入

主体插件资源包为：

```
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.7/jquery.fullPage.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.7/jquery.fullPage.js"></script>

```

PS:
[国内前端云资源包搜索引擎](http://www.cdnjs.cn/)

[国外前端云资源包搜索引擎](https://cdnjs.com/)

## 基本结构

纵向滚动：

```<div id="fullpage">
	<div class="section">一些内容</div>
	<div class="section">一些内容</div>
	<div class="section">一些内容</div>
	<div class="section">一些内容</div>
</div>
```

横向滚动：

```<div class="section">
	<div class="slide">Slide 1</div>
	<div class="slide">Slide 2</div>
	<div class="slide">Slide 3</div>
	<div class="slide">Slide 4</div>	
</div>
```

激活fullpage效果

```$(document).ready(function(){
   	$('#fullpage').fullpage();
   	});	
```

## 配置项目
- sectionsColor:可以为每一个section设置background-color属性。

- controlArrows：定义是否通过箭头来控制slide幻灯片，默认为true。当我们设置为false，则幻灯片左右两侧的箭头就会消失，在移动设备上，我们可以通过滑动来操作幻灯片。 
- easing:
   定义页面section滚动的动画方式，默认为easeInOutCubic，如果修改此项，需要引入jQuery.easings插件，或者jQuery ui。
   
- verticalCentered:每一页的内容是否垂直居中，默认为true，一般保持默认。

- resize:字体是否随着窗口缩放而缩放，默认为false 。

- scrollingSpeed：滚动速度，单位为毫秒，默认为700。 

- anchors:定义锚链接，默认值为[]。有了锚链接，用户就可以快速打开定位到某一页面。注意定义锚链接的时候，值不要和页面中任意的id或name相同，尤其是在IE浏览器下。而且定义时不需要加#

- lockAnchors：是否锁定锚链接，默认为false。如果设置为true，那么定义的锚链接，也就是anchors属性则没有效果，这个配置项使用的比较少。

- css3：
   是否使用CSS3 transforms来实现滚动效果，默认为true。这个配置项可以提高支持css3的浏览器，比如移动设备等的速度，如果浏览器不支持css3，则会使用jQuery来替代css3实现滚动效果。
    
- loopTop:
   滚动到最顶部后是否连续滚动到底部，默认为false。
   
- loopBottom ：
  滚动到最底部后是否连续滚动回顶部，默认为false。
  
- loopHorizontal：
  横向slider幻灯片是否循环滚动，默认为true。 
  
- autoScrolling:
  是否使用插件的滚动方式，默认为true，如果选择false，则会出现浏览器自带的滚动条，将不会按页滚动，而是按照滚动条的默认行为来滚动。
  
- scrollBar:
  是否包含滚动条，默认为false，如果设置为true，则浏览器自带的滚动条出现，页面滚动时还是按页滚动，但是滚动条的默认行为也有效。
  
- paddingTop/paddingBottom:设置每一个section顶部和底部的padding，默认都为0。一般如果我们需要设置一个固定在顶部或者底部的菜单、导航、元素等，可以使用这两个配置项。 

- fixedElements：固定的元素，默认为null，需要配置一个jQuery选择器。在页面滚动的时候，fixedElements设置的元素固定不动。（通常定义header不动）

- keyboardScrolling：是否可以使用键盘方向键导航，默认为true。

- touchSensitivity：在移动设备中滑动页面的敏感性，默认为5，是按百分比来衡量，最高为100，越大则越难滑动。

- continuousVertical ：是否循环滚动，默认为false。如果设置为true，则页面会循环滚动，而不像loopTop或者loopBottom那样出现跳动，注意这个属性和loopTop、loopBottom不兼容，不要同时设置。

- animateAnchor：锚链接是否可以控制滚动动画，默认为true。如果设置为false，则通过锚链接定位到某个页面显示不再有动画效果。


   ```
   <script>
   $(document).ready(function(){
   	$('#fullpage').fullpage({
   		sectionsColor:['green','orange','gray','red'],
   		//controlArrows:false,
   		//verticalCentered:false,
   		//resize:true，
   		//scrollingSpeed:2000,
   		anchors:['page1','page2','page3','page4'],
   	});
   } );
   
   </script>
   
   ```