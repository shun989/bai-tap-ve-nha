<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input{
        height: 25px;
    }
    table{
        text-align: center;
    }
</style>
<body>
<!--<h1>Quản lý học sinh.</h1>-->
<form action="" method="get">
    <fieldset>
        <legend>Add student.</legend>
            <div>
                <input type="text" name="name" placeholder="Ten">
                <input type="text" name="age" placeholder="ngay thang nam sinh">
                <input type="text" name="math" placeholder="diem toan">
                <input type="text" name="phys" placeholder="diem ly">
                <input type="text" name="chem" placeholder="diem hoa">
                <output type="text" name="gpa" placeholder="diem trung binh">
                <button type="submit" name="add">Add student</button>
            </div>
    </fieldset>
</form>
<!--<form action="" method="post">-->
<!--    <fieldset>-->
<!--        <legend>Edit.</legend>-->
<!--            <div>-->
<!--                <input type="text" name="name" placeholder="Ten">-->
<!--                <input type="text" name="age" placeholder="ngay thang nam sinh">-->
<!--                <input type="text" name="math" placeholder="diem toan">-->
<!--                <input type="text" name="phys" placeholder="diem ly">-->
<!--                <input type="text" name="chem" placeholder="diem hoa">-->
<!--                <output type="text" name="gpa" placeholder="diem trung binh">-->
<!--                <button type="submit" name="edit">Edit student</button>-->
<!--            </div>-->
<!--    </fieldset>-->
<!--</form>-->
<table border="1px" width="100%" >
    <caption style="text-align: center"><h1>Danh sach sinh vien</h1></caption>
    <tr>
        <th>STT</th>
        <th>Ho ten</th>
        <th>Ngay sinh</th>
        <th>Diem toan</th>
        <th>Diem ly</th>
        <th>Diem hoa</th>
        <th>GPA</th>
        <th></th>
        <th></th>
    </tr>
<?php
//include_once ('Student.php');
//    if(isset($_POST["name"])) {$_POST["name"];}
//    if(isset($_POST["age"])) {$_POST["age"];}
//    if(isset($_POST["math"])) {$_POST["math"];}
//    if(isset($_POST["phys"])) {$_POST["phys"];}
//    if(isset($_POST["chem"])) {$_POST["chem"];}
//
//    $name = ($_POST["name"]);
//    $age = ($_POST["age"]);
//    $math = ($_POST["math"]);
//    $phys = ($_POST["phys"]);
//    $chem = ($_POST["chem"]);
//
//$student = new Student();
//$studentslist = array(
//    "1" => array("name" => "Lộc văn Khôi",
//        "ngaysinh" => "1995",
//        "toan" => 5,
//        "ly" => 6,
//        "hoa" => 7,
//        "gpa" => ''),
//    "2" => array("name" => "Nguyễn văn Trọng",
//        "ngaysinh" => "2001",
//        "toan" => 6,
//        "ly" => 5,
//        "hoa" => 8,
//        "gpa" => ''),
//    "3" => array("name" => "Trần đức Duy",
//        "ngaysinh" => "2001",
//        "toan" => 7,
//        "ly" => 6,
//        "hoa" => 6,
//        "gpa" => ''),
//    "4" => array("name" => "Đoàn hồng Quân",
//        "ngaysinh" => "1998",
//        "toan" => 6,
//        "ly" => 6,
//        "hoa" => 7,
//        "gpa" => ''),
//
//);
include_once "Myclass.php";
include_once "Student.php";
$myClass = new Myclass();
$students = $myClass->showAllStudent();
$students = array(
    "1" => array('ten'=>$name = "Lộc văn Khôi",
        'ngaysinh'=>$age = "1995",
        'toan'=>$math = 5,
        'ly'=>$phys = 6,
        'hoa'=>$chem = 7,
        'gpa'=>$gpa = ($math + $phys + $chem)/3),
    "2" => array('ten'=>$name = "Nguyễn văn Trọng",
        'ngaysinh'=>$age = "2001",
        'toan'=>$math = 6,
        'ly'=>$phys = 6,
        'hoa'=>$chem = 8,
        'gpa'=>$gpa = ($math + $phys + $chem)/3),
    "3" => array('ten'=>$name = "Trần đức Duy",
        'ngaysinh'=>$age = "2001",
        'toan'=>$math = 7,
        'ly'=>$phys = 6,
        'hoa'=>$chem = 6,
        'gpa'=>$gpa = ($math + $phys + $chem)/3),
    "4" => array('ten'=>$name = "Đoàn hồng Quân",
        'ngaysinh'=>$age = "1998",
        'toan'=>$math = 6,
        'ly'=>$phys = 7,
        'hoa'=>$chem = 9,
        'gpa'=>$gpa = ($math + $phys + $chem)/3),

);
foreach($students as $key => $student){
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$student['ten']."</td>";
    echo "<td>".$student['ngaysinh']."</td>";
    echo "<td>".$student['toan']."</td>";
    echo "<td>".$student['ly']."</td>";
    echo "<td>".$student['hoa']."</td>";
    echo "<td>".$student['gpa']."</td>";
    echo "<td><button name='deleteStudent'>Delete</button> </td>";
    echo "<td><button name='editStudent'>Edit</button></td>";
    echo "</tr>";
}
    $deleteStudent = $students.splice([],1);
    echo $students();


?>
</table>
</body>
</html>
