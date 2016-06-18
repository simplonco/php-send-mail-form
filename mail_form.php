<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Send Mail Form</title>
    <link href="style.css" type="text/css" rel="stylesheet" media="all" />
  </head>
  <body>

<?php
//$to = "amarenighatu16@gmail.com";
$subject = "This is the first php send email";
$name = $_POST["name"]; //$name variable is regards to input tag  of name what you type
$email = $_POST["email"];//$email variable is regards to input tag  of email what you type
$topic = $_POST["topic"];
$message = $_POST["message"];//$message variable is regards to input tag  of message what you type

$to = $email;

$body = "What does mean PHP? \n PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML."; //you don't use semicolon inside here.

/*Hi! My name is Php, I am a language $name.

$message
From $name
Oh ya, if you want my email, it is $email and my topic is $topic
//anything type inside here can be raw text or a variables.
EMAIL; //if you indent it, it cant work.
*/
$header = "From: $email";
if ($_POST) {
  if ($name == '' || $email == '' || $message == '') {
    $feedback = 'fill out all the fields';
  } else {
    mail($to, $subject, $body, $header);
    $feedback = "Thanks for accessing me";
  }
} else {
  $feedback = "Wrong method";
}
/* mail ( $to , $subject , $message, $additional_header)*/
?>

    <div id="wrapper">
      <div id="content">
        <!--<ul id="nav">
          <li><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
        </ul>-->
        <h2>Contact</h2>
        <p id="feedback">Feedback: <?php echo $feedback; ?></p>
        <form action="?" method="post"><!--this"?" means post to itself and it only happen when we click the Send or in other file the Submit file. That means when we click Send, the php will run.-->
          <ul>
            <li>
              <label for="name">Name:</label><!--when you click the Name, the box will selected-->
              <input type="text" name="name" id="name">
            </li>
            <li>
              <label for="email">Email:</label>
              <input type="text" name="email" id="email">
            </li>
            <li>
              <label for="topic">Topic:</label>
              <select id="topic" name="topic">
                <option value="France">
                  France
                </option>
                <option value="Germany">
                  Germany
                </option>
                <option value="Italy">
                  Italy
                </option>
              </select>
            </li>
            <li>
              <label for="message">Describe your self:</label>
            <textarea id="message" name="message" cols="40" rows="9"></textarea>
            </li>
            <li>
              <input type="submit" value="Send">
            </li>
          </ul>
        </form>
      </div><!--#content-->
    </div><!-- #wrapper-->
  </body>
</html>
