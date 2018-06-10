<div id="main" style="height:100%">
    <form action="." method="post">
        <div class="form-group">
            <label for="student">Select a student:</label>
            <select class="form-control" id="student" name="student">
                <?php foreach ($students as $student): ?>
                    <option value="<?php echo $student['student_id'] ?>"><?php echo $student['student_name'] ?></option>
                <?php endforeach; ?>
            </select>


            <label for="action">Select a report:</label>
            <select class="form-control" id="action" name="action">
                    <option value="evalFromStudent">Evaluations done by this student</option>
                    <option value="evalForStudent">Evaluations of this student</option>
                    <option value="anonEvalForStudent">Anonymous evaluations of this student</option>
            </select>

            <div class="form-group">
            </div>
        </div>
        <input id="formSubmit" type="submit" value="Run report" />
    </form>

</div>