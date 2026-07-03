<?php /* Template Name: Services */ ?>
<?php get_header(); ?>

<!-- Banner Layout -->
<div class="relative w-full bg-cover bg-center md:bg-top banner-image-class-here"> 
    <div class="banners-gradient absolute inset-0"></div>  
    <div class="container mx-auto flex items-center justify-center pt-[80px] pb-[80px] relative z-10">
      <div class="w-full">

        <?php
          $banner_h1_heading = get_post_meta( get_the_ID(), 'banner_heading', true );
          $banner_p_subtext = get_post_meta( get_the_ID(), 'banner_subtext', true );
        ?>
        <h1 class="text-center text-white font-bold font-urbanist text-[34px] md:text-large leading-tight">
          <?php echo esc_html( $banner_h1_heading ); ?>
        </h1>
        <p class="text-center text-white font-normal text-base xl:text-xl mt-5">
          <?php echo esc_html( $banner_p_subtext ); ?>
        </p>
        
        
      </div>
    </div>
  </div>
  
<!-- Fetching Content From wp-admin dashboard Page-editor -->
<div class="stratym-content w-full">

    <?php
    while ( have_posts() ) :
        the_post();
        the_content(); // 👈 This outputs your editor content
    endwhile;
    ?>
</div>

<?php get_footer(); ?>