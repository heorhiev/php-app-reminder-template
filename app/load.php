<?php

include 'paths.php';
include 'vendor/autoload.php';

if (file_exists(APP_PATH . '/extensions-local.php')) {
    include 'extensions-local.php';
}