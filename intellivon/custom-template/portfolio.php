<?php /* Template Name: Portfolio Template */ ?>
<?php get_header(); ?>

<!-- Intellivon Menubar Start -->
  <!-- Include jQuery for convenience -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function () {
      const servicesArray = [
        "web-development",
        "app-development",
        "ux-design",
        "ai-generative",
        "data-science",
        "cyber-security",
        "quality-engineering",
        "low-code-platform",
        "devops",
      ];
      const industriesArray = [
        "travel-and-loyalty",
        "e-commerce",
        "edtech",
        "martech",
        "real-estate",
        "shipping-and-logistics",
        "bfsi",
      ];

      let activeItem = null;
      let isScrolled = false;

      // Cache elements
      const $header = $("#header");
      const $navItems = $("#nav-items");
      const $hamburger = $("#hamburger");
      const $sidebar = $("#sidebar");
      const $sidebarClose = $("#sidebar-close");
      const $industriesToggle = $("#industries-toggle");
      const $servicesToggle = $("#services-toggle");
      const $industriesList = $("#industries-list");
      const $servicesList = $("#services-list");
      const $industriesArrow = $("#industries-arrow");
      const $servicesArrow = $("#services-arrow");
      const $submenuServices = $("#submenu-services");
      const $submenuIndustries = $("#submenu-industries");
      const $servicesSubmenuItems = $("#services-submenu-items");
      const $industriesSubmenuItems = $("#industries-submenu-items");

      // Initialize industries and services in sidebar list
      industriesArray.forEach((item) => {
        $industriesList.append(
          `<a href="/industries/${item}" class="flex text-base font-normal text-black2 capitalize hover:bg-zinc-200 hover:text-blue py-1.5 pl-3 w-full border-l border-black2">${item}</a>`
        );
      });

      servicesArray.forEach((item) => {
        $servicesList.append(
          `<a href="/services/${item}" class="flex text-base font-normal text-black2 capitalize hover:bg-zinc-200 hover:text-blue py-1.5 pl-3 w-full border-l border-black2">${item}</a>`
        );
      });

      // Initialize submenu items for desktop
      servicesArray.forEach((item) => {
        $servicesSubmenuItems.append(
          `<div class="flex text-sm font-normal text-black1 capitalize rounded-2xl px-3 py-2 cursor-default">${item}</div>`
        );
      });

      industriesArray.forEach((item) => {
        $industriesSubmenuItems.append(
          `<div class="flex text-sm font-normal text-black1 capitalize cursor-default rounded-2xl px-3 py-2">${item}</div>`
        );
      });

      // Sidebar toggle handlers
      function openSidebar() {
        $sidebar.removeClass("-translate-x-full");
        $("body").css("overflow", "hidden"); // prevent body scroll when sidebar open
      }
      function closeSidebar() {
        $sidebar.addClass("-translate-x-full");
        $("body").css("overflow", "auto");
      }

      $hamburger.on("click", openSidebar);
      $sidebarClose.on("click", closeSidebar);

      // Toggle industries and services in sidebar
      $industriesToggle.on("click", function () {
        $industriesList.toggle();
        $industriesArrow.toggleClass("-rotate-180");
      });

      $servicesToggle.on("click", function () {
        $servicesList.toggle();
        $servicesArrow.toggleClass("-rotate-180");
      });

      // Desktop nav hover and submenu logic
      $(".nav-item").on("mouseenter", function () {
        const val = $(this).data("value");
        activeItem = val;

        // Show submenu only for Services or Industries
        if (val === "Services") {
          $submenuServices.show();
          $submenuIndustries.hide();
        } else if (val === "Industries") {
          $submenuIndustries.show();
          $submenuServices.hide();
        } else {
          $submenuIndustries.hide();
          $submenuServices.hide();
        }

        // Update nav item underline
        $(".nav-item").removeClass("border-black1");
        $(this).addClass("border-black1");

        // Update header classes for background & border if active item is Services or Industries
        if (val === "Services" || val === "Industries") {
          $header.addClass("bg-white");
          $navItems.addClass("text-black1");
        } else {
          $header.removeClass("bg-white");
      $navItems.addClass("text-black1");
        }
      });

      $submenuIndustries.on("mouseenter", function () {
    const val = $(this).data("value");
    activeItem = val;
    $navItems.addClass("text-black1");
    $("#btn-outline-white").hide();
    $("#btn-gradient").show();
  });

  $submenuServices.on("mouseenter", function () {
    const val = $(this).data("value");
    activeItem = val;
    $navItems.addClass("text-black1");
    $("#btn-outline-white").hide();
    $("#btn-gradient").show();
  });

  $header.on("mouseleave", function () {
    const val = $(this).data("value");
    activeItem = val;
    $navItems.removeClass("text-black1");
  });

      // Hide submenu and reset when mouse leaves submenu container
      $submenuServices.on("mouseleave", function () {
        activeItem = null;
        $submenuServices.hide();
        $(".nav-item").removeClass("border-black1");
        $header.removeClass("bg-white scrolled border-zinc-200");
        $navItems.removeClass("text-black1");
    $("#btn-outline-white").show();
    $("#btn-gradient").hide();
      });
      $submenuIndustries.on("mouseleave", function () {
        activeItem = null;
        $submenuIndustries.hide();
        $(".nav-item").removeClass("border-black1");
        $header.removeClass("bg-white scrolled border-zinc-200");
        $navItems.removeClass("text-black1");
    $("#btn-outline-white").show();
    $("#btn-gradient").hide();

      });

      // Page navigation on click
      $(".nav-item").on("click", function () {
        const val = $(this).data("value");
        if (val === "About") {
          window.location.href = "stryatym.ai/about";
        } else if (val === "Portfolio") {
          window.location.href = "/our-portfolio";
        } else if (val === "contact us") {
          window.location.href = "/contact-us";
        }
        // No action for Blogs as per original code
      });

      // Scroll event to add/remove classes
      $(window).on("scroll", function () {
        if ($(window).scrollTop() > 700) {
          if (!isScrolled) {
            isScrolled = true;
            $header.addClass("scrolled");
            $navItems.addClass("scrolled");
          }
        } else {
          if (isScrolled) {
            isScrolled = false;
            $header.removeClass("scrolled");
            $navItems.removeClass("scrolled");
          }
        }
      });

      // Get In Touch button show/hide logic similar to React code
      function updateGetInTouchButtons() {
        if (isScrolled) {
          $("#btn-outline-white").hide();
          $("#btn-gradient").show();
        } else if (activeItem) {
          $("#btn-outline-white").hide();
          $("#btn-gradient").show();
        } else {
          $("#btn-outline-white").show();
          $("#btn-gradient").hide();
        }
      }

      // Monitor changes for Get In Touch buttons
      $(document).on("mouseenter", ".nav-item", function () {
        updateGetInTouchButtons();
      });

      $(document).on("mouseleave", "#nav-items", function () {
        activeItem = null;
        updateGetInTouchButtons();
      });

      $(window).on("scroll", function () {
        updateGetInTouchButtons();
      });

      // Initialize button visibility on load
      updateGetInTouchButtons();
    });
  </script>

    <!-- HEADER -->
    <div
      id="header"
      class="fixed top-0 left-0 w-full header-wrapper border-b border-[#ffffff2c] pt-5 z-50 header-scrolled"
    >
      <div class="container flex items-center justify-between relative">
        <!-- Logo -->
        <a href="/">
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/intellivon_logo_gradient.png"
            class="w-40 h-14 object-cover object-center rounded-md transition-all duration-300"
            alt="Logo"
          />
        </a>

        <!-- Navigation Menu (desktop) -->
        <div
          id="nav-items"
          class="hidden lg:flex items-center group mt-4 gap-2 peer nav-items"
        >
          <h6
            class="nav-item relative text-sm font-normal pb-4 px-2 border-b-2 border-transparent cursor-pointer capitalize hover:border-black1"
            data-value="Industries"
          >
            Industries
          </h6>
          <h6
            class="nav-item relative text-sm font-normal pb-4 px-2 border-b-2 border-transparent cursor-pointer capitalize hover:border-black1"
            data-value="Services"
          >
            Services
          </h6>
          <h6
            class="nav-item relative text-sm font-normal pb-4 px-2 border-b-2 border-transparent cursor-pointer capitalize hover:border-black1"
            data-value="About"
          >
            About
          </h6>
          <h6
            class="nav-item relative text-sm font-normal pb-4 px-2 border-b-2 border-transparent cursor-pointer capitalize hover:border-black1"
            data-value="Portfolio"
          >
            Portfolio
          </h6>
          <h6
            class="nav-item relative text-sm font-normal pb-4 px-2 border-b-2 border-transparent cursor-pointer capitalize hover:border-black1"
            data-value="blogs"
          >
            Blogs
          </h6>
          <h6
            class="nav-item relative text-sm font-normal pb-4 px-2 border-b-2 border-transparent cursor-pointer capitalize hover:border-black1"
            data-value="contact us"
          >
            Contact Us
          </h6>
        </div>

        <!-- Get In Touch Button (two versions for hover) -->
        <div
          id="btn-outline-white"
          class="peer-hover:hidden hidden lg:flex rounded-xl w-fit mb-3 transition-all duration-300"
        >
          <a
            href=""
            class="text-sm text-white border-2 border-white px-3 py-2.5  hover:text-white hover:bg-gradient-to-r hover:from-red-500 hover:to-purple-600 transition-all duration-300 ease-linear  rounded-xl w-fit"
          >
            Get In Touch
          </a>
        </div>
        <div
          id="btn-gradient"
          class="peer-hover:flex hidden lg:hidden px-3 py-1.5 rounded-xl w-fit text-gradient mb-3 transition-all duration-300 gradient-border"
        >
          <a href="" class="text-sm text-gradient rounded-xl w-fit">
            Get In Touch
          </a>
        </div>

        <!-- Hamburger Icon (mobile) -->
        <div id="hamburger" class="flex lg:hidden mb-1 cursor-pointer">
          <svg
            width="48"
            height="48"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="Header_hambergerIcon__3iwa1 Header_transparentBackground_logoColor__mUj_O"
          >
            <g id="Group 394">
              <g id="menu">
                <mask
                  id="mask0"
                  maskUnits="userSpaceOnUse"
                  x="12"
                  y="12"
                  width="24"
                  height="24"
                  style="mask-type: alpha"
                >
                  <rect
                    x="12"
                    y="12"
                    width="24"
                    height="24"
                    fill="#D9D9D9"
                  ></rect>
                </mask>
                <g mask="url(#mask0)">
                  <path
                    id="menu_2"
                    d="M16 29.6347C15.7875 29.6347 15.6094 29.5628 15.4656 29.419C15.3219 29.2751 15.25 29.0969 15.25 28.8844C15.25 28.6718 15.3219 28.4937 15.4656 28.3501C15.6094 28.2065 15.7875 28.1347 16 28.1347H32C32.2125 28.1347 32.3906 28.2066 32.5344 28.3504C32.6781 28.4942 32.75 28.6724 32.75 28.885C32.75 29.0976 32.6781 29.2757 32.5344 29.4193C32.3906 29.5629 32.2125 29.6347 32 29.6347H16ZM16 24.7501C15.7875 24.7501 15.6094 24.6782 15.4656 24.5344C15.3219 24.3905 15.25 24.2123 15.25 23.9998C15.25 23.7872 15.3219 23.6091 15.4656 23.4655C15.6094 23.3219 15.7875 23.2501 16 23.2501H32C32.2125 23.2501 32.3906 23.322 32.5344 23.4658C32.6781 23.6096 32.75 23.7878 32.75 24.0004C32.75 24.213 32.6781 24.3911 32.5344 24.5347C32.3906 24.6783 32.2125 24.7501 32 24.7501H16ZM16 19.8655C15.7875 19.8655 15.6094 19.7935 15.4656 19.6497C15.3219 19.5059 15.25 19.3277 15.25 19.1151C15.25 18.9025 15.3219 18.7245 15.4656 18.5809C15.6094 18.4373 15.7875 18.3655 16 18.3655H32C32.2125 18.3655 32.3906 18.4374 32.5344 18.5812C32.6781 18.725 32.75 18.9032 32.75 19.1158C32.75 19.3284 32.6781 19.5065 32.5344 19.6501C32.3906 19.7937 32.2125 19.8655 32 19.8655H16Z"
                    fill="currentColor"
                  ></path>
                </g>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>

    <!-- Sidebar (mobile menu) -->
    <div
      id="sidebar"
      class="sidebar bg-powered bg-cover overflow-hidden lg:hidden bg-white header-scrolled z-50 transition-transform transform -translate-x-full fixed top-0 left-0 w-64 h-full shadow-lg"
    >
      <div
        id="sidebar-close"
        class="flex justify-end w-full py-6 cursor-pointer px-4"
      >
        <!-- Cross icon -->
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          class="Header_crossIcon__UW7Nr"
        >
          <g id="Icons- Coditas">
            <path
              id="Vector"
              d="M12.0001 12.8L6.67319 18.1269C6.56166 18.2384 6.42993 18.2958 6.27801 18.299C6.12608 18.3022 5.99115 18.2448 5.87321 18.1269C5.75526 18.009 5.69629 17.8756 5.69629 17.7269C5.69629 17.5782 5.75526 17.4449 5.87321 17.3269L11.2001 12L5.87321 6.67307C5.76166 6.56153 5.70429 6.42981 5.70109 6.27789C5.69789 6.12596 5.75526 5.99103 5.87321 5.87309C5.99115 5.75514 6.12447 5.69617 6.27319 5.69617C6.42191 5.69617 6.55524 5.75514 6.67319 5.87309L12.0001 11.2L17.327 5.87309C17.4386 5.76154 17.5703 5.70417 17.7222 5.70097C17.8741 5.69777 18.0091 5.75514 18.127 5.87309C18.245 5.99103 18.3039 6.12435 18.3039 6.27307C18.3039 6.42178 18.245 6.55512 18.127 6.67307L12.8001 12L18.127 17.3269C18.2386 17.4385 18.2959 17.5702 18.2991 17.7221C18.3023 17.874 18.245 18.009 18.127 18.1269C18.0091 18.2448 17.8758 18.3038 17.727 18.3038C17.5783 18.3038 17.445 18.2448 17.327 18.1269L12.0001 12.8Z"
              fill="#111111"
            ></path>
          </g>
        </svg>
      </div>

      <div class="mt-1 relative px-4">
        <div
          id="industries-toggle"
          class="flex items-center flex-wrap mt-4 gap-3 mb-2 cursor-pointer"
        >
          <p class="text-base font-normal text-black2">Industries</p>
          <div id="industries-arrow" class="transition-transform duration-300">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <mask
                id="mask0_3618_5810"
                maskUnits="userSpaceOnUse"
                x="0"
                y="0"
                width="24"
                height="24"
                style="mask-type: alpha"
              >
                <rect width="24" height="24" fill="#000000"></rect>
              </mask>
              <g mask="url(#mask0_3618_5810)">
                <path
                  d="M5.12636 8.33937C5.27679 8.18895 5.45584 8.11373 5.66352 8.11373C5.8712 8.11373 6.05026 8.18895 6.20068 8.33937L11.8913 14.0299L17.6008 8.32045C17.7434 8.17778 17.9181 8.10645 18.1248 8.10645C18.3315 8.10645 18.5125 8.18409 18.6678 8.33937C18.8182 8.4898 18.8934 8.66885 18.8934 8.87654C18.8934 9.08422 18.8182 9.26327 18.6678 9.4137L12.3702 15.6997C12.2993 15.7705 12.2246 15.8205 12.146 15.8496C12.0674 15.8787 11.9825 15.8933 11.8913 15.8933C11.8 15.8933 11.7151 15.8787 11.6365 15.8496C11.5579 15.8205 11.4832 15.7705 11.4123 15.6997L5.10744 9.39477C4.96477 9.25212 4.89343 9.07937 4.89343 8.87654C4.89343 8.6737 4.97108 8.49464 5.12636 8.33937Z"
                  fill="#111111"
                ></path>
              </g>
            </svg>
          </div>
        </div>

        <div id="industries-list" class="hidden flex flex-col gap-1">
          <!-- Industries links added by JS -->
        </div>

        <div
          id="services-toggle"
          class="flex items-center flex-wrap mt-6 gap-3 mb-2 cursor-pointer"
        >
          <p class="text-base font-normal text-black2">Services</p>
          <div id="services-arrow" class="transition-transform duration-300">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <mask
                id="mask0_3618_5811"
                maskUnits="userSpaceOnUse"
                x="0"
                y="0"
                width="24"
                height="24"
                style="mask-type: alpha"
              >
                <rect width="24" height="24" fill="#000000"></rect>
              </mask>
              <g mask="url(#mask0_3618_5811)">
                <path
                  d="M5.12636 8.33937C5.27679 8.18895 5.45584 8.11373 5.66352 8.11373C5.8712 8.11373 6.05026 8.18895 6.20068 8.33937L11.8913 14.0299L17.6008 8.32045C17.7434 8.17778 17.9181 8.10645 18.1248 8.10645C18.3315 8.10645 18.5125 8.18409 18.6678 8.33937C18.8182 8.4898 18.8934 8.66885 18.8934 8.87654C18.8934 9.08422 18.8182 9.26327 18.6678 9.4137L12.3702 15.6997C12.2993 15.7705 12.2246 15.8205 12.146 15.8496C12.0674 15.8787 11.9825 15.8933 11.8913 15.8933C11.8 15.8933 11.7151 15.8787 11.6365 15.8496C11.5579 15.8205 11.4832 15.7705 11.4123 15.6997L5.10744 9.39477C4.96477 9.25212 4.89343 9.07937 4.89343 8.87654C4.89343 8.6737 4.97108 8.49464 5.12636 8.33937Z"
                  fill="#111111"
                ></path>
              </g>
            </svg>
          </div>
        </div>

        <div id="services-list" class="hidden flex flex-col gap-1">
          <!-- Services links added by JS -->
        </div>

        <a href="/about" class="text-base font-normal text-black2 mt-6 flex">
          About
        </a>
        <a
          href="/our-portfolio"
          class="text-base font-normal text-black2 mt-6 flex"
        >
          Portfolio
        </a>
        <div class="text-base font-normal text-black2 my-6 flex">Blogs</div>
        <a
          href="/contact-us"
          class="text-base font-normal text-black2 my-6 flex"
        >
          Contact Us
        </a>

        <button
          class="relative px-4 py-2 text-white font-medium rounded-lg bg-white overflow-hidden group mt-6 w-full"
          id="sidebar-get-in-touch"
        >
          <span class="relative z-10 text-blue text-nowrap">Get In Touch</span>
          <div
            class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-lg p-[1px]"
          >
            <div class="h-full w-full bg-white rounded-lg"></div>
          </div>
        </button>
      </div>
    </div>

    <!-- Dropdown submenus on desktop -->
    <div
      id="submenu-services"
      class="fixed w-full top-[78px] sub-header h-fit pb-5 pt-10 z-50 hidden"
    >
      <div class="container grid grid-cols-2 gap-5 relative">
        <div>
          <p class="text-xs uppercase font-normal text-grey2">Services</p>
          <div class="grid grid-cols-2 mt-5 -ml-3" id="services-submenu-items">
            <!-- Items added by JS -->
          </div>
        </div>
        <div class="sub-header-shade"></div>
      </div>
    </div>

    <div
      id="submenu-industries"
      class="fixed w-full top-[78px] sub-header h-fit pb-5 pt-10 z-50 hidden"
    >
      <div class="container grid grid-cols-2 gap-5 relative">
        <div>
          <p class="text-xs uppercase font-normal text-grey2">Industries</p>
          <div
            class="grid grid-cols-2 mt-5 -ml-3"
            id="industries-submenu-items"
          >
            <!-- Items added by JS -->
          </div>
        </div>
        <div class="sub-header-shade"></div>
      </div>
    </div>
