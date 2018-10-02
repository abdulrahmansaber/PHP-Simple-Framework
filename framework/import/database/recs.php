<?php

  Class RecordersActions {

    /** delete_recorder()
     * Deleting Something from table
     * #1 First argument: Table name
     * #2 Second argument: recorder
     * #3 Third argument: recorder of argument no: 2 = third argument
     */
    public function delete_recorder($table, $where, $equal)
    {
      $delete_recorder = new Query();
      $deletingRowCount = $delete_recorder->rowcount("DELETE FROM `$table` WHERE `$where` = '$equal'");
      if ($deletingRowCount == 1) {
        return true;
      }
    }

    /** insert_recorder()
     * @return true
     * Insert new recorder to table
     * #1 First argument: Table name
     * #2 Second argument: recorders
     * #3 Third agrument: values
     */
    public static function insert_recorder($table, $recorder, $values)
    {
      $insert_new_recorder = new Query();
      $insert_new_recorder->rowcount("INSERT INTO `$table`($recorder) VALUES('$values')");
      if ($insert_new_recorder == false) {
        return false;
      } else {
        return true;
      }
    }

    /** update_recorder()
     * @return true
     * Updating recorder from table
     * #1 First argument: Table name
     * #2 Second argument: Recorders
     * #3 Third argument: Values
     * ===========================================
     * --- Where Caluse ---
     * #4 Forth argument: Recorder = ..
     * #5 Fifth argument: recorder = $equal
     */
    public static function update_recorder($table, $recorders, $where, $equal)
    {
      $update_recorder = new Query();
      $rw = $update_recorder->rowcount("UPDATE `$table` SET $recorders WHERE `$where` = '$equal'");
      if ($rw > 0) {
        return true;
      } else {
        return false;
      }
    }

  }
