<?php
require_once('admin/config.php');
if(isset($_COOKIE['em'])){
    $email = $_COOKIE['em'];
    $select_stu = "SELECT * FROM students_list WHERE email='$email'";
    $run_select_stu = mysqli_query($link, $select_stu);
    while($stu = mysqli_fetch_array($run_select_stu)){
        $login_name =   $stu['name'];
        $login_id =   $stu['student_id'];
        $login_email =   $stu['email'];
    }?>
    <h1>Welcome : <?php echo $login_name.' ( '.$login_id.' ) '; ?></h1>
    <p>Question submitted successfully</p>
    <h1><a class="nav-link text-white" href="logout.php"><h5>Logout</h5></a></h1>
<?php
    }
?>