<div id="main">
    <?php
    

    
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
            if($result===1){
                echo "Successfully sent.";
            }else if($result === 0){
                echo "Failed to send.";
            }
        ?>
            </h2>
        </div>

</div>
