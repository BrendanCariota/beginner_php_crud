<?php

require_once "Person.php";

class Student extends Person {
    public string $studentId;

    public function __contsruct($name, $surname, $studentId) {

        $this->studentId = $studentId;
        parent::__construct($name, $surname);
    }
}