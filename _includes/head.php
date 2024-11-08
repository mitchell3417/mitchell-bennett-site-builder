<?php
    global $env;
    $title = ( isset( $vars['seo_title'] ) ) ? $vars['seo_title'] : 'Mitchell Bennett Web Development';
    $desc = ( isset( $vars['seo_desc'] ) ) ? $vars['seo_desc'] : 'Mitchell Bennett a web developer and designer builds custom business and portfolio websites at the Lake of the Ozarks, Missouri.';
    if ( isset( $vars['path'] ) ) {
        $path = $vars['path'];
		if ( substr( $path, 0, 1 ) !== '/' ) {
			$path = '/' . $path;
		}
		$path = preg_replace('/^\/site/', '', $path);
        $path = preg_replace('/\.html$/', '', $path);
    } else {
        $path = '';
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if ( $env === 'production') : ?><meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline'"><?php endif; ?>
		<?php if ( $env === 'production') : ?><base href="https://mitchellbennett.rocks"><?php endif; ?>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <!-- SEO Optimization-->
        <title><?php echo $title; ?></title>
        <?php if ( isset( $vars['noindex'] ) ) : ?>
        <meta name="robots" content="noindex">
        <?php else : ?>
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
        <?php endif; ?>
        <meta name="description" content="<?php echo $desc; ?>">
		<?php if ( $env === 'production') : ?><link rel="canonical" href="https://mitchellbennett.rocks<?php echo $path; ?>"><?php endif; ?>
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:description" content="<?php echo $desc; ?>">
        <meta property="og:url" content="https://mitchellbennett.rocks<?php echo $path; ?>">
        <meta property="og:site_name" content="<?php echo $title; ?>">
        <meta property="og:updated_time" content="<?php echo date('Y-m-d\TH:i:s\Z'); ?>">
        <meta property="og:image" content="<?php the_assets_dir( '/images/mitch-headshot-400x400' ); ?>">
        <meta property="og:image:secure_url" content="<?php the_assets_dir( '/images/mitch-headshot-400x400' ); ?>">
        <meta property="og:image:width" content="400">
        <meta property="og:image:height" content="400">
        <meta property="og:image:alt" content="Mitchell Bennett serving Lake Ozark, Missouri">
        <meta property="og:image:type" content="image/jpeg">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo $title; ?>">
        <meta name="twitter:description" content="<?php echo $desc; ?>">
        <meta name="twitter:image" content="<?php the_assets_dir( '/images/mitch-headshot-400x400' ); ?>">
        <meta name="twitter:label1" content="Written by">
        <meta name="twitter:data1" content="Mitchell Bennett">
        <meta name="twitter:label2" content="Time to read">
        <meta name="twitter:data2" content="Less than a minute">
        <!-- Favicons -->
        <link rel="stylesheet" href="<?php the_assets_dir( '/css/style.css' ); ?>" type="text/css" media="all">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php the_fav_dir('apple-icon-57x57.png'); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php the_fav_dir('apple-icon-60x60.png'); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php the_fav_dir('apple-icon-72x72.png'); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php the_fav_dir('apple-icon-76x76.png'); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php the_fav_dir('apple-icon-114x114.png'); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php the_fav_dir('apple-icon-120x120.png'); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php the_fav_dir('apple-icon-144x144.png'); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php the_fav_dir('apple-icon-152x152.png'); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php the_fav_dir('apple-icon-180x180.png'); ?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php the_fav_dir('android-icon-192x192.png'); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php the_fav_dir('favicon-32x32.png'); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php the_fav_dir('favicon-96x96.png'); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php the_fav_dir('favicon-16x16.png'); ?>">
        <link rel="manifest" href="<?php the_fav_dir('manifest.json'); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php the_fav_dir('ms-icon-144x144.png'); ?>">
        <meta name="theme-color" content="#ffffff">
    </head>