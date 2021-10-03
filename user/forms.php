<?php


if(isset($_POST["submit14"])){

    require("uploadClass.php");

    $obj1 = new staff;

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