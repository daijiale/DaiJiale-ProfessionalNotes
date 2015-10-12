/**
 * 图片居中适配组件
 * @author kevenfeng
 */
(function(window){
    var imgAdapt=function(options){
        var defaultOptions = {
            "imgDoms":document.getElementsByTagName("img"),
            "showAlign":"center",//1.center：图片居中显示2.left：图片靠左显示3.right:图片靠右显示4.top:图片靠上显示5.bottom:图片靠下显示
            "imgWidth":0,
            "imgHeight":0,
            "pWidth":0,//父节点宽度
            "pHeight":0//父节点高度
        }

        //默认值
        for (var i in defaultOptions) {
            if (options[i]===undefined) {
                options[i] = defaultOptions[i];
            }
        }

        var imgDomtype = Object.prototype.toString.call(options.imgDoms).slice(8, -1);
        var imgDoms = options.imgDoms;

        
            for(var i= 0;i<imgDoms.length;i++){
                var value = imgDoms[i];
                if(options.pWidth == 0||options.pHeight == 0){
                    options.pWidth = value.parentNode.offsetWidth;
                    options.pHeight =  value.parentNode.offsetHeight;
                }
				
                value.parentNode.style.cssText = "position:relative;overflow:hidden;width:"+options.pWidth+"px;height:"
                    +options.pHeight+"px;";
                adaptImgDom(value);
            }
        
        var scale =  options.pWidth/options.pHeight;


        //将图片按照固定宽高比例来适配
        function adaptImgDom(dom){
            getImgSize(dom,function(imgWidth,imgHeight){
                var picShape = imgWidth / imgHeight;
                if (picShape > scale) {//固定高度
                    var picPosition = options.pWidth/2;
                    var picMargin = options.pHeight;
                    var newImgWidth = picMargin*picShape;
                    if(options.showAlign == "left"){
                        dom.style.cssText = "position:absolute;width:"+newImgWidth+"px;height:"
                            +picMargin+"px;";
                    }else if(options.showAlign == "right"){
                        dom.style.cssText = "position:absolute;width:"+newImgWidth+"px;height:"
                            +picMargin+"px;left:"+(options.pWidth-newImgWidth)+"px;";
                    }else{
                        dom.style.cssText = "position:absolute;width:"+newImgWidth+"px;height:"
                            +picMargin+"px;margin-left:"+(-newImgWidth/2)+"px;left:"+picPosition+"px;";
                    }
                }else {//固定宽度
                    var picPosition = options.pHeight/2;
                    var picMargin = options.pWidth;
                    var newImgHeight = picMargin/picShape;
                    if(options.showAlign == "top"){
                        dom.style.cssText = "position:absolute;height:"+newImgHeight+"px;width:"
                            +picMargin+"px;";
                    }else if(options.showAlign == "bottom"){
                        dom.style.cssText = "position:absolute;height:"+newImgHeight+"px;width:"
                            +picMargin+"px;top:"+(options.pHeight-newImgHeight)+"px;";
                    }else{
                        dom.style.cssText = "position:absolute;height:"+newImgHeight+"px;width:"
                            +picMargin+"px;margin-top:"+(-newImgHeight/2)+"px;top:"+picPosition+"px;";
                    }
                }
            })
        }

        //获取载入图片宽高
        function getImgSize(dom,callBack){
            if(options.imgWidth != 0&&options.imgHeight != 0){
                callBack(options.imgWidth,options.imgHeight);
            }else{
                var domImg = new Image();
                domImg.src = dom.getAttribute("src");

                var time = setInterval(function(){
                    var imgWidth = domImg.width;
                    var imgHeight = domImg.height;
                    if(imgWidth != 0&&imgHeight!=0){
                        clearInterval(time);
                        callBack(imgWidth,imgHeight);
                    }
                },2);

                domImg.onerror = function(){
                    clearInterval(time);
                }
            }
        }
    }

    // 向外暴露接口
    if(typeof define == 'function'){
        define('imgAdapt',[],function(){
            return imgAdapt;
        });
    }else{
        window.imgAdapt = imgAdapt;
    }
})(window);