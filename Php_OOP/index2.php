<?php

class person
{
    private $id;
    private $name;
    private $birthday;
    private $address;

    function __construct($id = 1, $name = 'Huy', $birthday = '199x', $address = '79 thai thinh')
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
    }


    public function setB($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getB()
    {
        return $this->birthday;
    }


    public function running()
    {
        echo 'Ma ID: ' . $this->id . '</br>';
        echo 'Ten:' . $this->name . '</br>';
    }

    public function singing()
    {
        echo 'Sinh nhat: ' . $this->birthday . '</br>';
    }

    public function driving()
    {
        echo 'Dia chi: ' . $this->address . '</br>';
    }
}

class student extends person
{
    private $student_id;
    private $class;
    private $subject;
    private $time;
    private $score;

    public function __construct($id = 3, $name = 'Huy', $birthday = '199x', $address = '79 thai thinh', $student_id, $class, $subject, $time, $score)
    {
        parent::__construct($id = 1, $name, $birthday, $address, $student_id, $class, $subject, $time, $score);
        $this->student_id = 'SE90085';
        $this->class = 'PC703';
        $this->subject = 'C#';
        $this->time = '7h';
        $this->score = 10;
    }

    public function studying()
    {
        echo 'Ma sinh vien: ' . $this->student_id . '</br>';
        echo 'Lop: ' . $this->class . '</br>';
    }

    public function practical()
    {
        echo 'Hoc mon: ' . $this->subject . '</br>';
        echo 'Thoi gian: ' . $this->time . '</br>';
        echo 'Diem: ' . $this->score . '</br>';
    }

    public function singing()
    {
        //parent::singing();
        $this->setB(1995);
        echo 'Sinh nhat: ' . $this->getB() . '</br>';
    }
}

$huy = new student();
$huy->running();
$huy->singing();
$huy->driving();
$huy->studying();
$huy->practical();
