<?php  include "123Headers.php";  ?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>PASSWORD CHANGE</h5>
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
                            if (isset($_GET['update']) && ($_GET['update'] == 'successful')) {
                                echo '<div class="alert alert-success alert-dismissible fade show text-center">';
                                echo 'Password Changed successfully';
                                echo '</div>';
                                }
                            ?>
                            <?php
                            if (isset($_GET['update']) && ($_GET['update'] == 'failed')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Password could not be changed at this time. Try Again.';
                                echo '</div>';
                                }
                            ?>
                            <?php
                            if (isset($_GET['password']) && ($_GET['password'] == 'failed_entry')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Check that both passwords are the same.';
                                echo '</div>';
                                }
                            ?>
                            <?php
                            if (isset($_GET['password']) && ($_GET['password'] == 'Old_wrong')) {
                                echo '<div class="alert alert-danger alert-dismissible fade show text-center">';
                                echo 'Incorrect previous password.';
                                echo '</div>';
                                }
                            ?>
                                    <div class="card-header"><h3>Change Password </h3></div>
                                    <div class="card-body">
                                        <form action="forms.php" method="POST" class="forms-sample">
                                            <div class="form-group">
                                                <label for="oldpwd">Old Password : </label>
                                                <input type="password" class="form-control" id="oldpwd" name="oldpwd" placeholder="Curent Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="newpwd">New Password :</label>
                                                <input type="password" class="form-control" id="newpwd" name="newpwd" placeholder="New Password">
                                                <span class="text-muted" style="font-size: 0.8rem;"><i>(Ensure that password is more than 6 character)</i></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cnewpwd">Confirm New Password :</label>
                                                <input type="password" class="form-control" id="cnewpwd" name="cnewpwd" placeholder="Confirm Password">
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="users" name="users" value="<?php echo $users; ?>">
                                            </div>
                                            
                                                                                      
                                            <button type="submit" name="submit14" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                      
                    </div>
                </div>
              
<?php  include "456Footers.php";  ?>