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


  } else if(isset($_POST["submit1AB"])){

  
  require("uploadClass.php");

  $obj2 = new staff;

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $nameBen = test_input($_POST['nameBen']);
    $uniId = test_input($_POST['uniId']);
    $agez = test_input($_POST['agez']);
    $suex = test_input($_POST['suex']);
    $addrez = test_input($_POST['addrez']);
    $phonNo = test_input($_POST['phonNo']);
    $natAbuse = test_input($_POST['natAbuse']);
    $actTaken = test_input($_POST['actTaken']);
    $reffTo = test_input($_POST['reffTo']);
    $folloUp = test_input($_POST['folloUp']);
    $onGoing = test_input($_POST['onGoing']);
    $caseClose = test_input($_POST['caseClose']);
    $caseReop = test_input($_POST['caseReop']);
    $othersSp = test_input($_POST['othersSp']);

    // echo $caseReop;

   $obj2->gbv($nameBen,$uniId,$agez,$suex,$addrez,$phonNo,$natAbuse,$actTaken,$reffTo,$folloUp,$onGoing,$caseClose,$caseReop,$othersSp);
}