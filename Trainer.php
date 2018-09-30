<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Trainer
 *
 * @author Makarem For Trading
 */
class Trainer {
    //put your code here
    public $name;
    public $age;
    public function isGoodTrainer(){
        
    }
}

//Inheritance relationship
class WebDevTrainer extends Trainer{
    
    public $typeOfTraining;  
    public function isQualified(){
        
    }
    
    public function addBook(Book $book){
        
    }
        
}

// WebDevTrainer can use one or many books & 
// book can be used by one or many trainer.
// So the relationship = Association.
class Book{
    
    public $title;
    public $auther;
    public $ISBN;
    
    public static function isBorrowed(Trainer $WT){
        
    }   
}

// TrainingProgram has one or many students, so it's Aggregation
// they not depend on other ,but the trainingProgram control the students 
class TrainingProgram{
    public $title;
    public $studenList;

    public function showStudents(){
        return $this->$studentList;
    }
    public function addStudent(Student $student){
        $this->studenList = $student;
    }
}

class Student{
    public $name;
    public $age;
}


