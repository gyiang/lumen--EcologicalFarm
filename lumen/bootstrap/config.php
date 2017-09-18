<?php

// this contains the application parameters that can be maintained via GUI
return array(

	// 全局配置 --------------------------------------------------------------------------------------------------------
	// 系统升级中的状态
	'apiAppUpgradeing' => false,
	// 只允许Json类型的请求
	'apiRequestOnlyJson' => false,
	// 允许跨域请求
	'apiAllowCrossDomain' => true,
	// 上传文件的本地保存目录（必须“/”结尾）
	'apiUploadFilePath' => dirname(dirname(__FILE__)) . '/public/upload/',
	// 上传文件的域名
	'apiUploadFileUrl' => 'upload/',

	// 后台相关配置 ----------------------------------------------------------------------------------------------------
	// 后台Token的超时时间（2个小时）
	'apiAdminTokenOverTime' => 24 * 3600,
	// 后台测试用户ID（0：关闭测试环境 N：数值表示测试用户的ID）
	'apiAdminTestId' => 0,

	// 前台相关配置 ----------------------------------------------------------------------------------------------------
	// 前台Token的超时时间（2个小时）
	'apiAppTokenOverTime' => 7200,
	// 前台测试用户ID（0：关闭测试环境 N：数值表示测试用户的ID）
	'apiAppTestId' => 0,

	// 缓存相关配置 ----------------------------------------------------------------------------------------------------
	// 缓存KEY
	'cacheKeys' => array(),
	// 管理员权限控制 ----------------------------------------------------------------------------------------------------
	'adminPower' => array(),

	// 微信小程序相关配置 ----------------------------------------------------------------------------------------------------
	//小程序唯一标识appid 
	'weixinAppId_XCX' => 'wxaa5718359fb81b27',
	//小程序小程序的app secret 
    'weixinAppSecret_XCX' => '9769c4c453d9c8454656ea97119924ae',
);

