<?php
    require_once('header.php');
    if(!isset($_COOKIE['email'])){
        header("Location:login.php");
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
                    <h2>Add Student</h2>
                    <div class="input-section add-student">
                        <form action="add_student_core.php" method="POST">
                            <table>
                                <tr>
                                    <td>Student Name</td>
                                    <td><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td>Student E-mail</td>
                                    <td><input type="email" name="stu_email"></td>
                                </tr>
                                <tr>
                                    <td>Student ID</td>
                                    <td><input type="text" name="stuId"></td>
                                </tr>
                                <tr>
                                    <td>Round No</td>
                                    <td><input type="text" name="roundNo"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="add-student" value="Add Student"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    <?php if(isset($_REQUEST['false'])){
                                        echo "<span style='color:red'>Field must not be empty</span>";
                                    }?>
                                     <?php if(isset($_REQUEST['true'])){
                                        echo "<span style='color:green'>Add student successfully</span>";
                                    }?>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- main-section -->
<?php
    require_once('footer.php');
?>