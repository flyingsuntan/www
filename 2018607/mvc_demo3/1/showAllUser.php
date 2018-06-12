<?php
header("content-type:text/html; charset=utf8");//设置输出的字符编码为utf8
require './UserModel.class.php';
require './ModelFactory.class.php';
//实例化模型类，并从中获取2份数据：
if(!empty($_GET['act']) && $_GET['act'] == 'del'){
	$id = $_GET['id'];
	$obj = ModelFactory::M('UserModel');
	$result = $obj->delUserById($id);
	echo "<font color=red>删除成功！</font>";
}

//$obj_user = new UserModel();	//这一行使用下一行代替
$obj_user = ModelFactory::M('UserModel');
$data1 = $obj_user->GetAllUser();	//是一个二维数组
$data2 = $obj_user->GetUserCount();	//是一个数字


//载入视图文件，以显示该2份数据：
include './showAllUser_view.html';
