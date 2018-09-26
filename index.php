<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Empolyee{
            
          // Define Properties  
          public $name;
          public $age;
          public $salary;
          public $absentDays;
          public $absentRate;
          public $overtime;
          public $overtimeRate;
          
          // Define Method
          public function calcAbsentDays(){
              return $this->absentDays * $this->absentRate;
          }
        }
        
        $ahmed = new Empolyee();
        
        $ahmed->name = 'mohammed';
        $ahmed->absentDays = 5;
        $ahmed->absentRate = 20;
        
        echo 'Ahmed absent rate in ' . $ahmed->absentDays . " days = " . $ahmed->calcAbsentDays() . " L.E"; 
       
        
      
        
        ?>
    </body>
</html>
