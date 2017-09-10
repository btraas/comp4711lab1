<?php

/**
 * Created by PhpStorm.
 * User: Brayd
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



}