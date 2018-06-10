<div id = 'main' style="height: 100%">
    <?php //var_dump($surveys);
    //var_dump($students);?>
    <form action="." method="post">
        <input type="hidden" name="action" value="loadBySurveys">
        <input type="hidden" name="reviewee" value ="<?php echo $_POST['student']?>">
        <div class="form-group">
            <label for="selected_surveys">Please select the surveys you want to view.(Surveys done by <?php foreach($students as $stud){if($stud['student_id']==$_POST['student']){echo $stud["student_name"];} }//output student name?>)</label>
            <select class="form-control" id="selected_surveys" name="selected_surveys[]" multiple>

                <?php foreach ($surveys as $survey): ?>
                    <option value="<?php echo $survey['survey_id']?>">
                <?php foreach($students as $student){if($student['student_id']==$survey['student_reviewed']){echo "survey for ".$student['student_name']."--".date_format(date_create($survey['submit_time']),'m/d/Y H:i');}}//what shows in option.  ?>
            </option>
                <?php endforeach; ?>

            </select>
            <input id="formSubmit" type="submit" value="Run report" />
        </div>

    </form>
</div>