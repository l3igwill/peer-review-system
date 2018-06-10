<div id="main">
    <div id="errorOutput">
        <?php if(isset($_SESSION['errors'])){echo $_SESSION['errors'];}?>
    </div>
    <form action="." method="post">
        <input type="hidden" name="action" value="sendsurvey">

        <fieldset>
            <label for="studCompEval">Student completeing evaluation:</label>
            <input type="text" name="studCompEval" placeholder="Ex: John Smith" <?php if(isset($_POST[ 'studCompEval'])){echo "value='".$_POST[ 'studCompEval']. "'";} ?> required>
            <br>
            <label for="reviewee">Reviewee or self:</label>
            <input type="text" name="reviewee" placeholder="Ex: John Smith" <?php if(isset($_POST[ 'reviewee'])){echo "value='".$_POST[ 'reviewee']. "'";} ?> required>
            <br>
            <label for="teamName">Team/Project Name</label>
            <input type="text" name="teamName" placeholder="Ex: Team/Project Name" <?php if(isset($_POST[ 'teamName'])){echo "value='".$_POST[ 'teamName']. "'";} ?> required>
            <br>
            <label for="className">Class Name:</label>
            <input type="text" name="className" placeholder="Ex: Capstone" <?php if(isset($_POST[ 'className'])){echo "value='".$_POST[ 'className']. "'";} ?> required>
            <br>
            <input type="hidden" name="date" value="<?php print(date(" Y-m-d ")); ?>"/>

            <div id="criteria">
                <h1>The following criteria are used to evaluate student performance.</h1>
                <h2>Rating scale - level of achievement</h2>
                <h3>3 - Exceeds standards for employment</h3>
                <h3>2 - Meets standards for employment</h3>
                <h3>1 - Does not meet standards for employment</h3>
                <h3>N - Not observed</h3>

            </div>
        </fieldset>

        <!--### First table ###-->
        <fieldset>
            <h2>Working Productively/Assuring Quality</h2>
            <table>
                <tr>
                    <th rowspan="2" style="width:75%;">Individual possesses and applies effective work habits and attitudes within an organizational (classroom, lab, or shop) setting.</th>
                    <th colspan="4">Rating</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>N</th>
                </tr>
                <tr>
                    <td>1. Quality of code written was appropriate</td>
                    <fieldset id="p1">
                        <td><input type="radio" value="3" name="p1" <?php if(isset($_POST[ 'p1'])){echo ($_POST[ 'p1']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="p1" <?php if(isset($_POST[ 'p1'])){echo ($_POST[ 'p1']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="p1" <?php if(isset($_POST[ 'p1'])){echo ($_POST[ 'p1']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="p1" <?php if(isset($_POST[ 'p1'])){echo ($_POST[ 'p1']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>2. Follows procedures / rules</td>
                    <fieldset id="p2">
                        <td><input type="radio" value="3" name="p2" <?php if(isset($_POST[ 'p2'])){echo ($_POST[ 'p2']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="p2" <?php if(isset($_POST[ 'p2'])){echo ($_POST[ 'p2']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="p2" <?php if(isset($_POST[ 'p2'])){echo ($_POST[ 'p2']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="p2" <?php if(isset($_POST[ 'p2'])){echo ($_POST[ 'p2']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>3. The amount of work completed for the semester was appropriate.</td>
                    <fieldset id="p3">
                        <td><input type="radio" value="3" name="p3" <?php if(isset($_POST[ 'p3'])){echo ($_POST[ 'p3']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="p3" <?php if(isset($_POST[ 'p3'])){echo ($_POST[ 'p3']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="p3" <?php if(isset($_POST[ 'p3'])){echo ($_POST[ 'p3']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="p3" <?php if(isset($_POST[ 'p3'])){echo ($_POST[ 'p3']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>4. Respects group decisions when they conflict with their own analysis</td>
                    <fieldset id="p4">
                        <td><input type="radio" value="3" name="p4" <?php if(isset($_POST[ 'p4'])){echo ($_POST[ 'p4']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="p4" <?php if(isset($_POST[ 'p4'])){echo ($_POST[ 'p4']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="p4" <?php if(isset($_POST[ 'p4'])){echo ($_POST[ 'p4']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="p4" <?php if(isset($_POST[ 'p4'])){echo ($_POST[ 'p4']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
            </table>
            <h3>Things I/They do well:</h3>
            <textarea name="p5" required><?php if(isset($_POST['p5'])){echo $_POST['p5'];} ?></textarea>
            <h3>What should I/They improve upon:</h3>
            <textarea name="p6" required><?php if(isset($_POST['p6'])){echo $_POST['p6'];} ?></textarea>
        </fieldset>

        <!--### Second table ###-->
        <fieldset>
            <h2>Communicating Clearly</h2>
            <table>
                <tr>
                    <th rowspan="2" style="width:75%;">Individual is able to apply appropriate writing, speaking, and listening skills in order to precisely convey information, ideas, and opinions.</th>
                    <th colspan="4">Rating</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>N</th>
                </tr>
                <tr>
                    <td>1. Exhibits professional communication with the client</td>
                    <fieldset id="c1">
                        <td><input type="radio" value="3" name="c1" <?php if(isset($_POST[ 'c1'])){echo ($_POST[ 'c1']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="c1" <?php if(isset($_POST[ 'c1'])){echo ($_POST[ 'c1']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="c1" <?php if(isset($_POST[ 'c1'])){echo ($_POST[ 'c1']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="c1" <?php if(isset($_POST[ 'c1'])){echo ($_POST[ 'c1']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>2. Speaks professionally</td>
                    <fieldset id="c2">
                        <td><input type="radio" value="3" name="c2" <?php if(isset($_POST[ 'c2'])){echo ($_POST[ 'c2']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="c2" <?php if(isset($_POST[ 'c2'])){echo ($_POST[ 'c2']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="c2" <?php if(isset($_POST[ 'c2'])){echo ($_POST[ 'c2']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="c2" <?php if(isset($_POST[ 'c2'])){echo ($_POST[ 'c2']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>3. Writes professionally</td>
                    <fieldset id="c3">
                        <td><input type="radio" value="3" name="c3" <?php if(isset($_POST[ 'c3'])){echo ($_POST[ 'c3']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="c3" <?php if(isset($_POST[ 'c3'])){echo ($_POST[ 'c3']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="c3" <?php if(isset($_POST[ 'c3'])){echo ($_POST[ 'c3']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="c3" <?php if(isset($_POST[ 'c3'])){echo ($_POST[ 'c3']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>4. Demonstrates ability to listen effectively</td>
                    <fieldset id="c4">
                        <td><input type="radio" value="3" name="c4" <?php if(isset($_POST[ 'c4'])){echo ($_POST[ 'c4']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="c4" <?php if(isset($_POST[ 'c4'])){echo ($_POST[ 'c4']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="c4" <?php if(isset($_POST[ 'c4'])){echo ($_POST[ 'c4']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="c4" <?php if(isset($_POST[ 'c4'])){echo ($_POST[ 'c4']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>5. Uses language appropriate to situation</td>
                    <fieldset id="c5">
                        <td><input type="radio" value="3" name="c5" <?php if(isset($_POST[ 'c5'])){echo ($_POST[ 'c5']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="c5" <?php if(isset($_POST[ 'c5'])){echo ($_POST[ 'c5']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="c5" <?php if(isset($_POST[ 'c5'])){echo ($_POST[ 'c5']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="c5" <?php if(isset($_POST[ 'c5'])){echo ($_POST[ 'c5']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
            </table>
            <h3>Things I/They do well:</h3>
            <textarea name="c6" required><?php if(isset($_POST['c6'])){echo $_POST['c6'];} ?></textarea>
            <h3>What should I/They improve upon:</h3>
            <textarea name="c7" required><?php if(isset($_POST['c7'])){echo $_POST['c7'];} ?></textarea>
        </fieldset>

        <!--### Third table ###-->
        <fieldset>
            <h2>Working Cooperatively</h2>
            <table>
                <tr>
                    <th rowspan="2" style="width:75%;">Individual is capable of working with others to complete tasks, solve problems, resolve conflicts, provide information, and offer support.</th>
                    <th colspan="4">Rating</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>N</th>
                </tr>
                <tr>
                    <td>1. Works cooperatively with others</td>
                    <fieldset id="w1">
                        <td><input type="radio" value="3" name="w1" <?php if(isset($_POST[ 'w1'])){echo ($_POST[ 'w1']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="w1" <?php if(isset($_POST[ 'w1'])){echo ($_POST[ 'w1']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="w1" <?php if(isset($_POST[ 'w1'])){echo ($_POST[ 'w1']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="w1" <?php if(isset($_POST[ 'w1'])){echo ($_POST[ 'w1']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>2. Demonstrates respect for others through word and action</td>
                    <fieldset id="w2">
                        <td><input type="radio" value="3" name="w2" <?php if(isset($_POST[ 'w2'])){echo ($_POST[ 'w2']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="w2" <?php if(isset($_POST[ 'w2'])){echo ($_POST[ 'w2']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="w2" <?php if(isset($_POST[ 'w2'])){echo ($_POST[ 'w2']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="w2" <?php if(isset($_POST[ 'w2'])){echo ($_POST[ 'w2']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>3. Provides and accepts feedback</td>
                    <fieldset id="w3">
                        <td><input type="radio" value="3" name="w3" <?php if(isset($_POST[ 'w3'])){echo ($_POST[ 'w3']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="w3" <?php if(isset($_POST[ 'w3'])){echo ($_POST[ 'w3']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="w3" <?php if(isset($_POST[ 'w3'])){echo ($_POST[ 'w3']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="w3" <?php if(isset($_POST[ 'w3'])){echo ($_POST[ 'w3']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>4. Willing to help others to solve programming issues they encounter</td>
                    <fieldset id="w4">
                        <td><input type="radio" value="3" name="w4" <?php if(isset($_POST[ 'w4'])){echo ($_POST[ 'w4']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="w4" <?php if(isset($_POST[ 'w4'])){echo ($_POST[ 'w4']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="w4" <?php if(isset($_POST[ 'w4'])){echo ($_POST[ 'w4']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="w4" <?php if(isset($_POST[ 'w4'])){echo ($_POST[ 'w4']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
            </table>
            <h3>Things I/They do well:</h3>
            <textarea name="w5" required><?php if(isset($_POST['w5'])){echo $_POST['w5'];} ?></textarea>
            <h3>What should I/They improve upon:</h3>
            <textarea name="w6" required><?php if(isset($_POST['w6'])){echo $_POST['w6'];} ?></textarea>
        </fieldset>

        <!--### Fourth table ###-->
        <fieldset>
            <h2>Acting Responsibly / Acting with Integrity</h2>
            <table>
                <tr>
                    <th rowspan="2" style="width:75%;">Individual recognizes an obligation to self and others for his or her decisions and actions.</th>
                    <th colspan="4">Rating</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>N</th>
                </tr>
                <tr>
                    <td>1. Attends meetings regularly and punctually</td>
                    <fieldset id="a1">
                        <td><input type="radio" value="3" name="a1" <?php if(isset($_POST[ 'a1'])){echo ($_POST[ 'a1']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="a1" <?php if(isset($_POST[ 'a1'])){echo ($_POST[ 'a1']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="a1" <?php if(isset($_POST[ 'a1'])){echo ($_POST[ 'a1']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="a1" <?php if(isset($_POST[ 'a1'])){echo ($_POST[ 'a1']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>2. Assumes responsibility for completing assignments</td>
                    <fieldset id="a2">
                        <td><input type="radio" value="3" name="a2" <?php if(isset($_POST[ 'a2'])){echo ($_POST[ 'a2']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="a2" <?php if(isset($_POST[ 'a2'])){echo ($_POST[ 'a2']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="a2" <?php if(isset($_POST[ 'a2'])){echo ($_POST[ 'a2']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="a2" <?php if(isset($_POST[ 'a2'])){echo ($_POST[ 'a2']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>3. Performs assigned tasks</td>
                    <fieldset id="a3">
                        <td><input type="radio" value="3" name="a3" <?php if(isset($_POST[ 'a3'])){echo ($_POST[ 'a3']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="a3" <?php if(isset($_POST[ 'a3'])){echo ($_POST[ 'a3']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="a3" <?php if(isset($_POST[ 'a3'])){echo ($_POST[ 'a3']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="a3" <?php if(isset($_POST[ 'a3'])){echo ($_POST[ 'a3']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>4. When individual made a mistake, they owned it and took responsibility for it. </td>
                    <fieldset id="a4">
                        <td><input type="radio" value="3" name="a4" <?php if(isset($_POST[ 'a4'])){echo ($_POST[ 'a4']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="a4" <?php if(isset($_POST[ 'a4'])){echo ($_POST[ 'a4']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="a4" <?php if(isset($_POST[ 'a4'])){echo ($_POST[ 'a4']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="a4" <?php if(isset($_POST[ 'a4'])){echo ($_POST[ 'a4']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
            </table>
            <h3>Things I/They do well:</h3>
            <textarea name="a5" required><?php if(isset($_POST['a5'])){echo $_POST['a5'];} ?></textarea>
            <h3>What should I/They improve upon:</h3>
            <textarea name="a6" required><?php if(isset($_POST['a6'])){echo $_POST['a6'];} ?></textarea>
        </fieldset>

        <!--### Fifth table ###-->
        <fieldset>
            <h2>Thinking Critically and Creatively</h2>
            <table>
                <tr>
                    <th rowspan="2" style="width:75%;">Individual applies the principles and strategies of purposeful, active, organized thinking.</th>
                    <th colspan="4">Rating</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>N</th>
                </tr>
                <tr>
                    <td>1. Demonstrates willingness to recognize others’ point of view</td>
                    <fieldset id="t1">
                        <td><input type="radio" value="3" name="t1" <?php if(isset($_POST[ 't1'])){echo ($_POST[ 't1']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="t1" <?php if(isset($_POST[ 't1'])){echo ($_POST[ 't1']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="t1" <?php if(isset($_POST[ 't1'])){echo ($_POST[ 't1']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="t1" <?php if(isset($_POST[ 't1'])){echo ($_POST[ 't1']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>2. Willing to change opinion as circumstances change. </td>
                    <fieldset id="t2">
                        <td><input type="radio" value="3" name="t2" <?php if(isset($_POST[ 't2'])){echo ($_POST[ 't2']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="t2" <?php if(isset($_POST[ 't2'])){echo ($_POST[ 't2']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="t2" <?php if(isset($_POST[ 't2'])){echo ($_POST[ 't2']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="t2" <?php if(isset($_POST[ 't2'])){echo ($_POST[ 't2']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
            </table>
            <h3>Things I/They do well:</h3>
            <textarea name="t3" required><?php if(isset($_POST['t3'])){echo $_POST['t3'];} ?></textarea>
            <h3>What should I/They improve upon:</h3>
            <textarea name="t4" required><?php if(isset($_POST['t4'])){echo $_POST['t4'];} ?></textarea>
        </fieldset>

        <!--### Sixth table ###-->
        <fieldset>
            <h2>Applying Technology</h2>
            <table>
                <tr>
                    <th rowspan="2" style="width:75%;">Individual uses the principles of programming and recognizes the impact of technology.</th>
                    <th colspan="4">Rating</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>N</th>
                </tr>
                <tr>
                    <td>1. Uses appropriate programming tools, equipment, and methods</td>
                    <fieldset id="aa1">
                        <td><input type="radio" value="3" name="aa1" <?php if(isset($_POST[ 'aa1'])){echo ($_POST[ 'aa1']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="aa1" <?php if(isset($_POST[ 'aa1'])){echo ($_POST[ 'aa1']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="aa1" <?php if(isset($_POST[ 'aa1'])){echo ($_POST[ 'aa1']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="aa1" <?php if(isset($_POST[ 'aa1'])){echo ($_POST[ 'aa1']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
                <tr>
                    <td>2. Seeks out and uses new tools that would be advantageous to the project.</td>
                    <fieldset id="aa2">
                        <td><input type="radio" value="3" name="aa2" <?php if(isset($_POST[ 'aa2'])){echo ($_POST[ 'aa2']=='3' ) ? "checked": "";} ?> required></td>
                        <td><input type="radio" value="2" name="aa2" <?php if(isset($_POST[ 'aa2'])){echo ($_POST[ 'aa2']=='2' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="1" name="aa2" <?php if(isset($_POST[ 'aa2'])){echo ($_POST[ 'aa2']=='1' ) ? "checked": "";} ?> ></td>
                        <td><input type="radio" value="N" name="aa2" <?php if(isset($_POST[ 'aa2'])){echo ($_POST[ 'aa2']=='N' ) ? "checked": "";} ?> ></td>
                    </fieldset>
                </tr>
            </table>
            <h3>Things I/They do well:</h3>
            <textarea name="aa3" required><?php if(isset($_POST['aa3'])){echo $_POST['aa3'];} ?></textarea>
            <h3>What should I/They improve upon:</h3>
            <textarea name="aa4" required><?php if(isset($_POST['aa4'])){echo $_POST['aa4'];} ?></textarea>
        </fieldset>


        <input id="formSubmit" type="submit" value="Send Survey to Instructors" />
    </form>
</div>
