<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">



	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<div id="top-bar">
			<div class="container">
				<div class="d-sm-flex justify-content-between">
					<ul class="top-bar__list d-flex gap-2 align-items-center">
						<li>(+61) 452 061 831</li>
						<li>info@khair-relief.org</li>
						<li>Werribee VIC 3030, AUSTRALIA</li>
					</ul>
					<ul class="top-bar__list d-flex gap-2 align-items-center">
						<li>FB</li>
						<li>IG</li>
						<li>LI</li>
						<li>YT</li>
					</ul>
				</div>
			</div>
		</div>

		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar -->