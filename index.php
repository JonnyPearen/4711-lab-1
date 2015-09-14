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
        //include the Student.php file to allow us to create Student objects
        include('Student.php');
        
        //initialize an empty array that we will use to contain Student objects
        $students = array();
        
        //create the first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        
        //add the first student to the array
        $students['j123'] = $first;
        
        //create the second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        
        //add the second student to the array
        $students['a456'] = $second;
        
        //create the third student
        $third = new Student();
        $third->surname = "Pearen";
        $third->first_name = "Jonny";
        $third->add_email('personal','jonnypearen@gmail.com');
        $third->add_grade(90);
        $third->add_grade(80);
        $third->add_grade(70);
        
        //add the third student to the array
        $students['p789'] = $third;
        
        //sort the students by key
        ksort($students);	// one of the many sort functions
        
        //echo each student in the students array using the toString method
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
