<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once('adminInclude/header.php');
include_once('../dbconnection.php');

if(isset($_SESSION['is_admin_login']))
{
    $stuEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script> location.href='../index.php';  </script>";
}
?>

<div class="col-sm-9 mt-5">
    <p class="bg-dark text-white p-2">List of Feedbacks</p>
    <?php
    $sql = "SELECT * FROM feedback";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        echo '<table class="table">
        <thead>
            <tr>
                <th scope="col">Feedback ID</th>
                <th scope="col">Content</th>
                <th scope="col">Student ID</th>
            </tr>
        </thead>
        <tbody>';
        while($row = $result->fetch_assoc())
        {
            echo '<tr>';
            echo '<th scope="row">'. $row['f_id'] .'</th>';
            echo '<td>'. $row["f_content"].'</td>';
            echo '<td>'. $row["stu_id"].'</td>';
            echo '<td><form method="POST" class="d-inline">
                <input type="hidden" name="id" value='. $row["f_id"] .'>
                </form>
                </td>
                </tr>';
        }

        echo '</tbody>
            </table>';
    } else {
        echo "0 result";
    }
    ?>
</div>

<?php
include_once('adminInclude/footer.php');
?>