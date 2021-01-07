<?php echo 'test works';
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false;
    }
}
?>
/*
*<?php var_export($_SERVER)?>
*<?php isset($_SERVER['PHP_IDE_CONFIG'])?>
*/

