<?php
if (!isset($_SESSION)) {
    session_start();
}
include('dbconnection.php');

if (isset($_SESSION['is_login'])) {
    $stuEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script> location.href = 'index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Watch Course</title>
</head>

<body>
    <div class="nav nav-bar container-fluid bg-dark p-2 d-flex">
    <a class="navbar-brand text-light" href="index.php">Akash Academy</a>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 border-right">
            <h4 class="text-center mt-3">Lessons</h4>
            <ul id="playlist" class="nav flex-column">
            <?php
                if(isset($_GET['course_id'])) {
                    $course_id = $_GET['course_id'];
                    $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        echo '<li class="nav-item border-bottom py-2" movieurl="'.str_replace("../", "", $row['lesson_link']).'" style="cursor:pointer;">'. $row['lesson_name'] .'</li>';
                        }
                    } 
                }
            ?>
            </ul>
        </div>
            <div class="col-sm-8">
                <video id="videoarea" src="" class="mt-5 w-75 ml-2" controls></video>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>