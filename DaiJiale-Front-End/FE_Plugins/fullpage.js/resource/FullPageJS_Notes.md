# Fullpage.js-API介绍以及使用教程

## 插件引入

[原作者Github下载地址](https://github.com/alvarotrigo/fullPage.js)

主体插件资源包为：

```html
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

```html
<div id="fullpage">
	<div class="section">一些内容</div>
	<div class="section">一些内容</div>
	<div class="section">一些内容</div>
	<div class="section">一些内容</div>
</div>
```

横向滚动：

```html
<div class="section">
	<div class="slide">Slide 1</div>
	<div class="slide">Slide 2</div>
	<div class="slide">Slide 3</div>
	<div class="slide">Slide 4</div>	
</div>
```

激活fullpage效果

```javascript
$(document).ready(function(){
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

- recordHistory:是否记录历史，默认为true，可以记录页面滚动的历史，通过浏览器的前进后退来导航。注意如果设置了autoScrolling:false，那么这个配置也将被关闭，即设置为false。

- menu:绑定菜单，设定的相关属性与anchors的值对应后，菜单可以控制滚动，默认为false。可以设置为菜单的jQuery选择器。 

- navigation:是否显示导航，默认为false。如果设置为true，会显示小圆点，作为导航。

- navigationPosition：导航小圆点的位置，可以设置为left或者right。

- navigationTooltips：导航小圆点的tooltips设置，默认为[]，注意按照顺序设置。

- showActiveTooltip:  是否显示当前页面的导航的tooltip信息，默认为false

- slidesNavigation：是否显示横向幻灯片的导航，默认为false。

- slidesNavPosition： 横向幻灯片导航的位置，默认为bottom，可以设置为top或者bottom。

- scrollOverflow:内容超过满屏后是否显示滚动条，默认为false。如果设置为true，则会显示滚动条，如果要滚动查看内容，还需要jQuery.slimscroll插件的配合。slim scroll插件主要用于模拟传统的浏览器滚动条。

- sectionSelector：section的选择器，默认为.section。

- slideSelector：slide的选择器，默认为.slide 。       

## 函数方法

- moveSectionUp( ) : 向上滚动一页。

- moveSectionDown( ) : 向下滚动一页。

- moveTo(section,slide) : 滚动到第几页，第几个幻灯片，注意，页面是从1开始，而幻灯片，是从0开始。

- silentMoveTo(section,slide):滚动到第几页，和moveTo一样，但是没有动画效果。

- moveSlideRight( )：幻灯片向右滚动。

- moveSlideLeft( ) : 幻灯片向左滚动。 

- setAutoScrolling(boolean) : 动态设置autoScrolling

- setLockAnchors(boolean) : 动态设置lockAnchors

- setRecordHistory(boolean) : 动态设置recordHistory

- setScrollingSpeed(milliseconds) : 动态设置scrollingSpeed   

- setAllowScrolling(boolean,[directions]) : 添加或删除鼠标滚轮/滑动控制，第一个参数true为启用，false为禁用，后面的参数为方向，取值包含all，up，down，left，right，可以使用多个逗号分隔。

- destroy(type): 销毁fullpage特效，type可以不写，  或者使用all,不写type，fullpage给页面增加的样式和html元素还在，如果使用all，则样式，html等全部销毁，页面恢复和不使用fullpage相同的效果。

- reBuild（）：重新更新页面和尺寸，用于通过ajax请求后改变了页面结构之后，重建效果。 

## 懒加载

图片：

```html
<img data-src="image.png">
```
视频：

```html
<video>
		<source data-src="video.webm" type="video/webm" />
		<source data-src="video.mp4" type="video/mp4"/>
</vide>
```

## 回调

- afterLoad(anchorLink,index)：
滚动到某一section，且滚动结束后，会触发一次此回调函数，函数接收anchorLink和index两个参数，anchorLink是锚链接的名称，index是序号，从1开始计算。
我们可以根据anchorLink和index参数值的判断，触发相应的事件。

- onLeave(index,nextIndex,direction): 在我们离开一个section时，会触发一次此回调函数，接收index、nextIndex和direction3个参数：
    -  index是离开的"页面"的序号，从1开始计算；
    - nextIndex是滚动到的目标“页面”的序号，从1开始计算；
    - direction判断往上滚动还是往下滚动，值是up或者down
    
 通过return false，可以取消滚动。
 
 
 - afterRender( ) : 页面结构生成后（初始化）的回调函数。
 
 - afterResize( ) : 浏览器窗口尺寸改变后的回调函数。
 
 - afterSlideLoad(anchorLink,index,slideAnchor,slideIndex): 滚动到某一幻灯片后的回调函数，与afterLoad类似，接收anchorLink、index、slideIndex、direction4个参数。
 
 - onSlideLeave（anchorLink，index。slideIndex，direction，nextSlideIndex）：在我们离开一个slide时，会触发一次此回调函数，与onLeave类似，接收anchorLink、index、slideIndex、direction4个参数。
  
## Example
   ```javascript
   <script>
   $(document).ready(function(){
   	$('#fullpage').fullpage({
   		sectionsColor:['green','orange','gray','red'],
   		//controlArrows:false,
   		//verticalCentered:false,
   		//resize:true，
   		//scrollingSpeed:2000,
   		anchors:['page1','page2','page3','page4'],
   		//...
   		
   		//以下为回调
   		afterLoad:function(anchorLink,index){
   			console.log("afterLoad:anchorLink="+anchorLink+";index="+index);
   		},
   		onLeave:function(index,nextIndex,direction){
   			console.log("onLeave:index="+index+";nextIndex="+nextIndex+";direction="+direction);
   		},
   	});
   } );
   
   </script>
   
   ```
   
   
##    我基于fullpage.js的项目

- [真喜聚官网首页](http://daijialewebdesign.sinaapp.com/ZhenXiJu/index.php);
- [小枫主页]();
- [小枫特卖]();

   
   
**   更多API和方法请参考：[官网文档](https://github.com/alvarotrigo/fullPage.js)，以此为准。**