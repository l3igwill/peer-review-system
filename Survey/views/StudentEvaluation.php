<div id="main">
    <div id="errorOutput">
        <?php if(isset($_SESSION['errors'])){echo '<p style="color:red;">'.$_SESSION['errors'].'</p>';}?>
    </div>

    <form action="." method="post">
        <input type="hidden" name="action" value="sendStudentSurvey">
        <input type="hidden" name="time" value="<?php echo $time_start?>"

        <div class="form-group">
            <label for="reviewer">Student completing evaluation:</label>
            <select class="form-control" id="reviewer" name="reviewer">
                <?php foreach($results as $result):?>
                    <option value="<?php echo $result['student_id']?>" <?php if(isset($_POST['reviewer'])){if($_POST['reviewer']==$result['student_id']){echo 'selected';}} ?>><?php echo $result['student_name'] ?></option>
                <?php endforeach; ?>
            </select>

            <label for="reviewee">Reviewee or self:</label>
            <select class="form-control" id="reviewee" name="reviewee">
                <?php foreach($results as $result):?>
                    <option value="<?php echo $result['student_id']?>" <?php if(isset($_POST['reviewee'])){if($_POST['reviewee']==$result['student_id']){echo 'selected';}} ?>><?php echo $result['student_name'] ?></option>
                <?php endforeach; ?>
            </select>

            <label for="teamName">Team/Project Name</label>
            <select class="form-control" id="teamName" name="teamName">
                <?php foreach($teams as $team):?>
                    <option value="<?php echo $team['team_id']?>" <?php if(isset($_POST['teamName'])){if($_POST['teamName']==$team['team_id']){echo 'selected';}} ?>><?php echo $team['team_name'] ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 "></div>
                    <?php foreach($choices as $choice):?>
                    <div class="col-sm-1"><?php echo $choice['choice_id'].'-'.$choice['choice_description']?></div>
                    <?php endforeach; ?>
                </div>
                <?php foreach($categories as $category):?>
                <div class="row">
                    <div class="col-sm-6"><span><?php echo $category['category_description']?></span></div>
                </div>
                <?php foreach($questions as $question):
                        if($question['category_id']==$category['category_id']):?>
                <div class="row">
                    <div class="col-sm-6" style="font-size: 1.2em;"><?php echo $question['question_description']?></div>
                </div>

                <div class="row">
                    <div class="col-sm-1"></div>
                    <?php foreach ($choices as $choice):?>
                    <div class="col-sm-1">
                        <div class="radio">
                            <label><input type="radio" name="<?php echo 'Q'.$question['question_id']?>" value="<?php echo $choice['choice_id']?>" <?php if(isset($_POST['Q'.$question['question_id']])){if($_POST['Q'.$question['question_id']]==$choice['choice_id']){echo 'checked';}} ?>><?php echo $choice['choice_description']?></label>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <?php endif;

                endforeach;?>
                <div class="row">
                <label for="<?php echo 'F'.$category['category_id']; ?>">Please tell me what they did well, and what they could improve upon(Both required. 100 Character Minimum)</label>
                <textarea class="form-control" rows="5" minlength="100" name="<?php echo 'F'.$category['category_id']; ?>"> <?php if(isset($_POST[ 'F'.$category['category_id']])){echo $_POST['F'.$category['category_id']];}?></textarea>
                </div>
                <?php endforeach;?>

            </div>
            <input id="formSubmit" type="submit" value="Send Survey to Instructors" />
        </div>


    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="javascript/studentpersistence.js"></script>
