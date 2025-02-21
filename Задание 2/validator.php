<?php
    $dir = readline("task: ");
    $path = "тесты/$dir";
    $php_script = "task$dir.php";

    foreach (glob("$path/*.dat") as $dat_file) {
        $ans_file = str_replace(".dat", ".ans", $dat_file);

        $output = shell_exec("php $php_script < $dat_file");
        $result = file_get_contents($ans_file);

        if ($output == $result) {
            echo basename($dat_file). " OK\n";
        } else {
            echo basename($dat_file). " FAIL\n";
        }
    }
?>
