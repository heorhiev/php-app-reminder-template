<?php

include '../load.php';

new app\toolkit\Console(isset($_GET['action']) ? $_GET['action'] : $argv[1]);