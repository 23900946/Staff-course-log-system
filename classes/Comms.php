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

  public function getData($searchParameter = NULL) {

    $query = $this->conn->select('SELECT DISTINCT `First name`, `Surname`, `Department`, `Section`, `Session`, `Date`, `Year`, `Trainer` from Courses WHERE 1'.$searchParameter);
    return $query;


  }

  public function getData1() {

    $query = $this->conn->select('SELECT * from Section ORDER by `Section name` ASC');

    return $query;


  }

  public function getData2() {

    $query = $this->conn->select('SELECT * from Sessions ORDER by `Name` ASC');

    return $query;


  }

  public function getData3() {

    $query = $this->conn->select('SELECT * from Departments ORDER by `Department name` ASC');

    return $query;


  }

  public function getData4() {

    $query = $this->conn->select('SELECT * from Trainers');

    return $query;


  }

  public function getSelectedData($fName, $lName) {

    $query = $this->conn->select('SELECT * from Courses WHERE `First name` = ? and `Surname` = ?', [$fName, $lName]);

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

  public function deleteCourseLog($fName, $lName, $dept, $section, $session, $date, $year, $trainer) {

    $query = $this->conn->delete('DELETE FROM Courses WHERE `First name` = ? and `Surname` = ?  and `Department` = ? and `Section` = ? and `Session` = ? and `Date` = ? and `Year` = ? and `Trainer` = ?', [$fName, $lName, $dept, $section, $session, $date, $year, $trainer]);

    return $query;


  }

  public function deleteSession($ID) {

    $query = $this->conn->delete('DELETE FROM Sessions WHERE ID = ?', [$ID]);

    return $query;


  }

  public function deleteTrainer($ID) {

    $query = $this->conn->delete('DELETE FROM Trainers WHERE ID = ?', [$ID]);

    return $query;


  }

  public function update1($new_name, $ID) {

    $query = $this->conn->update('UPDATE Sessions SET `Name` = ? WHERE `ID` = ?' , [$new_name, $ID]);

    return $query;


  }

  public function update2($new_name, $ID) {

    $query = $this->conn->update('UPDATE Departments SET `Department name` = ? WHERE `ID` = ?' , [$new_name, $ID]);

    return $query;


  }

  public function update3($new_name, $ID) {

    $query = $this->conn->update('UPDATE Section SET `Section name` = ? WHERE `ID` = ?' , [$new_name, $ID]);

    return $query;


  }

}

?>
