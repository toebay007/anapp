<?php

    include('conndbs.php');

    class staffsz extends connStaff{


            function getDetails(){
                $sql = "SELECT * FROM staffreg";
                $result = $this->conns->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }


            function statusChange($statuss,$users){
                $sql = "UPDATE staffreg SET statusz = '$statuss' WHERE usernamesz = '$users'";
                $result = $this->conns->query($sql);
                //var_dump($result);
                if($result == true){
                    header("location:viewUsers.php?action=updated");
                }else{
                    header("location:viewUsers.php?action=failed");
                }
            }

            function getDeeets($id){
                
                $sql = "SELECT concat(fname,' ',sname)as fullnames, pPhoto, usernamesz, emailz FROM staffreg where id = $id";
                $result = $this->conns->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }








    }