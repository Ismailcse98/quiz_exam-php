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
                    <h2>Add Chapter</h2>
                    <div class="input-section add-student">
                        <form action="add_chapter_core.php" method="POST">
                            <table>
                                <tr>
                                    <td>Add Chapter</td>
                                    <td><input type="text" name="chapter_name"></td>
                                </tr>
                                <tr>
                                    <td>Total Mark</td>
                                    <td><input type="text" name="mark"></td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td><input type="text" name="time"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="add-chapter" value="Submit"></td>
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