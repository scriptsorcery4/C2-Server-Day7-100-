<?php

require_once __DIR__ . '/config.php';

if (!isset( $_SESSION['admin_id'])){
    header("Location: index.php");
    exit();
}