  <?php

    // Session

    global $userid, $getTasks, $getPics, $getWorks;
    $userid = $_SESSION['user_id'];

    // Getting User Data

    global $findUser;
    $findUser = FindDB::find('users', 'userid', $_SESSION['user_id']);

    // User Didn't log in

    $uid = $findUser['userid'];

    if (!isset($_SESSION['user_id'])) {
      Redirect::redirect_header('/team//');
    }

    $getTasks = Query::query_fetch("SELECT * FROM users JOIN tasksmem ON users.userid = tasksmem.task_userid WHERE tasksmem.task_userid = '$uid'", 'all');
    $getPics  = Query::query_fetch("SELECT * FROM users JOIN user_pictures ON users.userid = user_pictures.picture_userid WHERE user_pictures.picture_userid = '$uid'", 'all');
    $getWorks = Query::query_fetch("SELECT * FROM users JOIN works ON users.userid = works.work_userid WHERE works.work_userid = '$uid'", 'all');

  ?>

  <!-- The User default navbar -->
  <nav>
    <div class="nav-wrapper blue-grey darken-4">
      <a href="/team/profile" class="brand-logo">
        <img src='pics/user-default.png'>
        <?php echo $findUser['username']; ?>
      </a>
      <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class='waves-effect'><a href='tasks?action=default'><i class='material-icons left'>important_devices</i> Tasks</a></li>
        <li class='waves-effect'><a href='team-members'><i class='material-icons left'>supervisor_account</i> Team Members</a></li>
        <li class='waves-effect'><a href='#'><i class='material-icons left'>control_camera</i> Modrators</a></li>
        <li class='waves-effect'><a href='#' class='btn waves-effect waves-light'><i class='material-icons left'>power_settings_new</i> Logout</a></li>
        <li class='waves-effect'><a href='#' data-target="default-nav" class="sidenav-trigger show-on-large"><i class='material-icons'>dehaze</i></a></li>
      </ul>
    </div>
  </nav>

  <!-- Default Sidebar -->
  <ul class="sidenav" id="default-nav">
    <div>
      <img src='pics/user-default.png'>
      <div>
        <h5><?php echo $findUser['firstname']; ?></h5>
        <a href='#'>@<?php echo $findUser['username']; ?></a>
        <button class='btn blue-grey darken-3'><i class='material-icons left'>edit</i> Edit Picture</button>
      </div>
    </div>
    <div class="divider"></div><br>
    <li><a href='settings' class='waves-effect waves-teal'><i class='material-icons left'>settings</i> Settings</a></li>
    <li><a href='#' class='waves-effect waves-teal'><i class='material-icons left'>assignment_turned_in</i> My Tasks</a></li>
    <li><a href='#' class='waves-effect waves-teal'><i class='material-icons left'>edit</i> Edit information</a></li>
    <li><a href='#' class='waves-effect waves-teal'><i class='material-icons left'>security</i> Edit Security</a></li>
  </ul>

  <!-- Mobile Sidebar -->
  <ul class="sidenav" id="mobile-navbar">
    <li><a href="sass.html">Sasssdasdas</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
