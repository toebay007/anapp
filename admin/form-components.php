<?php include "123Header.php" ?>  
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Register New User</h5>
                                            <span>Kindly fill the form below accordingly</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Components</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <?php
                            if (isset($_GET['user']) && ($_GET['user'] == 'success')) {
                                echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                echo 'User created successfully';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['user']) && ($_GET['user'] == 'exists')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'User data already exists';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['user']) && ($_GET['user'] == 'incomplete_fields')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Incomplete fields... check that all fields are filled correctly';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['user']) && ($_GET['user'] == 'failed')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'User data entry failed... please try again';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['user']) && ($_GET['user'] == 'img_failed')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'User image wrong... please use another image';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['user']) && ($_GET['user'] == 'extension')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Invalid image extension';
                                echo '</div>';
                            }
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"><h3>ANAPPCAN registration</h3></div>
                                    <div class="card-body">
                                        <form action="forms.php" method="POST" class="forms-sample" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="fname">First name</label>
                                                        <input type="text" name="fname" id="fname" class="form-control" style="width: 100%;">
                                                   
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="sname"> Surname</label>
                                                        <input type="text" name="sname" id="sname" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="onamez">Other Names</label>
                                                    <input type="text" class="form-control" id="onamez" name="onamez" placeholder="Other names">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="emails">Email address</label>
                                                    <input type="email" class="form-control" id="emails" name="emailz" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="dobz">Date of Birth</label>
                                                    <input type="date" class="form-control" id="dobz" name="dobz">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="resAdd">Residential Address</label>
                                                    <input type="text" class="form-control" id="resAdd" name="resAdd" placeholder="Residential address">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="state">State of Origin</label>
                                                    <?php 
                                                        require "stateconfig.php";
                                                        $query = "SELECT * FROM states ORDER BY name ASC";
                                                        $result = $mysqli->query($query);
                                                    ?>
                                                    <select id="state" name="statesz" class="form-control" required> State of Residence
                                                        <option  value="">--Select state--</option>
                                                        <?php 
                                                            if($result->num_rows > 0){
                                                                while($row = $result->fetch_assoc()){
                                                                    echo '<option value="' .$row['id']. '">' .$row['name']. '</option>';
                                                                }
                                                            }else{
                                                                echo '<option value=""> state not available </option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="city">Local Government Area</label>
                                                    <select id="city" name="lgas" class="form-control" required> Local Government Area
                                                        <option value="">--Select state first--</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="pPhoto">Profile photo</label>
                                                <input type="file" class="form-control" id="pPhoto" name="pPhoto" placeholder="Profile photo">
                                            </div>

                                            <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        
                        
                    </div>
                </div>
               

       <?php  include "456Footers.php"; ?>