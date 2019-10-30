ThinkPMS 1.0
===============

> 运行环境要求 PHP7.1+
> 
> ThinkPMS 是一款只为API接口服务的框架
>
> 精简的代码和直观的目录，轻量又迅捷

#### 主要特性

* 采用`PHP7`强类型（严格模式）
* 支持更多的`PSR`规范
* 原生多应用支持
* 更强大和易用的查询
* 全新的事件系统
* 模型事件和数据库事件统一纳入事件系统
* 内部功能中间件化
* SeasLog 更轻量的高性能日志系统
* Annotation 简洁直观的注解管理
* 友好直观的开发者调试输出
* 对IDE更加友好
* 迅捷响应的速度，高REQ的吞吐率，低消耗的内存占比

#### 安装方法

	//如链接速度慢，可更换 composer 源
	composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/

	// 首次安装
	composer create-project sycit/thinkpms
	
	// 核心更新
	composer update sycit/framework

#### SeasLog 安装方法

下载对应版本 目前是 2.0.2 版本

	https://pecl.php.net/package/SeasLog

php.ini 配置 windows例子

	[SeasLog]
	;添加扩展
	extension=php_seaslog
	;=================================================
	;===============     SeasLog 配置     ============
	;=================================================
	;默认log根目录
	seaslog.default_basepath = D:/wwwroot
	;默认logger目录
	seaslog.default_logger = "default"
	;日期格式配置 默认"Y-m-d H:i:s"
	seaslog.default_datetime_format = "Y-m-d H:i:s"
	;日志格式模板 默认"%T | %L | %P | %Q | %t | %M"
	seaslog.default_template = "%T | %L | %H | %P | %Q | %t | %m  | %D | %R | %M"
	;是否以目录区分Logger 1是(默认) 0否
	seaslog.disting_folder = 1
	;是否以type分文件 1是 0否(默认)
	seaslog.disting_type = 1
	;是否每小时划分一个文件 1是 0否(默认)
	seaslog.disting_by_hour = 0
	;是否启用buffer 1是 0否(默认)
	seaslog.use_buffer = 1
	;buffer中缓冲数量 默认0(不使用buffer_size)
	seaslog.buffer_size = 100
	;cli运行时关闭buffer
	;1是 0否(默认)
	seaslog.buffer_disabled_in_cli = 0
	;记录日志级别，数字越大，根据级别记的日志越多。
	;0-EMERGENCY 1-ALERT 2-CRITICAL 3-ERROR 4-WARNING 5-NOTICE 6-INFO 7-DEBUG 8-ALL
	;默认8(所有日志)
	;
	;   注意, 该配置项自1.7.0版本开始有变动。
	;   在1.7.0版本之前, 该值数字越小，根据级别记的日志越多: 
	;   0-all 1-debug 2-info 3-notice 4-warning 5-error 6-critical 7-alert 8-emergency
	;   1.7.0 之前的版本，该值默认为0(所有日志);
	seaslog.level = 8
	;日志函数调用回溯层级
	;影响预定义变量 %F 中的行数 默认0
	seaslog.recall_depth = 0
	;自动记录notice 默认0(关闭)
	seaslog.trace_notice = 0
	;自动记录warning 默认0(开启)
	seaslog.trace_warning = 0
	;自动记录错误 默认1(开启)
	seaslog.trace_error = 1
	;自动记录异常信息 默认0(关闭)
	seaslog.trace_exception = 0
	;日志存储介质 1File 2TCP 3UDP (默认为1)
	seaslog.appender = 1
	;写入重试次数默认0(不重试)
	seaslog.appender_retry = 0
	;接收ip 默认127.0.0.1 (当使用TCP或UDP时必填)
	seaslog.remote_host = "127.0.0.1"
	;接收端口 默认514 (当使用TCP或UDP时必填)
	seaslog.remote_port = 514
	;接收端口的超时时间 默认1秒
	seaslog.remote_timeout = 1
	;过滤日志中的回车和换行符 (默认为0)
	seaslog.trim_wrap = 0
	;是否开启抛出SeasLog自身异常  1开启(默认) 0否
	seaslog.throw_exception = 1
	;是否开启忽略SeasLog自身warning  1开启(默认) 0否
	seaslog.ignore_warning = 1


> 更多请参考 https://gitee.com/neeke/SeasLog

#### 版权信息

ThinkPMS遵循 MIT 许可发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2019 by ThinkPMS (http://sycit.cn)

All rights reserved。

ThinkPMS 著作权所有者为佛山市三叶草网络有限公司。

更多细节参阅 [LICENSE.txt](LICENSE.txt)