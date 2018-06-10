<div id = 'main' style="height: 100%">
    <?php //var_dump($surveys);
    //var_dump($students);?>
    <form action="." method="post">
        <input type="hidden" name="action" value="loadCustomerReport">
        <div class="form-group">
            <label for="selected_surveys">Please select the surveys you want to view.</label>
            <select class="form-control" id="selected_surveys" name="selected_surveys" multiple>

                <?php foreach ($surveys as $survey): ?>
                    <option value="<?php echo $survey['survey_id']?>"> <?php echo date_format(date_create($survey['submit_time']),'m/d/Y H:i')." ".$survey["project_name"]." - ".$survey['customer_name']?></option>
                <?php endforeach; ?>

            </select>
            <input id="formSubmit" type="submit" value="Run report" />
        </div>

    </form>
</div>