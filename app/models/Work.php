<?php
class Work
{
  public $work_id;
  public $team_id;
  public $task_id;
  public $start_date;
  public $stop_date;
  public $hours;
  public function __construct($data) {
    // TODO:!
  }
  public static function findByTaskId($taksId) {
    // 1. Get Db Connection
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);
    die;

    // 2. Prepare SQL statement
    // 3. Execute statement
    // 4. Handle results
  }
}

//<?php

//class Work
//{
  //public $id;
  //public $start_date; //'YYYY-MM-DD'
  //public $end_date; //'YYYY-MM-DD'

  //public function __construct($row) {
    //$this->id = $row['id'];

    //$this->start_date = $row['start_date'];
    //$this->end_date = $row['end_date'];

    // TODO: Where should this be calculated? $this->hours = 0;
    //}

    //public static function getAllWorkByTask(int $taskId) {
      // 1. Connect to the database
      // 2. Run a query
      // 3. Read the results
      // 4. For each row, make a new work object
      // 5. Return the array of work objects
      //return [];
    //}
//}
