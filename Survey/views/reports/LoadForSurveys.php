<div id="main" style="height: 100%">

    <h2>Reviews of <?php foreach($students as $student){if($student['student_id']==$_POST['reviewee']){echo $student['student_name'];}}?></h2>


    <!-- Foreach survey -->
    <?php foreach($_POST['selected_surveys'] as $survey) {
        $currentSurvey = FetchSurvey($survey);
        //var_dump($currentSurvey);

        //output who filled out survey
        foreach($students as $student){
            if($student['student_id']==$currentSurvey['student_id']){
                echo "<br><h4>".$student['student_name']." Review</h4>";
            }
        }

        $filledQuestions = FetchAssociatedQuestions($currentSurvey['survey_id']);
        //var_dump($filledQuestions);

        //loop through filledQuestions and assemble table. Possible total and display average.
        echo '<table class="table table-bordered"><thead><tr>';
        foreach($filledQuestions as $Q) {
            echo '<th>Q' . $Q['question_id'] . '</th>';
        }
        echo '<th>Average</th></tr></thead><tbody><tr>';
        $total=0;
        $counter=0;
        foreach($filledQuestions as $Q){
            $total+=(double)$Q['user_selection'];
            $counter +=1;
            echo '<td>'.$Q['user_selection'].'</td>';
        }
        $avg=$total/$counter;
        echo '<td>'.number_format($avg,2).'</td></tr></tbody></table>';


        //build out feedback section
        $filledFeedback = FetchAssociatedFeedback($currentSurvey['survey_id']);


        foreach($filledFeedback as $F){
            echo '<p style="word-wrap: break-word;">'.$F['feedback_given'].'</p>';
        }

    }?>



</div>