<!DOCTYPE html>

<html>

<head>
    <title>new php</title>
</head>

<body>

<?php
    $action=$_REQUEST['action'];
    if ($action=="") { /* display the contact form */
?>

    <form  action="" method="POST" enctype="multipart/form-data">
        <fieldset class="form-group">
            <input type="hidden" name="action" value="submit">

            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
            <br />

            <small class="text-muted">We'll never share your email with anyone else.</small>
            <br />

            Your message:
            <br />
            <textarea name="message" rows="7" cols="30" maxlength="500"></textarea>
            <br />

            <input type="submit" value="Send email" class="btn btn-primary"/>
        </fieldset>
    </form>

<?php
    } else { /* send the submitted data */
        $email_to = "jhewitt@amleo.com,some@other.com,yet@another.net";
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];

        if (($email=="")||($message=="")) {
            echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }

        // => CHECKPOINT: ["jhewitt@amleo.com", "some@other.com", "yet@another.net"]

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Invalid email format , write your Email correctly :)"; 
        } else {        
            $from="From: $name<$email>\r\nReturn-path: $email";
            $subject="Message sent using your contact form";
            mail("youremail@yoursite.com", $subject, $message, $from);

            echo "Email sent to :";
            echo "<br>";
            echo $email;
        }
    }   
?>

</body>

</html>