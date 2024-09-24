<?php
// $x=5;
// $name="aabid";
// $x=true;
// var_dump($x);
// $cars = array("Volvo","BMW","Toyota");
// var_dump($cars);
// class Car {
//     public $color;
//     public $model;
//     public function __construct($color, $model) {
//       $this->color = $color;
//       $this->model = $model;
//     }
//     public function message() {
//       return "My car is a " . $this->color . " " . $this->model . "!";
//     }
//   }
  
//   $myCar = new Car("red", "Volvo");
//   var_dump($myCar);
//   echo $myCar->message();


class Student {
    public $student_id;
    public $student_name;
    public $student_email;

    public function __construct($student_id, $student_name, $student_email) {
        $this->student_id = $student_id;
        $this->student_name = $student_name;
        $this->student_email = $student_email;
    }

    public function print() {
        return "Student ID is " . $this->student_id . " " .
               "Student name is " . $this->student_name . " " .
               "Student email is " . $this->student_email . ".";
    }
}

// Create a new Student object
$student = new Student(1, "Aabid", "aabid@example.com");

// Use var_dump to display the details of the $student object
var_dump($student);

// Print the details of the student using the print() method
$studentDetails = $student->print();
echo $studentDetails . "<br/>";
echo "The position of the word 'name' in the string is: " . strpos($studentDetails, "name")." <br/>";
echo strtoupper($studentDetails);
?>