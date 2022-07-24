<?php
    require_once('header.php');
    require_once('config.php');
    if(!isset($_COOKIE['email'])){
        header("Location:login.php");
    }
    if(isset($_REQUEST['edit_id'])){
        $id = $_REQUEST['edit_id'];
    }
?>
    <div class="header-section">
        <div class="container">
            <h2>Admin Dashboard</h2>
        </div> <!-- container -->
    </div> <!-- header-section -->
    <?php
        require_once('sidebar.php');
    ?>
                <div class="col-md-9">
                    <h2>Update Student Information</h2>
                    <div class="input-section add-student">
                    <?php
                        $res = "SELECT * FROM students_list WHERE id ='$id'";
                        $run = mysqli_query($link, $res);
                        if($run) {
                            $sl = 1;
                            while($student = mysqli_fetch_array($run)) {
                    ?>
                        <form action="student_info_edit_core.php" method="POST">
                        <input type="hidden" value="<?php echo $student['id'] ?>" name="id">
                            <table>
                                <tr>
                                    <td>Student Name</td>
                                    <td><input type="text" value="<?php echo $student['name'] ?>" name="name"> </td>
                                </tr>
                                <tr>
                                    <td>Student E-mail</td>
                                    <td><input type="email" value="<?php echo $student['email'] ?>" name="stu_email"></td>
                                </tr>
                                <tr>
                                    <td>Student ID</td>
                                    <td><input type="text" value="<?php echo $student['student_id'] ?>" name="stuId"></td>
                                </tr>
                                <tr>
                                    <td>Round No</td>
                                    <td><input type="text" value="<?php echo $student['round_no'] ?>" name="roundNo"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="update_student" value="Update Student"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    <?php if(isset($_REQUEST['false'])){
                                        echo "<span style='color:red'>Field must not be empty</span>";
                                    }?>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- main-section -->
<?php
    require_once('footer.php');
?>