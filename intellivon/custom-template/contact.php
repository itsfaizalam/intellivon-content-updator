<?php /* Template Name: Contact Us Template */ ?>
<?php get_header(); ?>
<!-- Intellivon Menubar Start -->

<!-- Intellivon Menubar End -->
<!-- BANNER LAYOUT -->
<section
    class="relative px-5 lg:px-10 py-14 lg:py-20 w-full bg-[url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact.webp')] bg-cover bg-center md:bg-top banner-image-class-here">
    <!-- Gradient Overlay -->
    <div class="banners-gradient absolute inset-0"></div>

    <div class="container mx-auto flex items-center justify-between relative z-10 ">
        <div class="w-full md:w-1/2">
            <h1 class="text-white font-bold font-urbanist text-[40px] md:text-large leading-tight w-11/12">
                Let's Discuss what we can Build, and Scale Together
            </h1>
            <p class="text-white2 font-normal text-base xl:text-xl mt-5">
                We would love to hear from you and will be in touch shortly.
            </p>
        </div>
    </div>
</section>
<script>
    const btn = document.getElementById('banner-button');
    const spinner = document.getElementById('button-spinner');

    btn.addEventListener('click', () => {
        spinner.classList.remove('hidden');
        btn.disabled = true;
        // Simulate async loading, e.g.:
        setTimeout(() => {
            spinner.classList.add('hidden');
            btn.disabled = false;
        }, 2000);
    });

</script>

<!-- FORM -->
<section class="px-5 lg:px-10 py-14 lg:py-20 bg-[#f4f4fa] w-full">
    <div class="container">
        <!-- Heading Section -->
        <div class="w-full md:w-6/12">
            <div class="flex flex-col">
                <h2 class="text-medium font-bold text-black1 font-urbanist text-2xl md:text-3xl mb-4">
                    Fill out the <span class="text-gradient">Form</span>
                </h2>
                <p class="text-base font-normal text-grey1 mt-2">
                    Help us with the following details
                </p>
            </div>
        </div>
        <?php echo do_shortcode('[wpforms id="88"]'); ?>
    </div>
</section>




<!-- OUR OFFICES -->
<div class="bg-[#E4EAF2] px-5 lg:px-10">
  <div class="container flex flex-col md:flex-row items-center py-16">
    <!-- Left text content -->
    <div class="w-full flex flex-col gap-5 md:w-1/4">
      <h2 class="text-4xl font-bold text-black1 font-urbanist leading-snug tracking-[0.5px]">
        Our <span class="text-gradient"> Offices</span>
      </h2>
      <div class="flex gap-3 mt-12">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/usa.svg" alt="USA" class="size-6" />
        <div>
          <p class="text-sm font-bold text-black1">
            Delaware, United States
          </p>
          <p class="text-sm font-normal text-grey2 mt-1">
            651 N Broad St, Middletown,
            19709,county New Castle,
            Delaware, USA
          </p>
        </div>
      </div>
      <div class="flex gap-3 mt-3">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/india.svg" alt="UAE" class="size-6" />
        <div>
          <p class="text-sm font-bold text-black1">Punjab, INDIA</p>
          <p class="text-sm font-normal text-grey2 mt-1">
            F 337, Industrial Focal Point,
            Phase 8B, Industrial Area,
            Sector 74, SAS Nagar, Punjab
            160055
          </p>
        </div>
      </div>
      <div class="flex gap-3 mt-3">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/india.svg" alt="INDIA" class="size-6" />
        <div>
          <p class="text-sm font-bold text-black1">Punjab, INDIA</p>
          <p class="text-sm font-normal text-grey2 mt-1">
            SCF 98, Phase 11,Sector-67, Mohali, 160062
          </p>
        </div>
      </div>
    </div>

    <!-- Right image content -->
    <div class="w-full mt-12 md:mt-0 md:w-2/3 relative">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/map.png" alt="Map" class="w-full" width="500"
        height="500" />
      <div class="absolute top-1/3 left-1/4 group">
        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.16">
            <rect x="0.09375" y="0.671875" width="40" height="40" rx="20" fill="#AB00FF"></rect>
          </g>
          <g opacity="0.2">
            <rect x="8.09375" y="8.67188" width="24" height="24" rx="12" fill="#AB00FF"></rect>
          </g>
          <rect x="16.0938" y="16.6719" width="8" height="8" rx="4" fill="#AB00FF"></rect>
        </svg>
        <div class="relative">
          <div
            class="bg-white absolute bottom-14 shadow -right-[130px] hidden group-hover:flex justify-center flex-wrap p-6 rounded-xl w-[300px]">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/usa.svg" alt="USA" class="size-6" />
            <p class="text-xl font-bold text-black1 w-full text-center mt-4">
              Delaware, United States
            </p>
            <p class="text-base font-normal text-grey2 mt-2 w-full text-center">
              651 N Broad St, Middletown,
              19709,county New Castle,
              Delaware, USA
            </p>
            <div class="absolute w-4 h-4 bg-white -bottom-2 rotate-45 shadow"></div>
          </div>
        </div>
      </div>
      <div class="absolute top-[40%] right-[28%] cursor-pointer group">
        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.16">
            <rect x="0.09375" y="0.671875" width="40" height="40" rx="20" fill="#007BFF"></rect>
          </g>
          <g opacity="0.2">
            <rect x="8.09375" y="8.67188" width="24" height="24" rx="12" fill="#007BFF"></rect>
          </g>
          <rect x="16.0938" y="16.6719" width="8" height="8" rx="4" fill="#007BFF"></rect>
        </svg>
        <div class="relative">
          <div
            class="bg-white absolute bottom-14 shadow -right-[130px] hidden group-hover:flex justify-center flex-wrap p-6 rounded-xl w-[300px]">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/india.svg" alt="INDIA"
              class="size-6" />
            <p class="text-xl font-bold text-black1 w-full text-center mt-4">
              Punjab, India
            </p>
            <p class="text-base font-normal text-grey2 mt-2 w-full text-center">
              F 337, Industrial Focal Point,
              Phase 8B, Industrial Area,
              Sector 74, SAS Nagar, Punjab
              160055
            </p>
            <div class="absolute w-4 h-4 bg-white -bottom-2 rotate-45 shadow"></div>
          </div>
        </div>
      </div>
      <!-- third address -->
      <div class="absolute top-[38%] right-[29%] cursor-pointer group">
        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.16">
            <rect x="0.09375" y="0.671875" width="40" height="40" rx="20" fill="#17ac5d"></rect>
          </g>
          <g opacity="0.2">
            <rect x="8.09375" y="8.67188" width="24" height="24" rx="12" fill="#17ac5d"></rect>
          </g>
          <rect x="16.0938" y="16.6719" width="8" height="8" rx="4" fill="#17ac5d"></rect>
        </svg>
        <div class="relative">
          <div
            class="bg-white absolute bottom-14 shadow -right-[130px] hidden group-hover:flex justify-center flex-wrap p-6 rounded-xl w-[300px]">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/india.svg" alt="INDIA"
              class="size-6" />
            <p class="text-xl font-bold text-black1 w-full text-center mt-4">
              Punjab, India
            </p>
            <p class="text-base font-normal text-grey2 mt-2 w-full text-center">
              SCF 98, Phase 11,Sector-67, Mohali, 160062
            </p>
            <div class="absolute w-4 h-4 bg-white -bottom-2 rotate-45 shadow"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>