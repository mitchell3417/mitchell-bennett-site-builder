<?php
function get_all_files_from_directory( $directory, $file_type ): array {
    return glob_recursive( os_path_join( $directory, "*.$file_type" ) );
}


function glob_recursive( $pattern, $flags = 0 ): array {

    $files = glob( $pattern, $flags );
    foreach ( glob( dirname( $pattern ).'/*', GLOB_ONLYDIR|GLOB_NOSORT ) as $dir) {
        $files = array_merge( $files, glob_recursive( $dir.'/'.basename( $pattern ), $flags ) );
    }
    return $files;
}

function os_path_join( ...$parts ): string {
  return preg_replace( '#'.DIRECTORY_SEPARATOR.'+#', DIRECTORY_SEPARATOR, implode( DIRECTORY_SEPARATOR, array_filter( $parts ) ) );
}

function get_the_view( $file ): string {
    // search, and store all matching occurences in $matches
    preg_match('/mbennett-view:\s*(\S+)/', file_get_contents( $file ), $matches);

    if ( !empty( $matches[0] ) ) {
        $view = preg_replace( '/mbennett-view:/', '', $matches[0] );
    } else {
        $view = 'default.php';
    }

    $return = trim( $view );

    return $return;
}

function get_view_html( $post_path, $variables = array( 'local' => false ) ): string {

	global $env;
	if ( $env == 'local' ) $variables['local'] = true;
	
    $view = get_the_view( $post_path );

    if ( empty( $view ) ) $view = 'default.php';
	
	$seo = get_seo_details( $post_path );
	if ( isset( $seo->title ) ) $variables['seo_title'] = $seo->title;
	if ( isset( $seo->desc ) ) $variables['seo_desc'] = $seo->desc;
	if ( isset( $seo->noindex ) ) $variables['noindex'] = $seo->noindex;

    ob_start();

    if ( !empty( $variables ) ) $vars = $variables;

    $post = $post_path;
    
    include "_views/$view";

   	$html = ob_get_clean();
	   
   // Get rid of all html comments in the $html string
   $html = preg_replace('/<!--(.|\s)*?-->/', '', $html);
	   
    return $html;
}



function build_a_page( $path, $site_path = 'site' ): string {
	
	if ( $path == '_pages/index.php' ) {
		$dir = $site_path . '/index.html';
	} elseif ( $path == '_pages/sitemap.php' ) {
		$dir = $site_path . '/sitemap.xml';
	} elseif ( $path == '_pages/robots.php' ) {
		$dir = $site_path . '/robots.txt';
	} else {
		$dir = get_the_directory( '/_pages/', $site_path, $path);
	}
	
	$txt = get_view_html( $path, array( 'local' => false, 'path' => $dir ) );
	
	if ( !is_dir( dirname( $dir ) ) ) {
		mkdir( dirname( $dir ), 0755, true );
	}
	
	file_put_contents( $dir, $txt );
	
	return $dir;
}



function build_a_project( $path, $site_path = 'site' ): string {
	
	include $path;
	$dir = get_the_directory( '/_data/', $site_path, $path);
	
	ob_start();
	
	$vars = $data;
	$vars['path'] = $dir;
	
	include "_views/projects-single.php";
	
	$html = ob_get_clean();
	
	$html = preg_replace('/<!--(.|\s)*?-->/', '', $html);
	
	if ( !is_dir(dirname($dir)) ) {
		mkdir(dirname($dir), 0755, true);
	}
	
	file_put_contents($dir, $html);
	
	return $dir;
}


function get_the_directory( $pattern, $site_path, $path ) : string {
	
	$site_file_path = preg_replace( $pattern, $site_path, $path);
	
	return preg_replace('/\.php/', '.html', $site_file_path);
}


function get_seo_details( $path ) {
	
	$seo = new stdClass();
	
	preg_match('/mbennett-seo-title:\s*{([^{}]*)}/', file_get_contents( $path ), $matches);
	if ( isset( $matches[1] ) ) {
		$seo->title = $matches[1];
	}
	
	preg_match('/mbennett-seo-desc:\s*{([^{}]*)}/', file_get_contents( $path ), $matches);
	if ( isset( $matches[1] ) ) {
		$seo->desc = $matches[1];
	}
	
	preg_match('/mbennett-noindex:\s*{([^{}]*)}/', file_get_contents( $path ), $matches);
	if ( isset( $matches[1] ) ) {
		$seo->noindex = $matches[1];
	}
	
	return $seo;
}