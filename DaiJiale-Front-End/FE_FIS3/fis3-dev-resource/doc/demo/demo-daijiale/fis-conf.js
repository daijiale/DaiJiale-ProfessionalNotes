// 加 md5
// fis.match('*.{js,css,png}', {
//   useHash: true
// });

// 启用 fis-spriter-csssprites 插件
// fis.match('::package', {
//   spriter: fis.plugin('csssprites')
// })

// 对 CSS 进行图片合并
// fis.match('*.css', {
//   // 给匹配到的文件分配属性 `useSprite`
//   useSprite: true
// });

// fis.match('*.js', {
//   // fis-optimizer-uglify-js 插件进行压缩，已内置
//   optimizer: fis.plugin('uglify-js')
// });

// fis.match('*.css', {
//   // fis-optimizer-clean-css 插件进行压缩，已内置
//   optimizer: fis.plugin('clean-css')
// });

// fis.match('*.png', {
//   // fis-optimizer-png-compressor 插件进行压缩，已内置
//   optimizer: fis.plugin('png-compressor')
// });
// 
 
// fis.media() 接口提供多种状态功能，比如有些配置是仅供开发环境下使用，有些则是仅供生产环境使用的。
// fis.media() 可以使配置文件变为多份（多个状态，一个状态一份配置）。
// fis3 release rd push 到 RD 的远端机器上
// fis3 release qa push 到 QA 的远端机器上
// fis.media('rd').match('*', {
//   deploy: fis.plugin('http-push', {
//     receiver: 'http://remote-rd-host/receiver.php'
//   })
// });

// fis.media('qa').match('*', {
//   deploy: fis.plugin('http-push', {
//     receiver: 'http://remote-qa-host/receiver.php'
//   })
// });
// 



//启用 fis-spriter-csssprites 插件
fis.match('::package', {
  spriter: fis.plugin('csssprites')
});

fis.match('*.js',{
	useHash:false,
	optimizer: fis.plugin('uglify-js')
});

fis.match('*.css',{
	useHash:false,
	optimizer: fis.plugin('clean-css'),
	// 对 CSS 进行图片合并
	// 给匹配到的文件分配属性 `useSprite`
	useSprite: true
});

fis.match('*.png',{
	useHash:false,
	optimizer: fis.plugin('png-compressor')
});

// 可能有时候开发的时候不需要压缩、合并图片、也不需要 hash。那么给上面配置追加如下配置；
// fis release debug 启用 media debug 的配置，覆盖上面的配置，把诸多功能关掉。

fis.media('debug').match('*.{js,css,png}', {
  useHash: false,
  useSprite: false,
  optimizer: null
})