var request = require('request');
var cheerio = require('cheerio');
var debug = require('debug')('blog:updata');

debug('读取博文内容');

//read blog page
request('http://blog.sina.com.cn/s/blog_59f3b7970100ajns.html',function(err,res){
  if(err) return callback(err);
  //根据网页内容创建DOM操作对象
  var $ =cheerio.load(res.body.toString());

  //获取文章标签
  var tags = [];
  $('.blog_tag h3 a').each(function(){
   var tag = $(this).text().trim();
   if(tag){
   	tags.push(tag);
   }

  });

  //require the article content
  var content = $('.articalContent').html().trim();
  //输出结果
  console.log({tags:tags,content:content});
});