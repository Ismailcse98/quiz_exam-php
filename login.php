<?php
    require_once('admin/header.php');
    if(isset($_COOKIE['em'])){
        header("Location:index.php");
    }
?>
    <div class="header-section">
        <div class="container">
            <h2>Student Login</h2>
        </div> <!-- container -->
    </div> <!-- header-section -->
    <div class="main-section">
        <div class="container">
            <div class="input-section student-login">
                <form action="student_login_core.php" method="POST">
                    <table>
                        <tr>
                            <td>E-mail</td>
                            <td><input type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Student ID</td>
                            <td><input type="text" name="student_id"></td>
                        </tr>
                        <tr>
                            <td>Round No</td>
                            <td><input type="text" name="round_no"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="login" value="Login"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php if(isset($_REQUEST['false'])){
                                echo "<span style='color:red' >Your information is wrong</span>";
                            }?></td>
                        </tr>
                    </table>
                </form>
            </div><!-- input-section -->
        </div> <!-- container -->
    </div> <!-- main-section -->
   <?php
   require_once('admin/footer.php');
   ?>

   <script type="text/javascript">
   // Stop Inspect
    document.addEventListener("contextmenu",function(event){
        event.preventDefault();
    });
    // Stop Copy
    document.addEventListener("copy", function(evt){
        evt.clipboardData.setData("text/plain", "Copying is not allowed on this webpage");
        evt.preventDefault();
    }, false);
    
   </script>