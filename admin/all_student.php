<?php
    require_once('header.php');
    require_once('config.php');
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
                    <h2>Student List</h2>
                    <div class="">
                        <table class="table table-dark table-striped">
                            <tr style="color:#FF5722">
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Student id</th>
                                <th>Round No</th>
                                <th>Action</th>
                            </tr>
                <?php
                    $res = "SELECT * FROM students_list";
                    $run = mysqli_query($link, $res);
                    if($run) {
                        $sl = 1;
                        while($student = mysqli_fetch_array($run)) {
                            ?>
                            <tr>
                                <td><?php echo $sl; $sl++;?></td>
                                <td><?php echo $student['name']?></td>
                                <td><?php echo $student['email']?></td>
                                <td><?php echo $student['student_id']?></td>
                                <td><?php echo $student['round_no']?></td>
                                <td> <a href="student_info_edit.php?edit_id=<?php echo $student['id']?>">Edit</a> || <a onclick="return confirm('Are you sure !!!')" href="student_info_delete_core.php?del_id=<?php echo $student['id']?>">Delete</a></td>
                            </tr>
                            
                            <?php
                        }
                    }
                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- main-section -->
<?php
    require_once('footer.php');
?>