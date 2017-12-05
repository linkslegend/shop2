<?php
/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
					<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
					<meta name="viewport" content="width=device-width" />
					<title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
					<style>
				@import url(http://fonts.googleapis.com/css?family=Lato:400,900);
					<?php
					/*  This is normally not needed because
					 *  WooCommerce inserts it into your templates
					 *  automatically. It's here so the styles
					 *  get applied to the preview correctly.
					 */

					wc_get_template( 'emails/email-styles.php');

					/* Custom styles can be added here
					  * NOTE: Don't add inline comments in your styles,
					  * they will break the template.
					  */
					$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
					if (strpos($url,'admin-ajax.php') !== false){
					?>
					#template_container {
						max-width: 724px!important;
						width: 100%;
					}
					#template-selector form,
					#template-selector a.logo,
					#template-selector .template-row,
					#template-selector .order-row {
						display: block;
						margin: 0.75em 0;
					}
					#body_content table td {
							padding: 0px;
					}

					#template-selector {
						background: #333;
						color: white;
						text-align: center;
						padding: 0 2rem 1rem 2rem;
						font-family: 'Lato', sans-serif;
						font-weight: 400;
						border: 4px solid #5D5D5D;
						border-width: 0 0 4px 0;
					}

					#template-selector a.logo {
						display: inline-block;
						position: relative;
						top: 1.5em;
						margin: 1em 0 2em;
					}
					#template-selector a.logo img {
						max-height: 5em;
					}
					#body_content_inner{color: #737373;
				    padding: 30px 20px 20px 20px;
				    background: #f2f2f2;
				    line-height: 150%;
				    text-align: left;}
					#template-selector a.logo p {
						display: none;
						float: left;
						position: absolute;
						width: 16em;
						top: 4.5em;
						padding: 2em;
						left: -8em;
						background: white;
						opacity: 0;
						border: 2px solid #777;
						border-radius: 4px;
						font-size: 0.9em;
						line-height: 1.8;
						transition: all 500ms ease-in-out;
					}

					#template-selector a.logo:hover p {
						display: block;
						opacity: 1;
					}

					#template-selector a.logo p:after, #template-selector a.logo p:before {
						bottom: 100%;
						left: 50%;
						border: solid transparent;
						content: " ";
						height: 0;
						width: 0;
						position: absolute;
						pointer-events: none;
					}

					#template-selector a.logo p:after {
						border-color: rgba(255, 255, 255, 0);
						border-bottom-color: #ffffff;
						border-width: 8px;
						margin-left: -8px;
					}

					#template-selector a.logo p:before {
						border-color: rgba(119, 119, 119, 0);
						border-bottom-color: #777;
						border-width: 9px;
						margin-left: -9px;
					}

					#template-selector a.logo:hover p {
						display: block;
					}

					#template-selector span {
						font-weight: 900;
						display: inline-block;
						margin: 0 1rem;
					}

					#template-selector select,
					#template-selector input {
						background: #e3e3e3;
						font-family: 'Lato', sans-serif;
						color: #333;
						padding: 0.5rem 1rem;
						border: 0px;
					}

					#template-selector #order,
					#template-selector .choose-order {
						display: none;
					}

					.top-left{text-indent: 20px;width: 49%;color: black!important;padding: 0px 0px 10px 0px;font-size: 1.1em;float: left;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;}
					.top-right{text-indent: 20px;width: 49%;color: black!important;padding: 0px 0px 10px 10px;font-size: 1.1em;float: left;border-bottom: 1px solid #ccc;}
					.header-box{font-size: 0.82em;display: table;background: #fff;margin: 10px auto;max-width: 724px!important;min-width: 320px; width: 100%;;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;}
					#wrapper{max-width: 724px!important;margin: 0 auto;}
					#wrapper-inner{padding: 10px 20px;}
					.header {margin: 0 auto;max-width: 724px!important;min-width: 320px; width: 320px;width: 100%;}
					.one-col{margin: 0 auto;max-width: 724px!important;min-width: 320px; width: 320px;width: 100%;}
					.emb-logo-margin-box{font-size: 26px;line-height: 32px;margin-top: 6px;margin-bottom: 10px;color: #2f353e;margin-left: 20px; margin-right: 20px; align:center;}
					.column{max-width: 724px!important;min-width: 320px; width: 100%;text-align: left;color: #f6f6f8;font-size: 14px;line-height: 21px;}


					@media screen and (min-width: 1100px) {
						#template-selector .template-row,
						#template-selector .order-row {
								display: inline-block;
						}

						#template-selector form {
							display: inline-block;
							line-height: 3;
						}

						#template-selector a.logo p {
							width: 16em;
							top: 4.5em;
							left: 0.25em;
						}

						#body_content table td {
						    padding: 0px;
						}

						#template-selector a.logo p:after, #template-selector a.logo p:before {
							left: 10%;
						}
					}

					@media (max-width: 480px) {
						.top-left{text-indent: 20px;width: 48%;}
						.top-right{text-indent: 20px;width: 48%;}

					}

					<?php } ?>
				</style>

</head>

	<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
		<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'?>">
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
				<tr>
					<td align="center" valign="top">
						<div id="template_header_image">
							<?php
								if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
									echo '<p style="margin-top:0;"><img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" /></p>';
								}
							?>
						</div><ul id="top-menu" class="top-menu">
<li><a href="http://www.getkunst.com/product-category/art-prints/" target="_blank">Art prints</a> | </li>
<li><a href="http://www.getkunst.com/product-category/apparel/" target="_blank">Apparel</a> | </li>
<li><a href="http://www.getkunst.com/product-category/home/" target="_blank">Home</a> | </li>
<li><a href="http://www.getkunst.com/product-category/tech/" target="_blank">Tech</a> | </li>
<li><a href="http://www.getkunst.com/magazine/" target="_blank">Magazine</a>
</li></ul>
						<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container">
							<tr>
								<td align="center" valign="top">
									<!-- Header -->
									<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_header">
										<tr>
											<td id="header_wrapper">
												<h1><?php echo $email_heading; ?></h1>
											</td>
										</tr>
									</table>
									<!-- End Header -->
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<!-- Body -->
									<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
										<tr>
											<td valign="top" id="body_content">
												<!-- Content -->
												<table border="0" cellpadding="20" cellspacing="0" width="100%">
													<tr>
														<td valign="top">
															<div id="body_content_inner">
