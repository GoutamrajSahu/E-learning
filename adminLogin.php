<!..start of admin login form..!> 
     <!-- Modal -->
     <div class="modal fade" id="adminLoginModelCenter" tabindex="-1" aria-labelledby="adminLoginModelCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModelCenterLabel">Admin Login Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <!..start form design..!>
                <form id="adminLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="adminLogemail" class="pl-2 font-weight-bold">Email Address</label>
                        <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
                    </div>
                </form>
                <!..end form design..!>
            </div>
            <div class="modal-footer">
            <div><small id="adminLoginStatus"></small></div>
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="loginAdmin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        </div>
    </div>
    <!..end of admin login form..!>