<?php
    require_once('admin/header.php');
    if(!isset($_COOKIE['em'])){
        header("Location:login.php");
    }
?>
    <div class="container">
        <div class="not-found text-center">
            <h1 style="padding-top:100px;">
                <span style="color:#FF5722; font-size:100px;">Oops! <br> 404</span> <br>

                Not Found page
            </h1>
            <h3 style="padding-top:50px; padding-bottom:123px;">Please wait for next exam || <a href="logout.php">Logout</a></h3>
        </div>
    </div>


<?php
    require_once('admin/footer.php');
?>
<script type="text/javascript">
    // Stop Hover
    document.getElementById("warning").addEventListener("mouseover",function(){
        window.location="logout.php";
    });
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