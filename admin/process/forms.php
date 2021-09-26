<?php


if(isset($_POST["submit"])){

    require("../classes/createUser.php");

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


  require("../classes/createUser.php");

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

} 




?>