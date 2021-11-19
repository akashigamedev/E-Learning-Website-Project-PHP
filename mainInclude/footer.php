<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2021 || Designed by Akashi || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
</footer>
<!-- End Login -->

<!-- Start Student Registeration Modal -->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenterLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include('studentregform.php'); ?>
            </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Student Registeration Modal -->

<!-- Start Student Login Modal -->

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuLoginModalCenterLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Start Student Login Form -->
                <form id="stuLoginForm">
                    <div class="mb-3">
                        <i class="fas fa-envelope"></i><label for="stuLogEmail" class="px-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-key"></i><label for="stuLogPass" class="px-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="stuLogPass" id="stuLogPass">
                    </div>
                </form>
                <!-- End Student Login Form -->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary" onclick="checkStuLogin()" id="stuLoginBtn">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Student Login Modal -->

<!-- Start Admin Login Modal -->

<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Start Admin Login Form -->
                <form id="adminLoginForm">
                    <div class="mb-3">
                        <i class="fas fa-envelope"></i><label for="adminLogEmail" class="px-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="adminLogEmail" id="adminLogEmail">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-key"></i><label for="adminLogPass" class="px-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="adminLogPass" id="adminLogPass">
                    </div>
                </form>
                <!-- End Admin Login Form -->
            </div>
            <div class="modal-footer">
                <small id="statusAdminLogMsg"></small>
                <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Admin Login Modal -->

<script src="js/jquery.min.js"></script>
<script src="js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/ajaxrequest.js" type="text/javascript"></script>
<script src="js/adminajaxrequest.js" type="text/javascript"></script>
</body>

</html>