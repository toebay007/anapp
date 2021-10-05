<?php

    require 'connDb.php';

    class staffs extends connAdmin{


            

            function createStaff($fname,$sname,$onamez,$emailz,$dobz,$resAdd,$statesz,$lgas,$targetFilePath){

               //image validation
                $targetDir = "usersPhoto/";
                $fileName = basename($_FILES["pPhoto"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                    //determine permitted array
                    $allowTypes = array('jpg','png','svg','jpeg','gif','pdf','JPG');
                    //if array is present or present
                    if(in_array($fileType, $allowTypes)){
                        //upload  picture to image folder
                        if(move_uploaded_file($_FILES["pPhoto"]["tmp_name"], $targetFilePath)){
                           //validation to check if email exists already
                                    $sql = "SELECT * FROM staffreg WHERE emailz =  '$emailz'";
                                    $result = $this->conn->query($sql);

                                    if ($result->num_rows > 0){
                                        header("location:form-components.php?user=exists");
                                    } else{
                                       if(!$fname || !$sname || !$onamez|| !$emailz || !$dobz || !$onamez|| !$resAdd || !$statesz || !$lgas){
                                            header("location:form-components.php?user=incomplete_fields");
                                        } else{
                                                //emails does not exist
                                                //generate username and password...
                                                $username = "";
                                                $sn = mt_rand(100,1000);
                                                $username = $sname.'App'.$sn;
                                                //echo $username;
                                                $pwd = "";
                                                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
                                                $pwrd = substr( str_shuffle( $chars ), 0, 8 );
                                                $pwd = $pwrd;
                                                //echo $pwd;

                                                
                                                    $sql = "INSERT INTO staffreg SET
                                                    fname = '$fname',
                                                    sname = '$sname',
                                                    onamez = '$onamez',
                                                    emailz = '$emailz',
                                                    dobz = '$dobz',
                                                    resAdd = '$resAdd',
                                                    statesz = '$statesz',
                                                    lgas = '$lgas',
                                                    usernamesz = '$username',
                                                    pwdsz = '$pwd',
                                                    statusz = 'users',
                                                    pPhoto = '$targetFilePath'";
                                        
                                                $this->conn->query($sql);
                                                $id =  $this->conn->insert_id;
                                                
                                                if($id > 0){
                                                header("location:form-components.php?user=success");
                                                } else {
                                                header("location:form-components.php?user=failed");
                                            }
                                       }

                                    }
                        } else{
                            header("location:form-components.php?file=img_failed");
                        }
                    }else{
                        header("location:form-components.php?file=extension");
                    }

            }


            function stafflogin($username,$password){

                // $encryptedzz = md5($password);

                $sql = "SELECT * FROM staffreg WHERE usernamesz ='$username' ";

                $result = $this->conn->query($sql);
                //print_r($result);
                if ($result->num_rows > 0){
                    $deets = $result->fetch_assoc();

                    $pwds = $deets['newPwdz'];
                    //validation to check if the user is a new staff or not.
                    if(!empty($pwds)){
                        // echo("logged in");
                            $encrypted = md5($password);

                                $sql= "SELECT * FROM staffreg WHERE usernamesz = '$username' AND newPwdz = '$encrypted' LIMIT 1";

                                $results = $this->conn->query($sql);

                                //print_r($results);
                            if ($results->num_rows > 0) { //==1 valid details
                            
                                $deetz = $results->fetch_assoc();
                                
                                $_SESSION['id'] = $deetz['id'];
                                $_SESSION['fname'] = $deetz['fname'];
                                $_SESSION['sname'] = $deetz['sname'];
                                $_SESSION['email'] = $deetz['emailz'];
                                $_SESSION['Anappusers'] = $deetz['usernamesz'];
                                $_SESSION['pic'] = $deetz['pPhoto'];
                                $_SESSION['status'] = $deetz['statusz'];
                                    // check staff status to decide where they should be redirected to
                                    if($_SESSION['status'] === 'users'){
                                        // redirect to staff website

                                        header("location:/user/index.php?login=success");

                                    } else if($_SESSION['status'] === 'admin'){
                                        // redirect to admin website

                                        header("location:/admin/index.php?login=success");

                                    } else{
                                        header ("location:../index.php?status=error");
                                    }
                            
                            } else {
                                header ("location:../index.php?login=fail");
                            }

                    }else{
                        // echo"NewBie"; 
                             $sql= "SELECT * FROM staffreg WHERE usernamesz = '$username' AND pwdsz = '$password' LIMIT 1";


                                $result = $this->conn->query($sql);

                                    // var_dump($result);
                            if ($result->num_rows > 0) { //==1 valid details
                            
                                $deetz = $result->fetch_assoc();
                                
                                $_SESSION['id'] = $deetz['id'];
                                $_SESSION['fname'] = $deetz['fname'];
                                $_SESSION['sname'] = $deetz['sname'];
                                $_SESSION['email'] = $deetz['emailz'];
                                $_SESSION['Anappusers'] = $deetz['usernamesz'];
                                $_SESSION['pic'] = $deetz['pPhoto'];
                                $_SESSION['status'] = $deetz['statusz'];
                                    // check staff status to decide where they should be redirected to
                                    if($_SESSION['status'] === 'users'){
                                        // redirect to staff website

                                        header("location:/user/index.php?login=success");

                                    } else if($_SESSION['status'] === 'admin'){
                                       // redirect to admin website

                                        header("location:/admin/index.php?login=success");

                                    } else {
                                         header ("location:../index.php?status=error");
                                    }

                               // header("location:index.php?login=success");
                            
                            } else {
                                header ("location:../index.php?login=fail");
                            }

                    }
                    
                } else{
                    header ("location:../index.php?user=error");
                }

            }


            function createHospital($hName,$cmds,$telNo,$adds1,$statesz,$lgas){

                if(!$hName || !$cmds || !$telNo|| !$adds1 || !$statesz || !$lgas){
                    header("location:../formComponentsHospital.php?hospital=incomplete_fields");
                } else{

                    $sql = "INSERT INTO hospitalReg SET
                    hName = '$hName',
                    cmds = '$cmds',
                    telNo = $telNo,
                    adds1 = '$adds1',
                    statesz = '$statesz',
                    lgas = '$lgas'";
        
                $this->conn->query($sql);
                $id =  $this->conn->insert_id;
                
                if($id > 0){
                header("location:formComponentsHospital.php?hospital=success");
                } else {
                header("location:formComponentsHospital.php?hospital=failed");
            }

            }
        }


}


?>