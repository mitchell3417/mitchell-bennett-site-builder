<?php

function get_assets_dir( $path = '' ): string {
	global $env;
	
	if ( ! str_starts_with( $path, '/' ) ) {
		$path = '/' . $path;
	}
	
	$pre = ( $env == 'local' ) ? get_local_root_path() . '/site' : '';
	
    return $pre . '/assets' . $path;
}

function the_assets_dir( $dir = '' ): void {
	echo get_assets_dir( $dir );
}

function get_images_dir( $dir = '' ): string {
    return get_assets_dir() . 'images/' . $dir;
}

function the_images_dir( $dir = '' ): void {
	echo get_images_dir( $dir );
}

function the_fav_dir( $dir = '' ): void {
    echo get_assets_dir( '/favicons/' . $dir );
}

function get_local_root_path(): string {
	return getcwd();
}

function the_path( $path = '' ): void {
	global $env;
	
	if ( ! str_starts_with( $path, '/' ) ) {
		$path = '/' . $path;
	} else {
		if ( strlen( $path ) === 1 && $env === 'local' ) $path = '';
	}
	
	if ( $env === 'local' ) {
		echo get_local_root_path() . '/local_site' . $path . '/index.html';
	} else {
		echo $path;
	}
}