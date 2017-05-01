<?php

  //This function iterates througth all elements in an associative array(from the form) sent by the ajax request from index.php
  function showFormData(){

    foreach($_POST as $label => $value) {
        echo $label . ': ' . $value . '<br>';
      }
  }

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {


            echo "Sorry, there has been a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.

        $recipient = "###.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {

            echo 'Thank you for submitting the form.<br>';
            echo '<br>';
            echo 'You have submitted the following information:<br>';
            echo '<br>';
            showFormData();
        } else {

            echo "Sorry, something has gone wrong and your message could not be sent.";
        }

    } else {
        echo "There was a problem with your submission, please try again.";
    }

?>
