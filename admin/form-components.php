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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"><h3>ANAPPCAN registration</h3></div>
                                    <div class="card-body">
                                        <form action="#" method="POST" class="forms-sample" enctype="multipart/form-data">
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
                                                    <input type="email" class="form-control" id="resAdd" name="resAdd" placeholder="Residential address">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="state">State of Origin</label>
                                                    <select name="state" id="state" class="form-control">
                                                        <option value="state">--State--</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="lgas">Local Government Area</label>
                                                    <select name="lgas" id="lgas" class="form-control">
                                                        <option value="lgas">--LGA--</option>
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