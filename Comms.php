<?php

/**
 * Get the PSR4 autoloader and load all the classes required.
 */
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});

// Error reporting.
//error_reporting(-1);

// Turn cache off
ini_set('opcache.enable','0');


class Comms Extends Main {

  public function __construct()  {

    // Call the parent first and instantiate the database SQL class instance.
    parent::__construct();

  }

  public function testDatabase() {

    $query = $this->conn->select('SELECT * from Data');

    return $query;

  }

  public function getData() {

    $query = $this->conn->select('SELECT * from Courses');

    return $query;


  }

  public function getData2() {

    $query = $this->conn->select('SELECT * from Sessions');

    return $query;


  }

  public function getData3() {

    $query = $this->conn->select('SELECT * from Departments');

    return $query;


  }

  public function getData4() {

    $query = $this->conn->select('SELECT * from Trainers');

    return $query;


  }

  public function addReg($fName, $lName, $department, $section, $session, $date, $year, $trainer) {

    $query = $this->conn->insert('INSERT into Courses (`First name`, `Surname`, `Department`, `Section`, `Session`, `Date`, `Year`, `trainer`) values (?,?,?,?,?,?,?,?)', [$fName, $lName, $department, $section, $session, $date, $year, $trainer]);

  }

  public function addSession($add) {

    $query = $this->conn->insert('INSERT into Sessions (Name) values (?)', [$add]);

  }

  public function addTrainer($fName, $lName, $org, $phone, $email) {

    $query = $this->conn->insert('INSERT into Trainers (`First name`, `Surname`, `Organisation`, `Phone number`, `Email`) values (?,?,?,?,?)', [$fName, $lName, $org, $phone, $email]);

  }

}

?>
