<?php

function autoload() {
    // Define an array of directories in the order of their priority to iterate through.
    $dirs = array(
        'src/entity/',
        'src/model/',
        'src/controller/',
        'src/entity/',
    );

    foreach( $dirs as $dir ) {
        $subDirs = scandir($dir);

        foreach ($subDirs as $subDir) {
            $info = pathinfo($subDir);
            if ($info["extension"] == "php" and ctype_upper($info["filename"][0])) {
                require_once($dir . $subDir);
            }
        }
    }
}

autoload();

use src\controller\Controller;

$control = new Controller();

$control->invoke();

