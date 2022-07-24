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
                    <h2>Practical Exam</h2>
                    <div class="input-section add-student">
                        <form action="practical_exam_core.php" method="POST" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td></td>
                                    <td>
                                    <?php if(isset($_REQUEST['false'])){
                                        echo "<span style='color:red'>Field must not be empty</span>";
                                    }?>
                                     <?php if(isset($_REQUEST['true'])){
                                        echo "<span style='color:green'>Add Question successfully</span>";
                                    }?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chapter Name</td>
                                    <td>
                                        <select name="chap_name">
                                            <option value="ms-word">Ms Word</option>
                                            <option value="ms-excel">Ms Excel</option>
                                            <option value="ms-access">Ms Access</option>
                                            <option value="final-exam">Final Exam</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td><input type="text" name="total_time"></td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td><input type="text" name="mark"></td>
                                </tr>
                                <tr>
                                    <td>Description-1</td>
                                    <td><textarea cols="32" rows="3" name="description_one" class="desc"></textarea></td>
                                </tr>
                                <tr>
                                    <td>File-1</td>
                                    <td><input type="file" name="file_one"></td>
                                </tr>
                                <tr>
                                    <td>Description-2</td>
                                    <td><textarea cols="32" rows="3" name="description_two" class="desc"></textarea></td>
                                </tr>
                                <tr>
                                    <td>File-2</td>
                                    <td><input type="file" name="file_two"></td>
                                </tr>
                                <tr>
                                    <td>Description-3</td>
                                    <td><textarea cols="32" rows="3" name="description_three" class="desc"></textarea></td>
                                </tr>
                                <tr>
                                    <td>File-3</td>
                                    <td><input type="file" name="file_three"></td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td>
                                        <select name="role">
                                            <option value="1">Ms Word</option>
                                            <option value="2">Ms Excel</option>
                                            <option value="3">Ms Access</option>
                                            <option value="4">Final Exam</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="add_file" value="Add File"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <table class="table table-striped table-dark" width="100%">
                        <tr>
                            <th>Id</th>
                            <th>Chapter Name</th>
                            <th>Time</th>
                            <th>Mark</th>
                            <th>Description-1</th>
                            <th>File-1</th>
                            <th>Description-2</th>
                            <th>File-2</th>
                            <th>Description-3</th>
                            <th>File-3</th>
                            <th>Action</th>
                        </tr>
                <?php
                    $res = "SELECT * FROM practical_exam";
                    $run = mysqli_query($link, $res);
                    if($run){
                         $sl = 1;
                    while($result = mysqli_fetch_array($run)){
                ?>
                <tr>
                            <td><?php echo $sl; $sl++; ?></td>
                            <td><?php echo $result['chapter_name']; ?></td>
                            <td><?php echo $result['mark']; ?></td>
                            <td><?php echo $result['time']; ?></td>
                            <td><?php echo $result['description_one']; ?></td>
                            <td><?php echo substr($result['location_one'],0,10); ?></td>
                            <td><?php echo $result['description_two']; ?></td>
                            <td><?php echo substr($result['location_two'],0,10); ?></td>
                            <td><?php echo $result['description_three']; ?></td>
                            <td><?php echo substr($result['location_three'],0,10); ?></td>
                            <td><a onclick="return confirm('Are your sure!!!');" href="del_practical_exam_core.php?id=<?php echo $result['id'];?>">Delete</a></td>
                        </tr>
                
                <?php
                    }
                }
                ?>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- main-section -->
<?php
    require_once('footer.php');
?>