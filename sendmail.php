<?php

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{


        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["con_name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["con_email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["con_message"]);
        $company_name = trim($_POST["con_company_name"]);
        $industry = trim($_POST["con_industry"]);

        

        // Set the recipient email address.
        $recipient = "secretariat@obp-tanzania.co.tz";

        // Set the email subject.
        $subject = "Web Enquiry From $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Company Name: $company_name\n";
        $email_content .= "Industry: $industry\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        mail($recipient, $subject, $email_content, $email_headers);
         

            /* Redirect browser */
          //  header('Location: thankyou.html'); 
            //exit();


        }










?>
