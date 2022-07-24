<?php
    require_once('header.php');
    require_once('config.php');
    if(!isset($_COOKIE['email'])){
        header("Location:login.php");
    }
    if(isset($_REQUEST['edit_id'])){
        global $id;
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
                        <h2>Update result list</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                        ?>
                            <div>
                            <?php
                            global $id;
                        $res = "SELECT * FROM result WHERE id ='$id'";
                        $run = mysqli_query($link, $res);
                        if($run) {
                            while($result = mysqli_fetch_array($run)) {
                    ?>
                                <form action="result_list_edit_core.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $result['id']?>">
                                <h4>Exam chapter name</h4>
                                <input type="text" name="chapter" readonly="readonly" value="<?php echo $result['chapter'];?>" class="form-control">
                                <h4>Student name</h4>
                                <input type="text" name="name" value="<?php echo $result['name'];?>" class="form-control">
                                <h4>Student id</h4>
                                <input type="text" name="student_id" value="<?php echo $result['student_id'];?>" class="form-control">
                                <h4>Correct answer</h4>
                                <input type="text" name="correct_ans" value="<?php echo $result['correct_ans'];?>" class="form-control">
                                <h4>Wrong answer</h4>
                                <input type="text" name="wrong_ans" value="<?php echo $result['wrong_ans'];?>" class="form-control">
                                <h4>Total mark</h4>
                                <input type="text" name="total_mark" value="<?php echo $result['total_mark'];?>" class="form-control">
                                <br>
                                <input type="submit" name="update_result" value="Update Result" class="form-control" style="background:#FF5722">
                                <br>
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