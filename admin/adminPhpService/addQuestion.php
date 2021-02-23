<?php
    include('../phpService/db.php');
    if(isset($_POST['addquestion']))
    {
        if(!$con)
        {
            die("Failed to connect to server: "+mysqli_connect_error());
        }
        $categoryid=$_POST['categoryid'];

        $sql="SELECT * FROM `quizdb`.`category` WHERE `id`='$categoryid' AND `isactive`=1";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $totalquestion=$row['totalquestion'];
        $mpq=$row['mpq'];
        $sqlcount="SELECT COUNT(*) AS total FROM `quizdb`.`questiontbl` WHERE  `categoryid`='$categoryid' AND `isactive`=1";
        
        $result=mysqli_query($con,$sqlcount);
        $data=mysqli_fetch_array($result);
        $num=$data['total'];

        

        
        if($num!=$totalquestion)
        {
            $question= mysqli_real_escape_string($con,$_POST['question']);
            $option1=$_POST['option1'];
            $option2=$_POST['option2'];
            $option3=$_POST['option3'];
            $option4=$_POST['option4'];
            $correctoption=$_POST['correctoption'];
            
            $sql="INSERT INTO `quizdb`.`questiontbl`(`categoryid`,`question`,`option1`,`option2`,`option3`,`option4`,`correctoption`) VALUES ('$categoryid','$question','$option1','$option2','$option3','$option4','$correctoption')";
            if($con->query($sql)==true)
            {
                echo "<script>alert('Question Added Successfully!');</script>";
            }
            else
            {
                echo "<script>alert('Error".mysqli_connect_error()."');</script>";
            }
            $num++;
        }
        else{
            echo "<script>alert('Number of Question Reached Limit');</script>";

        }

        $con->close();
    }
        
    
?>