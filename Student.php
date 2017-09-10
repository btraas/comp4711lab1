<?php

/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 9/9/2017
 * Time: 3:59 PM
 *
 * Requires PHP 5.4+ (2012)
 *
 */
class Student
{
    /**
     * Student constructor.
     *
     * Initializes all values to empty array / empty string.
     *
     * @requires PHP 5.4+
     */
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = []; // shorthand array syntax, supported since PHP 5.4 / 2012
        $this->grades = []; // shorthand array syntax, supported since PHP 5.4 / 2012

    }

    /**
     * Add an email to this student's profile.
     *
     * @param $which
     * @param $address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * Add a grade to this student's records.
     *
     * @param $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }


    /**
     * Calculate the average of this student.
     *
     * @return float
     */
    function average() {
        $total = 0;
        foreach($this->grades AS $value) {
            $total += $value;
        }
        $count = count($this->grades);

        // check for divide by 0
        return $count > 0 ? $total / $count : 0.0;
    }

    /**
     * Stringify this Student
     *
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average(). ')' . PHP_EOL . "------------" . PHP_EOL;
        foreach($this->emails AS $which => $what) {
            $result .= $which . ': ' . $what . PHP_EOL;
        }
        $result .= PHP_EOL;
        return "<pre>$result</pre>";
    }


}