<?php
session_start();

if(session_destroy())
{
echo "You have logged out.";
header("Location: form.html");
}
?>
