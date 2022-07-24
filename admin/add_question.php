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
                <?php
                if(!isset($_REQUEST['id'])){
                    header("Location:all_chapter.php");
                }
    // concepts of IT 
                    if($_REQUEST['id']==9){
                        ?>
                        <h2>Concepts of IT</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                                <form action="add_question_core.php" method="POST">
                                <h4>Question</h4>
                                <input type="text" name="question" class="form-control">
                                <h4>Option-1</h4>
                                <input type="text" name="option1" class="form-control">
                                <h4>Option-2</h4>
                                <input type="text" name="option2" class="form-control">
                                <h4>Option-3</h4>
                                <input type="text" name="option3" class="form-control">
                                <h4>Option-4</h4>
                                <input type="text" name="option4" class="form-control">
                                <h4>Answer</h4>
                                <input type="text" name="answer" class="form-control">
                                <br>
                                <input type="submit" name="concepts_of_it" value="Add" class="form-control" style="background:#FF5722">
                                <br>
                                </form>
                            </div>
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Question</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 $res = "SELECT * FROM concepts_of_it";
                                 $run = mysqli_query($link, $res);
                                 if($run) {
                                     $sl=1;
                                     while($data= mysqli_fetch_array($run)) {
                                         ?>
                                         <tr>
                                            <td><?php echo $sl; $sl++; ?></td>
                                            <td><?php echo $data['question'];?></td>
                                            <td><?php echo $data['option1'];?></td>
                                            <td><?php echo $data['option2'];?></td>
                                            <td><?php echo $data['option3'];?></td>
                                            <td><?php echo $data['option4'];?></td>
                                            <td><?php echo $data['answer'];?></td>
                                            <td><a href="edit_concept_it.php?edit_id=<?php echo $data['id'];?>">Edit</a>  || <a onclick="return confirm('Are you sure!!!')" href="del_concept_it.php?del_id=<?php echo $data['id'];?>">Delete</a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                            ?>
                        </table>
                        <?php
    // Windows 10
                    }elseif($_REQUEST['id']==2){
                        ?>
                        <h2>Windows 10</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                                <form action="add_question_core.php" method="POST">
                                <h4>Question</h4>
                                <input type="text" name="question" class="form-control">
                                <h4>Option-1</h4>
                                <input type="text" name="option1" class="form-control">
                                <h4>Option-2</h4>
                                <input type="text" name="option2" class="form-control">
                                <h4>Option-3</h4>
                                <input type="text" name="option3" class="form-control">
                                <h4>Option-4</h4>
                                <input type="text" name="option4" class="form-control">
                                <h4>Answer</h4>
                                <input type="text" name="answer" class="form-control">
                                <br>
                                <input type="submit" name="windows_10" value="Add" class="form-control" style="background:#FF5722">
                                <br>
                                </form>
                            </div>
                            <table class="table table-dark table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Question</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 $res = "SELECT * FROM windows_10";
                                 $run = mysqli_query($link, $res);
                                 if($run) {
                                     $sl=1;
                                     while($data= mysqli_fetch_array($run)) {
                                         ?>
                                         <tr>
                                            <td><?php echo $sl; $sl++; ?></td>
                                            <td><?php echo $data['question'];?></td>
                                            <td><?php echo $data['option1'];?></td>
                                            <td><?php echo $data['option2'];?></td>
                                            <td><?php echo $data['option3'];?></td>
                                            <td><?php echo $data['option4'];?></td>
                                            <td><?php echo $data['answer'];?></td>
                                            <td><a href="edit_windows.php?edit_id=<?php echo $data['id'];?>">Edit</a>  || <a onclick="return confirm('Are you sure!!!')" href="del_windows.php?del_id=<?php echo $data['id'];?>">Delete</a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                            ?>
                        </table>
                        <?php
    // MS word-2016
                    }elseif($_REQUEST['id']==3){
                        ?>
                        <h2>MS Word-2016</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                                <form action="add_question_core.php" method="POST">
                                <h4>Question</h4>
                                <input type="text" name="question" class="form-control">
                                <h4>Option-1</h4>
                                <input type="text" name="option1" class="form-control">
                                <h4>Option-2</h4>
                                <input type="text" name="option2" class="form-control">
                                <h4>Option-3</h4>
                                <input type="text" name="option3" class="form-control">
                                <h4>Option-4</h4>
                                <input type="text" name="option4" class="form-control">
                                <h4>Answer</h4>
                                <input type="text" name="answer" class="form-control">
                                <br>
                                <input type="submit" name="ms_word_16" value="Add" class="form-control" style="background:#FF5722">
                                <br>
                                </form>
                            </div>
                            <table class="table table-dark table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Question</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 $res = "SELECT * FROM ms_word_16";
                                 $run = mysqli_query($link, $res);
                                 if($run) {
                                     $sl=1;
                                     while($data= mysqli_fetch_array($run)) {
                                         ?>
                                         <tr>
                                            <td><?php echo $sl; $sl++; ?></td>
                                            <td><?php echo $data['question'];?></td>
                                            <td><?php echo $data['option1'];?></td>
                                            <td><?php echo $data['option2'];?></td>
                                            <td><?php echo $data['option3'];?></td>
                                            <td><?php echo $data['option4'];?></td>
                                            <td><?php echo $data['answer'];?></td>
                                            <td><a href="edit_word.php?edit_id=<?php echo $data['id'];?>">Edit</a>  || <a onclick="return confirm('Are you sure!!!')" href="del_word.php?del_id=<?php echo $data['id'];?>">Delete</a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                            ?>
                        </table>
                        <?php
    // MS Excel 2016
                    }elseif($_REQUEST['id']==10){
                        ?>
                        <h2>MS Excel-2016</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                                <form action="add_question_core.php" method="POST">
                                <h4>Question</h4>
                                <input type="text" name="question" class="form-control">
                                <h4>Option-1</h4>
                                <input type="text" name="option1" class="form-control">
                                <h4>Option-2</h4>
                                <input type="text" name="option2" class="form-control">
                                <h4>Option-3</h4>
                                <input type="text" name="option3" class="form-control">
                                <h4>Option-4</h4>
                                <input type="text" name="option4" class="form-control">
                                <h4>Answer</h4>
                                <input type="text" name="answer" class="form-control">
                                <br>
                                <input type="submit" name="ms_excel_16" value="Add" class="form-control" style="background:#FF5722">
                                <br>
                                </form>
                            </div>
                            <table class="table table-dark table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Question</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 $res = "SELECT * FROM ms_excel_16";
                                 $run = mysqli_query($link, $res);
                                 if($run) {
                                     $sl=1;
                                     while($data= mysqli_fetch_array($run)) {
                                         ?>
                                         <tr>
                                            <td><?php echo $sl; $sl++; ?></td>
                                            <td><?php echo $data['question'];?></td>
                                            <td><?php echo $data['option1'];?></td>
                                            <td><?php echo $data['option2'];?></td>
                                            <td><?php echo $data['option3'];?></td>
                                            <td><?php echo $data['option4'];?></td>
                                            <td><?php echo $data['answer'];?></td>
                                            <td><a href="edit_excel.php?edit_id=<?php echo $data['id'];?>">Edit</a>  || <a onclick="return confirm('Are you sure!!!')" href="del_excel.php?del_id=<?php echo $data['id'];?>">Delete</a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                            ?>
                        </table>
                        <?php
    // ICDL 
                    }elseif($_REQUEST['id']==5){
                        ?>
                        <h2>ICDL</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                                <form action="add_question_core.php" method="POST">
                                <h4>Question</h4>
                                <input type="text" name="question" class="form-control">
                                <h4>Option-1</h4>
                                <input type="text" name="option1" class="form-control">
                                <h4>Option-2</h4>
                                <input type="text" name="option2" class="form-control">
                                <h4>Option-3</h4>
                                <input type="text" name="option3" class="form-control">
                                <h4>Option-4</h4>
                                <input type="text" name="option4" class="form-control">
                                <h4>Answer</h4>
                                <input type="text" name="answer" class="form-control">
                                <br>
                                <input type="submit" name="icdl" value="Add" class="form-control" style="background:#FF5722">
                                <br>
                                </form>
                            </div>
                            <table class="table table-dark table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Question</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 $res = "SELECT * FROM icdl";
                                 $run = mysqli_query($link, $res);
                                 if($run) {
                                     $sl=1;
                                     while($data= mysqli_fetch_array($run)) {
                                         ?>
                                         <tr>
                                            <td><?php echo $sl; $sl++; ?></td>
                                            <td><?php echo $data['question'];?></td>
                                            <td><?php echo $data['option1'];?></td>
                                            <td><?php echo $data['option2'];?></td>
                                            <td><?php echo $data['option3'];?></td>
                                            <td><?php echo $data['option4'];?></td>
                                            <td><?php echo $data['answer'];?></td>
                                            <td><a href="edit_icdl.php?edit_id=<?php echo $data['id'];?>">Edit</a>  || <a onclick="return confirm('Are you sure!!!')" href="del_icdl.php?del_id=<?php echo $data['id'];?>">Delete</a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                            ?>
                        </table>
                        <?php
    //MS Access
                    }elseif($_REQUEST['id']==6){
                        ?>
                        <h2>MS Access 2016</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                                <form action="add_question_core.php" method="POST">
                                <h4>Question</h4>
                                <input type="text" name="question" class="form-control">
                                <h4>Option-1</h4>
                                <input type="text" name="option1" class="form-control">
                                <h4>Option-2</h4>
                                <input type="text" name="option2" class="form-control">
                                <h4>Option-3</h4>
                                <input type="text" name="option3" class="form-control">
                                <h4>Option-4</h4>
                                <input type="text" name="option4" class="form-control">
                                <h4>Answer</h4>
                                <input type="text" name="answer" class="form-control">
                                <br>
                                <input type="submit" name="ms_access_16" value="Add" class="form-control" style="background:#FF5722">
                                <br>
                                </form>
                            </div>
                            <table class="table table-dark table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Question</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 $res = "SELECT * FROM ms_access_16";
                                 $run = mysqli_query($link, $res);
                                 if($run) {
                                     $sl=1;
                                     while($data= mysqli_fetch_array($run)) {
                                         ?>
                                         <tr>
                                            <td><?php echo $sl; $sl++; ?></td>
                                            <td><?php echo $data['question'];?></td>
                                            <td><?php echo $data['option1'];?></td>
                                            <td><?php echo $data['option2'];?></td>
                                            <td><?php echo $data['option3'];?></td>
                                            <td><?php echo $data['option4'];?></td>
                                            <td><?php echo $data['answer'];?></td>
                                            <td><a href="edit_access.php?edit_id=<?php echo $data['id'];?>">Edit</a>  || <a onclick="return confirm('Are you sure!!!')" href="del_access.php?del_id=<?php echo $data['id'];?>">Delete</a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                            ?>
                        </table>
                        <?php
    // MS PowerPoint 2016
                    }elseif($_REQUEST['id']==7){
                        ?>
                        <h2>MS PowerPoint 2016</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                                <form action="add_question_core.php" method="POST">
                                <h4>Question</h4>
                                <input type="text" name="question" class="form-control">
                                <h4>Option-1</h4>
                                <input type="text" name="option1" class="form-control">
                                <h4>Option-2</h4>
                                <input type="text" name="option2" class="form-control">
                                <h4>Option-3</h4>
                                <input type="text" name="option3" class="form-control">
                                <h4>Option-4</h4>
                                <input type="text" name="option4" class="form-control">
                                <h4>Answer</h4>
                                <input type="text" name="answer" class="form-control">
                                <br>
                                <input type="submit" name="ms_powerpoint_16" value="Add" class="form-control" style="background:#FF5722">
                                <br>
                                </form>
                            </div>
                            <table class="table table-dark table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Question</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 $res = "SELECT * FROM ms_powerpoint_16";
                                 $run = mysqli_query($link, $res);
                                 if($run) {
                                     $sl=1;
                                     while($data= mysqli_fetch_array($run)) {
                                         ?>
                                         <tr>
                                            <td><?php echo $sl; $sl++; ?></td>
                                            <td><?php echo $data['question'];?></td>
                                            <td><?php echo $data['option1'];?></td>
                                            <td><?php echo $data['option2'];?></td>
                                            <td><?php echo $data['option3'];?></td>
                                            <td><?php echo $data['option4'];?></td>
                                            <td><?php echo $data['answer'];?></td>
                                            <td><a href="edit_powerpoint.php?edit_id=<?php echo $data['id'];?>">Edit</a>  || <a onclick="return confirm('Are you sure!!!')" href="del_powerpoint.php?del_id=<?php echo $data['id'];?>">Delete</a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                            ?>
                        </table>
                        <?php
    // Final Exam
                    }elseif($_REQUEST['id']==8){
                        ?>
                        <h2>Final  Exam</h2>
                        <?php
                            if(isset($_REQUEST['false'])){
                                echo "<span style='color:red;'>Field must not be empty</span>";
                            }
                            if(isset($_REQUEST['true'])){
                                echo "<span style='color:green;'>Data inserted successfully</span>";
                            }
                        ?>
                            <div>
                                <form action="add_question_core.php" method="POST">
                                <h4>Question</h4>
                                <input type="text" name="question" class="form-control">
                                <h4>Option-1</h4>
                                <input type="text" name="option1" class="form-control">
                                <h4>Option-2</h4>
                                <input type="text" name="option2" class="form-control">
                                <h4>Option-3</h4>
                                <input type="text" name="option3" class="form-control">
                                <h4>Option-4</h4>
                                <input type="text" name="option4" class="form-control">
                                <h4>Answer</h4>
                                <input type="text" name="answer" class="form-control">
                                <br>
                                <input type="submit" name="final_exam" value="Add" class="form-control" style="background:#FF5722">
                                <br>
                                </form>
                            </div>
                            <table class="table table-dark table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Question</th>
                                <th>Opt1</th>
                                <th>Opt2</th>
                                <th>Opt3</th>
                                <th>Opt4</th>
                                <th>Ans</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                 $res = "SELECT * FROM final_exam";
                                 $run = mysqli_query($link, $res);
                                 if($run) {
                                     $sl=1;
                                     while($data= mysqli_fetch_array($run)) {
                                         ?>
                                         <tr>
                                            <td><?php echo $sl; $sl++; ?></td>
                                            <td><?php echo $data['question'];?></td>
                                            <td><?php echo $data['option1'];?></td>
                                            <td><?php echo $data['option2'];?></td>
                                            <td><?php echo $data['option3'];?></td>
                                            <td><?php echo $data['option4'];?></td>
                                            <td><?php echo $data['answer'];?></td>
                                            <td><a href="edit_final_exam.php?edit_id=<?php echo $data['id'];?>">Edit</a>  || <a onclick="return confirm('Are you sure!!!')" href="del_final_exam.php?del_id=<?php echo $data['id'];?>">Delete</a></td>
                                         </tr>
                                         <?php
                                     }
                                 }
                            ?>
                        </table>
                        <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div><!-- main-section -->
<?php
    require_once('footer.php');
?>