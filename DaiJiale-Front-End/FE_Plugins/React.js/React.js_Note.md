![](http://image.beekka.com/blog/2015/bg2015033103.png)

# React.js 插件包安装

- [React.js 下载From Github](https://github.com/facebook/react)

- [React.js官方文档和下载资源包](http://docs.reactjs-china.com/react/index.html)

-  ```$ git clone git@github.com:facebook/react.git
 ```

# HTML 模板
## 工程下新建资源包目录，存储必要的资源库

- [`build`](https://github.com/ruanyf/react-demos/tree/master/build)
    - browser.min.js
    - jquery.min.js
    - JSXTransformer.js
    - react.js
    - react-0.13.4.js
    - react-0.13.4.min.js
    - react-dom.js
    - react-with-addons.js
    - react-with-addons.min.js



## React.js网页结构形式：

```html
<!DOCTYPE html>
<html>
  <head>
    <script src="../build/react.js"></script>
    <script src="../build/react-dom.js"></script>
    <script src="../build/browser.min.js"></script>
  </head>
  <body>
    <div id="example"></div>
    <script type="text/babel">
      // ** Our code goes here! **
    </script>
  </body>
</html>
```

# 其他参考资料：

[React官方文档](http://docs.reactjs-china.com/react/index.html)

[阮一峰_React入门实例教程](http://www.ruanyifeng.com/blog/2015/03/react.html)

[React_Github](https://github.com/facebook/react)