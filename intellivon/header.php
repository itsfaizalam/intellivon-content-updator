<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- Remove this after finalize the code start -->
	<!--<meta name="robots" content="noindex">-->
	<!--<meta name="googlebot" content="noindex">-->
    <!-- Remove this after finalize the code End -->

<!-- Faiz Start -->
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- tailwind config -->
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          inter: ["Inter", "sans-serif"],
          urbanist: ["Urbanist", "sans-serif"],
        },
        colors: {
          black1: "#302c3b",
          black2: "#07172D",
          white2: "#F4FAFA",
          grey1: "#444",
          grey2: "#777",
          grey3: "#302C3B",
          grey4: "#a29fa8",
          grey5: "#DDDDDD",
          grey6: "#555",
          blue: "#5D5DF6",
          primaryBorder: "#e9eef5",
          secondaryBorder: "#E3E2E5",
          purple: "#9900E6",
          navyBlue: "#5b0ffe",
        },
        fontSize: {
          large: "56px",
          medium: "48px",
          "3.5xl": "32px",
        },
        backgroundImage: {
          landingGen: "url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/landing-gen.webp')",
          powered: "url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/powered.webp')",
          circles: "url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/gradient-cricles.webp')",
          capabilities: "url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/capabilities.webp')",
          about: "url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/about-banner.webp')",
          "blog-hero-gradient":
            "linear-gradient(277.15deg, rgba(171, 0, 255, .64), rgba(0, 200, 235, .24)), linear-gradient(274.1deg, rgba(10, 14, 15, 0), rgba(0, 25, 59, .6))",
          "custom-gradient":
            "linear-gradient(282.3deg, #ab00ff 30%, #00c8eb 95%), linear-gradient(274.1deg, transparent, rgba(0, 25, 59, .6))",
          "custom-gradient2": "linear-gradient(98.04deg, #ff174f, #5b0ffe)",
          "blog-details-hero":
            "linear-gradient(277.15deg, rgba(171, 0, 255, .64), rgba(0, 200, 235, .24)), linear-gradient(274.1deg, rgba(10, 14, 15, 0), rgba(0, 25, 59, .6))",
          "contact-form-gradient":
            "linear-gradient(17.69deg, rgba(21, 6, 52, .75) 20.63%, rgba(21, 6, 52, .64) 27.53%, rgba(21, 6, 52, .56) 38.72%, rgba(21, 6, 52, .4) 43.23%, rgba(21, 6, 52, .24) 50%)",
        },
      },
    },
  };
</script>
<!-- Font: Inter & Urbanist -->
<link
  href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Urbanist:wght@300;400;500;600;700;800;900&display=swap"
  rel="stylesheet"
/>
<!-- Include Swiper Bundle CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Swiper JS (put before your own script that initializes) -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script><!-- USED IN SERVICE AI/ML PAGE ONLY -->

<!-- Faiz 1 End -->

<!-- Start Shared by Tanvi 16-10-2025 -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16582809249"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16582809249');
</script>
<!-- End Shared by Tanvi 16-10-2025 -->
	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Intellivon Custom Menu Start -->
<!-- Paste custom menu code here -->
<!-- Intellivon Custom Menu End -->
<?php if ( $enable_skip_link ) { ?>
<a class="skip-link screen-reader-text" href="<?php echo esc_url( $skip_link_url ); ?>"><?php echo esc_html__( 'Skip to content', 'hello-elementor' ); ?></a>
<?php } ?>

<?php
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	if ( hello_elementor_display_header_footer() ) {
		if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
			get_template_part( 'template-parts/dynamic-header' );
		} else {
			get_template_part( 'template-parts/header' );
		}
	}
}