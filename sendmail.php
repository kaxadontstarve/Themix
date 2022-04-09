<?php
$from = 'Darth Vader <darth@empire.com>';
$to = 'Emperor <palpatine@empire.com>';
$subject = 'Force';
$message = 'There is a great disturbance in the Force.';
$headers = 'From: ' . $from;
 
if (!mail($to, $subject, $message, $headers))
{
    echo "Error.";
}
else
{
    echo "Message sent.";
}
