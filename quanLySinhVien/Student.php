<?php


class Student
{
    public $name;
    public $age;
    public $math;
    public $phy;
    public $chem;
    public $GPA;

    public function __contruct($name, $age, $math, $phy, $chem, $GPA)
    {
        $this->name = $name;
        $this->age = $age;
        $this->math = $math;
        $this->phy = $phy;
        $this->chem = $chem;
        $this->GPA = $GPA;
    }

    public function getGPA()
    {
        return ($this->math + $this->phy + $this->chem)/3;
    }

//    public function display()
//    {
//        echo "<tr>";
//        echo "<td>$this->name</td>";
//        echo "<td>$this->age</td>";
//        echo "<td>$this->math</td>";
//        echo "<td>$this->phy</td>";
//        echo "<td>$this->chem</td>";
//        echo "<td>$this->GPA</td>";
//        echo "<td><button onclick='delete()'> Delete</button></td>";
//        echo "<td><button type='submit' name='edit'> Edit</button></td>";
//        echo "</tr>";
//    }

}