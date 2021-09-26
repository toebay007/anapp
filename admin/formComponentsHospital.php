<?php include "123Header.php" ?>  
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Create a New Hospital</h5>
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                <?php
                            if (isset($_GET['hospital']) && ($_GET['hospital'] == 'success')) {
                                echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                echo 'Hospital created successfully';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['hospital']) && ($_GET['hospital'] == 'failed')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Kindly try again.';
                                echo '</div>';
                            }
                        ?>
                        <?php
                            if (isset($_GET['hospital']) && ($_GET['hospital'] == 'incomplete_fields')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'fill the form properly.';
                                echo '</div>';
                            }
                        ?>
                                    <div class="card-header"><h3>ANAPPCAN Hospital registration</h3></div>
                                    <div class="card-body">
                                        <form action="../admin/process/forms.php" method="POST" class="forms-sample">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="hName">Name of Hospital</label>
                                                        <input type="text" name="hName" id="hName" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="cmds"> Name of Chief Medial Doctor</label>
                                                        <input type="text" name="cmds" id="cmds" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="telNo"> Tel Number</label>
                                                        <input type="number" name="telNo" id="telNo" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="adds1">Address</label>
                                                        <input type="text" name="adds1" id="adds1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="state">States</label>
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

                                            <button type="submit" name="submit11" class="btn btn-primary mr-2">Submit</button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        
                        
                    </div>
                </div>
               

       <?php  include "456Footers.php"; ?>