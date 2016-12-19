<?php
session_start();
unset($_SESSION['so']);
header('Location: /browsemalls/');
?>