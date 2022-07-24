<?php
    require_once('admin/header.php');
    require_once('admin/config.php');
    if(!isset($_COOKIE['em'])){
        header("Location:login.php");
    }
?>
<style>
.content-section{
    margin-top: 100px;
}
#warning{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
}
.subject-name{
    background:#212529;
    color:#fff;
    margin-bottom: 0px;
    text-align: center;
    border-bottom: 1px solid #FF5722;
    padding-bottom: 10px;
}
.question input{
    margin-right: 5px;
    display: inline-block;
}
.question h5{
    margin-left: 30px;
}
.question input[type="submit"]{
    background: #FF5722;
    color: #fff;
    font-size:22px;
    font-weight:bold;
}
</style>
<div id="warning" class="p-3 mb-4 bg-danger text-white text-center">This is very danger for you</div>
<div class="content-section">
    <div class="container">
        <div class="question mb-5">
        <div class="menu">
        <?php
            $email = $_COOKIE['em'];
            $select_stu = "SELECT * FROM students_list WHERE email='$email'";
            $run_select_stu = mysqli_query($link, $select_stu);
            while($stu = mysqli_fetch_array($run_select_stu)){
                $login_name =   $stu['name'];
                $login_id =  $stu['student_id'];
            }
            $chapter = "SELECT * FROM chapter_list WHERE chapter_name = 'Access'";
            $run_chapter = mysqli_query($link, $chapter);
            while($show_chapter = mysqli_fetch_array($run_chapter)){
                $chapter_name =   $show_chapter['chapter_name'];
                $exam_mark =  $show_chapter['mark'];
                $exam_time =  $show_chapter['time'];
            }
        ?>
        <h4 class="subject-name">Welcome <span style="color:#FF5722"><?php echo $login_name." - ".$login_id?></span> ( <?php echo $chapter_name;?> )</h4>
            <ul class="nav justify-content-center bg-dark">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><h5>Time: <?php echo $exam_time?> Minutes</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><h5>Mark: <?php echo $exam_mark?></h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php"><h5>Logout</h5></a>
                </li>
            </ul>
        </div>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"  >
                <?php
                $res = "SELECT * FROM ms_access_16";
                $run = mysqli_query($link, $res);
                if($run) {
                    $sl = 1;
                    $unique = 0;
                    while($question = mysqli_fetch_array($run)) {
                        $unique++;
                        ?>
                        <h4><?php echo $sl; $sl++; ?>. <?php echo $question['question'];?></h4>
                        <h5>A. <input type="radio"  name="option<?php echo $unique;?>" value="<?php echo $question['option1'];?>"><?php echo $question['option1'];?></h5>
                        <h5>B. <input type="radio"  name="option<?php echo $unique;?>" value="<?php echo $question['option2'];?>"><?php echo $question['option2'];?></h5>
                        <h5>C. <input type="radio"  name="option<?php echo $unique;?>" value="<?php echo $question['option3'];?>"><?php echo $question['option3'];?></h5>
                        <h5>D. <input type="radio"  name="option<?php echo $unique;?>" value="<?php echo $question['option4'];?>"><?php echo $question['option4'];?></h5>
                        <?php
                    }
                }
            ?>
            <input type="submit" name="submit" value="Submit" class="form-control">
            </form>
        </div><!-- ./question -->
    </div><!-- /.container -->
</div><!-- content-section -->
<?php

    if(isset($_REQUEST['submit'])){
    error_reporting(0);
        $opt1 = $_REQUEST['option1'];
        $opt2 = $_REQUEST['option2'];
        $opt3 = $_REQUEST['option3'];
        $opt4 = $_REQUEST['option4'];
        $opt5 = $_REQUEST['option5'];
        $opt6 = $_REQUEST['option6'];
        $opt7 = $_REQUEST['option7'];
        $opt8 = $_REQUEST['option8'];
        $opt9 = $_REQUEST['option9'];
        $opt10 = $_REQUEST['option10'];
        $opt11= $_REQUEST['option11'];
        $opt12 = $_REQUEST['option12'];
        $opt13 = $_REQUEST['option13'];
        $opt14 = $_REQUEST['option14'];
        $opt15 = $_REQUEST['option15'];
        $opt15 = $_REQUEST['option16'];
        $opt15 = $_REQUEST['option17'];
        $opt15 = $_REQUEST['option18'];
        $opt15 = $_REQUEST['option19'];
        $opt15 = $_REQUEST['option20'];

        $query = "SELECT * FROM ms_access_16";
        $runQuery = mysqli_query($link, $res);
        $i = 0;
        if($runQuery == true){
            while($data = mysqli_fetch_array($runQuery)){
                if($opt1 == $data['answer']){
                    $i++;
                }
                if($opt2 == $data['answer']){
                    $i++;
                }
                if($opt3 == $data['answer']){
                    $i++;
                }
                if($opt4 == $data['answer']){
                    $i++;
                }
                if($opt5 == $data['answer']){
                    $i++;
                }
                if($opt6 == $data['answer']){
                    $i++;
                }
                if($opt7 == $data['answer']){
                    $i++;
                }
                if($opt8 == $data['answer']){
                    $i++;
                }
                if($opt9 == $data['answer']){
                    $i++;
                }
                if($opt10 == $data['answer']){
                    $i++;
                }
                if($opt11 == $data['answer']){
                    $i++;
                }
                if($opt12 == $data['answer']){
                    $i++;
                }
                if($opt13 == $data['answer']){
                    $i++;
                }
                if($opt14 == $data['answer']){
                    $i++;
                }
                if($opt15 == $data['answer']){
                    $i++;
                }
                if($opt16 == $data['answer']){
                    $i++;
                }
                if($opt17 == $data['answer']){
                    $i++;
                }
                if($opt18 == $data['answer']){
                    $i++;
                }
                if($opt19 == $data['answer']){
                    $i++;
                }
                if($opt20 == $data['answer']){
                    $i++;
                }
            }
            
        }
        $email = $_COOKIE['em'];
        $select_stu = "SELECT * FROM students_list WHERE email='$email'";
        $run_select_stu = mysqli_query($link, $select_stu);
        while($stu = mysqli_fetch_array($run_select_stu)){
            $name =   $stu['name'];
            $stu_id =  $stu['student_id'];
        }
        $wrong_ans = 20 - $i;
        $Total_mark = $i * 2;
        $insertQuery = "INSERT INTO result (chapter,name,student_id,correct_ans, wrong_ans, total_mark ) VALUES ('MS access','$name','$stu_id','$i','$wrong_ans','$Total_mark')";
        $runInsertQuery = mysqli_query($link, $insertQuery);
    }

?>
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

