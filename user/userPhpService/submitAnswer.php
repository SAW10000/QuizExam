<?php
    include('../phpService/db.php');
    if(isset($_POST['submitAnswer']))
    {
        if(!$con)
        {
            die("Failed to connect to server: "+mysqli_connect_error());
        }
        $sql="SELECT * FROM `quizdb`.`questiontbl` WHERE `categoryid`='$categoryid' AND `isactive`=1";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
            {
                $questionid=$row['id'];
                $answer=$_POST[$questionid];
                echo "<script>alert('Questionid:".$questionid." Answer:".$answer."');</script>";

                $sql="INSERT `quizdb`.`useranswertbl` (`userid`,`categoryid`,`questionid`,`answer`) VALUES ('$userid','$categoryid','$questionid','$answer')";
                if($con->query($sql)==true)
                {
                    echo "<script>alert('Answer Submited Successfully!');</script>";
                    header("Refresh:0");
                }
                else
                {
                    echo "<script>alert('Error".mysqli_connect_error()."');</script>";
                }
            }
            $con->close();
    }
        
    
?>