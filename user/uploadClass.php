<?php

    include('connfig.php');

    class staff extends connUser{

            //change password
            function changepwd($oldpwd,$newpwd,$cnewpwd,$users){

                $sql= "SELECT * FROM staffreg WHERE usernamesz = '$users' AND pwdsz = '$oldpwd' LIMIT 1"; // check ===

                $result = $this->conn->query($sql);

                if($result->num_rows > 0){
                       
                    if($newpwd === $cnewpwd && strlen($newpwd) > 6){
                                             
                        $encrypt = md5($newpwd);
                       
                        $sql1 = "UPDATE staffreg SET newPwdz = '$encrypt' WHERE usernamesz = '$users'";
                        $result1 = $this->conn->query($sql1);

                        if($result1 == true){
                            header("location:Change_password.php?update=successful");
                        } else{
                            header("location:Change_password.php?update=failed");
                        }

                    } else{
                        header("location:Change_password.php?password=failed_entry");
                    }

                }else{
                    header("location:Change_password.php?password=Old_wrong");
                }
                
            }




            function complaint($patName,$relati,$complAdress,$complOccup,$natCa,$datRe,$nameAcc,$susAdress,$occuPa,$nameAb,$susSex,$age,$locat,$issue,$actP,$caseM){

                if(!$patName || !$relati || !$complAdress || !$complOccup || !$natCa || !$datRe || !$nameAcc || !$susAdress || !$occuPa || !$nameAb || !$susSex || !$age || !$locat || !$issue || !$actP || !$caseM){
                    header("location:complain.php?form=incomplete_input");
                } else{

                    $sql = "INSERT INTO complaintF SET
                    patName = '$patName',
                    relati = '$relati',
                    complAdress = '$complAdress',
                    compOccup = '$complOccup',
                    natCa = '$natCa',
                    datRe = '$datRe',
                    nameAcc = '$nameAcc',
                    susAdress = '$susAdress',
                    occuPa = '$occuPa',
                    nameAb = '$nameAb', 
                    susSex = '$susSex',
                    age = $age,
                    locat = '$locat',
                    issue = '$issue',
                    actP = '$actP',
                    caseM = '$caseM'";
        
                $this->conn->query($sql);
                $id =  $this->conn->insert_id;
                
                if($id > 0){
                header("location:complain.php?form=success");
                } else {
                header("location:complain.php?form=failed");
            }

                }
                

            }

            
            function getDetails($id){
                
                $sql = "SELECT concat(fname,' ',sname)as fullnames, pPhoto, usernamesz, emailz FROM staffreg where id = $id";
                $result = $this->conn->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }


            function gbv($nameBen,$uniId,$agez,$suex,$addrez,$phonNo,$natAbuse,$actTaken,$reffTo,$folloUp,$onGoing,$caseClose,$caseReop,$othersSp){

                if($natAbuse == 'others'){
                    $natAbuse = $othersSp;
                } else{
                    $natAbuse = $natAbuse;
                }

                if(!$nameBen || !$uniId || !$agez ||!$suex|| !$addrez || !$phonNo || !$natAbuse || !$actTaken || !$reffTo || !$folloUp || !$onGoing || !$caseClose || !$caseReop){
                    header("location:gbv.php?form=incomplete");
                } else{

                    
                    $sql = "INSERT INTO gbv SET
                    nameBen = '$nameBen',
                    uniId = $uniId,
                    agez = $agez,
                    suex = '$suex',
                    phonNo = '$phonNo',
                    natAbuse = '$natAbuse',
                    actTaken = '$actTaken',
                    reffTo = '$reffTo',
                    folloUp = '$folloUp',
                    onGoing = '$onGoing',
                    caseClose = '$caseClose',
                    caseReop = '$caseReop'";
     
                $this->conn->query($sql);
                $id =  $this->conn->insert_id;
                
                        if($id > 0){
                        header("location:gbv.php?form=success");
                        } else {
                        header("location:gbv.php?form=failed");
                    }

                }
            }




 
            function getNatureofAbuse(){
                
                $sql = "SELECT COUNT(natAbuse) AS numbers, natAbuse FROM gbv group by natAbuse";
                $result = $this->conn->query($sql);
                $items = [];
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }









    }