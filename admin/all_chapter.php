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
                    <h2>Chapter List</h2>
                    <div class="">
                        <table class="table table-dark table-striped">
                            <tr style="color:#FF5722">
                                <th>SL</th>
                                <th>Chapter</th>
                                <th>Total Mark</th>
                                <th>Time</th>
                                <th>Add Question</th>
                            </tr>
            <?php
                $res = "SELECT * FROM chapter_list";
                $run = mysqli_query($link, $res);
                if($run) {
                    $sl = 1;
                    while($chapter = mysqli_fetch_array($run)) {
                        ?>
                         <tr>
                                <td><?php echo $sl; $sl++;?></td>
                                <td><?php echo $chapter['chapter_name']; ?></td>
                                <td><?php echo $chapter['mark']; ?></td>
                                <td><?php echo $chapter['time']; ?></td>
                                <td><a href="add_question.php?id=<?php echo $chapter['id'];?>">Add Question</a></td>
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