<!-- Intellivon Menubar End -->

<!-- BANNER LAYOUT -->
<div class="relative w-full bg-cover bg-center md:bg-top banner-image-class-here" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp);">
    <!-- Gradient Overlay -->
    <div class="banners-gradient absolute inset-0"></div>
    
    <div class="container mx-auto flex items-center justify-between pt-48 pb-20 md:pb-28 relative z-10">
      <div class="w-full md:w-1/2">
        <h1 class="text-white font-bold font-urbanist text-[40px] md:text-large leading-tight w-11/12">
          Our Work
        </h1>
        <p class="text-white2 font-normal text-base xl:text-xl mt-5">
          We have built top-quality software products and helped to grow businesses. Read more about how we developed innovative products in various industries, each reflecting our passion for offering exceptional services and crafting the extraordinary.
        </p>
      </div>
    </div>
  </div>
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

<!-- WORK CARDS -->
<section class="bg-white">
  <div class="container py-14 xl:py-28">
    <!-- Section: Tabs and Search Input -->
    <div class="flex flex-wrap items-center justify-between gap-5 mb-12">
      <!-- Left Section - Tabs (col-span-2) -->
      <div class="flex gap-2 flex-wrap justify-start md:justify-start w-full md:w-auto">
        <!-- Map through tabsData and create button dynamically -->
        <button
          id="tab1"
          class="bg-custom-gradient text-white px-4 py-0.5 rounded-full font-inter font-normal text-xs xl:text-sm"
        >
          All
        </button>
        <button
          id="tab2"
          class="border border-secondaryBorder text-grey1 px-4 py-2 rounded-full font-inter font-normal text-xs xl:text-sm"
        >
          Data Science
        </button>
        <button
          id="tab3"
          class="border border-secondaryBorder text-grey1 px-4 py-2 rounded-full font-inter font-normal text-xs xl:text-sm"
        >
         DevOps
        </button>
        <button
          id="tab3"
          class="border border-secondaryBorder text-grey1 px-4 py-2 rounded-full font-inter font-normal text-xs xl:text-sm"
        >
         HealthCare
        </button>
      </div>

      <!-- Right Section - Search Input (col-span-1) -->
      <div class="w-full md:w-1/4">
        <div class="bg-white px-3 border border-primaryBorder rounded-xl flex justify-between items-center">
          <input
            type="text"
            class="outline-none border-none h-10 font-inter font-normal text-sm text-grey3 w-full"
            placeholder="Search"
          />
          <svg
            class="w-5 h-5 text-grey3"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="10.5" cy="10.5" r="7" />
            <line x1="16.5" y1="16.5" x2="22" y2="22" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Work Cards Section -->
    <div class="w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 mt-12">
      <!-- WorkCard Example (repeat for each item) -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>

      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
      <!-- Repeat WorkCard for other data -->
      <div class="bg-white rounded-xl shadow-md">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/work.webp"
          alt="work"
          class="w-full rounded-t-xl h-44 object-cover object-top"
        />
        <div class="p-6">
          <h4 class="text-xl font-bold text-black1 font-urbanist">
            Leading Genetic Testing Lab Experiences 10x Boom through Digital Transformation
          </h4>
          <p class="text-sm font-normal text-grey3 my-2 leading-normal tracking-[0.5px]">
            Unlike traditional stethoscopes, our client's innovative solution
          </p>
          <div class="flex flex-wrap items-center gap-2 mt-6">
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Health IT
            </p>
            <p class="text-xs text-grey3 rounded-full border border-[#e4eaf2] px-3 py-1.5">
              Healthcare Technology
            </p>
          </div>
          <p class="text-sm uppercase font-bold text-blue mt-8">
            <a href="/our-portfolio/1">Know more</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript for Tab Interactivity -->
