<?php
/**
 * Created by PhpStorm.
 * User: Brayd
 * Date: 9/7/2017
 * Time: 2:16 PM
 */

?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

require_once 'Student.php'; // require_once to prevent future duplicate class declarations

$students = []; // shorthand array syntax, php 5.4

// Add John Doe
$first = new Student();
$first->surname         = "Doe";
$first->first_name      = "John";
$first->add_email('home',"john@doe.com");
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

// Add Albert Einstein
$second = new Student();
$second->surname        = "Einsten";
$second->first_name     = "Albert";
$second->add_email("home", 'albert@braniacs.com');
$second->add_email('work1', 'a_einstein@bcit.ca');
$second->add_email('work2', 'albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

// Add myself
$me = new Student();
$me->surname            = "Traas";
$me->first_name         = "Brayden";
$me->add_email("home", 'brayden@tra.as');
$me->add_email('work', 'brayden@devrygreenhouses.com');
$me->add_email('school', 'btraas@my.bcit.ca');

$students['b123'] = $me;

// sort students by key
ksort($students);

foreach($students AS $student) {

    // PHPStorm type hinting to check & suggest methods at "compile" time.
    // (more like semi-interpret??)

    /** @var Student $student */
    echo $student->toString();
}


?>
</body>
</html>
