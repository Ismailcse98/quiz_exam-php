<?php
require_once('header.php');
if(isset($_COOKIE['email'])){
    header("Location:index.php");
}
?>
    <div class="header-section">
        <div class="container">
            <h2>Admin Login</h2>
        </div> <!-- container -->
    </div> <!-- header-section -->
    <div class="main-section">
        <div class="container">
            <div class="input-section">
                <form action="login_core.php" method="POST">
                    <table>
                        <tr>
                            <td>E-mail</td>
                            <td><input type="email" name="email"> </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="login" value="Login"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php if(isset($_REQUEST['false'])){
                                echo "<span style='color:red' >Email or password is incorrect</span>";
                            }?></td>
                        </tr>
                    </table>
                </form>
                
            </div><!-- login-section -->
        </div> <!-- container -->
    </div> <!-- main-section -->
   <?php
   require_once('footer.php');
   ?>
   
   