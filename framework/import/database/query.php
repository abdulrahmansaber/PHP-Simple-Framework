<?php

  Class Query {

    /** query_fetch()
     * Run a query
     * @return string
     */
    public static function fetch($query_q, $fetch_type = 'fetch')
    {
      global $conn;
      $run_query = $conn->prepare($query_q);
      $run_query->execute();
      if ($fetch_type == 'all') {
        return $run_query->fetchAll();
      } elseif ($fetch_type == 'fetch') {
        return $run_query->fetch();
      } else {
        echo "Error: Unknow Fetch Type.";
      }
    }

    /** query_rowcount()
     * Run a query
     * @return int
     * Return row count of searched recorder
     */
    public function rowcount($query_q)
    {
      global $conn;
      $run_queryRow = $conn->prepare($query_q);
      $run_queryRow->execute();
      return $run_queryRow->rowCount();
    }

  }
