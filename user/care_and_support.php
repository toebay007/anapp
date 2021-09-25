<?php  include "123Headers.php";  ?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>FILL IN CARE AND SUPPORT INFORMATION</h5>
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>COMPLAIN DETAILS</h3></div>
                                    <div class="card-body">
                                        <form class="forms-sample">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name of Beneficiary</th>
                                                        <th>Unique ID</th>
                                                        <th>Age</th>
                                                        <th>Sex</th>
                                                        <th>Address</th>
                                                        <th>Phone Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="number" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td>
                                                            <select name="gender" id="gender" class="form-control">
                                                                <option value="" name="">-- Select Gender --</option>
                                                                <option value="male" name="gender">Male</option>
                                                                <option value="female" name="gender">Female</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="number" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="perfarID"> PEPFAR ID </label>
                                                        <input type="text" id="perfarID" class="form-control" style="width: 100%;">
                                                   
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="perfarID"> FACILITY</label>
                                                        <input type="text" id="perfarID" class="form-control">
                                                    
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="artsDate"> ART START DATE</label>
                                                        <input id="artsDate" class="form-control" type="date" />
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="deOVC">DATE ENROLLED INTO OVC PROGRAMM</label>
                                                    <input id="deOVC" class="form-control" type="date" />
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label for="lstPU">LAST PICK UP</label>
                                                    <input id="lstPU" class="form-control" type="date" />
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label for="nextAPT">NEXT APPOINTMENT</label>
                                                    <input id="nextAPT" class="form-control" type="date" />
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label for="refillD">REFILL DAYS</label>
                                                    <input id="refillD" class="form-control" type="date" />
                                                </div>
                                            </div>

                                            <div class="form-row mt-4">
                                                <div class="form-group col-md-4">
                                                    <label for="sampleDate">SAMPLE COLLECTION DATE</label>
                                                    <input id="sampleDate" class="form-control" type="date" />
                                                   
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="viralResult">VIRAL LOAD RESULT</label>
                                                        <input type="text" id="viralResult" class="form-control">
                                                    
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="viralResultDate">VIRAL LOAD RESULT DATE</label>
                                                        <input id="viralResultDate" class="form-control" type="date" />
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="eac">EAC</label>
                                                    <input type="text" id="eac" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <h4 class="text-center">CASE MANAGER</h4>
                                                    <div class="form-group mb-3">
                                                        <label for="names">Name</label>
                                                        <input type="text" id="names" class="form-control" value="Omolomo Clinic" disabled>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="phoneNumber">Phone</label>
                                                        <input type="number" value="09087654321" id="phoneNumber" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <table class="table table-bordered table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>EAC</th>
                                                        <th>CASE MANAGER</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            
                                                            <select name="gender" id="gender" class="form-control">
                                                                <option value="" name="">-- Select Gender --</option>
                                                                <option value="male" name="gender">Male</option>
                                                                <option value="female" name="gender">Female</option>
                                                            </select> -->
                                                        <!-- </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><input type="number" class="form-control"></td>
                                                        <td><input id="dropper-animation" class="form-control" type="date" /></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td>
                                                            <input id="dropper-animation" class="form-control" type="date" />
                                                        </td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table> -->
                                            
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