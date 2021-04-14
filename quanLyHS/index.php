<?php

//include_once "fileClass/Student.php";
//include_once "fileClass/StudentManager.php";
//
//$userManager = new StudentManager('data.json');
//$users = $userManager->getAll();
include_once "Myclass.php";
include_once "Student.php";
$myClass = new Myclass();
$students = $myClass->showAllStudent();
?>

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
    table{
        border: 1px black solid;
        border-collapse: collapse;
        width: 100%;
        height: 25px;
        text-align: center;
    }
    td{
        height: 20px;
    }
</style>
<body>

<div class="container">
    <a href="add.php">Add</a>
    <table border="">
        <tr style="background-color: greenyellow; font-size: 25px">
            <td>STT</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td></td>
        </tr>
        <?php foreach ($students as $key => $student) { ?>
            <tr>
                <td><?php echo $key + 1; ?> </td>
                <td><?php echo $student->getName(); ?> </td>
                <td><?php echo $student->getEmail(); ?> </td>
                <td><?php echo $student->getAddress(); ?> </td>
                <td><a onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $key ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
