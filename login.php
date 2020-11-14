

<!..start student login..!>
<!-- Modal -->
<div class="modal fade" id="StuLoginModelCenter" tabindex="-1" aria-labelledby="StuLoginModelCenterLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="StuLoginModelCenterLabel">Login Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <!..start form design..!>
                        <form id="stuLoginForm">
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <label for="stuLogemail" class="pl-2 font-weight-bold">Email Address</label>
                                <input type="email" class="form-control" id="stuLogemail" name="stuLogemail" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <i class="fas fa-key"></i>
                                <label for="stuLogpass" class="pl-2 font-weight-bold">New Password</label>
                                <input type="password" class="form-control" id="stuLogpass"  name="stuLogpass" placeholder="Password">
                            </div>
                        </form>
                        <!..end form design..!>
                    </div>
                    <div class="modal-footer">
                    <small id="statusLogMsg"></small>
                    <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="studentLogIn()">Login</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
                </div>
            </div>
<!..end student login..!>

