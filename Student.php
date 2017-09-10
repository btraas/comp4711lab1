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
     * @requires PHP 5.4+
     */
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = []; // shorthand array syntax, supported since PHP 5.4 / 2012
        $this->grades = []; // shorthand array syntax, supported since PHP 5.4 / 2012

    }

    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }


    function average() {
        $total = 0;
        foreach($this->grades AS $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }

    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average(). ')' . PHP_EOL;
        foreach($this->emails AS $which => $what) {
            $result .= $which . ': ' . $what . PHP_EOL;
        }
        $result .= PHP_EOL;
        return "<pre>$result</pre>";
    }


}