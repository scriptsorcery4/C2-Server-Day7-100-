<?php

require_once './app/config/unauth.php';

session_destroy();

header("Location: index.php");
exit;