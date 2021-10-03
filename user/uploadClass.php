<?php

    include('connfig.php');

    class staff extends connUser{

            //change password
            function changepwd($oldpwd,$newpwd,$cnewpwd,$users){

                $sql= "SELECT * FROM staffreg WHERE usernamesz = '$users' AND pwdsz === '$oldpwd' LIMIT 1";

                $result = $this->conn->query($sql);

                if($result->num_rows > 0){
                       
                    if($newpwd === $cnewpwd && strlen($newpwd) > 6){
                                             
                        $encrypt = md5($newpwd);
                       
                        $sql1 = "UPDATE staffreg SET newPwdz = '$encrypt' WHERE usernamesz = '$users'";
                        $result1 = $this->conn->query($sql1);

                        if($result1 == true){
                            header("location:change_password.php?update=successful");
                        } else{
                            header("location:change_password.php?update=failed");
                        }

                    } else{
                        header("location:change_password.php?password=failed_entry");
                    }

                }else{
                    header("location:change_password.php?password=Old_wrong");
                }
                
            }
















    }