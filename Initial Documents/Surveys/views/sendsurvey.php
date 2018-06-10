<div id="main">
    <?php
    
    $to= "brent.presley@mstc.edu";
    $subject = "Customer Satisfaction Form - ".$_POST['projectName'];
    $message = "Email: ".strval($_POST['email'])."\n"."Name: ".strval($_POST['name'])."\n"."Project Name:".strval($_POST['projectName'])."\n"."1. Did the project team deliver the results and quality that were promised? \n".strval($_POST['question1'])."\n"."1a. Were key project deadlines met with a 'whatever it takes' attitude? \n".strval($_POST['question1a'])."\n"."1b. Was consistent discipline and direction provided on approach, scope, and scheduale? \n".strval($_POST['question1b'])."\n"."1c. Did the project team guide your staff and project results? Were they 'team players'? \n".strval($_POST['question1c'])."\n"."2. The project process was ... \n".$_POST['question2']."\n"."2a. Was there open and timely communication? Did the project team act as a team? \n".strval($_POST['question2a'])."\n"."2b. Were there open and timely communication? Did the project team act as a team? \n".strval($_POST['question2b'])."\n"."2c. Was the project team creative and flexible in their approach to meeting objectives? \n".strval($_POST['question2c'])."\n"."2d. Did the project team listen, learn, and then execute solutions to overcome challenges? \n".strval($_POST['question2d'])."\n"."3. The overall service on this project was ... \n".strval($_POST['question3'])."\n"."4. Comments and Testimonials: \n".strval($_POST['question4']);
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $successfull = mail($to, $subject, $message);
    
    ?>
        <div id="thankYou">
            <h3>Brent Presley <a href="mailto:Brent.Presley@mstc.edu">brent.presley@mstc.edu</a></h3>
            <h3>Jason Stroik <a href="mailto:jason.stroik@mstc.edu">jason.stroik@mstc.edu</a></h3>

            <p>Thank you for allowing our students to work with you on a capstone project for their education at Mid-State. We would also like to thank you for taking the time to help the students with their professional development and for filling out this document.</p>
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
