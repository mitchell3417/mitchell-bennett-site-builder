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

function get_images_webp_dir( string $dir = '' ): string {
	$webp_path = preg_replace( '/\.(jpe?g|png)$/i', '.webp', $dir );
	return get_images_dir( $webp_path );
}

function the_images_webp_dir( string $dir = '' ): void {
	echo get_images_webp_dir( $dir );
}

function get_project_image_srcset( string $slug, string $variant, string $extension = 'jpg' ): string {
	static $width_cache = array();
	$extension = ( strtolower( $extension ) === 'webp' ) ? 'webp' : 'jpg';
	$suffixes = ( $extension === 'webp' )
		? array(
			'-150x150.webp',
			'-169x300.webp',
			'-300x225.webp',
			'-768x576.webp',
			'-1024x768.webp',
			'.webp',
		)
		: array(
			'-150x150.jpg',
			'-169x300.jpg',
			'-300x225.jpg',
			'-768x576.jpg',
			'-1024x768.jpg',
			'.jpg',
		);
	$entries = array();
	$seen_widths = array();

	foreach ( $suffixes as $suffix ) {
		$relative = $slug . '/' . $slug . '-' . $variant . $suffix;
		$file = getcwd() . '/site/assets/images/' . $relative;

		if ( ! is_file( $file ) ) {
			continue;
		}

		if ( ! array_key_exists( $relative, $width_cache ) ) {
			$dimensions = getimagesize( $file );
			$width_cache[ $relative ] = ( $dimensions !== false && isset( $dimensions[0] ) ) ? (int) $dimensions[0] : null;
		}

		$width = $width_cache[ $relative ];
		if ( $width === null || isset( $seen_widths[ $width ] ) ) {
			continue;
		}

		$entries[] = get_images_dir( $relative ) . ' ' . $width . 'w';
		$seen_widths[ $width ] = true;
	}

	return implode( ', ', $entries );
}

function the_project_image_srcset( string $slug, string $variant, string $extension = 'jpg' ): void {
	echo get_project_image_srcset( $slug, $variant, $extension );
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
