<?php
session_start();
unset($_SESSION["Email"]);


header("location: ../");
exit();