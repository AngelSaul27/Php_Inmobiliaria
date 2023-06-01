<?php
    define('ASSETS_URL', 'http://localhost/public/');
    
    $FILES_PATHS = [
        1 => '../app/config/config.php',
        2 => '../libs/middleware/model.php',
        3 => '../libs/middleware/controller.php',
        4 => '../libs/middleware/database.php',
        5 => '../libs/middleware/view.php',
        6 => '../libs/middleware/validation.php',
        7 => '../app/database/query.php',
        8 => '../app/routes/routes.php',
    ];

    foreach ($FILES_PATHS as $PATH) {
        if (file_exists($PATH)) {
            require_once $PATH;
        } else {
            die("Could not find file $PATH in the filesystem.");
        }
    }

?>