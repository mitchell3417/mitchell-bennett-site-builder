<?php
function get_all_files_from_directory($directory, $file_type) {
    return glob_recursive(os_path_join($directory, "*.$file_type"));
}


function glob_recursive($pattern, $flags = 0) {

    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
        $files = array_merge($files, glob_recursive($dir.'/'.basename($pattern), $flags));
    }
    return $files;
}

function os_path_join(...$parts) {
  return preg_replace('#'.DIRECTORY_SEPARATOR.'+#', DIRECTORY_SEPARATOR, implode(DIRECTORY_SEPARATOR, array_filter($parts)));
}

function get_the_view($file) {
    // search, and store all matching occurences in $matches
    preg_match('/mbennett-view:\s*(\S+)/', file_get_contents($file), $matches);

    if ( !empty($matches[0]) ) {
        $view = preg_replace('/mbennett-view:/', '', $matches[0]);
    } else {
        $view = 'default.php';
    }

    $return = trim($view);

    return $return;
}

function display_view($post_path, $variables = array()) {

    $view = get_the_view($post_path);

    if (empty($view)) $view = 'default.php';

    ob_start();

    if (!empty($variables)) $vars = $variables;

    $post = $post_path;
    
    include "_views/$view";

    return ob_get_clean();
}
