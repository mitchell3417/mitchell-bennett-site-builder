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

function get_versioned_assets_dir( $path = '' ): string {
	if ( ! str_starts_with( $path, '/' ) ) {
		$path = '/' . $path;
	}

	$asset_url = get_assets_dir( $path );
	$asset_file = getcwd() . '/site/assets' . $path;

	if ( is_file( $asset_file ) ) {
		$version = filemtime( $asset_file );
		if ( $version !== false ) {
			return $asset_url . '?v=' . $version;
		}
	}

	return $asset_url;
}

function the_versioned_assets_dir( $dir = '' ): void {
	echo get_versioned_assets_dir( $dir );
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
		if ( strlen( $path ) === 1 && $env === 'local' ) $path = '/index/';
	}
	
	if ( $env === 'local' ) {
		// remove / at end of the string
		if ( substr( $path, -1 ) === '/' ) {
			$path = substr( $path, 0, -1 );
		}
		echo get_local_root_path() . '/local_site' . $path . '.html';
	} else {
		echo $path;
	}
}
