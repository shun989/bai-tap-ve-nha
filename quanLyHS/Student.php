<?php


class Student
{
    private $name;
    private $age;
    private $math;
    private $phy;
    private $chem;

    public function __constuct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getMath()
    {
        return $this->math;
    }

    public function setMath($math)
    {
        $this->math = $math;
    }

    public function getPhy()
    {
        return $this->phy;
    }

    public function setPhy($phy)
    {
        $this->phy = $phy;
    }

    public function getChem()
    {
        return $this->chem;
    }

    public function setChem($chem)
    {
        $this->chem = $chem;
    }

    public function addScores($math, $phy, $chem)
    {
        $this->setMath($math);
        $this->setPhy($phy);
        $this->setChem($chem);
    }

    public function getGPA()
    {
        return $this->GPA;
    }

    public function setGPA($GPA)
    {
        $this->GPA = ($this->math + $this->phy + $this->chem)/3;
    }

 public function display()
    {
        echo "<tr>";
            echo "<td>$this->setName</td>";
            echo "<td>$this->setAge</td>";
            echo "<td>$this->setMath</td>";
            echo "<td>$this->setPhy</td>";
            echo "<td>$this->setChem</td>";
            echo "<td>$this->setGPA</td>";
            echo "<td><button onclick='delete()'> Delete</button></td>";
            echo "<td><button type='submit' name='edit'> Edit</button></td>";
        echo "</tr>";
}

}