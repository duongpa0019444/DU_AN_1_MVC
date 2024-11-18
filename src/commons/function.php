<?php 
    function debug($param) {
        echo "<pre>";
        print_r($param);
        die();
    }

    function autoloadFile($filepath) {
        $files = array_diff(scandir($filepath), ['..', '.']);
        foreach ($files as $file) {
            require_once $filepath.$file;
        }
    }
?>