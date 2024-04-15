<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?php wp_title("", true); ?></title>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

    <header>
		<div class="header">
			<div class="logo-site">
				<?php logo_teme(); ?>
				<a class="logo-lex" href="https://activelex.com/">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Logo-ActiveLex.svg">
				</a>
			</div>
			<a class="hotline" href="tel:1512">
				<span>Гаряча лінія Міноборони</span>
				<span>15-12</span>
			</a>
		</div>
	</header>