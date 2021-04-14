
<?php


class Myclass
{
    protected $name;
    protected $students;


    public function __contruct($name, $students)
    {
       $this->name = $name;
       $this->students = [];
    }

    public function addStudent($student)
    {
        $this->students.push($student);
    }

    public function showAllStudent(){
        $str = '';
        for ($i = 0; $i < $this->students.length; $i++){
            $this->students[i].$index = i;
            $str += $this->students[i] . display();
        }
        return $str;
    }

    public function deleteStudent($index){
        $this->students.splice($index,1);
    }


}