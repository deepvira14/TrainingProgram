<?php
/* Set e-mail recipient */

$myemail  = "info@snekriations.com";

/* Check all form inputs using check_input function */
$fname = check_input($_POST['fname']);
$lname = check_input($_POST['lname']);
$email    = check_input($_POST['email']);
$subject="Inquiry";
$msg  = check_input($_POST['msg']);
$headers = 'From: info@elive.com' . "\r\n" .
'Reply-To: info@elive.com';

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

First Name: $fname
Last Name: $lname
E-mail: $email
Comments:$message

End of message
";
echo "$fname"."$lname"."$email"."$msg";
/* Send the message using mail() function */
mail($myemail, $subject, $message,$headers);

/* Redirect visitor to the thank you page */
header('Location: contactreply.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>