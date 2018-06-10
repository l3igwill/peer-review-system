<div id="main">
    <div id="errorOutput">
        <?php if(isset($_SESSION['errors'])){echo $_SESSION['errors'];}?>
    </div>
    <form action="." method="post">
        <input type="hidden" name="action" value="sendCustomerSurvey">


        <fieldset id="question1">
            <h2>1. Did the project team deliver the results and quality that were promised?</h2>
            <input type="radio" value="Less than expected" name="question1" <?php if(isset($_POST[ 'question1'])){echo ($_POST[ 'question1']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question1" <?php if(isset($_POST[ 'question1'])){echo ($_POST[ 'question1']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question1" <?php if(isset($_POST[ 'question1'])){echo ($_POST[ 'question1']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question1" <?php if(isset($_POST[ 'question1'])){echo ($_POST[ 'question1']=='Consistently more' ) ? "checked": "";} ?>> Consistently more<br>
        </fieldset>

        <fieldset id="question1a" class="subQuestion">
            <h3>1a. Were key project deadlines met with a &quot;whatever it takes&quot; attitude?</h3>
            <input type="radio" value="Less than expected" name="question1a" <?php if(isset($_POST[ 'question1a'])){echo ($_POST[ 'question1a']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question1a" <?php if(isset($_POST[ 'question1a'])){echo ($_POST[ 'question1a']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question1a" <?php if(isset($_POST[ 'question1a'])){echo ($_POST[ 'question1a']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question1a" <?php if(isset($_POST[ 'question1a'])){echo ($_POST[ 'question1a']=='Consistently more' ) ? "checked": "";} ?>> Consistently more<br>
        </fieldset>

        <fieldset id="question1b" class="subQuestion">
            <h3>1b. Was consistent discipline and direction provided on approach, scope, and schedule?</h3>
            <input type="radio" value="Less than expected" name="question1b" <?php if(isset($_POST[ 'question1b'])){echo ($_POST[ 'question1b']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question1b" <?php if(isset($_POST[ 'question1b'])){echo ($_POST[ 'question1b']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question1b" <?php if(isset($_POST[ 'question1b'])){echo ($_POST[ 'question1b']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question1b" <?php if(isset($_POST[ 'question1b'])){echo ($_POST[ 'question1b']=='Consistently more' ) ? "checked": "";} ?>> Consistently more<br>
        </fieldset>

        <fieldset id="question1c" class="subQuestion">
            <h3>1c. Did the project team guide your staff and project results? Were they &quot;team players&quot;?</h3>
            <input type="radio" value="Less than expected" name="question1c" <?php if(isset($_POST[ 'question1c'])){echo ($_POST[ 'question1c']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question1c" <?php if(isset($_POST[ 'question1c'])){echo ($_POST[ 'question1c']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question1c" <?php if(isset($_POST[ 'question1c'])){echo ($_POST[ 'question1c']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question1c" <?php if(isset($_POST[ 'question1c'])){echo ($_POST[ 'question1c']=='Consistently more' ) ? "checked": "";} ?>> Consistently more<br>
        </fieldset>

        <fieldset id="question2">
            <h2>2. The project process was ...</h2>
            <input type="radio" value="Less than desirable" name="question2" <?php if(isset($_POST[ 'question2'])){echo ($_POST[ 'question2']=='Less than desirable' ) ? "checked": "";} ?> required> Less than desirable<br>
            <input type="radio" value="As expected" name="question2" <?php if(isset($_POST[ 'question2'])){echo ($_POST[ 'question2']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="Better than expected" name="question2" <?php if(isset($_POST[ 'question2'])){echo ($_POST[ 'question2']=='Better than expected' ) ? "checked": "";} ?>> Better than expected<br>
            <input type="radio" value="Consistently better" name="question2" <?php if(isset($_POST[ 'question2'])){echo ($_POST[ 'question2']=='Consistently better' ) ? "checked": "";} ?>> Consistently better<br>
        </fieldset>

        <fieldset id="question2a" class="subQuestion">
            <h3>2a. Was there open and timely communication? Did the project team act as a team?</h3>
            <input type="radio" value="Less than expected" name="question2a" <?php if(isset($_POST[ 'question2a'])){echo ($_POST[ 'question2a']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question2a" <?php if(isset($_POST[ 'question2a'])){echo ($_POST[ 'question2a']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question2a" <?php if(isset($_POST[ 'question2a'])){echo ($_POST[ 'question2a']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question2a" <?php if(isset($_POST[ 'question2a'])){echo ($_POST[ 'question2a']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>

        <fieldset id="question2b" class="subQuestion">
            <h3>2b. Were the communications from the team planned and professional?</h3>
            <input type="radio" value="Less than expected" name="question2b" <?php if(isset($_POST[ 'question2b'])){echo ($_POST[ 'question2b']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question2b" <?php if(isset($_POST[ 'question2b'])){echo ($_POST[ 'question2b']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question2b" <?php if(isset($_POST[ 'question2b'])){echo ($_POST[ 'question2b']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently More" name="question2b" <?php if(isset($_POST[ 'question2b'])){echo ($_POST[ 'question2b']=='Consistently More' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>

        <fieldset id="question2c" class="subQuestion">
            <h3>2c. Was the project team creative and flexible in their approach to meeting objectives?</h3>
            <input type="radio" value="Less than expected" name="question2c" <?php if(isset($_POST[ 'question2c'])){echo ($_POST[ 'question2c']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question2c" <?php if(isset($_POST[ 'question2c'])){echo ($_POST[ 'question2c']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question2c" <?php if(isset($_POST[ 'question2c'])){echo ($_POST[ 'question2c']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question2c" <?php if(isset($_POST[ 'question2c'])){echo ($_POST[ 'question2c']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>

        <fieldset id="question2d" class="subQuestion">
            <h3>2d. Did the project team listen, learn, and then execute solutions to overcome challenges?</h3>
            <input type="radio" value="Less than expected" name="question2d" <?php if(isset($_POST[ 'question2d'])){echo ($_POST[ 'question2d']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question2d" <?php if(isset($_POST[ 'question2d'])){echo ($_POST[ 'question2d']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question2d" <?php if(isset($_POST[ 'question2d'])){echo ($_POST[ 'question2d']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question2d" <?php if(isset($_POST[ 'question2d'])){echo ($_POST[ 'question2d']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>
        <!--Location for new section Team Communication -->
        <fieldset id="question3">
            <h2>3. The overall team communication was ...</h2>
            <input type="radio" value="Less than expected" name="question3" <?php if(isset($_POST[ 'question3'])){echo ($_POST[ 'question3']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question3" <?php if(isset($_POST[ 'question3'])){echo ($_POST[ 'question3']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question3" <?php if(isset($_POST[ 'question3'])){echo ($_POST[ 'question3']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question3" <?php if(isset($_POST[ 'question3'])){echo ($_POST[ 'question3']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>

        <fieldset id="question3a" class="subQuestion">
            <h3>3a. The team interacted with me at least every other week so that I knew what was going on.</h3>
            <input type="radio" value="Less than expected" name="question3a" <?php if(isset($_POST[ 'question3a'])){echo ($_POST[ 'question3a']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question3a" <?php if(isset($_POST[ 'question3a'])){echo ($_POST[ 'question3a']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question3a" <?php if(isset($_POST[ 'question3a'])){echo ($_POST[ 'question3a']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question3a" <?php if(isset($_POST[ 'question3a'])){echo ($_POST[ 'question3a']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>
        <fieldset id="question3b" class="subQuestion">
            <h3>3b. I was invited to sprint review meetings so that I could see the progress.</h3>
            <input type="radio" value="Less than expected" name="question3b" <?php if(isset($_POST[ 'question3b'])){echo ($_POST[ 'question3b']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question3b" <?php if(isset($_POST[ 'question3b'])){echo ($_POST[ 'question3b']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question3b" <?php if(isset($_POST[ 'question3b'])){echo ($_POST[ 'question3b']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question3b" <?php if(isset($_POST[ 'question3b'])){echo ($_POST[ 'question3b']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>
        <fieldset id="question3c" class="subQuestion">
            <h3>3c. The team communications with me were respectful of my time and schedule.</h3>
            <input type="radio" value="Less than expected" name="question3c" <?php if(isset($_POST[ 'question3c'])){echo ($_POST[ 'question3c']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question3c" <?php if(isset($_POST[ 'question3c'])){echo ($_POST[ 'question3c']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question3c" <?php if(isset($_POST[ 'question3c'])){echo ($_POST[ 'question3c']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question3c" <?php if(isset($_POST[ 'question3c'])){echo ($_POST[ 'question3c']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>
        <fieldset id="question3d" class="subQuestion">
            <h3>3d. The team explained items in a language that I understood without using technical jargon.</h3>
            <input type="radio" value="Less than expected" name="question3d" <?php if(isset($_POST[ 'question3d'])){echo ($_POST[ 'question3d']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question3d" <?php if(isset($_POST[ 'question3d'])){echo ($_POST[ 'question3d']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question3d" <?php if(isset($_POST[ 'question3d'])){echo ($_POST[ 'question3d']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question3d" <?php if(isset($_POST[ 'question3d'])){echo ($_POST[ 'question3d']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>
        <fieldset id="question3e" class="subQuestion">
            <h3>3e. The team was willing to explain answers to my questions.</h3>
            <input type="radio" value="Less than expected" name="question3e" <?php if(isset($_POST[ 'question3e'])){echo ($_POST[ 'question3e']=='Less than expected' ) ? "checked": "";} ?> required> Less than expected<br>
            <input type="radio" value="As expected" name="question3e" <?php if(isset($_POST[ 'question3e'])){echo ($_POST[ 'question3e']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="More than expected" name="question3e" <?php if(isset($_POST[ 'question3e'])){echo ($_POST[ 'question3e']=='More than expected' ) ? "checked": "";} ?>> More than expected<br>
            <input type="radio" value="Consistently more" name="question3e" <?php if(isset($_POST[ 'question3e'])){echo ($_POST[ 'question3e']=='Consistently more' ) ? "checked": "";} ?>> Consistently More<br>
        </fieldset>


        <fieldset id="question4" required>
            <h2>4. The overall service on this project was ...</h2>
            <input type="radio" value="Less than desirable" name="question4" <?php if(isset($_POST[ 'question4'])){echo ($_POST[ 'question4']=='Less than desirable' ) ? "checked": "";} ?> required> Less than desirable<br>
            <input type="radio" value="As expected" name="question4" <?php if(isset($_POST[ 'question4'])){echo ($_POST[ 'question4']=='As expected' ) ? "checked": "";} ?>> As expected<br>
            <input type="radio" value="Better than expected" name="question4" <?php if(isset($_POST[ 'question4'])){echo ($_POST[ 'question4']=='Better than expected' ) ? "checked": "";} ?>> Better than expected<br>
            <input type="radio" value="Consistently better" name="question4" <?php if(isset($_POST[ 'question4'])){echo ($_POST[ 'question4']=='Consistently better' ) ? "checked": "";} ?>> Consistently better<br>
        </fieldset>


        <fieldset id="question5">
            <h2>5. Comments / Testimonial:</h2>
            <textarea name="question5"><?php if(isset($_POST['question5'])){echo $_POST['question5'];} ?></textarea>
        </fieldset>

        <fieldset>
            <label for="email">Please enter your email address: </label>
            <input id="email" type="email" name="email" placeholder="example@example.com" <?php if(isset($_POST[ 'email'])){echo "value='".$_POST[ 'email']. "'";} ?> required>
            <br>
            <label for="projectName">Please enter the name of your project</label>
            <input id="projectName" type="text" name="projectName" placeholder="project name" <?php if(isset($_POST[ 'projectName'])){echo "value='".$_POST[ 'projectName']. "'";} ?> required>
            <br>
            <label for="name">Please enter your name: </label>
            <input id="name" type="text" name="name" placeholder="Ex: John Smith" <?php if(isset($_POST[ 'name'])){echo "value='".$_POST[ 'name']. "'";} ?> required>
        </fieldset>


        <input id="formSubmit" type="submit" value="Send Survey to Instructors" />
    </form>
</div>
