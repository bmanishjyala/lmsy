<?php
echo "I am in Logout file";
session_start();
session_unset();
session_destroy();
header('Location:/lms');
?>