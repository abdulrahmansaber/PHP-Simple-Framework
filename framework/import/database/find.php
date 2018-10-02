<?php

  class FindRec {

   /** find()
    * @return true
    * Return data of searched recorder on database
    * return data if found only!
    */
    public static function find($table, $recorder, $equal)
    {
      global $conn;
      $find_rec = new Query();
      $rowCount = $find_rec->rowcount("SELECT * FROM `$table` WHERE `$recorder` = '$equal'");
      $fetchData = $find_rec->fetch("SELECT * FROM `$table` WHERE `$recorder` = '$equal'", 'fetch');
      if ($rowCount == 1) {
        return $fetchData;
      }
    }

   /** return_rowcount()
    * @return true
    * Return row count of recorder
    * Method means: recorder found or doesn't
    */
    public function rowcount($table, $recorder, $equal)
    {
      global $conn;
      $find_rec = new Query();
      $rowCount = $find_rec->rowcount("SELECT * FROM `$table` WHERE `$recorder` = '$equal'");
      $fetchData = $find_rec->fetch("SELECT * FROM `$table` WHERE `$recorder` = '$equal'", 'fetch');
      if ($rowCount == 1) {
        return $rowCount;
      }
    }

    public function find_more($table, $recs, $what_ret = 'row')
    {
      global $conn;
      $find_rec = new Query();
      $rowCount = $find_rec->rowcount("SELECT * FROM `$table` WHERE $recs");
      $fetchedData = $find_rec->fetch("SELECT * FROM `$table` WHERE $recs");
      if ($rowCount == 1) {
        if ($what_ret == 'row') {
          return $rowCount;
        } elseif ($what_ret == 'data') {
          return $fetchedData;
        }
      }
    }

  }
