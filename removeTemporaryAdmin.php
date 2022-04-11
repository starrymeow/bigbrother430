<?php
    include('database/dbAdmins.php');
    sleep(3600);
    $result = remove_admin($argv[1]);
?>