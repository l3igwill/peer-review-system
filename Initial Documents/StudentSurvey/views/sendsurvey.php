<div id="main">
    <?php
    
    //$to="l3igwill1994@gmail.com";
    $to= "brent.presley@mstc.edu";
    $subject = "Peer/Self Evaluation Form - ".$_POST['studCompEval']." evaluating ".$_POST['reviewee'];
   
    $message = "Student completeing evaluation: ".$_POST['studCompEval']."\n Reviewee: ".$_POST['reviewee']."\n Team Name: ".$_POST['teamName']."\n Class Name: ".$_POST['className']."\n Date Submitted: ".$_POST['date'];
    $message .= "\n\n Working Productively/ Assuring Quality";
    $message .= "\n 1. Quality of code written was appropriate: ".$_POST['p1'];
    $message .= "\n 2. Follows procedures / rules: ".$_POST['p2'];
    $message .= "\n 3. The amount of work completed for the semester was appropriate: ".$_POST['p3'];
    $message .= "\n 4. Respects group decisions when they conflict with their own analysis: ".$_POST['p4'];
    $message .= "\n Things I/They do well: ".$_POST['p5'];
    $message .= "\n What should I/They improve upon: ".$_POST['p6'];

    //table 2 answers
    $message .= "\n\n Communicating Clearly";
    $message .= "\n 1. Exhibits professional communication with the client: ".$_POST['c1'];
    $message .= "\n 2. Speaks professionally: ".$_POST['c2'];
    $message .= "\n 3. Writes professionally: ".$_POST['c3'];
    $message .= "\n 4. Demonstrates ability to listen effectively: ".$_POST['c4'];
    $message .= "\n 5. Uses language appropriate to situation: ".$_POST['c5'];
    $message .= "\n Things I/They do well: ".$_POST['c6'];
    $message .= "\n What should I/They improve upon: ".$_POST['c7'];
    
    //table 3 answers
    $message .= "\n\n Working Cooperatively";
    $message .= "\n 1. Works cooperatively with others: ".$_POST['w1'];
    $message .= "\n 2. Demonstrates respect for others through word and action: ".$_POST['w2'];
    $message .= "\n 3. Provides and accepts feedback: ".$_POST['w3'];
    $message .= "\n 4. Willing to help others to solve programming issues they encounter: ".$_POST['w4'];
    $message .= "\n Things I/They do well: ".$_POST['w5'];
    $message .= "\n What should I/They improve upon: ".$_POST['w6'];
    
    //table 4 answers
    $message .= "\n\n Acting Responsibly/Acting with Integrity";
    $message .= "\n 1. Attends meetings regularly and punctually: ".$_POST['a1'];
    $message .= "\n 2. Assumes responsibility for completing assignments: ".$_POST['a2'];
    $message .= "\n 3. Performs assigned tasks: ".$_POST['a3'];
    $message .= "\n 4. When individual made a mistake, they owned it and took responsibility for it: ".$_POST['a4'];
    $message .= "\n Things I/They do well: ".$_POST['a5'];
    $message .= "\n What should I/They improve upon: ".$_POST['a6'];
    
    //table 5 answers
    $message .= "\n\n Thinking Critically and Creatively";
    $message .= "\n 1. Demonstrates willingness to recognize others' point of view: ".$_POST['t1'];
    $message .= "\n 2. Willing to change opinion as circumstances change. ".$_POST['t2'];
    $message .= "\n Things I/They do well: ".$_POST['t3'];
    $message .= "\n What should I/They improve upon: ".$_POST['t4'];
    
    //table 6 answers
    $message .= "\n\n Applying Technology";
    $message .= "\n 1. Uses appropriate programming tools, equipment, and methods: ".$_POST['aa1'];
    $message .= "\n 2. Seeks out and uses new tools that would be advantageous to the project: ".$_POST['aa2'];
    $message .= "\n Things I/They do well: ".$_POST['aa3'];
    $message .= "\n What should I/They improve upon: ".$_POST['aa4'];
    
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $successfull = mail($to, $subject, $message);
    
    ?>
        <div id="thankYou">
            <h3>Brent Presley <a href="mailto:Brent.Presley@mstc.edu">brent.presley@mstc.edu</a></h3>
            <h3>Jason Stroik <a href="mailto:jason.stroik@mstc.edu">jason.stroik@mstc.edu</a></h3>

            <p>Thank you for your feedback on
                <?php echo $_POST['reviewee']?>
            </p>
            <br>
            <p>Sincerely,</p>
            <div class="italic">
                <p>Brent Presely</p>
                <p>Instructor - Software Development</p>
                <p>Mid-State Technical College</p>
                <br>
                <p>Jason Stroik</p>
                <p>Instructor - Software Development</p>
                <p>Mid-State Technical College</p>
            </div>
            <h2>Status:
                <?php 
            if($successfull === true){
                echo "Successfully sent.";
            }else if($successfull === false){
                echo "Failed to send.";
            }
        ?>
            </h2>
        </div>

</div>
