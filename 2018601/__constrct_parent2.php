<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/1
 * Time: 11:53
 */
//公司成员
class Menber{
    public $name = "匿名";
    public $age = 18;
    public $sex;
    function __construct($name,$age,$sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function ShowInfo(){
        echo "<br />姓名：{$this->name}";
        echo "<br />年龄：{$this->age}";
        echo "<br />性别：{$this->sex}";
    }
}
//讲师类
class Teacher extends Menber{
    public $edu = "大学";
    public $major ;
    function __construct($name,$age,$sex,$edu,$major)
    {
       // $this->name = $name;
        //$this->age = $age;
        //$this->sex = $sex;
        parent::__construct($name,$age,$sex);
        $this->edu = $edu;
        $this->major = $major;
    }
    function ShowInfo()
    {
        parent::ShowInfo(); // TODO: Change the autogenerated stub
        echo "<br />学历：{$this->edu}";
        echo "<br />专业：{$this->major}";
    }

}
$t1 = new Teacher('张三',30,'男','大学','PHP');
$t1->ShowInfo();

?>