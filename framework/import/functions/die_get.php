<?php

 /** issetGetMethod()
  * file.php?action=edit
  * if not isset action in url exit of other code
  */
  function issetGetMethod($methodType, $message = 'Cannot View anything!') {

    if (!isset($_GET[$methodType])) {
      Messages::error_a('Cannot View anything!. Redirecting you.....');
      Redirect::redirect_header('manage-users', 1.5);
      return 0;
      exit();
    } else {
      return 1;
    }

  }
