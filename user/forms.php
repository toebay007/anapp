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

} else if(isset($_POST["submit15"])){

  
  require("uploadClass.php");

  $obj2 = new staff;

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $patName = test_input($_POST['patName']);
    $relati = test_input($_POST['relati']);
    $complAdress = test_input($_POST['complAdress']);
    $complOccup = test_input($_POST['complOccup']);
    $natCa = test_input($_POST['natCa']);
    $datRe = test_input($_POST['datRe']);
    $nameAcc = test_input($_POST['nameAcc']);
    $susAdress = test_input($_POST['susAdress']);
    $occuPa = test_input($_POST['occuPa']);
    $nameAb = test_input($_POST['nameAb']);
    $susSex = test_input($_POST['susSex']);
    $age = test_input($_POST['age']);
    $locat = test_input($_POST['locat']);
    $issue = test_input($_POST['issue']);
    $actP = test_input($_POST['actP']);
    $caseM = test_input($_POST['caseM']);

    // echo $susSex;

   $obj2->complaint($patName,$relati,$complAdress,$complOccup,$natCa,$datRe,$nameAcc,$susAdress,$occuPa,$nameAb,$susSex,$age,$locat,$issue,$actP,$caseM);
}