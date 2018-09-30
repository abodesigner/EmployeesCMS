<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author M_abosalem.
 */
class Student {
    //put your code here
    protected $name;
    protected $age;
    protected $level;
    protected $score;
    protected $subjects = array(
        'Arabic'  => 0,
        'English' => 0,
        'Math'    => 0,
        'Science' => 0,
    );
    
    protected $minScore = 150;
    protected $maxScore = 300;
    
    public static $teacher = 'ayman shawky';
    
    const MIN_AGE = 11;
    const MAX_AGE = 21;
    
    public function setName($name){
        $this->name = filter_var(ucwords(substr($name, 0)), FILTER_SANITIZE_STRING);
     }
     
    public function getName(){
        return $this->name;
    }

    public function setLevel($level){
        $level = filter_var($level, FILTER_SANITIZE_NUMBER_INT);
        $level = abs($level);
        if($level < 1 || $level > 6){
            throw new Exception('Sorry');
        } else {
            $this->level = $level;
        }
    }
    
    public function getLevel(){
        return $this->level;
    }
    
    protected function setAge($age){
        
        echo get_called_class();
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        if($age < static::MIN_AGE || $age > static::MAX_AGE){
            throw new Exception("Sorry, your age should be between 11 & 21");
        } else{
            return $this->age = $age;
        }
    }
    
    public function getAge(){
        return $this->age;
    }
    
    public function getMinScore(){
        return $this->minScore;
    }
    
    public function setMinScore($minScore){
    }
    
    public function __construct($name, $age) {
        $this->setName($name);
        
        if($age > self::MIN_AGE){
           $this->setAge($age);
        } else {
            throw new Exception("Sorry the student age should be greater than 12");
        }  
    }
    
    public function setSubjects($subjectName, $score){
        if(array_key_exists($subjectName, $this->subjects)){
            $score = filter_var($score, FILTER_SANITIZE_NUMBER_INT);
            $this->subjects[$subjectName] = $score;
        } else {
            throw new Exception("This subject is not exist");
        }
    }
    
    public function  getSubjects(){
        return $this->subjects;
    }
    
    public static function showTeacher(){
        return self::$teacher;
    }
}

class StudentGrade1 extends Student{
    const MIN_AGE = 13;
    const MAX_AGE = 25;
    
    public function __construct($name, $age) {      
        parent:: __construct($name, $age);
        $this->minScore = 300;
        $this->maxScore = 500;
        $this->subjects['computers'] = 0;
    }

    // Custom constructor for OptimalStudent will invoked & the parent will not invoked absulotely

}

// How to get the value from static property
$std = new Student('WAEL',15);


$ali = new StudentGrade1("abaas adel mustafa easa", 15);


// Rule Number-1 : 
echo $ali::showTeacher() . "<br>";
echo $ali::$teacher;


//echo Student::$teacher;
//echo $ali::$teacher;




/*echo '<pre>';
    var_dump($stdg1);
echo '</pre>';

$stdg1->setSubjects('Arabic', 30);
print_r($stdg1->getSubjects());
// Once new obj created, the constructor of this class will invoked
//$std1 = new Student('ali', 16);
//
//// Set the name property
//$std1->setName('mohammed mohammed abosalim');
//// Get the name property
//echo "First student Name: " . $std1->getName() . '<br>';
//
//$std1->setAge(25);
//echo "First student Age: " . $std1->getAge() . '<br>';
//
//$std1->setLevel(4);        
//echo "First student Level: " . $std1->getLevel() . '<br>';
//
//echo $std1->getMinScore();*/