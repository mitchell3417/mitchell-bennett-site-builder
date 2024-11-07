<?php

// Get some functions to make life easier
include_once '__src__/compiler.php';
include_once '__src__/paths.php';

// Build all of the pages
echo '<h2 style="margin-bottom: 0;">Pages</h2>';

$pages_paths = get_all_files_from_directory('_pages', 'html');

foreach ($pages_paths as $path) {
	$env = 'production';
	$dir = build_a_page( $path );
	
	$env = 'local';
	$local_dir = build_a_page( $path, 'local_site' );

    echo 'created: ' . $dir . '</br>';
	echo 'created: ' . $local_dir . '</br>';

}


// Build all of the single project pages
echo '<h2 style="margin-bottom: 0;">Projects</h2>';

$projects_paths = get_all_files_from_directory('_data/projects', 'php');

foreach ($projects_paths as $path) {
	$env = 'production';
	$dir = build_a_project( $path );
	
	$env = 'local';
	$local_dir = build_a_project( $path, 'local_site' );
	
	echo 'created: ' . $dir . '</br>';
	echo 'created: ' . $local_dir . '</br>';
}
