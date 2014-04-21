什么是MelonFramework
-------------
是一个用于php5.3或以上开源的轻量级php框架，基于Apache Licence 2.0开源协议发布。支持mvc与restful程序的构建，并有可动态扩展的模块引擎、独创的包体系、触发器（类aop）等功能。<br />
框架提供了常见的基本操作，非常低的偶合度可以帮助你灵活构建适合自己的开发环境。<br />

官网正式开放：[http://framework.melonol.com](http://framework.melonol.com)

文档
-------------
使用浏览器打开document.html即可，或直接访问官网

意见和建议
-------------
>如果在使用过程中发现任何问题，或有任何建议，都欢迎你发送邮件到这个地址： admin@melonol.com




版本历史
-------------
<pre>

-- v0.2.1 --

修复框架在域名子目录路由指向控制器错误的问题
修复APP Base配置优先级问题


路由规则更改，通过路由配置可自动识别模块和控制器，可查看APP路由文档说明
增加alink功能，可以根据当前的路由配置生成对应规则的URL
增加\Melon\Lib\PDOModel模型，MVC模型默认继承这x
控制器增加location方法，支持alink跳转



-- v0.2 --

修复autoload没有权限问题
修复包内文件互相加载没有权限问题
优化触发器异常处理
优化错误处理逻辑
移除load、acquire等脚本载入方法智能解释相对路径的方式，这样跟原生方法的一致性相符

增加PDO数据模型
增加主体类数据库接口
增加可选的APP（MVC）模式
增加HTML格式的文档

</pre>