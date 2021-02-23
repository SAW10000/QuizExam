<?php
    include('../phpService/db.php');
        if(!$con)
        {
            die("Failed to connect to server: "+mysqli_connect_error());
        }
        $sql="SELECT `mpq`,`totalquestion` FROM `quizdb`.`category` WHERE `id`='$categoryid' AND `isactive`=1";
        $result=mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result))
        {
            $marks=0;
            $mpq=$row['mpq'];
            $totalquestion=$row['totalquestion'];
            
            // echo $mpq;
            // echo $categoryid;
                // $answer=$_POST[$questionid];

                $sqlq="SELECT * FROM `quizdb`.`questiontbl` WHERE `categoryid`='$categoryid' AND `isactive`=1";
                $resultq=mysqli_query($con,$sqlq);
                while($rowq=mysqli_fetch_array($resultq))
                {
                    $questionid = $rowq['id'];
                    $correctoption= $rowq['correctoption'];
                    // echo $correctoption;
                    $sqla="SELECT COUNT(*) AS ca FROM `quizdb`.`useranswertbl` WHERE `categoryid`='$categoryid' AND `questionid`='$questionid' AND `answer`='$correctoption' AND `userid`='$userid'";
                    $resulta=mysqli_query($con,$sqla);
                    while($rowa=mysqli_fetch_array($resulta))
                    {
                        $marks+=$rowa['ca'] * $mpq;
                    }
                }
                echo $marks." OUT OF ".$mpq*$totalquestion;
                
        }
        // $sql="SELECT COUNT(*) AS `ca` FROM `quizdb`.`questiontbl` AS `q1`, `useranswertbl` AS `u1` WHERE `q1`.`correctoption`=`u1`.`answer` AND `q1`.`id`=`u1`.`questionid` AND `q1`.`categoryid`='$categoryid' AND `u1`.`categoryid`='$categoryid' AND `u1`.`userid`='$userid'";
        //         // $sql = "SELECT COUNT(*) AS `ca` FROM `quizdb`.`questiontbl` AS q1, `useranswertbl` AS u1 WHERE q1.correctoption=u1.answer AND q1.id=u1.questionid AND q1.categoryid=1 AND u1.categoryid=1 AND u1.userid=7";
                
        //         $result1=mysqli_query($con,$sql);
        //         echo $sql;
        //         // echo $result;
        //         while($row1 = mysqli_fetch_array($result1))
        //         {
        //             echo $row1['ca'];
        //         }




   $con->close();



    // SELECT `correctoption`,`answer` FROM `questiontbl` AS q1, `useranswertbl` AS u1 WHERE q1.correctoption=u1.answer AND q1.id=u1.questionid AND q1.categoryid=1 AND u1.categoryid=1 AND u1.userid=7
    // SELECT COUNT(*) FROM `questiontbl` AS q1, `useranswertbl` AS u1 WHERE q1.correctoption=u1.answer AND q1.id=u1.questionid AND q1.categoryid=1 AND u1.categoryid=1 AND u1.userid=7
?>