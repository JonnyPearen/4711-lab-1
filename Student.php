<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * Student objects contain the first name, surname, email(s), and grade(s) of
 * students. Student objects can calculate and return the student's average
 * grade and can also output all the information about the student as a
 * formatted string.
 *
 * @author Jonny
 */
class Student {
    
    //initializes an empty Student object
    function __construct() {
        $this->surname = "";
        $this->first_name = "";
        $this->emails = array();
        $this->grades = array();
    }
    
    //adds a single email to the emails array using the given key and address
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //adds a single grade to the grades array
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //calculates and returns the average grade for the student
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //outputs all the information about the student as a formatted string
    function toString() {
        $result = $this->first_name . " " . $this->surname;
        $result .= " (" . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ": " . $what . "\n";
        $result .= "\n";
        return "<pre>" . $result . "</pre>";
    }
    
}
