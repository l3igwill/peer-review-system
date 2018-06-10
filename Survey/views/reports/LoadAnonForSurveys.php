<div id="main" style="height: 100%">

    <h2>Review of <?php foreach($students as $student){if($student['student_id']==$_POST['reviewee']){echo $student['student_name'];}}?></h2>


    <!--
    Create single table that has averages of each question and average of all the questions
    Then create all feedback ont he bottom of the page.-->
    <?php
    $array=[];
    $FeedbackString="";
    //create empty array to hold values.
    foreach($questions as $question){
        array_push($array,0);
    }
    //dump array to screen
    //var_dump($array);

    //loop through each survey and store the values into array.
    $totalSurveys=0;
    foreach ($_POST['selected_surveys'] as $survey){
        $totalSurveys+=1;
        $currentSurvey = FetchSurvey($survey);
        $filledQuestions = FetchAssociatedQuestions($currentSurvey['survey_id']);
        foreach ($filledQuestions as $Q){
            $array[$Q['question_id']-1]+=(double)$Q['user_selection'];
        }
        $filledFeedback = FetchAssociatedFeedback($currentSurvey['survey_id']);
        foreach($filledFeedback as $F){
            $FeedbackString.= '<p style="word-wrap: break-word;">'.$F['feedback_given'].'</p>';
        }
    }
    for($i =0;$i<count($array);$i++){
        $array[$i]=$array[$i]/$totalSurveys;
    }
    echo '<table class="table table-bordered"><thead><tr>';
    foreach($filledQuestions as $Q) {
        echo '<th>Q' . $Q['question_id'] . '</th>';
    }
    echo '<th>Average</th></tr></thead><tbody><tr>';
    $total=0;
    $counter=0;
    for($i=0;$i<count($array);$i++){
        $total+=$array[$i];
        $counter++;
        echo '<td>'.number_format($array[$i],2).'</td>';
    }
    $avg=$total/$counter;
    echo '<td>'.number_format($avg,2).'</td></tr></tbody></table>';

    echo $FeedbackString;

    //divide array elements by number of surveys and calculate average of all the surveys
    //build table

    //display all feedback from surveys to screen together.

    ?>



</div>