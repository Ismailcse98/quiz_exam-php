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
                        <h2>Update PowerPoint Question</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                    <?php
                        if(isset($_REQUEST['edit_id'])){
                            $id = $_REQUEST['edit_id'];
                        }
                        $res = "SELECT * FROM ms_powerpoint_16 WHERE id ='$id'";
                        $run = mysqli_query($link, $res);
                        if($run) {
                            $sl = 1;
                            while($question = mysqli_fetch_array($run)) {
                    ?>
                                <form action="edit_powerpoint_core.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $question['id']?>">
                                    <h4>Question</h4>
                                    <input type="text" name="question" value="<?php echo $question['question'] ?>" class="form-control">
                                    <h4>Option-1</h4>
                                    <input type="text" name="option1" value="<?php echo $question['option1'] ?>" class="form-control">
                                    <h4>Option-2</h4>
                                    <input type="text" name="option2" value="<?php echo $question['option2'] ?>" class="form-control">
                                    <h4>Option-3</h4>
                                    <input type="text" name="option3" value="<?php echo $question['option3'] ?>" class="form-control">
                                    <h4>Option-4</h4>
                                    <input type="text" name="option4" value="<?php echo $question['option4'] ?>" class="form-control">
                                    <h4>Answer</h4>
                                    <input type="text" name="answer" value="<?php echo $question['answer'] ?>" class="form-control">
                                    <br>
                                    <input type="submit" name="edit_powerpoint" value="Update Question" class="form-control" style="background:#FF5722">
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