<?php
session_start();

session_unset();
session_destroy();

header("Location: /Day5/frontend/index.php");
exit;
