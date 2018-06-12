<?php
require 'ProductModel.class.php';
require 'ModelFactory.class.php';
class ProductController {
    function ShowALlProductAction(){
        $obj = ModelFactory::M('ProductModel');
        $date = $obj->GetAllProduct();
        include "Product_list.html";
    }
    function DetailAction(){

    }
    function DelAction(){
        $id = $_GET['id'];
        $obj = ModelFactory::M('ProductModel');
        $date = $obj->delProductById($id);
        echo "删除成功";
        echo "<a href='?'>返回</a>";
    }
    function ShowProductFormAction(){
        include "addProduct.html";
    }
    function AddProductAction(){
        $pro_name = $_POST["pro_name"];
        $protype_id = $_POST["protype_id"];
        $price = $_POST["price"];
        $pinpai = $_POST["pinpai"];
        $chandi = $_POST["chandi"];
        $obj = ModelFactory::M('ProductModel');
        $result = $obj->AddProductAction($pro_name, $protype_id, $price, $pinpai, $chandi);
        echo "添加数据成功";
        echo "<a href='?'>返回</a>";
    }
    function IndexAction(){
        $obj = ModelFactory::M('ProductModel');
        $date = $obj->GetAllProduct();
        include "Product_list.html";
    }
}
$ctr1 = new ProductController();
$act = !empty($_GET['act']) ? $_GET['act'] : "Index";
$action = $act."Action";
$ctr1->$action();
?>