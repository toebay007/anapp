<?php  include "123Headers.php";  ?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Gender Basd Violence</h5>
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
                                    <div class="card-header"><h3>COMPLAIN DETAILS</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if (isset($_GET['form']) && ($_GET['form'] == 'success')) {
                                            echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                            echo 'Successful.';
                                            echo '</div>';
                                            }
                                        ?>
                                        <?php
                                        if (isset($_GET['form']) && ($_GET['form'] == 'incomplete')) {
                                            echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                            echo 'Ensure all details are complete';
                                            echo '</div>';
                                            }
                                        ?>
                                        <?php
                                        if (isset($_GET['form']) && ($_GET['form'] == 'failed')) {
                                            echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                            echo 'Ensure you filled them accordingly and try again';
                                            echo '</div>';
                                            }
                                        ?>
                                        <form action="forms.php" method="POST" class="forms-sample">
                                            <div class="form-group">
                                                <label for="nameBen">NAME OF BENEFICIARY : </label>
                                                <input type="text" class="form-control" name="nameBen" id="nameBen" placeholder="Francis">
                                            </div>
                                            <div class="form-group">
                                                <label for="uniId">UNIQUE ID :</label>
                                                <input type="text" class="form-control" name="uniId" id="uniId" placeholder="Unique ID">
                                            </div>
                                            <div class="form-group">
                                                <label for="agez">AGE :</label>
                                                <input type="text" class="form-control" name="agez" id="agez" placeholder="Age">
                                            </div>
                                            <div class="form-group">  
                                                <label for="suex">SEX</label>
                                                    <select class="form-control" name="suex" id="suex">
                                                        <option value="">--Sex--</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="addrez">ADDRESS :</label>
                                                <input type="text" class="form-control" name="addrez" id="addrez" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                                <label for="phonNo">PHONE NUMBER :</label>
                                                <input type="text" class="form-control" name="phonNo" id="phonNo" placeholder="Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="natAbuse">NATURE OF ABUSE:</label>
                                                        <select class="form-control" name="natAbuse" id="natAbuse">
                                                            <option value="">-- Nature of Abuse --</option>
                                                            <option value="psychological">PSYCHOLOGICAL</option>
                                                            <option value="physical">PHYSICAL</option>
                                                            <option value="sexual">SEXUAL</option>
                                                            <option value="neglect">NEGLECT</option>
                                                            <option value="others">OTHERS SPECIFY</option>
                                                        </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="othersSp">Others:</label> <span class="text-muted" style="font-size: 0.7rem;"><i>(optional)</i></span>
                                                <input type="text" class="form-control" name="othersSp" id="othersSp">
                                            </div>
                                            <div class="form-group">
                                                <label for="actTaken">ACTION TAKEN :</label>
                                                <textarea name="actTaken" id="actTaken" cols="5" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="reffTo">REFERRED TO:</label>
                                                        <select class="form-control" name="reffTo" id="reffTo">
                                                            <option value="">-- Referred to --</option>
                                                            <option value="Traditional Ruler">Traditional Ruler</option>
                                                            <option value="NAPTIP">NAPTIP</option>
                                                            <option value="Civil Defence">Civil Defence</option>
                                                        </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="folloUp">FOLLOW UP :</label>
                                                <input type="date" class="form-control" name="folloUp" id="folloUp" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="onGoing">ON GOING </label>
                                                <input type="date" class="form-control" name="onGoing" id="onGoing" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="caseClose">CASE CLOSED :</label>
                                                <input type="text" class="form-control" name="caseClose" id="caseClose" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="caseReop">CASE REOPENED :</label>
                                                <input type="date" class="form-control" name="caseReop" id="caseReop" placeholder="">
                                            </div>
                                            
                                            <button type="submit" name="submit1AB" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                      
                    </div>
                </div>
              

<?php  include "456Footers.php";  ?>