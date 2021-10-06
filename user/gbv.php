<?php  include "123Headers.php";  ?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>FILL Gender Basd Violence</h5>
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
                                        <form class="forms-sample">
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
                                                            <option value="">OTHERS SPECIFY</option>
                                                        </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="actTaken">ACTION TAKEN :</label>
                                                <textarea name="actTaken" id="actTaken" cols="5" rows="10" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">FOLLOW UP :</label>
                                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ON GOING </label>
                                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">CASE CLOSED :</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">CASE REOPENED :</label>
                                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                      
                    </div>
                </div>
              

<?php  include "456Footers.php";  ?>