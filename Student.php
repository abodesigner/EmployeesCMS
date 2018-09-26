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
    public $name;
    public $age;
    public $level;
    public $score;
    public $subjects = array(
        'Arabic'  => 0,
        'English' => 0,
        'Math'    => 0,
        'Science' => 0,
    );
    
    public $minscore = 150;
    public $maxscore = 300;
}
