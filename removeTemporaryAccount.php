<?php
    include('database/dbAccounts.php');
    sleep(3600);
    $result = remove_account($argv[1]);
?>