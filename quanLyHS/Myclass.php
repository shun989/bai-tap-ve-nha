
<?php

include_once "Student.php";
class Myclass
{
    private $students;
    private $index;


    public function __contruct($students,$index)
    {
       $this->students = [];
       $this->index = 0;
    }

    public function addStudent($student)
    {
        array_push($this->students,$student);
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function setSTudents(array $students):void
    {
        $this->students = $students;
    }

//    public function display()
//    {
//        echo "<tr>";
//        echo "<td>$this->name</td>";
//        echo "<td>$this->setAge</td>";
//        echo "<td>$this->setMath</td>";
//        echo "<td>$this->setPhy</td>";
//        echo "<td>$this->setChem</td>";
//        echo "<td>$this->setGPA</td>";
//        echo "<td><button onclick='delete()'> Delete</button></td>";
//        echo "<td><button type='submit' name='edit'> Edit</button></td>";
//        echo "</tr>";
//    }

    public function showAllStudent(){
        $str = '';
        for ($i = 0; $i < $this->students.length; $i++){
            $this->students[i].$this->index = i;
            $str += $this->students[i] . $this->display();
        }
        return $str;// = $this->students[i] . $student->display();
    }

    public function deleteStudent($index){
       return $this->students.splice($index,1);
    }


}