
<!..start of student registration form..!>
    <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#StuRegModelCenter">
                Launch demo modal
            </button> -->
            
            <!-- Modal -->
            <div class="modal fade" id="StuRegModelCenter" tabindex="-1" aria-labelledby="StuRegModelCenterLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="StuRegModelCenterLabel">Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <!..start form design..!>
                        <form id = "StuRegForm">
                            <div class="form-group">
                              <i class="fas fa-user"></i>
                              <label for="stuname" class="pl-2 font-weight-bold">Name</label>
                              <small id="statusMsg1"></small>
                              <input type="text" class="form-control" id="stuname" id="stuname" name="stuname" placeholder="Name">
                           </div>
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <label for="stuemail" class="pl-2 font-weight-bold">Email Address</label>
                                <small id="statusMsg2"></small>
                                <input type="email" class="form-control" id="stuemail" id="stuemail" name="stuemail" placeholder="Email address">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-key"></i>
                                <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                                <small id="statusMsg3"></small>
                                <input type="password" class="form-control" id="stupass" id="stupass" name="stupass" placeholder="Password">
                            </div>
                        </form>
                        <!..end form design..!>
                    </div>
                    <div class="modal-footer">
                    <span id="successMsg"></span>
                    <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
    <!..end of student registration form..!>
