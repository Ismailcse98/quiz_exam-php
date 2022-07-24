<?php
    require_once('admin/header.php');
    require_once('admin/config.php');
    if(!isset($_COOKIE['em'])){
        header("Location:login.php");
    }
?>
<style>
.content-section{
    margin-top: 50px;
}
.subject-name{
    background:#212529;
    color:#fff;
    margin-bottom: 0px;
    text-align: center;
    border-bottom: 1px solid #FF5722;
    padding-bottom: 10px;
}
.question input{
    margin-right: 5px;
    display: inline-block;
}
.question h5{
    margin-left: 30px;
}
.question input[type="submit"]{
    background: #FF5722;
    color: #fff;
    font-size:22px;
    font-weight:bold;
}
</style>
<div class="content-section">
    <div class="container">
        <div class="question mb-5">
        <div class="menu">
        <?php
            $email = $_COOKIE['em'];
            $select_stu = "SELECT * FROM students_list WHERE email='$email'";
            $run_select_stu = mysqli_query($link, $select_stu);
            while($stu = mysqli_fetch_array($run_select_stu)){
                $login_name =   $stu['name'];
                $login_id =  $stu['student_id'];
            }
            $chapter = "SELECT * FROM practical_exam WHERE role = 1";
            $run_chapter = mysqli_query($link, $chapter);
            while($show_chapter = mysqli_fetch_array($run_chapter)){
                $chapter_name =   $show_chapter['chapter_name'];
                $exam_mark =  $show_chapter['mark'];
                $exam_time =  $show_chapter['time'];
                $description_one =  $show_chapter['description_one'];
                $location_one =  $show_chapter['location_one'];
                $description_two =  $show_chapter['description_two'];
                $location_two =  $show_chapter['location_two'];
                $description_three =  $show_chapter['description_three'];
                $location_three =  $show_chapter['location_three'];
            }
        ?>
       <?php
        if(isset($_REQUEST['false'])){
            echo "<h5 style='color:red;text-align:center'>Please Submit your file</h5>";
        }
       ?>
        <h4 class="subject-name">Welcome <span style="color:#FF5722"><?php echo $login_name." - ".$login_id?></span> ( <?php echo $chapter_name;?> )</h4>
            <ul class="nav justify-content-center bg-dark">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><h5>Time: <?php echo $exam_time?> Minutes</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><h5>Mark: <?php echo $exam_mark?></h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php"><h5>Logout</h5></a>
                </li>
            </ul>
        </div>
        <p> <h1>01</h1> <?php echo $description_one;?></p>
        <div><a class="btn btn-primary" href="admin/<?php echo $location_one ; ?>">First File Download</a></div>
        <p> <h1>02</h1> <?php echo $description_two;?></p>
        <div><a class="btn btn-primary" href="admin/<?php echo $location_two ; ?>">Second File Download</a></div>
        <p> <h1>03</h1> <?php echo $description_three;?></p>
        <div><a class="btn btn-primary" href="admin/<?php echo $location_three ; ?>">Third File Download</a></div>
        </div><!-- ./question -->
    </div><!-- /.container -->

<!-- File Submit section -->
<hr>
<h2 style="text-align: center;">File Upload Section</h2>
<hr>
<div class="container">

    <form action="upload_section_core.php" method="POST" enctype="multipart/form-data">
        <table class="table table-striped table-dark">
            <tr>
                <td>Upload Your First File</td>
                <td><input type="file" name="first_file"></td>
            </tr>
            <tr>
                <td>Upload Your Second File</td>
                <td><input type="file" name="second_file"></td>
            </tr>
            <tr>
                <td>Upload Your Third File</td>
                <td><input type="file" name="third_file"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" name="submit" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div><!-- container -->

</div><!-- content-section -->

<?php
    require_once('admin/footer.php');
?>

<script type="text/javascript">
    // Stop Inspect
    document.addEventListener("contextmenu",function(event){
        event.preventDefault();
    });
    // Stop Copy
    document.addEventListener("copy", function(evt){
        evt.clipboardData.setData("text/plain", "Copying is not allowed on this webpage");
        evt.preventDefault();
    }, false);
</script>

