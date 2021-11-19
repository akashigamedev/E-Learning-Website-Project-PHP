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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="./image/python.jpg" class="card-img-top" alt="Python">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Course Name: Learn Python</h5>
                    <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, accusamus!</p>
                    <p class="card-text"> Duration: 10 Days</p>
                    <form action="" method="POST">
                        <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder"> &#8377 200</span></p>
                        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Lesson No.</th>
                            <th scope="col">Lesson Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Introduction</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Main Content -->

    <!-- Including Footer -->
    <?php
    include('./mainInclude/footer.php');
    ?>