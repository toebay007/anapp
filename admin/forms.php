<?php


if(isset($_POST["submit"])){

    require("createUser.php");

    $obj1 = new staffs;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $fname = test_input($_POST['fname']);
      $sname = test_input($_POST['sname']);
      $onamez = test_input($_POST['onamez']);
      $emailz = test_input($_POST['emailz']);
      $dobz = test_input($_POST['dobz']);
      $resAdd = test_input($_POST['resAdd']);
      $statesz = test_input($_POST['statesz']);
      $lgas = test_input($_POST['lgas']);

      //print_r($_FILES);

      $obj1->createStaff($fname,$sname,$onamez,$emailz,$dobz,$resAdd,$statesz,$lgas,$_FILES);

} else if(isset($_POST["submit11"])){


  require("createUser.php");

  $obj2 = new staffs;

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $hName = test_input($_POST['hName']);
    $cmds = test_input($_POST['cmds']);
    $telNo = test_input($_POST['telNo']);
    $adds1 = test_input($_POST['adds1']);
    $statesz = test_input($_POST['statesz']);
    $lgas = test_input($_POST['lgas']);

    $obj2->createHospital($hName,$cmds,$telNo,$adds1,$statesz,$lgas);

}   else if(isset($_POST["submit12"])){

  require("createUser.php");

  $obj3 = new staffs;

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    //echo $password;
    $obj3->stafflogin($username,$password);

}   else if(isset($_POST["submit13"])){

  require("getDeets.php");

  $obj3 = new staffsz;

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $statuss = test_input($_POST['statuss']);
    $users = test_input($_POST['users']);

    $obj3->statusChange($statuss,$users);

} else if(isset($_POST["submit1A"])){

  require("createUser.php");

  $obj1 = new staffs;

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $oldpwd = test_input($_POST['oldpwd']);
    $newpwd = test_input($_POST['newpwd']);
    $cnewpwd = test_input($_POST['cnewpwd']);
    $users = test_input($_POST['users']);

   // echo $users;

   $obj1->changepwd($oldpwd,$newpwd,$cnewpwd,$users);

} 




?>