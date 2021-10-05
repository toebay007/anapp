<?php  include "123Headers.php";  ?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Create Complain</h5>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header"><h3>COMPLAIN DETAILS</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if (isset($_GET['form']) && ($_GET['form'] == 'incomplete_input')) {
                                            echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                            echo 'Check that all fields are filled correctly';
                                            echo '</div>';
                                            }
                                        ?>
                                        <?php
                                        if (isset($_GET['form']) && ($_GET['form'] == 'success')) {
                                            echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                            echo 'Complaint is registered succssfuly.';
                                            echo '</div>';
                                            }
                                        ?>
                                        <?php
                                        if (isset($_GET['form']) && ($_GET['form'] == 'failed')) {
                                            echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                            echo 'Kindly try again and contactthe ICT.';
                                            echo '</div>';
                                            }
                                        ?>
                                        <form action="forms.php" method="POST" class="forms-sample">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="patName">Name of Complaint : </label>
                                                <input type="text" class="form-control" name="patName" id="patName" placeholder="Compliants Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="relati">Relationship to the Abused :</label>
                                                <input type="text" class="form-control" name="relati" id="relati" placeholder="Relationship to the Abused">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="addre">Address:</label>
                                                <input type="text" class="form-control" name="complAdress" id="addre" placeholder="Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="occup">Occupation of the complaint:</label>
                                                <input type="text" class="form-control" name="complOccup" id="occup" placeholder="Occupation of compliant">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="natCa">Nature of The Case:</label>
                                                <input type="text" class="form-control" name="natCa" id="natCa" placeholder="Nature of case">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="datRe">Date of Report:</label>
                                                <input type="date" class="form-control" name="datRe" id="datRe" placeholder="Date of Report">
                                                </div>
                                            </div>
                                           
                                            <div class="card-header"><h3>SUSPECT DETAILS</h3></div>
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nameAcc">Name of Accused:</label>
                                                    <input type="text" class="form-control" name="nameAcc" id="nameAcc" placeholder="Name of the accused">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="addR">Address:</label>
                                                   <textarea name="susAdress" class="form-control" id="addR" cols="20" rows="1"></textarea>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="occuPa">Occupation:</label>
                                                    <input type="text" class="form-control" name="occuPa" id="occuPa" placeholder="Occupation of Suspect">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nameAb">Name of Abuse:</label>
                                                    <input type="text" class="form-control" name="nameAb" id="nameAb" placeholder="Name of Abuse">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="sex">SEX</label>
                                                    <select class="form-control" name="susSex" id="sex">
                                                        <option value="--">--Sex--</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="age">age</label>
                                                   <input type="number" class="form-control" name="age" id="age">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="locat">Location of Abuse:</label>
                                                    <textarea name="locat" class="form-control" id="locat" cols="20" rows="1"></textarea>
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label for="issue">Compliant:</label>
                                                    <textarea name="issue" class="form-control" id="issue" cols="20" rows="1"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-row"> 
                                                <div class="form-group col-md-10">
                                                    <label for="actP">Action plan:</label>
                                                    <textarea name="actP" class="form-control" id="actP" cols="60" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-row"> 
                                                <div class="form-group col-md-10">
                                                    <label for="caseM">Case Manager:</label>
                                                    <textarea name="caseM" class="form-control" id="caseM" cols="60" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <button type="submit" name="submit15" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                      
                    </div>
                </div>
              
<?php  include "456Footers.php";  ?>