<script>
  document.querySelectorAll('button').forEach((button) => {
    button.addEventListener('click', () => {
      document.querySelectorAll('button').forEach((btn) => {
        btn.classList.remove('bg-custom-gradient', 'text-white');
        btn.classList.add('border', 'border-secondaryBorder', 'text-grey1');
      });
      button.classList.add('bg-custom-gradient', 'text-white');
      button.classList.remove('border', 'border-secondaryBorder', 'text-grey1');
    });
  });
</script>



<!-- CONTACT FORM -->
<section class="w-full relative py-28">
  <div class="grid lg:grid-cols-12 bg-[#f6f6f6]">
    <!-- Left Section with Image and Text -->
    <div class="col-span-12 xl:col-span-5">
      <div class="relative w-full h-[150px] md:h-[200px] xl:h-[600px]">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/contactform.png"
          alt="Contact Form"
          class="w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-contact-form-gradient flex flex-col justify-center items-start px-10 md:px-5 xl:px-32">
          <h1 class="text-white font-bold font-urbanist text-base md:text-2xl xl:text-5xl mb-4">
            Need help with your Business?
          </h1>
          <p class="text-white font-semibold font-urbanist text-xs md:text-base xl:text-xl">
            Don&apos;t worry, we&apos;ve got your back.
          </p>
        </div>
      </div>
    </div>

    <!-- Right Section with Form -->
    <div class="col-span-12 xl:col-span-7 flex justify-center py-12">
      <form class="flex flex-col gap-12 w-full px-5 xl:px-0 xl:w-3/4">
        <!-- Input Fields -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <!-- Full Name -->
          <div class="flex flex-col gap-1">
            <p class="text-sm font-normal text-black">
              Full Name <span class="text-red-500">*</span>
            </p>
            <input
              type="text"
              placeholder="Enter your name"
              class="px-4 py-3 border border-[#e4eaf2] focus:outline-none bg-white rounded-xl placeholder:text-grey text-[#040c15] font-normal text-base w-full"
            />
          </div>

          <!-- Mobile Number -->
          <div class="flex flex-col gap-1">
            <p class="text-sm font-normal text-black">
              Mobile Number <span class="text-red-500">*</span>
            </p>
            <input
              type="text"
              placeholder="Enter your mobile number"
              class="px-4 py-3 border border-[#e4eaf2] focus:outline-none bg-white rounded-xl placeholder:text-grey text-[#040c15] font-normal text-base w-full"
            />
          </div>

          <!-- Email Address -->
          <div class="flex flex-col gap-1 mt-7">
            <p class="text-sm font-normal text-black">
              Email address <span class="text-red-500">*</span>
            </p>
            <input
              type="email"
              placeholder="Enter your email"
              class="px-4 py-3 border border-[#e4eaf2] focus:outline-none bg-white rounded-xl placeholder:text-grey text-[#040c15] font-normal text-base w-full"
            />
          </div>

          <!-- Designation -->
          <div class="flex flex-col gap-1 mt-7">
            <p class="text-sm font-normal text-black">Designation</p>
            <input
              type="text"
              placeholder="Enter your designation"
              class="px-4 py-3 border border-[#e4eaf2] focus:outline-none bg-white rounded-xl placeholder:text-grey text-[#040c15] font-normal text-base w-full"
            />
          </div>
        </div>

        <!-- Message Field -->
        <div class="w-full flex flex-col gap-1">
          <p class="text-sm font-normal text-black">
            Message <span class="text-red-500">*</span>
          </p>
          <textarea
            rows="4"
            placeholder="Enter your message"
            class="px-4 py-3 border border-[#e4eaf2] focus:outline-none bg-white rounded-xl placeholder:text-grey text-[#040c15] font-normal text-base w-full resize-none"
          ></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
          <button
            type="submit"
            class="py-3 px-5 font-semibold rounded text-[#8c8c8c] bg-[#d1d1d1]"
          >
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>