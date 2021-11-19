    <!-- Including Header -->
    <?php
    include('./mainInclude/header.php');
    ?>
    <!-- Start Course Page Banner -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./image/coursebanner.jpg" alt="courses" style="height:500px; width: 100%; object-fit:cover; box-shadow:10px;" />
        </div>
    </div>
    <!-- End Course Page Banner -->

    <!-- Start Main Content -->
    <div class="container">
        <h2 class="text-center my-4">Payment Status</h2>
        <form action="" method="POST">
            <div class="form-group row">
                <label class="offset-sm-3 col-form-label">Order ID: </label>
                <div>
                    <input type="text" class="form-control mx-3">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary mx-4" value="View">
                </div>
            </div>
        </form>
    </div>
    <!-- End Main Content -->

    <!-- Including Contact Page -->
    <?php
    include('./contact.php');
    ?>

    <!-- Including Footer -->
    <?php
    include('./mainInclude/footer.php');
    ?>