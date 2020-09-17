<?php
// Get some functions to make life easier
include_once '__engine__/compiler.php';
include_once '__engine__/paths.php';

// Build all of the pages
echo '<h2 style="margin-bottom: 0;">Pages</h2>';

$pages_paths = get_all_files_from_directory("_pages", "html");

foreach ($pages_paths as $path) {

    $post_path = $path;
    $txt = display_view($path);

    if ( $path == '_pages/index.html') {
        $dir = 'site/index.html';
    } else {
        $site_file_path = preg_replace('/_pages/', 'site', $path);
        $dir = preg_replace('/\.html/', '/index.html', $site_file_path);
    }

    if ( !is_dir(dirname($dir)) ) {
        mkdir(dirname($dir), 0755, true);
    }

    $file = file_put_contents($dir, $txt);

    echo 'created: ' . $dir . '</br>';

}

// Build all of the single project pages
echo '<h2 style="margin-bottom: 0;">Projects</h2>';

$projects_paths = get_all_files_from_directory('_data/projects', 'php');

foreach ($projects_paths as $path) {

    include $path;

    ob_start();

    $vars = $data;

    include "_views/projects-single.php";

    $txt = ob_get_clean();

    $site_file_path = preg_replace('/_data/', 'site', $path);
    $dir = preg_replace('/\.php/', '/index.html', $site_file_path);

    if ( !is_dir(dirname($dir)) ) {
        mkdir(dirname($dir), 0755, true);
    }

    $file = file_put_contents($dir, $txt);

    echo 'created: ' . $dir . '</br>';

}
