<?php
    require_once('header.php');
    require_once('config.php');
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
                    <h2>Result List</h2>
                    <div class="">
                        <table class="table table-dark table-striped">
                            <tr style="color:#FF5722">
                                <th>Submit Time</th>
                                <th>Exam Chapter</th>
                                <th>Name</th>
                                <th>Student id</th>
                                <th>Correct answer</th>
                                <th>Wrong answer</th>
                                <th>Total mark</th>
                                <th>Action</th>
                            </tr>
                    <?php
                        $res = "SELECT * FROM result ORDER BY id DESC";
                        $run = mysqli_query($link, $res);
                        if($run) {
                            while($result = mysqli_fetch_array($run)) {
                                ?>
                            <tr>
                                <td><?php echo $result['exam_date']?></td>
                                <td><?php echo $result['chapter']?></td>
                                <td><?php echo $result['name']?></td>
                                <td><?php echo $result['student_id']?></td>
                                <td><?php echo $result['correct_ans']?></td>
                                <td><?php echo $result['wrong_ans']?></td>
                                <td><?php echo $result['total_mark']?></td>
                                <td> <a href="result_list_edit.php?edit_id=<?php echo $result['id'] ?>">Edit</a> || <a onclick="return confirm('Are you sure!!!')" href="result_list_delete_core.php?del_id=<?php echo $result['id']?>">Delete</a> </td>
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