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
                                    <div class="card-header"><h3>ANAPPCAN Hospital registration</h3></div>
                                    <div class="card-body">
                                        <form action="#" method="POST" class="forms-sample">
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
                                                        <select name="states" id="states" class="form-control">States
                                                            <option value="states">--states--</option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <select name="lgas" id="lgas" class="form-control">LGA
                                                            <option value="lgas">--lgas--</option>
                                                        </select>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        
                        
                    </div>
                </div>
               

       <?php  include "456Footers.php"; ?>