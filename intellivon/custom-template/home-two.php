  
<?php /* Template Name: Home Two Template */ ?>
<?php get_header(); ?>
<!-- Intellivon Menubar Start -->

<!-- Intellivon Menubar End -->


<!-- Include SWIPER CSS and JS START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Include SWIPER CSS and JS End-->

    
    <section
      id="glow-section"
      class="relative px-10 md:px-20 py-40 h-full w-full bg-gradient-to-br from-[#0b1126] via-[#322368] to-[#0f173b] bg-no-repeat bg-cover bg-center"
      style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-bg.png'); overflow: visible"
    >
      <div
        class="flex flex-col gap-10 lg:gap-5 xl:flex-row items-center xl:justify-between"
      >
        <!-- Left text content -->
        <div class="w-full lg:w-6/12 text-left flex flex-col gap-5">
          <h1
            class="text-white font-bold font-urbanist text-3xl md:text-[60px] leading-[110%] lg:w-11/12 h1"
          >
            Scale Smarter. Automate Faster. Transform with
            <span class="text-gradient-hero">AI Solutions</span>
          </h1>
          <div
            class="text-white2 font-normal text-base md:text-lg mt-3 md:mt-5"
          >
            We empower global enterprises to transform ideas into scalable
            business solutions. With 11+ years of experience in delivering
            innovative AI Solutions, our dedicated team of AI engineers, data
            scientists, and AI consultants unlock real-world business success
          </div>
          <button
            class="flex gap-3 items-center px-4 py-2.5 mt-5 w-fit rounded-full text-white font-semibold bg-gradient-to-r from-[rgba(124,59,175,0.5)] to-[rgba(230,28,66,0.5)] hover:from-[#3b6efb] hover:via-[#9e3efc] hover:to-[#bb33f5] transition-colors duration-300"
          >
            Talk to an AI Specialist
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9999 22.1004C14.546 22.1004 16.9878 21.089 18.7881 19.2886C20.5885 17.4883 21.5999 15.0465 21.5999 12.5004C21.5999 9.95431 20.5885 7.51252 18.7881 5.71217C16.9878 3.91182 14.546 2.90039 11.9999 2.90039C9.45382 2.90039 7.01203 3.91182 5.21168 5.71217C3.41133 7.51252 2.3999 9.95431 2.3999 12.5004C2.3999 15.0465 3.41133 17.4883 5.21168 19.2886C7.01203 21.089 9.45382 22.1004 11.9999 22.1004ZM8.0999 11.6004C7.86121 11.6004 7.63229 11.6952 7.46351 11.864C7.29472 12.0328 7.1999 12.2617 7.1999 12.5004C7.1999 12.7391 7.29472 12.968 7.46351 13.1368C7.63229 13.3056 7.86121 13.4004 8.0999 13.4004H13.6079L11.0879 15.7404C10.9129 15.9027 10.8095 16.1279 10.8005 16.3665C10.7915 16.605 10.8776 16.8373 11.0399 17.0124C11.2022 17.1874 11.4274 17.2908 11.666 17.2998C11.9045 17.3088 12.1369 17.2227 12.3119 17.0604L16.5119 13.1604C16.6028 13.0761 16.6753 12.974 16.7249 12.8605C16.7744 12.7469 16.8 12.6243 16.8 12.5004C16.8 12.3765 16.7744 12.2539 16.7249 12.1403C16.6753 12.0267 16.6028 11.9246 16.5119 11.8404L12.3119 7.94039C12.2252 7.86002 12.1236 7.79751 12.0127 7.75643C11.9019 7.71534 11.7841 7.69649 11.666 7.70095C11.4274 7.70995 11.2022 7.81335 11.0399 7.98839C10.8776 8.16343 10.7915 8.39579 10.8005 8.63433C10.8095 8.87288 10.9129 9.09808 11.0879 9.26039L13.6079 11.6004H8.0999Z" fill="white"/>
            </svg>
          </button>
        </div>

        <!-- Right side box -->
        <div
          class="z-10 w-full lg:w-1/2 rounded-2xl bg-[rgba(15,23,43,0.6)] backdrop-blur-xl border-2 border-[#313a4b] p-6 md:p-8 flex flex-col h-full"
        >
          <div class="flex-grow">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
              <div></div>
              <div class="flex space-x-2">
                <span class="w-4 h-4 rounded-full bg-red-500"></span>
                <span class="w-4 h-4 rounded-full bg-yellow-400"></span>
                <span class="w-4 h-4 rounded-full bg-green-500"></span>
              </div>
            </div>

            <!-- Tabs -->
            <div
              class="flex flex-col xl:flex-row gap-4 text-white text-lg font-mediumbold mb-6"
            >
              <!-- AI Agent -->
              <div
                class="rounded-xl xl:w-1/3 p-1 transform transition-transform duration-300 hover:-translate-y-2 hover:border hover:border-[#487DC3] tab-wrapper"
              >
                <button
                  id="tab-agent"
                  class="flex-1 flex flex-col w-full items-center justify-center gap-5 rounded-lg px-6 py-8 cursor-pointer select-none"
                  style="background: rgba(72, 125, 195, 0.4)"
                  data-tab="agent"
                >
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ai-agent.png" height="42" width="42" />
                  AI Agent
                </button>
              </div>
              <!-- AI Integration -->
              <div
                class="rounded-xl xl:w-1/3 p-1 transform transition-transform duration-300 hover:-translate-y-2 hover:border hover:border-[#a370da] tab-wrapper"
              >
                <button
                  id="tab-integration"
                  class="flex-1 flex flex-col w-full h-full items-center justify-center gap-5 rounded-lg px-6 py-4 cursor-pointer select-none"
                  style="background: rgba(163, 112, 218, 0.4)"
                  data-tab="integration"
                >
                  <img
                    src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ai-integration.png"
                    height="42"
                    width="42"
                  />
                  AI Integration
                </button>
              </div>
              <!-- Consultation -->
              <div
                class="rounded-xl xl:w-1/3 p-1 transform transition-transform duration-300 hover:-translate-y-2 hover:border hover:border-[#ea6eb0] tab-wrapper"
              >
                <button
                  id="tab-consultation"
                  class="flex-1 flex flex-col w-full h-full items-center justify-center gap-5 rounded-lg px-6 py-4 cursor-pointer select-none"
                  style="background: rgba(234, 110, 177, 0.4)"
                  data-tab="consultation"
                >
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chat.png" height="42" width="42" />
                  AI Consultation
                </button>
              </div>
            </div>

            <!-- Content Panels -->
            <!-- AI Agent -->
            <div
              id="content-agent"
              class="tab-content p-5 rounded-xl opacity-100"
            >
              <p
                class="text-[#397ce9] font-medium text-lg flex items-center gap-3"
              >
                <span
                  class="w-[10px] h-[10px] rounded-full bg-[#397ce9] inline-block"
                ></span>
                AI Agent
              </p>
              <p
                class="text-white text-md lg:text-lg font-normal leading-relaxed"
              >
                Custom AI agents that process and analyze data with exceptional
                accuracy.
              </p>

              <!-- Progress Bars -->
              <div class="space-y-5 mt-4">
                <div>
                  <div
                    class="flex justify-between mb-1 text-gray-400 font-medium text-sm"
                  >
                    <span>Data Processing</span><span>98%</span>
                  </div>
                  <div class="w-full bg-gray-800 rounded-full h-2">
                    <div
                      class="h-2 rounded-full bg-gradient-to-r from-[#7C3BAF] via-[#7C3BAF] to-[#E61C42]"
                      style="width: 98%"
                    ></div>
                  </div>
                </div>
                <div>
                  <div
                    class="flex justify-between mb-1 text-gray-400 font-medium text-sm"
                  >
                    <span>Accuracy</span><span>99.8%</span>
                  </div>
                  <div class="w-full bg-gray-800 rounded-full h-2">
                    <div
                      class="h-2 rounded-full bg-gradient-to-r from-[#7C3BAF] via-[#7C3BAF] to-[#E61C42]"
                      style="width: 99.8%"
                    ></div>
                  </div>
                </div>
                <div>
                  <div
                    class="flex justify-between mb-1 text-gray-400 font-medium text-sm"
                  >
                    <span>Response Time</span><span>0.3s</span>
                  </div>
                  <div class="w-full bg-gray-800 rounded-full h-2">
                    <div
                      class="h-2 rounded-full bg-gradient-to-r from-[#7C3BAF] via-[#7C3BAF] to-[#E61C42]"
                      style="width: 95%"
                    ></div>
                  </div>
                </div>
              </div>

              <!-- Stats Boxes -->
              <div class="mt-6 flex flex-col md:flex-row gap-6">
                <div
                  class="flex-1 bg-[rgba(28,36,77,0.6)] rounded-lg p-4 text-center border border-[rgba(255,255,255,0.1)]"
                >
                  <p class="text-gray-400">Data Processing</p>
                  <p class="text-2xl font-semibold text-[#397ce9]">1,245</p>
                </div>
                <div
                  class="flex-1 bg-[rgba(28,36,77,0.6)] rounded-lg p-4 text-center border border-[rgba(255,255,255,0.1)]"
                >
                  <p class="text-gray-400">Active Agents</p>
                  <p class="text-2xl font-semibold text-[#397ce9]">24</p>
                </div>
              </div>
            </div>

            <!-- AI Integration -->
            <div
              id="content-integration"
              class="tab-content hidden p-5 rounded-xl opacity-0"
            >
              <p
                class="text-[#a370da] font-medium text-lg flex items-center gap-3"
              >
                <span
                  class="w-[10px] h-[10px] rounded-full bg-[#a370da] inline-block"
                ></span>
                AI Integration
              </p>
              <p
                class="text-white text-md lg:text-lg font-normal leading-relaxed"
              >
                Seamless integration of AI capabilities into your existing
                systems.
              </p>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                <div
                  class="bg-[rgba(28,36,77,0.6)] p-4 rounded-lg border border-white/10 text-white"
                >
                  <p class="font-medium">API Integration</p>
                  <p class="text-sm text-gray-400">REST & GraphQL</p>
                </div>
                <div
                  class="bg-[rgba(28,36,77,0.6)] p-4 rounded-lg border border-white/10 text-white"
                >
                  <p class="font-medium">SDK Support</p>
                  <p class="text-sm text-gray-400">14 Languages</p>
                </div>
                <div
                  class="bg-[rgba(28,36,77,0.6)] p-4 rounded-lg border border-white/10 text-white"
                >
                  <p class="font-medium">Workflow Automation</p>
                  <p class="text-sm text-gray-400">No-code options</p>
                </div>
                <div
                  class="bg-[rgba(28,36,77,0.6)] p-4 rounded-lg border border-white/10 text-white"
                >
                  <p class="font-medium">Enterprise Security</p>
                  <p class="text-sm text-gray-400">SOC2 Compliant</p>
                </div>
              </div>
              <div class="mt-6">
                <div class="flex justify-between text-gray-400 mb-1">
                  <span>Integration Success Rate</span><span>94%</span>
                </div>
                <div class="w-full bg-gray-800 rounded-full h-2">
                  <div
                    class="h-2 rounded-full bg-gradient-to-r from-pink-500 to-red-500"
                    style="width: 94%"
                  ></div>
                </div>
              </div>
            </div>

            <!-- AI Consultation -->
            <div
              id="content-consultation"
              class="tab-content hidden flex flex-col gap-5 p-5 rounded-xl opacity-0"
            >
              <p
                class="text-[#ea6eb0] font-medium text-lg flex items-center gap-3"
              >
                <span
                  class="w-[10px] h-[10px] rounded-full bg-[#ea6eb0] inline-block"
                ></span>
                AI Consultation
              </p>

              <!-- Assistant message -->
              <div class="flex justify-start">
                <div
                  class="text-white text-sm p-4 rounded-lg border border-white/10 w-5/6"
                  style="background: rgba(0, 0, 0, 0.4)"
                >
                  <p
                    class="font-semibold"
                    style="color: rgba(255, 255, 255, 0.6)"
                  >
                    Intellivon AI Assistant
                  </p>
                  <p class="mt-1">
                    How can I help with your AI strategy today?
                  </p>
                </div>
              </div>

              <!-- Client message -->
              <div class="flex justify-end">
                <div
                  class="bg-[#1f2644] text-white text-sm p-4 rounded-lg border border-white/10 w-5/6"
                  style="background: rgba(0, 0, 0, 0.4)"
                >
                  <p class="text-[#FF395E] font-semibold">Client</p>
                  <p class="mt-1">
                    We need to improve our customer service with AI.
                  </p>
                </div>
              </div>

              <!-- Assistant response -->
              <div class="flex justify-start">
                <div
                  class="bg-[#1f2644] text-white text-sm p-4 rounded-lg border border-white/10 w-5/6"
                  style="background: rgba(0, 0, 0, 0.4)"
                >
                  <p
                    class="font-semibold"
                    style="color: rgba(255, 255, 255, 0.6)"
                  >
                    Intellivon AI Assistant
                  </p>
                  <ul class="list-disc list-inside mt-1 text-gray-300">
                    <li>Handle 80% of routine customer inquiries</li>
                    <li>Reduce response time by 65%</li>
                    <li>Integrate with your existing CRM</li>
                  </ul>
                </div>
              </div>

              <!-- Stats -->
              <div class="flex flex-col md:flex-row gap-4 mt-6">
                <div
                  class="flex-1 text-center bg-[rgba(28,36,77,0.6)] p-4 rounded-lg border border-white/10"
                >
                  <p class="text-gray-400">Client Satisfaction</p>
                  <p class="text-2xl text-[#ea6eb0] font-bold">96%</p>
                </div>
                <div
                  class="flex-1 text-center bg-[rgba(28,36,77,0.6)] p-4 rounded-lg border border-white/10"
                >
                  <p class="text-gray-400">Avg. Response</p>
                  <p class="text-2xl text-[#ea6eb0] font-bold">0.8s</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        id="cursor-glow"
        class="pointer-events-none absolute opacity-0 transition-opacity duration-300"
        style="
          width: 250px;
          height: 250px;
          background: rgba(79, 125, 252, 0.15);
          border-radius: 50%;
          filter: blur(30px);
          transform: translate(-50%, -50%);
          z-index: 0;
        "
      ></div>
    </section>

    <!-- JS for cursor -->
    <script>
      const section = document.getElementById("glow-section");
      const glow = document.getElementById("cursor-glow");
      let timeoutId;

      section.addEventListener("mousemove", (e) => {
        const rect = section.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        glow.style.left = x + "px";
        glow.style.top = y + "px";
        glow.style.opacity = "1";

        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
          glow.style.opacity = "0";
        }, 500);
      });

      section.addEventListener("mouseleave", () => {
        glow.style.opacity = "0";
      });
    </script>

    <!-- JS for tabs -->
    <script>
      const tabs = {
        agent: document.getElementById("tab-agent"),
        integration: document.getElementById("tab-integration"),
        consultation: document.getElementById("tab-consultation"),
      };

      const contents = {
        agent: document.getElementById("content-agent"),
        integration: document.getElementById("content-integration"),
        consultation: document.getElementById("content-consultation"),
      };

      const tabWrappers = {
        agent: tabs.agent.closest(".tab-wrapper"),
        integration: tabs.integration.closest(".tab-wrapper"),
        consultation: tabs.consultation.closest(".tab-wrapper"),
      };

      const borderClasses = {
        agent: "border border-[#487DC3]",
        integration: "border border-[#a370da]",
        consultation: "border border-[#ea6eb0]",
      };

      let activeTab = "agent";

      function activateTab(key) {
        if (key === activeTab) return;

        // Fade out old content
        const oldContent = contents[activeTab];
        oldContent.classList.remove("opacity-100");
        oldContent.classList.add("opacity-0");

        setTimeout(() => {
          oldContent.classList.add("hidden");

          // Fade in new content
          const newContent = contents[key];
          newContent.classList.remove("hidden");
          newContent.classList.remove("opacity-0");
          newContent.classList.add("opacity-100");

          activeTab = key;

          // Update tab borders
          Object.keys(tabWrappers).forEach((k) =>
            tabWrappers[k].classList.remove(...borderClasses[k].split(" "))
          );
          tabWrappers[key].classList.add(...borderClasses[key].split(" "));
        }, 300); // Match fade duration
      }

      Object.keys(tabs).forEach((key) => {
        tabs[key].addEventListener("click", () => activateTab(key));
      });

      // Set default
      activateTab("agent");
    </script>

    <!-- OUR CLIENTS -->
    <section class="pt-16 pb-14 lg:pt-28 lg:pb-24 bg-[#f4f4fa]">
      <div class="container flex flex-wrap items-center px-5 lg:px-10">
        <!-- Left column: Heading -->
        <div class="w-full lg:w-7/12">
          <div class="flex flex-col gap-5 items-start">
            <div class="text-md font-semibold text-[#656565]">OUR CLIENTS</div>
            <div
              class="text-4xl items-center font-bold text-black1 font-urbanist leading-snug tracking-[0.5px] gap-1"
            >
              The
              <span class="text-gradient">AI Partner </span>
              Behind Leading Enterprises
            </div>
            <p
              class="mb-4 md:mb-0 text-base font-light text-grey1 mt-2 w-full tracking-[0.25px] pr-5 mb-12"
            >
              At Intellivon, we ensure profits meet performance with
              enterprise-ready AI solutions. Our seasoned AI engineers and data
              scientists fortify systems that scale with your business goals,
              delivering a measurable impact from day one.
            </p>
            <!-- <p
              class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-6 w-full tracking-[0.25px] pr-5 mb-12"
            >
              Trusted by: RevCore | QuantEdge | FitNation | NeuroPulse
            </p> -->
          </div>
        </div>

        <!-- Right column: Image -->
        <div class="w-full lg:w-5/12">
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/our-clients.png"
            alt="Our Clients"
            width="620"
            height="550"
            class="w-full lg:h-full lg:mb-12 xl:mb-0 object-cover object-center rounded-md transition-all duration-300"
          />
        </div>
      </div>

      <!-- Marquee logos -->
      <div
        class="mt-12 lg:mt-24 w-full overflow-hidden whitespace-nowrap relative bg-[#10182C] py-5"
      >
        <div
          class="marquee flex items-center gap-x-16 w-max max-w-none animate-marquee"
        >
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gold-gym.webp"
            alt="Gold Gym"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sonangol.webp"
            alt="Sonangol"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/buzztime.webp"
            alt="Buzztime"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hyundai.png"
            alt="Hyundai"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rusam.webp"
            alt="Rusam"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />

          <!-- repeat logos for continuous scroll -->
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gold-gym.webp"
            alt="Gold Gym"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sonangol.webp"
            alt="Sonangol"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/buzztime.webp"
            alt="Buzztime"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hyundai.png"
            alt="Hyundai"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rusam.webp"
            alt="Rusam"
            width="80"
            height="80"
            class="w-20 grayscale hover:grayscale-0"
          />
        </div>
      </div>

      <style>
        /* Marquee animation */
        @keyframes marquee {
          0% {
            transform: translateX(0);
          }
          100% {
            transform: translateX(-50%);
          }
        }
        .animate-marquee {
          animation: marquee 20s linear infinite;
        }
      </style>
    </section>

    <!-- OUR SERVICES -->
    <div class="bg-services-gradient relative px-5 lg:px-10">
      <div
        class="container flex flex-col lg:flex-row items-center justify-between lg:py-28 py-16"
      >
        <!-- Left content -->
        <div class="w-full lg:w-5/12 pr-5">
          <div class="w-full flex flex-col gap-5 items-start">
            <div class="text-md font-semibold text-[#656565]">OUR SERVICES</div>
            <h2
              class="text-4xl font-bold text-black1 font-urbanist leading-snug tracking-[0.5px] w-full"
            >
              <span class="text-gradient">AI Services</span> That Scale Your
              Business
            </h2>
            <p
              class="capitalize mb-4 md:mb-0 text-base font-light text-grey1 mt-2 w-full tracking-[0.25px] pr-5 mb-12"
            >
              Intellivon brings together a dedicated team of 200+ AI engineers and
              domain experts with refined expertise from renowned institutions,
              all focused on designing practical, business-ready AI solutions
              and services that actually scale.
            </p>
          </div>
        </div>

        <!-- Right content: fixed grid inside horizontal scroll track -->
        <div class="w-full lg:w-7/12 overflow-hidden relative">
          <div class="scroll-wrapper">
            <div class="scroll-track">
              <!-- Full 2x3 grid (duplicated for loop in JS) -->
              <div
                class="grid grid-cols-6 grid-rows-2 gap-5 min-w-max grid-content"
              >
                <!-- Repeat cards -->
                <!-- 01 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    01
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    Generative AI Development
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Intellivon delivers enterprise-grade generative AI solutions to automate, enhance, and streamline workflows.

                  </p>
                </div>
                <!-- 03 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    03
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    LLM Development
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Our team fine-tunes LLMs to your data, delivering context-aware AI for smarter automation and insights.

                  </p>
                </div>
                <!-- 05 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    05
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    ChatGPT Developers
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Intellivon creates customized ChatGPT-based AI, enhancing communication, automating tasks, and delivering scalable experiences.
                  </p>
                </div>
                <!-- 07 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    07
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    AI Proof of Concept (POC) Development
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Intellivon develops AI POCs to validate feasibility, impact, and performance with minimal risk.
                  </p>
                </div>
                <!-- 09 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    09
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    Computer Vision Development
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Our AI solutions use computer vision for quality control, security, and automation.
                  </p>
                </div>
                <!-- 11 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    11
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    MLOps Consulting Services
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Our MLOps experts build automated pipelines for continuous AI model training and deployment.
                  </p>
                </div>

                <!-- 02 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    02
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    AI Agent Development
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Intellivon develops intelligent AI agents that autonomously automate customer service, sales, and operations.
                  </p>
                </div>
                <!-- 04 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    04
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    ML Model Engineering And Development
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Intellivon engineers optimized machine learning models, delivering scalable AI solutions from data to deployment.
                  </p>
                </div>
                <!-- 06 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    06
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    AI Chatbot Development
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    We create AI chatbots that automate interactions, improve satisfaction, and reduce costs.
                  </p>
                </div>
                  <!-- 08 -->
                  <div class="services-card">
                    <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                      08
                    </h3>
                    <h3 class="text-xl font-bold text-black2 font-urbanist">
                      AI Automation 
                      Services
                    </h3>
                    <p class="text-xs/6 font-normal text-grey3">
                      Our team delivers AI-powered automation that streamlines tasks, accelerates processes, and boosts productivity.
                    </p>
                  </div>
                <!-- 10 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    10
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    Data Engineering Services
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    Intellivon designs data pipelines and infrastructure for AI, ensuring clean, structured data.
                  </p>
                </div>
              
                <!-- 12 -->
                <div class="services-card">
                  <h3 class="text-2xl font-normal font-urbanist text-gradient2">
                    12
                  </h3>
                  <h3 class="text-xl font-bold text-black2 font-urbanist">
                    Cloud Services for AI & 
                    ML Infrastructure
                  </h3>
                  <p class="text-xs/6 font-normal text-grey3">
                    We design secure, scalable cloud environments tailored for AI and ML workloads.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Background Decoration -->
      <div class="absolute top-0 right-0">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="512"
          height="512"
          viewBox="0 0 512 512"
          fill="none"
        >
          <g filter="url(#filter0_f_2_313)">
            <circle cx="422" cy="102" r="112" fill="#D200D2" />
          </g>
          <defs>
            <filter
              id="filter0_f_2_313"
              x="0.200012"
              y="-319.8"
              width="843.6"
              height="843.6"
              filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB"
            >
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend
                mode="normal"
                in="SourceGraphic"
                in2="BackgroundImageFix"
                result="shape"
              />
              <feGaussianBlur
                stdDeviation="154.9"
                result="effect1_foregroundBlur_2_313"
              />
            </filter>
          </defs>
        </svg>
      </div>
    </div>

    <!-- Our Services : JS to duplicate grid for seamless loop -->
    <script>
      window.addEventListener("DOMContentLoaded", () => {
        const track = document.querySelector(".scroll-track");
        const grid = track.querySelector(".grid-content");
        const clone = grid.cloneNode(true);
        track.appendChild(clone);
      });
    </script>

    <!-- WHY CHOOSE US -->
    <section class="py-24 w-full bg-cover px-5 lg:px-10 relative">
      <div class="container">
        <div class="flex items-end justify-between mt-6 mb-3 w-full">
          <div class="w-full">
            <div class="w-full flex flex-col gap-5 items-start">
              <div class="text-md font-semibold text-[#656565]">
                WHY CHOOSE US
              </div>

              <div class="flex flex-col gap-5 lg:gap-0 lg:flex-row justify-between">
                <div
                  class="w-full lg:w-7/12 text-4xl flex-wrap gap-3 flex items-center font-bold text-black1 font-urbanist leading-snug tracking-[0.5px]"
                >
                  Why Our Enterprise-Grade
                  <div class="text-gradient">AI Solutions</div>
                  Stand Apart
                </div>

                <div>
                  <button
                    type="button"
                    class="relative px-4 py-3 text-white font-medium rounded-full bg-white overflow-hidden group"
                  >
                    <span class="relative z-10 text-blue text-nowrap flex gap-2"
                      >Know More About Our Capabilities
                      <img src=".<?php echo get_stylesheet_directory_uri() ?>/assets/images/know-more-capabilities-arrow.svg"
                    /></span>
                    <div
                      class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-full p-[1px]"
                    >
                      <div class="h-full w-full bg-white rounded-full"></div>
                    </div>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-16 grid grid-cols-1 lg:grid-cols-3 gap-5">
          <!-- Card 1 -->
          <div class="choose-card-wrapper w-full h-[354px] md:w-[409px] m-auto lg:m-0 z-10">
            <div class="choose-card shadow-[0_24px_34px_0_rgba(0,0,0,.078)]">
          
              <!-- Front Side -->
              <div class="choose-card-front bg-white p-6 flex flex-col gap-8 items-center justify-center">
                <!-- SVG Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                  <g clip-path="url(#clip0_59_5)">
                    <path d="M33.5255 37.518H26.9184C26.3845 37.518 25.9507 37.0842 25.9507 36.5502V31.4538C25.9507 30.9199 26.3845 30.4861 26.9184 30.4861H33.5255C34.06 30.4861 34.4933 30.9199 34.4933 31.4538V36.5502C34.4933 37.0847 34.06 37.518 33.5255 37.518ZM27.8862 35.5824H32.5578V32.4216H27.8862V35.5824Z" fill="url(#paint0_linear_59_5)"/>
                    <path d="M26.7286 34.97H9.78612C9.25168 34.97 8.81836 34.5366 8.81836 34.0022C8.81836 33.4682 9.25168 33.0344 9.78612 33.0344H26.7286C27.2626 33.0344 27.6964 33.4682 27.6964 34.0022C27.6964 34.5366 27.2626 34.97 26.7286 34.97Z" fill="url(#paint1_linear_59_5)"/>
                    <path d="M50.6874 34.97H33.7449C33.2104 34.97 32.7771 34.5366 32.7771 34.0022C32.7771 33.4682 33.2104 33.0344 33.7449 33.0344H50.6874C51.2218 33.0344 51.6551 33.4682 51.6551 34.0022C51.6551 34.5366 51.2218 34.97 50.6874 34.97Z" fill="url(#paint2_linear_59_5)"/>
                    <path d="M9.78612 40.9807C9.25168 40.9807 8.81836 40.5469 8.81836 40.0129V34.0022C8.81836 33.4682 9.25168 33.0344 9.78612 33.0344C10.3201 33.0344 10.7539 33.4682 10.7539 34.0022V40.0134C10.7539 40.5474 10.3201 40.9807 9.78612 40.9807Z" fill="url(#paint3_linear_59_5)"/>
                    <path d="M50.8584 40.9807C50.3239 40.9807 49.8906 40.5469 49.8906 40.0129V34.0022C49.8906 33.4682 50.3239 33.0344 50.8584 33.0344C51.3924 33.0344 51.8262 33.4682 51.8262 34.0022V40.0134C51.8262 40.5474 51.3924 40.9807 50.8584 40.9807Z" fill="url(#paint4_linear_59_5)"/>
                    <path d="M30.2222 32.4217C29.6882 32.4217 29.2544 31.9883 29.2544 31.4539V27.8928C29.2544 27.3588 29.6882 26.925 30.2222 26.925C30.7566 26.925 31.1899 27.3588 31.1899 27.8928V31.4539C31.1899 31.9883 30.7566 32.4217 30.2222 32.4217Z" fill="url(#paint5_linear_59_5)"/>
                    <path d="M41.1274 10.3497C41.0287 10.3497 40.9299 10.3351 40.834 10.3039L37.2417 9.15938C36.7323 8.99729 36.4512 8.45293 36.6132 7.94353C36.7753 7.43413 37.3202 7.15296 37.8296 7.31552L40.1597 8.05788V5.58129C40.1597 5.04685 40.5935 4.61353 41.1274 4.61353C41.6619 4.61353 42.0952 5.04685 42.0952 5.58129V9.38147C42.0952 9.69099 41.9478 9.98065 41.6983 10.1626C41.5305 10.2859 41.3302 10.3497 41.1274 10.3497Z" fill="url(#paint6_linear_59_5)"/>
                    <path d="M29.4849 25.2857C22.5177 25.2857 16.8496 19.6143 16.8496 12.6429C16.8496 5.67145 22.5177 0 29.4849 0C35.0595 0 39.9111 3.57761 41.5569 8.90221C41.7148 9.41303 41.4289 9.95504 40.9185 10.1129C40.4063 10.2702 39.8657 9.98386 39.7083 9.47399C38.3143 4.965 34.2056 1.93553 29.4849 1.93553C23.5852 1.93553 18.7851 6.73892 18.7851 12.6429C18.7851 18.5468 23.5847 23.3502 29.4849 23.3502C35.3846 23.3502 40.1837 18.5468 40.1837 12.6429C40.1837 12.1089 40.6175 11.6751 41.1515 11.6751C41.6859 11.6751 42.1192 12.1089 42.1192 12.6429C42.1192 19.6143 36.4516 25.2857 29.4849 25.2857Z" fill="url(#paint7_linear_59_5)"/>
                    <path d="M45.4049 25.2856H14.6741C14.1401 25.2856 13.7063 24.8523 13.7063 24.3179C13.7063 23.7839 14.1401 23.3501 14.6741 23.3501H45.4049C45.9393 23.3501 46.3726 23.7839 46.3726 24.3179C46.3726 24.8523 45.9393 25.2856 45.4049 25.2856Z" fill="url(#paint8_linear_59_5)"/>
                    <path d="M41.1274 10.3497C41.0287 10.3497 40.9299 10.3351 40.834 10.3039L37.2417 9.15938C36.7323 8.99729 36.4512 8.45293 36.6132 7.94353C36.7753 7.43413 37.3202 7.15296 37.8296 7.31552L40.1597 8.05788V5.58129C40.1597 5.04685 40.5935 4.61353 41.1274 4.61353C41.6619 4.61353 42.0952 5.04685 42.0952 5.58129V9.38147C42.0952 9.69099 41.9478 9.98065 41.6983 10.1626C41.5305 10.2859 41.3302 10.3497 41.1274 10.3497Z" fill="url(#paint9_linear_59_5)"/>
                    <path d="M42.8367 27.2028C42.5159 27.2028 42.2021 27.0436 42.0178 26.7525C41.7319 26.3007 41.8666 25.7034 42.3179 25.4175L44.3862 24.1081L42.4903 22.5152C42.0806 22.1712 42.0282 21.5607 42.3717 21.1519C42.7153 20.7417 43.3258 20.6893 43.735 21.0333L46.644 23.4773C46.8798 23.6757 47.0074 23.9753 46.987 24.2834C46.9662 24.5915 46.7994 24.8713 46.5391 25.0362L43.3527 27.053C43.193 27.1546 43.0139 27.2028 42.8367 27.2028Z" fill="url(#paint10_linear_59_5)"/>
                    <path d="M4.95059 59.4754C4.74882 59.4754 4.54752 59.4121 4.37787 59.2878C4.08159 59.0704 3.93416 58.7037 3.99748 58.3413L4.81828 53.631C4.82631 53.5819 4.82253 53.4892 4.74929 53.4207L1.2643 50.0794C0.996837 49.8233 0.899493 49.4367 1.0129 49.0842C1.12679 48.7312 1.43158 48.4741 1.79827 48.4226L6.61536 47.7412C6.70231 47.728 6.7798 47.6784 6.81288 47.6094L8.98185 43.2913C9.14582 42.9643 9.47991 42.7583 9.84613 42.7578H9.8466C10.2119 42.7578 10.546 42.9638 10.7104 43.2899L12.8742 47.582C12.9106 47.65 12.9975 47.7134 13.0915 47.728L17.894 48.4075C18.2607 48.4595 18.5655 48.7161 18.6793 49.0691C18.7928 49.4216 18.6959 49.8077 18.428 50.0643L14.9378 53.4108C14.9345 53.4141 14.9307 53.4174 14.9278 53.4212C14.8541 53.4897 14.8508 53.5823 14.8607 53.648L15.6792 58.3418C15.7425 58.7042 15.5946 59.0714 15.2974 59.2887C15.0001 59.5052 14.6056 59.5364 14.279 59.3667L9.98363 57.1354C9.88629 57.0872 9.82297 57.0782 9.68782 57.1453L5.39431 59.3681C5.25538 59.4395 5.10228 59.4754 4.95059 59.4754ZM4.04095 50.0605L6.07855 52.014C6.59457 52.4945 6.84171 53.2208 6.72782 53.9471L6.23921 56.7512L8.8174 55.4167C9.49786 55.0822 10.2133 55.0907 10.8578 55.4073L13.4374 56.7474L12.9521 53.9637C12.8359 53.2237 13.0807 52.5002 13.6033 52.0097L15.6527 50.0444L12.8066 49.6418C12.0987 49.5312 11.4873 49.0941 11.1565 48.4718L9.84896 45.8785L8.54805 48.4675C8.2409 49.0979 7.6214 49.5459 6.89652 49.6564L4.04095 50.0605Z" fill="url(#paint11_linear_59_5)"/>
                    <path d="M49.5173 56.5915C45.5163 56.5915 42.2605 53.3853 42.2605 49.4443C42.2605 45.5038 45.5163 42.2981 49.5173 42.2981C53.5188 42.2981 56.7737 45.5038 56.7737 49.4443C56.7737 53.3853 53.5188 56.5915 49.5173 56.5915ZM49.5173 44.2341C46.5838 44.2341 44.196 46.5718 44.196 49.4448C44.196 52.3183 46.5833 54.6565 49.5173 54.6565C52.4518 54.6565 54.8381 52.3188 54.8381 49.4448C54.8381 46.5718 52.4513 44.2341 49.5173 44.2341Z" fill="url(#paint12_linear_59_5)"/>
                    <path d="M53.3643 54.3333L57.766 58.7539L53.3643 54.3333Z" fill="url(#paint13_linear_59_5)"/>
                    <path d="M52.6777 55.0148L54.0495 53.6492L58.4512 58.0693L57.0795 59.4354L52.6777 55.0148Z" fill="url(#paint14_linear_59_5)"/>
                    <path d="M56.8405 58.8674L55.5216 57.5386C55.3052 57.3203 55.3099 56.9683 55.532 56.7552L55.7886 56.509C56.0107 56.2959 56.3693 56.3006 56.5862 56.5184L57.9051 57.8472C58.1215 58.0655 58.1173 58.4176 57.8952 58.6307L57.6381 58.8769C57.4155 59.09 57.0569 59.0857 56.8405 58.8674Z" fill="url(#paint15_linear_59_5)"/>
                    <path d="M57.2447 60.0001C56.8483 60.0001 56.4518 59.8494 56.1536 59.5493L54.8343 58.2196C54.5461 57.9289 54.3892 57.5434 54.3939 57.1332C54.3986 56.7221 54.5654 56.3398 54.8617 56.0558L55.1188 55.8096C55.7208 55.2336 56.6871 55.2454 57.2731 55.8365L58.5915 57.1648C58.8812 57.4574 59.0366 57.8429 59.0319 58.2531C59.0267 58.6633 58.8608 59.0456 58.5646 59.3296L58.3065 59.5762C58.0117 59.8593 57.6285 60.0001 57.2447 60.0001Z" fill="url(#paint16_linear_59_5)"/>
                  </g>
                  <defs>
                    <linearGradient id="paint0_linear_59_5" x1="30.222" y1="30.4861" x2="30.222" y2="37.518" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_59_5" x1="18.2574" y1="33.0344" x2="18.2574" y2="34.97" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_59_5" x1="42.2161" y1="33.0344" x2="42.2161" y2="34.97" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_59_5" x1="9.78612" y1="33.0344" x2="9.78612" y2="40.9807" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint4_linear_59_5" x1="50.8584" y1="33.0344" x2="50.8584" y2="40.9807" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint5_linear_59_5" x1="30.2222" y1="26.925" x2="30.2222" y2="32.4217" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint6_linear_59_5" x1="39.3313" y1="4.61353" x2="39.3313" y2="10.3497" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint7_linear_59_5" x1="29.4844" y1="0" x2="29.4844" y2="25.2857" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint8_linear_59_5" x1="30.0395" y1="23.3501" x2="30.0395" y2="25.2856" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint9_linear_59_5" x1="39.3313" y1="4.61353" x2="39.3313" y2="10.3497" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint10_linear_59_5" x1="44.4284" y1="20.8062" x2="44.4284" y2="27.2028" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint11_linear_59_5" x1="9.84616" y1="42.7578" x2="9.84616" y2="59.4754" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint12_linear_59_5" x1="49.5171" y1="42.2981" x2="49.5171" y2="56.5915" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint13_linear_59_5" x1="55.5651" y1="54.3333" x2="55.5651" y2="58.7539" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint14_linear_59_5" x1="55.5645" y1="53.6492" x2="55.5645" y2="59.4354" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint15_linear_59_5" x1="56.7135" y1="56.3521" x2="56.7135" y2="59.034" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <linearGradient id="paint16_linear_59_5" x1="56.7129" y1="55.3853" x2="56.7129" y2="60.0001" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7C3BAF"/>
                      <stop offset="1" stop-color="#E61C42"/>
                    </linearGradient>
                    <clipPath id="clip0_59_5">
                      <rect width="60" height="60" fill="white"/>
                    </clipPath>
                  </defs>
                </svg>
                <div class="text-xl font-semibold">Unmatched AI Expertise</div>
              </div>
          
              <!-- Back Side -->
              <div class="choose-card-back bg-white p-6 flex flex-col gap-4 items-center justify-center text-center text-gray-800">
             
                <p class="text-sm">Our team of 200+ dedicated AI engineers brings deep technical knowledge and industry insight, ensuring your AI initiatives are not just innovative but scalable and reliable.</p>
              </div>
          
            </div>
          </div>
        
          <!-- Card 2 -->
       
          <div class="choose-card-wrapper w-full h-[354px] md:w-[409px] m-auto lg:m-0 z-10">
            <div class="choose-card shadow-[0_24px_34px_0_rgba(0,0,0,.078)]">
          
              <!-- Front Side -->
              <div class="choose-card-front bg-white p-6 flex flex-col gap-8 items-center justify-center">
                <!-- SVG Icon -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="60"
                height="60"
                viewBox="0 0 60 60"
                fill="none"
              >
                <path
                  d="M58.1261 19.9546H52.7032V3.92842C52.7032 2.61603 51.6355 1.54834 50.3231 1.54834H27.3027C25.9921 1.54834 24.9259 2.61603 24.9259 3.92842V21.9749L22.6633 20.1378C22.5174 20.0193 22.3351 19.9546 22.1472 19.9546H16.1911C14.5636 19.9546 13.2396 21.2504 13.2396 22.8429V29.764H12.8294C12.3771 29.764 12.0106 30.1306 12.0106 30.5828V32.3846C11.1363 32.6363 10.2979 32.9828 9.50615 33.4196L8.23303 32.1465C7.91322 31.8269 7.39502 31.8267 7.07533 32.1462L3.43783 35.7803C3.28408 35.9338 3.19783 36.1421 3.19772 36.3594C3.19772 36.5766 3.28396 36.785 3.43748 36.9385L4.71377 38.2147C4.27396 39.0105 3.92721 39.8478 3.67795 40.716H1.87396C1.42174 40.716 1.05518 41.0826 1.05518 41.5348V46.677C1.05518 47.1292 1.42174 47.4958 1.87396 47.4958H3.67795C3.92709 48.3635 4.27397 49.2017 4.714 49.9994L3.43807 51.2728C3.2842 51.4264 3.19772 51.6347 3.19772 51.8521C3.19772 52.0695 3.28396 52.278 3.43783 52.4316L7.07533 56.0657C7.39514 56.3853 7.91346 56.3852 8.23303 56.0655L9.50615 54.7924C10.2979 55.2291 11.1363 55.5756 12.0106 55.8274V57.6324C12.0106 58.0846 12.3771 58.4512 12.8294 58.4512H17.9715C18.4238 58.4512 18.7903 58.0846 18.7903 57.6324V55.827C19.6636 55.5751 20.5009 55.2286 21.2921 54.792L22.5686 56.0661C22.8884 56.3853 23.4063 56.3851 23.726 56.0655L27.3601 52.4314C27.6797 52.1118 27.6799 51.5938 27.3607 51.2739L26.0868 49.9975C26.1899 49.8106 26.2876 49.6209 26.3807 49.429H54.1001C56.7715 49.429 58.945 47.2571 58.945 44.5874V20.7731C58.945 20.3208 58.5784 19.9543 58.1262 19.9543L58.1261 19.9546ZM26.5636 3.92842C26.5636 3.526 26.9021 3.18604 27.3027 3.18604H50.3231C50.7256 3.18604 51.0655 3.526 51.0655 3.92842V23.8413H27.2246L26.5636 23.3047V3.92842ZM23.1465 54.3293L22.0015 53.1865C21.732 52.9176 21.3124 52.8698 20.9892 53.0717C20.0053 53.6863 18.9277 54.1321 17.7865 54.397C17.4154 54.4831 17.1528 54.8137 17.1528 55.1947V56.8141H13.6481V55.1947C13.6481 54.8136 13.3852 54.4829 13.0139 54.3969C11.8713 54.1325 10.7929 53.6866 9.80838 53.0717C9.48518 52.8698 9.06518 52.9177 8.79553 53.1871L7.65353 54.3291L5.17525 51.8531L6.31889 50.7117C6.58865 50.4425 6.63693 50.0227 6.43561 49.6993C5.81416 48.7013 5.36838 47.6233 5.11033 46.4949C5.02525 46.1226 4.69408 45.8586 4.31205 45.8586H2.69264V42.354H4.31205C4.69396 42.354 5.02514 42.0899 5.11033 41.7176C5.36861 40.5878 5.81428 39.5111 6.43502 38.5175C6.63705 38.1942 6.58912 37.7743 6.31959 37.5046L5.17479 36.3598L7.65365 33.8832L8.79564 35.0252C9.06518 35.2947 9.48518 35.3426 9.8085 35.1406C10.7929 34.5257 11.8715 34.0798 13.014 33.8154C13.3853 33.7295 13.6483 33.3987 13.6483 33.0176V31.4015H17.1529V33.0176C17.1529 33.3985 17.4156 33.7292 17.7866 33.8153C18.9278 34.0801 20.0053 34.526 20.9894 35.1406C21.3124 35.3425 21.732 35.2947 22.0016 35.0258L23.1467 33.8829L25.6239 36.3602L24.4811 37.5052C24.212 37.7747 24.1643 38.1943 24.3662 38.5174C24.9818 39.5033 25.4277 40.5806 25.6914 41.7197C25.7773 42.091 26.1081 42.354 26.4892 42.354H28.1053V45.8586H26.4892C26.1081 45.8586 25.7774 46.1215 25.6914 46.4928C25.4277 47.6319 24.9819 48.7093 24.3662 49.6951C24.1644 50.0181 24.2121 50.4377 24.4811 50.7073L25.6239 51.8524L23.1467 54.3296L23.1465 54.3293ZM50.0774 47.7917H27.0324C27.0634 47.6936 27.0935 47.5951 27.1221 47.496H28.9239C29.3761 47.496 29.7427 47.1295 29.7427 46.6772V41.5351C29.7427 41.0828 29.3761 40.7163 28.9239 40.7163H27.1221C26.8706 39.8439 26.5241 39.0065 26.087 38.2144L27.361 36.938C27.6802 36.6182 27.6799 36.1001 27.3604 35.7806L23.7263 32.1465C23.4068 31.827 22.8887 31.8267 22.5688 32.1459L21.2923 33.4199C20.5012 32.9834 19.6638 32.637 18.7906 32.3849V30.5828C18.7906 30.1306 18.424 29.764 17.9718 29.764H14.8774V22.8429C14.8774 22.1533 15.4668 21.5922 16.1912 21.5922H21.8568L26.4179 25.2957C26.5638 25.4142 26.7461 25.4788 26.934 25.4788H51.0656V47.7917H50.0774ZM57.3074 44.5878C57.3074 46.3545 55.8687 47.7917 54.1002 47.7917H52.7033V21.5922H57.3074V44.5878ZM27.914 20.4928H49.712C50.1642 20.4928 50.5308 20.1262 50.5308 19.674C50.5308 19.2217 50.1642 18.8552 49.712 18.8552H48.8201V7.3565C48.8201 6.90428 48.4535 6.53771 48.0013 6.53771H45.3405C44.8882 6.53771 44.5217 6.90428 44.5217 7.3565V18.8551H43.5816V13.1431C43.5816 12.6909 43.215 12.3243 42.7628 12.3243H40.1019C39.6497 12.3243 39.2831 12.6909 39.2831 13.1431V18.8551H38.3431V8.18033C38.3431 7.72811 37.9765 7.36154 37.5243 7.36154H34.8635C34.4113 7.36154 34.0447 7.72811 34.0447 8.18033V18.8551H33.1047V13.1431C33.1047 12.6909 32.7381 12.3243 32.2859 12.3243H29.6284C29.1762 12.3243 28.8096 12.6909 28.8096 13.1431V18.8551H27.9143C27.4621 18.8551 27.0955 19.2216 27.0955 19.6738C27.0955 20.1261 27.4621 20.4926 27.9143 20.4926L27.914 20.4928ZM35.6822 8.99912H36.7053V18.6624H35.6822V8.99912ZM46.1592 8.17529H47.1824V18.8551H46.1592V8.17529ZM40.9207 13.9619H41.9439V18.8549H40.9207V13.9619ZM30.447 13.9619H31.4669V18.8549H30.447V13.9619ZM10.3604 38.9528C7.551 41.7623 7.551 46.3335 10.3604 49.143C11.7217 50.504 13.5318 51.2539 15.4572 51.2539C17.3826 51.2539 19.1926 50.5042 20.5539 49.143C23.3633 46.3335 23.3633 41.7623 20.5539 38.9528C17.7434 36.1424 13.1707 36.1426 10.3604 38.9528ZM19.396 47.9849C18.3441 49.0369 16.9452 49.6162 15.4573 49.6162C13.9694 49.6162 12.5705 49.0369 11.5186 47.9849C9.34772 45.814 9.34772 42.2818 11.5186 40.1109C12.6045 39.0249 14.0309 38.4821 15.4573 38.4821C16.8837 38.4821 18.3101 39.025 19.396 40.1109C21.5669 42.2818 21.5669 45.814 19.396 47.9849Z"
                  fill="url(#paint0_linear_44_46)"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_44_46"
                    x1="30.0001"
                    y1="1.54834"
                    x2="30.0001"
                    y2="58.4512"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                </defs>
              </svg>
  
              <div class="text-xl font-semibold">Tailored Strategies</div>
              </div>
          
              <!-- Back Side -->
              <div class="choose-card-back bg-white p-6 flex flex-col gap-4 items-center justify-center text-center text-gray-800">
                
                <p class="text-sm">Intellivon crafts enterprise-grade AI strategies tailored to your specific challenges and goals by aligning cutting-edge AI technologies, such as Generative AI, LLMs, and Computer Vision, with your strategic vision.</p>
              </div>
          
            </div>
          </div>

          <!-- Card 3 -->         
          <div class="choose-card-wrapper w-full h-[354px] md:w-[409px] m-auto lg:m-0 z-10">
            <div class="choose-card shadow-[0_24px_34px_0_rgba(0,0,0,.078)]">
          
              <!-- Front Side -->
              <div class="choose-card-front bg-white p-6 flex flex-col gap-8 items-center justify-center">
                <!-- SVG Icon -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="60"
                height="60"
                viewBox="0 0 60 60"
                fill="none"
              >
                <path
                  d="M54.4546 49.9999H4.091C2.90918 49.9999 0.90918 47.7271 0.90918 45.3635V7.27259C0.90918 4.72714 3.00009 2.63623 5.54554 2.63623H54.3637C56.9092 2.63623 59.091 4.72714 59.091 7.27259V45.3635C59.091 47.909 57.0001 49.9999 54.4546 49.9999ZM4.18191 48.1817H54.4546C56.0001 48.1817 57.2728 46.909 57.2728 45.3635V7.27259C57.2728 5.72714 55.9092 4.45441 54.3637 4.45441H5.54554C4.00009 4.45441 2.72736 5.72714 2.72736 7.27259V45.3635C2.72736 46.7271 3.81827 47.909 4.18191 48.1817Z"
                  fill="url(#paint0_linear_44_50)"
                />
                <path
                  d="M58.1819 41.4544H1.81827C1.27282 41.4544 0.90918 41.0908 0.90918 40.5453C0.90918 39.9999 1.27282 39.6362 1.81827 39.6362H58.1819C58.7274 39.6362 59.091 39.9999 59.091 40.5453C59.091 41.0908 58.7274 41.4544 58.1819 41.4544Z"
                  fill="url(#paint1_linear_44_50)"
                />
                <path
                  d="M33.9092 45.5455H26.091C25.5455 45.5455 25.1819 45.1818 25.1819 44.6364C25.1819 44.0909 25.5455 43.7273 26.091 43.7273H33.9092C34.4546 43.7273 34.8182 44.0909 34.8182 44.6364C34.8182 45.1818 34.4546 45.5455 33.9092 45.5455Z"
                  fill="url(#paint2_linear_44_50)"
                />
                <path
                  d="M41.6364 57.3636H18.3637C17.8182 57.3636 17.4546 57 17.4546 56.4545C17.4546 55.909 17.8182 55.5454 18.3637 55.5454H41.6364C42.1819 55.5454 42.5455 55.909 42.5455 56.4545C42.5455 57 42.1819 57.3636 41.6364 57.3636Z"
                  fill="url(#paint3_linear_44_50)"
                />
                <path
                  d="M38.091 57.3636C37.7274 57.3636 37.4546 57.1818 37.2728 56.8182L34.0001 49.5454C33.8183 49.0909 34.0001 48.5454 34.4546 48.3636C34.9092 48.1818 35.4546 48.3636 35.6365 48.8182L38.9092 56.0909C39.091 56.5454 38.9092 57.0909 38.4546 57.2727C38.3637 57.3636 38.1819 57.3636 38.091 57.3636Z"
                  fill="url(#paint4_linear_44_50)"
                />
                <path
                  d="M21.9091 57.3636C21.8182 57.3636 21.6364 57.3636 21.5455 57.2727C21.0909 57.0909 20.9091 56.5454 21.0909 56.0909L24.3636 48.8182C24.5455 48.3636 25.0909 48.1818 25.5455 48.3636C26 48.5454 26.1818 49.0909 26 49.5454L22.7273 56.8182C22.5455 57.1818 22.2727 57.3636 21.9091 57.3636Z"
                  fill="url(#paint5_linear_44_50)"
                />
                <path
                  d="M6.90909 41.4545C6.36364 41.4545 6 41 6 40.5454C6.09091 32.8181 12.4545 26.5454 20.1818 26.5454C27.9091 26.5454 34.2727 32.8181 34.3636 40.5454C34.3636 41.0909 34 41.4545 33.4545 41.4545C33 41.4545 32.5455 41.0909 32.5455 40.5454C32.4545 33.8181 26.9091 28.3636 20.1818 28.3636C13.4545 28.3636 7.90909 33.8181 7.81818 40.5454C7.81818 41.0909 7.36364 41.4545 6.90909 41.4545Z"
                  fill="url(#paint6_linear_44_50)"
                />
                <path
                  d="M27.7273 41.4545C27.2727 41.4545 26.8182 41.0909 26.8182 40.5454C26.7273 37 23.7273 34.0909 20.1818 34.0909C16.6364 34.0909 13.6364 37 13.5455 40.5454C13.5455 41.0909 13.0909 41.4545 12.6364 41.4545C12.0909 41.4545 11.7273 41 11.7273 40.5454C11.8182 36 15.6364 32.2727 20.1818 32.2727C24.7273 32.2727 28.5455 36 28.6364 40.5454C28.6364 41 28.2727 41.4545 27.7273 41.4545Z"
                  fill="url(#paint7_linear_44_50)"
                />
                <path
                  d="M14.7274 36.4546C14.5455 36.4546 14.2728 36.3637 14.091 36.1819L9.81827 32.3637C9.45464 32.0001 9.45464 31.4546 9.72736 31.091C10.091 30.7273 10.6365 30.7273 11.0001 31.0001L15.2728 34.8182C15.6365 35.1819 15.6365 35.7273 15.3637 36.091C15.1819 36.3637 15.0001 36.4546 14.7274 36.4546Z"
                  fill="url(#paint8_linear_44_50)"
                />
                <path
                  d="M25.2726 36.0909C24.9999 36.0909 24.8181 36 24.6363 35.8182C24.2726 35.4545 24.2726 34.9091 24.6363 34.5454L28.8181 30.5454C29.1817 30.1818 29.7272 30.1818 30.0908 30.5454C30.4544 30.9091 30.4544 31.4545 30.0908 31.8182L25.909 35.8182C25.7272 36 25.4544 36.0909 25.2726 36.0909Z"
                  fill="url(#paint9_linear_44_50)"
                />
                <path
                  d="M22.8183 41.4545C22.2728 41.4545 21.9092 41.0909 21.9092 40.5455C21.9092 39.6364 21.091 38.8182 20.1819 38.8182C19.2728 38.8182 18.4547 39.6364 18.4547 40.5455C18.4547 41.0909 18.091 41.4545 17.5456 41.4545C17.0001 41.4545 16.6365 41.0909 16.6365 40.5455C16.6365 38.5455 18.1819 37 20.1819 37C22.1819 37 23.7274 38.5455 23.7274 40.5455C23.7274 41.0909 23.3637 41.4545 22.8183 41.4545Z"
                  fill="url(#paint10_linear_44_50)"
                />
                <path
                  d="M20.1818 38.818C19.6363 38.818 19.2727 38.4544 19.2727 37.9089V30.818C19.2727 30.2726 19.6363 29.9089 20.1818 29.9089C20.7273 29.9089 21.0909 30.2726 21.0909 30.818V37.9089C21.0909 38.4544 20.7273 38.818 20.1818 38.818Z"
                  fill="url(#paint11_linear_44_50)"
                />
                <path
                  d="M53.2728 29.1817H32.3637C31.8182 29.1817 31.4546 28.8181 31.4546 28.2726C31.4546 27.7272 31.8182 27.3635 32.3637 27.3635H53.2728C53.8182 27.3635 54.1819 27.7272 54.1819 28.2726C54.1819 28.8181 53.8182 29.1817 53.2728 29.1817Z"
                  fill="url(#paint12_linear_44_50)"
                />
                <path
                  d="M36.3637 29.1817C35.8182 29.1817 35.4546 28.818 35.4546 28.2726V20.7271H33.2728V28.2726C33.2728 28.818 32.9091 29.1817 32.3637 29.1817C31.8182 29.1817 31.4546 28.818 31.4546 28.2726V19.818C31.4546 19.2726 31.8182 18.9089 32.3637 18.9089H36.3637C36.9091 18.9089 37.2728 19.2726 37.2728 19.818V28.2726C37.2728 28.818 36.9091 29.1817 36.3637 29.1817Z"
                  fill="url(#paint13_linear_44_50)"
                />
                <path
                  d="M44.8183 29.1816C44.2728 29.1816 43.9092 28.818 43.9092 28.2725V18.2725H41.7274V28.2725C41.7274 28.818 41.3637 29.1816 40.8183 29.1816C40.2728 29.1816 39.9092 28.818 39.9092 28.2725V17.3634C39.9092 16.818 40.2728 16.4543 40.8183 16.4543H44.8183C45.3637 16.4543 45.7274 16.818 45.7274 17.3634V28.2725C45.7274 28.818 45.3637 29.1816 44.8183 29.1816Z"
                  fill="url(#paint14_linear_44_50)"
                />
                <path
                  d="M53.2727 29.1816C52.7273 29.1816 52.3636 28.818 52.3636 28.2725V14.9998H50.0909V28.2725C50.0909 28.818 49.7273 29.1816 49.1818 29.1816C48.6363 29.1816 48.2727 28.818 48.2727 28.2725V14.0907C48.2727 13.5453 48.6363 13.1816 49.1818 13.1816H53.2727C53.8182 13.1816 54.1818 13.5453 54.1818 14.0907V28.2725C54.1818 28.818 53.8182 29.1816 53.2727 29.1816Z"
                  fill="url(#paint15_linear_44_50)"
                />
                <path
                  d="M34.3637 16.7271C34 16.7271 33.6364 16.5453 33.5455 16.1817C33.3637 15.7271 33.6364 15.1817 34.0909 14.9999L50.7273 8.45441C51.1818 8.27259 51.7273 8.54532 51.9091 8.99987C52.0909 9.45441 51.8182 9.99987 51.3637 10.1817L34.7273 16.7271C34.5455 16.7271 34.4546 16.7271 34.3637 16.7271Z"
                  fill="url(#paint16_linear_44_50)"
                />
                <path
                  d="M9.81821 22.7272C9.7273 22.7272 9.7273 22.7272 9.63639 22.7272C8.00003 22.3636 6.45458 21.7272 4.90912 20.8181C4.54548 20.5454 4.36367 20.0908 4.54548 19.6363C5.00003 18.4545 4.90912 17.3636 4.27276 16.8181C4.00003 16.5454 3.45458 16.1818 2.18185 16.3636C1.7273 16.4545 1.18185 16.0908 1.18185 15.6363C1.00003 15.0908 1.36367 14.6363 1.81821 14.5454C3.36367 14.2727 4.63639 14.6363 5.54548 15.5454C6.54548 16.5454 6.81821 17.9999 6.45458 19.5454C7.45458 20.0908 8.36367 20.4545 9.36367 20.7272C10.1818 19.2727 11.5455 18.4545 12.8182 18.4545C14.0909 18.4545 15.4546 19.3636 16.2728 20.7272C17.2728 20.4545 18.1818 20.0908 19.1818 19.5454C18.8182 17.909 19.0909 16.4545 20.0909 15.5454C20.9091 14.5454 22.4546 14.2727 24.0909 14.6363C24.6364 13.6363 25 12.7272 25.2728 11.7272C23.8182 10.909 23 9.6363 23 8.27266C23 6.90902 23.8182 5.6363 25.2728 4.81811C25.2728 4.72721 25.2728 4.72721 25.2728 4.6363C25.1818 4.36357 25.0909 4.09084 25 3.81811C24.8182 3.36357 25.0909 2.81812 25.5455 2.6363C26 2.45448 26.5455 2.72721 26.7273 3.18175C26.8182 3.45448 26.9091 3.72721 27 4.09084C27.0909 4.36357 27.1818 4.6363 27.2728 4.90902C27.4546 5.36357 27.1818 5.81811 26.8182 5.99993C25.6364 6.54539 24.9091 7.36357 24.9091 8.18175C24.9091 9.09084 25.6364 9.81811 26.8182 10.3636C27.1818 10.5454 27.4546 10.9999 27.3637 11.3636C27 12.9999 26.3637 14.5454 25.4546 16.0908C25.2728 16.4545 24.7273 16.6363 24.3637 16.4545C23.1818 15.9999 22.0909 16.0908 21.5455 16.6363C20.9091 17.2727 20.8182 18.3636 21.2728 19.5454C21.4546 19.9999 21.2728 20.4545 20.9091 20.6363C19.3637 21.5454 17.8182 22.1818 16.1818 22.5454C15.7273 22.6363 15.3637 22.4545 15.1818 21.9999C14.7273 20.909 13.8182 20.0908 13 20.0908C12.1818 20.0908 11.3637 20.909 10.8182 21.9999C10.5455 22.5454 10.1818 22.7272 9.81821 22.7272Z"
                  fill="url(#paint17_linear_44_50)"
                />
                <path
                  d="M12.6363 14.8181C8.99991 14.8181 6.09082 11.909 6.09082 8.27261C6.09082 6.27261 6.99991 4.45443 8.54537 3.1817C8.909 2.90898 9.54537 2.90898 9.81809 3.36352C10.0908 3.72716 10.0908 4.36352 9.63628 4.63625C8.54537 5.54534 7.909 6.81807 7.909 8.27261C7.909 10.909 9.99991 12.9999 12.6363 12.9999C15.2726 12.9999 17.3635 10.909 17.3635 8.27261C17.3635 6.81807 16.6363 5.36352 15.4545 4.45443C15.0908 4.1817 14.9999 3.54534 15.2726 3.1817C15.5454 2.81807 16.1817 2.72716 16.5454 2.99988C18.1817 4.1817 19.1817 6.1817 19.1817 8.27261C19.1817 11.909 16.2726 14.8181 12.6363 14.8181Z"
                  fill="url(#paint18_linear_44_50)"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_44_50"
                    x1="30.0001"
                    y1="2.63623"
                    x2="30.0001"
                    y2="49.9999"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_44_50"
                    x1="30.0001"
                    y1="39.6362"
                    x2="30.0001"
                    y2="41.4544"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint2_linear_44_50"
                    x1="30.0001"
                    y1="43.7273"
                    x2="30.0001"
                    y2="45.5455"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint3_linear_44_50"
                    x1="30"
                    y1="55.5454"
                    x2="30"
                    y2="57.3636"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint4_linear_44_50"
                    x1="36.4546"
                    y1="48.2939"
                    x2="36.4546"
                    y2="57.3636"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint5_linear_44_50"
                    x1="23.5455"
                    y1="48.2939"
                    x2="23.5455"
                    y2="57.3636"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint6_linear_44_50"
                    x1="20.1818"
                    y1="26.5454"
                    x2="20.1818"
                    y2="41.4545"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint7_linear_44_50"
                    x1="20.1818"
                    y1="32.2727"
                    x2="20.1818"
                    y2="41.4545"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint8_linear_44_50"
                    x1="12.5455"
                    y1="30.8057"
                    x2="12.5455"
                    y2="36.4546"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint9_linear_44_50"
                    x1="27.3635"
                    y1="30.2727"
                    x2="27.3635"
                    y2="36.0909"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint10_linear_44_50"
                    x1="20.1819"
                    y1="37"
                    x2="20.1819"
                    y2="41.4545"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint11_linear_44_50"
                    x1="20.1818"
                    y1="29.9089"
                    x2="20.1818"
                    y2="38.818"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint12_linear_44_50"
                    x1="42.8182"
                    y1="27.3635"
                    x2="42.8182"
                    y2="29.1817"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint13_linear_44_50"
                    x1="34.3637"
                    y1="18.9089"
                    x2="34.3637"
                    y2="29.1817"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint14_linear_44_50"
                    x1="42.8183"
                    y1="16.4543"
                    x2="42.8183"
                    y2="29.1816"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint15_linear_44_50"
                    x1="51.2273"
                    y1="13.1816"
                    x2="51.2273"
                    y2="29.1816"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint16_linear_44_50"
                    x1="42.7273"
                    y1="8.39746"
                    x2="42.7273"
                    y2="16.7271"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint17_linear_44_50"
                    x1="14.2577"
                    y1="2.57935"
                    x2="14.2577"
                    y2="22.7272"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint18_linear_44_50"
                    x1="12.6363"
                    y1="2.84131"
                    x2="12.6363"
                    y2="14.8181"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                </defs>
              </svg>
              <h3
                class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
              >
                Next-Generation Technology Use
              </h3>
              </div>
          
              <!-- Back Side -->
              <div class="choose-card-back bg-white p-6 flex flex-col gap-4 items-center justify-center text-center text-gray-800">
                <p class="text-sm">Intellivon harnesses cutting-edge technology in AI, including Generative AI models, advanced machine learning frameworks, and MLOps, to future-proof your business.</p>
              </div>
          
            </div>
          </div>

          <!-- Card 4 -->
          <div class="choose-card-wrapper w-full h-[354px] md:w-[409px] m-auto lg:m-0 z-10">
            <div class="choose-card shadow-[0_24px_34px_0_rgba(0,0,0,.078)]">
          
              <!-- Front Side -->
              <div class="choose-card-front bg-white p-6 flex flex-col gap-8 items-center justify-center">
                <!-- SVG Icon -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="60"
                height="60"
                viewBox="0 0 60 60"
                fill="none"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M33.9669 32.2288V25.418C33.9669 25.0578 34.1101 24.7124 34.3647 24.4576L35.3498 23.4724C35.5325 23.2897 35.5325 22.9931 35.3498 22.8104C35.1672 22.6277 34.8705 22.6277 34.6878 22.8104C34.6878 22.8104 34.2274 23.2708 33.7027 23.7955C33.2723 24.2259 33.0305 24.8095 33.0305 25.418V32.2288C33.0305 32.4872 33.2404 32.6969 33.4986 32.6969C33.757 32.6969 33.9669 32.4872 33.9669 32.2288Z"
                  fill="url(#paint0_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M26.8946 32.2288V25.418C26.8946 24.8095 26.6528 24.2259 26.2224 23.7955C25.6975 23.2708 25.2373 22.8104 25.2373 22.8104C25.0546 22.6277 24.758 22.6277 24.5753 22.8104C24.3926 22.9931 24.3926 23.2897 24.5753 23.4724L25.5602 24.4576C25.815 24.7124 25.9582 25.0578 25.9582 25.418V32.2288C25.9582 32.4872 26.1678 32.6969 26.4263 32.6969C26.6847 32.6969 26.8946 32.4872 26.8946 32.2288Z"
                  fill="url(#paint1_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M39.0593 22.4366C39.0593 21.1542 38.0179 20.113 36.7357 20.113C35.4532 20.113 34.4119 21.1542 34.4119 22.4366C34.4119 23.7191 35.4532 24.7602 36.7357 24.7602C38.0179 24.7602 39.0593 23.7191 39.0593 22.4366ZM38.1229 22.4366C38.1229 23.2025 37.5013 23.824 36.7357 23.824C35.9698 23.824 35.3483 23.2025 35.3483 22.4366C35.3483 21.671 35.9698 21.0494 36.7357 21.0494C37.5013 21.0494 38.1229 21.671 38.1229 22.4366Z"
                  fill="url(#paint2_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M32.2861 19.3473C32.2861 18.0648 31.245 17.0237 29.9625 17.0237C28.68 17.0237 27.6389 18.0648 27.6389 19.3473C27.6389 20.6298 28.68 21.6709 29.9625 21.6709C31.245 21.6709 32.2861 20.6298 32.2861 19.3473ZM31.3499 19.3473C31.3499 20.1131 30.7284 20.7347 29.9625 20.7347C29.1969 20.7347 28.5753 20.1131 28.5753 19.3473C28.5753 18.5817 29.1969 17.9601 29.9625 17.9601C30.7284 17.9601 31.3499 18.5817 31.3499 19.3473Z"
                  fill="url(#paint3_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M20.8657 22.4366C20.8657 23.7191 21.9068 24.7602 23.1893 24.7602C24.4718 24.7602 25.5129 23.7191 25.5129 22.4366C25.5129 21.1542 24.4718 20.113 23.1893 20.113C21.9068 20.113 20.8657 21.1542 20.8657 22.4366ZM21.8021 22.4366C21.8021 21.671 22.4237 21.0494 23.1893 21.0494C23.9549 21.0494 24.5767 21.671 24.5767 22.4366C24.5767 23.2025 23.9549 23.824 23.1893 23.824C22.4237 23.824 21.8021 23.2025 21.8021 22.4366Z"
                  fill="url(#paint4_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M29.4944 21.2027V32.8346C29.4944 33.093 29.7043 33.3027 29.9625 33.3027C30.2209 33.3027 30.4308 33.093 30.4308 32.8346V21.2027C30.4308 20.9443 30.2209 20.7346 29.9625 20.7346C29.7043 20.7346 29.4944 20.9443 29.4944 21.2027Z"
                  fill="url(#paint5_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M33.6919 3.65435C33.6667 3.64468 33.6409 3.63727 33.6144 3.63187C31.2029 3.15884 28.7222 3.15884 26.3105 3.63187C26.2843 3.63727 26.2582 3.64468 26.233 3.65435C25.315 4.00648 24.7207 4.52086 24.4209 5.16221C24.1699 5.69884 24.1193 6.33682 24.2964 7.07592C22.6123 7.70491 21.0447 8.60985 19.6582 9.75367C19.1065 9.23098 18.5288 8.95569 17.9386 8.90468C17.2332 8.84378 16.4905 9.10109 15.7265 9.72019C15.7056 9.73727 15.6863 9.75592 15.6685 9.77614C14.053 11.6283 12.8126 13.7764 12.0166 16.1015C12.0079 16.1269 12.0013 16.1532 11.9971 16.1797C11.8431 17.151 11.9914 17.9229 12.3968 18.5033C12.7362 18.989 13.2634 19.3516 13.9919 19.5681C13.6946 21.3406 13.6946 23.1507 13.9919 24.9236C13.2634 25.14 12.7362 25.5027 12.3968 25.9883C11.9914 26.5685 11.8431 27.3404 11.9971 28.3116C12.0013 28.3384 12.0079 28.3645 12.0166 28.3901C12.8126 30.715 14.053 32.8633 15.6685 34.7152C15.6863 34.7355 15.7056 34.7543 15.7265 34.7712C16.4905 35.3903 17.2332 35.6478 17.9386 35.5869C18.5288 35.5357 19.1065 35.2604 19.6582 34.7377C21.0447 35.8815 22.6123 36.7867 24.2964 37.4157C24.1193 38.1546 24.1699 38.7928 24.4209 39.3294C24.7207 39.9705 25.315 40.4851 26.233 40.8373C26.2582 40.8469 26.2843 40.8543 26.3105 40.8595C28.7222 41.3328 31.2029 41.3328 33.6144 40.8595C33.6409 40.8543 33.6667 40.8469 33.6919 40.8373C34.6101 40.4851 35.2045 39.9705 35.5043 39.3294C35.7553 38.7928 35.8056 38.1546 35.6288 37.4155C37.3128 36.7867 38.8802 35.8815 40.267 34.7377C40.8184 35.2604 41.3962 35.5357 41.9865 35.5869C42.6917 35.6478 43.4344 35.3903 44.1986 34.7712C44.2195 34.7543 44.2389 34.7355 44.2566 34.7152C45.8721 32.8633 47.1123 30.715 47.9085 28.3901C47.9173 28.3645 47.9238 28.3384 47.9279 28.3116C48.082 27.3404 47.9337 26.5685 47.5283 25.9883C47.189 25.5027 46.6616 25.14 45.933 24.9236C46.2303 23.1507 46.2303 21.3406 45.9332 19.5678C46.6616 19.3516 47.189 18.989 47.5283 18.5033C47.9337 17.9229 48.082 17.151 47.9279 16.1797C47.9238 16.1532 47.9173 16.1269 47.9085 16.1015C47.1123 13.7764 45.8721 11.6283 44.2566 9.77614C44.2389 9.75592 44.2195 9.73727 44.1986 9.72019C43.4344 9.10109 42.6917 8.84378 41.9865 8.90468C41.3962 8.95569 40.8184 9.23098 40.2667 9.75367C38.8802 8.60985 37.3128 7.70491 35.6288 7.07592C35.8056 6.33682 35.7553 5.69884 35.5043 5.16221C35.2045 4.52086 34.6101 4.00648 33.6919 3.65435ZM33.3939 4.54311C34.0195 4.78918 34.4492 5.11637 34.6562 5.55884C34.867 6.00985 34.8373 6.56221 34.6132 7.21659C34.5297 7.46109 34.66 7.72738 34.9047 7.8112C36.7748 8.45142 38.5027 9.44895 39.9923 10.7485C40.1872 10.9184 40.4829 10.8982 40.6528 10.7033C41.1076 10.1822 41.571 9.88041 42.0672 9.83749C42.553 9.79547 43.0506 10.0033 43.5757 10.4211C45.091 12.1651 46.2555 14.1815 47.0083 16.3629C47.109 17.031 47.0404 17.5667 46.7607 17.9669C46.4755 18.3752 45.9825 18.6258 45.3036 18.7588C45.0499 18.8087 44.8845 19.0546 44.9344 19.3085C45.3148 21.2481 45.3148 23.2433 44.9344 25.1831C44.8845 25.4368 45.0499 25.6829 45.3036 25.7325C45.9825 25.8658 46.4755 26.1164 46.7607 26.5245C47.04 26.9242 47.1087 27.4593 47.0097 28.1229C46.2568 30.3072 45.0928 32.3238 43.5802 34.0663C43.0519 34.4876 42.5537 34.6961 42.0672 34.6539C41.571 34.611 41.1076 34.3094 40.6528 33.788C40.4829 33.5932 40.1872 33.573 39.9923 33.7431C38.5027 35.0424 36.7748 36.0402 34.9047 36.6804C34.66 36.7642 34.5297 37.0303 34.6132 37.275C34.8373 37.9294 34.867 38.4818 34.6562 38.9328C34.4496 39.3746 34.0207 39.7015 33.3964 39.9476C31.1283 40.3876 28.7998 40.3878 26.5344 39.9492C25.9056 39.7024 25.4757 39.375 25.269 38.9328C25.0582 38.4818 25.0876 37.9294 25.3117 37.275C25.3955 37.0303 25.2652 36.7642 25.0204 36.6804C23.1503 36.0402 21.4225 35.0424 19.9328 33.7431C19.738 33.573 19.4422 33.5932 19.2723 33.788C18.8175 34.3094 18.3539 34.611 17.858 34.6539C17.3721 34.6959 16.8744 34.4881 16.3492 34.0705C14.8341 32.3263 13.6696 30.3098 12.9168 28.1287C12.8162 27.4606 12.8847 26.9247 13.1645 26.5245C13.4496 26.1164 13.9427 25.8658 14.6213 25.7325C14.8753 25.6829 15.0404 25.4368 14.9908 25.1831C14.6101 23.2433 14.6101 21.2481 14.9908 19.3085C15.0404 19.0546 14.8753 18.8087 14.6213 18.7588C13.9427 18.6258 13.4496 18.3752 13.1645 17.9669C12.8852 17.5672 12.8164 17.0323 12.9155 16.3687C13.6683 14.1845 14.8323 12.1678 16.3449 10.4251C16.873 10.004 17.3714 9.79547 17.858 9.83749C18.3539 9.88041 18.8175 10.1822 19.2723 10.7033C19.4422 10.8982 19.738 10.9184 19.9328 10.7485C21.4225 9.44895 23.1503 8.45142 25.0204 7.8112C25.2652 7.72738 25.3955 7.46109 25.3117 7.21659C25.0876 6.56221 25.0582 6.00985 25.269 5.55884C25.4755 5.11704 25.9045 4.78985 26.5288 4.54401C28.7966 4.10378 31.1252 4.10356 33.3905 4.54221L33.3939 4.54311ZM29.9625 11.1887C23.86 11.1887 18.9056 16.1433 18.9056 22.2458C18.9056 28.3483 23.86 33.3027 29.9625 33.3027C36.0652 33.3027 41.0195 28.3483 41.0195 22.2458C41.0195 16.1433 36.0652 11.1887 29.9625 11.1887ZM29.9625 12.1251C35.5483 12.1251 40.0831 16.66 40.0831 22.2458C40.0831 27.8314 35.5483 32.3665 29.9625 32.3665C24.3768 32.3665 19.8418 27.8314 19.8418 22.2458C19.8418 16.66 24.3768 12.1251 29.9625 12.1251Z"
                  fill="url(#paint6_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M29.9625 44.176C26.5209 44.176 23.7266 46.9704 23.7266 50.412C23.7266 53.8538 26.5209 56.6479 29.9625 56.6479C33.4043 56.6479 36.1985 53.8538 36.1985 50.412C36.1985 46.9704 33.4043 44.176 29.9625 44.176ZM29.9625 45.1124C32.8875 45.1124 35.2623 47.487 35.2623 50.412C35.2623 53.3369 32.8875 55.7118 29.9625 55.7118C27.0376 55.7118 24.663 53.3369 24.663 50.412C24.663 47.487 27.0376 45.1124 29.9625 45.1124Z"
                  fill="url(#paint7_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M29.9624 46.4575C27.78 46.4575 26.0081 48.2294 26.0081 50.4119C26.0081 52.5946 27.78 54.3665 29.9624 54.3665C32.1451 54.3665 33.917 52.5946 33.917 50.4119C33.917 48.2294 32.1451 46.4575 29.9624 46.4575ZM29.9624 47.3937C31.6283 47.3937 32.9806 48.7463 32.9806 50.4119C32.9806 52.0777 31.6283 53.4301 29.9624 53.4301C28.2968 53.4301 26.9442 52.0777 26.9442 50.4119C26.9442 48.7463 28.2968 47.3937 29.9624 47.3937Z"
                  fill="url(#paint8_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M49.8876 40.1277C46.4458 40.1277 43.6516 42.9218 43.6516 46.3636C43.6516 49.8052 46.4458 52.5996 49.8876 52.5996C53.3294 52.5996 56.1235 49.8052 56.1235 46.3636C56.1235 42.9218 53.3294 40.1277 49.8876 40.1277ZM49.8876 41.0639C52.8125 41.0639 55.1871 43.4387 55.1871 46.3636C55.1871 49.2886 52.8125 51.6632 49.8876 51.6632C46.9626 51.6632 44.588 49.2886 44.588 46.3636C44.588 43.4387 46.9626 41.0639 49.8876 41.0639Z"
                  fill="url(#paint9_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M49.8877 42.4089C47.7052 42.4089 45.9331 44.1808 45.9331 46.3635C45.9331 48.546 47.7052 50.3179 49.8877 50.3179C52.0702 50.3179 53.8423 48.546 53.8423 46.3635C53.8423 44.1808 52.0702 42.4089 49.8877 42.4089ZM49.8877 43.3453C51.5536 43.3453 52.9059 44.6977 52.9059 46.3635C52.9059 48.0292 51.5536 49.3817 49.8877 49.3817C48.2219 49.3817 46.8695 48.0292 46.8695 46.3635C46.8695 44.6977 48.2219 43.3453 49.8877 43.3453Z"
                  fill="url(#paint10_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.0375 40.1277C6.59567 40.1277 3.80151 42.9218 3.80151 46.3636C3.80151 49.8052 6.59567 52.5996 10.0375 52.5996C13.479 52.5996 16.2734 49.8052 16.2734 46.3636C16.2734 42.9218 13.479 40.1277 10.0375 40.1277ZM10.0375 41.0639C12.9624 41.0639 15.337 43.4387 15.337 46.3636C15.337 49.2886 12.9624 51.6632 10.0375 51.6632C7.11252 51.6632 4.73769 49.2886 4.73769 46.3636C4.73769 43.4387 7.11252 41.0639 10.0375 41.0639Z"
                  fill="url(#paint11_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.0376 42.4089C7.85492 42.4089 6.08301 44.1808 6.08301 46.3635C6.08301 48.546 7.85492 50.3179 10.0376 50.3179C12.2201 50.3179 13.992 48.546 13.992 46.3635C13.992 44.1808 12.2201 42.4089 10.0376 42.4089ZM10.0376 43.3453C11.7032 43.3453 13.0558 44.6977 13.0558 46.3635C13.0558 48.0292 11.7032 49.3817 10.0376 49.3817C8.37177 49.3817 7.01941 48.0292 7.01941 46.3635C7.01941 44.6977 8.37177 43.3453 10.0376 43.3453Z"
                  fill="url(#paint12_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M45.4323 32.4588C45.3309 32.3781 45.201 32.3428 45.0727 32.3612C44.9446 32.3799 44.83 32.4507 44.7561 32.557C44.3918 33.0792 43.9999 33.5828 43.581 34.0653C43.346 34.2534 43.1185 34.3967 42.8936 34.4967C42.7421 34.5639 42.6376 34.7066 42.6188 34.8713C42.5999 35.0361 42.6698 35.1985 42.8021 35.2983L48.0767 39.2729C48.0837 39.6722 48.0934 40.1815 48.106 40.7565C48.1091 40.8974 48.1756 41.0295 48.2871 41.1161C48.3985 41.2026 48.543 41.234 48.6803 41.2021C49.0687 41.1116 49.4727 41.0637 49.8878 41.0637C50.3028 41.0637 50.7069 41.1116 51.0949 41.2021C51.2325 41.234 51.377 41.2026 51.4884 41.1161C51.5999 41.0295 51.6664 40.8974 51.6696 40.7565C51.7001 39.3646 51.7131 38.3581 51.7131 38.3581C51.7131 38.3561 51.7134 38.354 51.7134 38.352C51.7134 37.7877 51.4525 37.2554 51.0066 36.9095C51.0118 36.9136 45.4323 32.4588 45.4323 32.4588ZM45.2331 33.4981L50.4327 37.6493C50.6493 37.8174 50.7763 38.0758 50.777 38.3498C50.7761 38.4093 50.7662 39.1376 50.7451 40.186C50.4646 40.1473 50.1785 40.1275 49.8878 40.1275C49.597 40.1275 49.3109 40.1473 49.0307 40.186C49.0212 39.73 49.0143 39.3347 49.0091 39.0286C49.0066 38.8844 48.9379 38.7493 48.8228 38.6626L43.9293 34.9752C44.0188 34.9122 44.1087 34.8442 44.1988 34.7711C44.2197 34.7543 44.239 34.7354 44.2567 34.7152C44.5992 34.3226 44.9251 33.9165 45.2331 33.4981Z"
                  fill="url(#paint13_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M11.8483 39.2729L17.1229 35.2983C17.2555 35.1985 17.3252 35.0361 17.3065 34.8713C17.2876 34.7066 17.1829 34.5639 17.0315 34.4965C16.8079 34.3972 16.5814 34.2547 16.3506 34.0713C15.9272 33.5851 15.5342 33.0806 15.1692 32.557C15.0953 32.4507 14.9805 32.3799 14.8524 32.3612C14.7243 32.3428 14.5942 32.3781 14.493 32.4588L8.91349 36.9136C8.47281 37.2554 8.21191 37.7877 8.21191 38.352V38.3581C8.21191 38.3581 8.22517 39.3646 8.25573 40.7565C8.25888 40.8974 8.3254 41.0295 8.43686 41.1161C8.54832 41.2026 8.69281 41.234 8.83012 41.2021C9.21821 41.1116 9.62225 41.0637 10.0375 41.0637C10.4526 41.0637 10.8566 41.1116 11.2447 41.2021C11.3823 41.234 11.5267 41.2026 11.6382 41.1161C11.7497 41.0295 11.8162 40.8974 11.8191 40.7565C11.8319 40.1815 11.8414 39.6725 11.8483 39.2729ZM11.1427 38.6352C11.1535 38.6251 11.1658 38.6147 11.18 38.6042C11.602 38.286 13.6942 36.7098 15.9957 34.9752C15.9065 34.9122 15.8166 34.8442 15.7265 34.7711C15.7056 34.7543 15.6863 34.7354 15.6685 34.7152C15.3258 34.3226 15.0002 33.9165 14.6919 33.4981L9.49236 37.6493C9.27596 37.8174 9.14899 38.0758 9.14832 38.3498C9.14899 38.4098 9.15888 39.1379 9.18023 40.186C9.46068 40.1473 9.74675 40.1275 10.0375 40.1275C10.3281 40.1275 10.6144 40.1473 10.8946 40.186C10.904 39.73 10.911 39.3347 10.9162 39.0284L10.929 39.0289L10.9171 39.0075C10.9267 38.8482 11.0153 38.712 11.1427 38.6352Z"
                  fill="url(#paint14_linear_44_129)"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M31.8842 40.6988C31.8869 40.5664 31.8337 40.4392 31.7375 40.3484C31.6413 40.2576 31.5112 40.2118 31.3793 40.2221C30.4364 40.2965 29.4887 40.2965 28.5458 40.2221C28.4139 40.2118 28.2838 40.2576 28.1876 40.3484C28.0914 40.4392 28.0382 40.5664 28.0409 40.6988C28.0692 42.0662 28.1036 43.4772 28.1445 44.8176C28.1487 44.9583 28.2162 45.0898 28.3281 45.1754C28.4402 45.2608 28.5847 45.2914 28.7218 45.2585C29.12 45.1628 29.5355 45.1123 29.9624 45.1123C30.3896 45.1123 30.8051 45.1628 31.2033 45.2585C31.3404 45.2914 31.4849 45.2608 31.5968 45.1754C31.709 45.0898 31.7764 44.9583 31.7806 44.8176C31.8215 43.4772 31.8557 42.0662 31.8842 40.6988ZM30.9373 41.1893C30.9153 42.2057 30.8899 43.2381 30.8611 44.2403C30.5674 44.1979 30.2676 44.1758 29.9624 44.1758C29.6575 44.1758 29.3575 44.1979 29.064 44.2403C29.035 43.2381 29.0099 42.2057 28.9878 41.1893C29.6373 41.2226 30.2878 41.2226 30.937 41.1893H30.9373Z"
                  fill="url(#paint15_linear_44_129)"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_44_129"
                    x1="34.2587"
                    y1="22.6733"
                    x2="34.2587"
                    y2="32.6969"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_44_129"
                    x1="25.6664"
                    y1="22.6733"
                    x2="25.6664"
                    y2="32.6969"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint2_linear_44_129"
                    x1="36.7356"
                    y1="20.113"
                    x2="36.7356"
                    y2="24.7602"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint3_linear_44_129"
                    x1="29.9625"
                    y1="17.0237"
                    x2="29.9625"
                    y2="21.6709"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint4_linear_44_129"
                    x1="23.1893"
                    y1="20.113"
                    x2="23.1893"
                    y2="24.7602"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint5_linear_44_129"
                    x1="29.9626"
                    y1="20.7346"
                    x2="29.9626"
                    y2="33.3027"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint6_linear_44_129"
                    x1="29.9625"
                    y1="3.2771"
                    x2="29.9625"
                    y2="41.2145"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint7_linear_44_129"
                    x1="29.9625"
                    y1="44.176"
                    x2="29.9625"
                    y2="56.6479"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint8_linear_44_129"
                    x1="29.9626"
                    y1="46.4575"
                    x2="29.9626"
                    y2="54.3665"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint9_linear_44_129"
                    x1="49.8876"
                    y1="40.1277"
                    x2="49.8876"
                    y2="52.5996"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint10_linear_44_129"
                    x1="49.8877"
                    y1="42.4089"
                    x2="49.8877"
                    y2="50.3179"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint11_linear_44_129"
                    x1="10.0375"
                    y1="40.1277"
                    x2="10.0375"
                    y2="52.5996"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint12_linear_44_129"
                    x1="10.0375"
                    y1="42.4089"
                    x2="10.0375"
                    y2="50.3179"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint13_linear_44_129"
                    x1="47.1645"
                    y1="32.3564"
                    x2="47.1645"
                    y2="41.2143"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint14_linear_44_129"
                    x1="12.7607"
                    y1="32.3564"
                    x2="12.7607"
                    y2="41.2143"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint15_linear_44_129"
                    x1="29.9626"
                    y1="40.2207"
                    x2="29.9626"
                    y2="45.2714"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                </defs>
              </svg>
              <h3
                class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
              >
                 End-to-End AI Solutions 
              </h3>
              </div>
          
              <!-- Back Side -->
              <div class="choose-card-back bg-white p-6 flex flex-col gap-4 items-center justify-center text-center text-gray-800">
                <p class="text-sm">From ideation and consulting to development, deployment, and ongoing optimization, our collaborative approach ensures seamless integration with your existing systems and continuous refinement.</p>
              </div>
          
            </div>
          </div>

          <!-- Card 5 -->
          <div class="choose-card-wrapper w-full h-[354px] md:w-[409px] m-auto lg:m-0 z-10">
            <div class="choose-card shadow-[0_24px_34px_0_rgba(0,0,0,.078)]">
          
              <!-- Front Side -->
              <div class="choose-card-front bg-white p-6 flex flex-col gap-8 items-center justify-center">
                <!-- SVG Icon -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="60"
                height="60"
                viewBox="0 0 60 60"
                fill="none"
              >
                <path
                  d="M36.2476 47.5H31.2476C24.1776 47.5 20.6401 47.5 18.4451 45.3025C16.2476 43.1075 16.2476 39.57 16.2476 32.5V20C16.2476 12.93 16.2476 9.3925 18.4451 7.1975C20.6401 5 24.1751 5 31.2476 5H34.6051C36.6501 5 37.6701 5 38.5901 5.38C39.5076 5.76 40.2326 6.485 41.6776 7.93L48.3201 14.57C49.7651 16.015 50.4876 16.74 50.8676 17.6575C51.2476 18.575 51.2476 19.5975 51.2476 21.6425V32.5C51.2476 39.57 51.2476 43.1075 49.0501 45.3025C46.8551 47.5 43.3151 47.5 36.2476 47.5Z"
                  stroke="url(#paint0_linear_44_124)"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M37.4976 6.25V8.75C37.4976 13.465 37.4976 15.82 38.9626 17.285C40.4276 18.75 42.7826 18.75 47.4976 18.75H49.9976M16.2476 12.5C14.2584 12.5 12.3508 13.2902 10.9443 14.6967C9.53774 16.1032 8.74756 18.0109 8.74756 20V40C8.74756 47.07 8.74756 50.6075 10.9451 52.8025C13.1401 55 16.6751 55 23.7476 55H36.2476C38.2367 55 40.1443 54.2098 41.5509 52.8033C42.9574 51.3968 43.7476 49.4891 43.7476 47.5M25.0001 27.5H35.0001M25.0001 37.5H42.5001"
                  stroke="url(#paint1_linear_44_124)"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_44_124"
                    x1="33.7476"
                    y1="5"
                    x2="33.7476"
                    y2="47.5"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                  <linearGradient
                    id="paint1_linear_44_124"
                    x1="29.3726"
                    y1="6.25"
                    x2="29.3726"
                    y2="55"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="#7C3BAF" />
                    <stop offset="1" stop-color="#E61C42" />
                  </linearGradient>
                </defs>
              </svg>
              <h3
                class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
              >
                Proven Track Record of Impact
              </h3>
              </div>
          
              <!-- Back Side -->
              <div class="choose-card-back bg-white p-6 flex flex-col gap-4 items-center justify-center text-center text-gray-800">
               
                <p class="text-sm">Operating across 50+ countries, our portfolio of 500+ successful AI projects speaks to our ability to deliver results. We empower global enterprises to lead confidently in the AI era, unlocking efficiencies, enhancing decision-making, and driving measurable business growth.</p>
              </div>
          
            </div>
          </div>
        </div>
      </div>

      <!-- Background Decoration -->
       <div class="absolute right-0 top-0">

        <svg xmlns="http://www.w3.org/2000/svg" width="468" height="634" viewBox="0 0 468 634" fill="none">
          <g filter="url(#filter0_f_47_15221)">
            <path d="M564 197C564 126.86 507.14 70 437 70C366.86 70 310 126.86 310 197C310 267.14 366.86 324 437 324C507.14 324 564 267.14 564 197Z" fill="#7C3BAF"/>
          </g>
          <defs>
            <filter id="filter0_f_47_15221" x="0.200012" y="-239.8" width="873.6" height="873.6" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
              <feGaussianBlur stdDeviation="154.9" result="effect1_foregroundBlur_47_15221"/>
            </filter>
          </defs>
        </svg>

       </div>

       <div class="absolute left-0 top-[30%]">
        <svg xmlns="http://www.w3.org/2000/svg" width="407" height="823" viewBox="0 0 407 823" fill="none">
          <g filter="url(#filter0_f_47_15222)">
            <path d="M97 437C97 366.86 40.1402 310 -30 310C-100.14 310 -157 366.86 -157 437C-157 507.14 -100.14 564 -30 564C40.1402 564 97 507.14 97 437Z" fill="#E61C42" fill-opacity="0.6"/>
          </g>
          <defs>
            <filter id="filter0_f_47_15222" x="-466.8" y="0.200012" width="873.6" height="873.6" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
              <feGaussianBlur stdDeviation="154.9" result="effect1_foregroundBlur_47_15222"/>
            </filter>
          </defs>
        </svg>
       </div>
       <div class="hidden lg:block absolute left-[30%] top-[30%]">
        <svg xmlns="http://www.w3.org/2000/svg" width="821" height="744" viewBox="0 0 821 744" fill="none" class="w-max-20">
          <g filter="url(#filter0_f_47_15226)">
            <path d="M511 410.5C511 354.995 466.005 310 410.5 310C354.995 310 310 354.995 310 410.5C310 466.005 354.995 511 410.5 511C466.005 511 511 466.005 511 410.5Z" fill="#E61C42"/>
          </g>
          <defs>
            <filter id="filter0_f_47_15226" x="0.200012" y="0.200012" width="820.6" height="820.6" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
              <feGaussianBlur stdDeviation="154.9" result="effect1_foregroundBlur_47_15226"/>
            </filter>
          </defs>
        </svg>
       </div>

       
    </section>

    <!-- HOME COUNTS -->
    <div
      class="bg-gradient-to-l from-[#E61C42] to-[#61268F] lg:py-12 py-10 relative max-w-full overflow-hidden"
    >
      <div
        class="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"
      >
        <!-- Count Item 1 -->
        <div class="flex flex-col items-center">
          <h3
            class="text-medium font-bold text-white font-urbanist my-3 text-center"
          >
            500+
          </h3>
          <h3 class="text-xl font-normal text-white text-center">
            Successful AI-driven projects
          </h3>
        </div>

        <!-- Count Item 2 -->
        <div class="flex flex-col items-center">
          <h3
            class="text-medium font-bold text-white font-urbanist my-3 text-center"
          >
            11+
          </h3>
          <h3 class="text-xl font-normal text-white text-center">
            Year of expertise in delivering AI Solutions
          </h3>
        </div>

        <!-- Count Item 3 -->
        <div class="flex flex-col items-center">
          <h3
            class="text-medium font-bold text-white font-urbanist my-3 text-center"
          >
            40+
          </h3>
          <h3 class="text-xl font-normal text-white text-center">
            AI, ML, and data tools mastered
          </h3>
        </div>

        <!-- Count Item 4 -->
        <div class="flex flex-col items-center">
          <h3
            class="text-medium font-bold text-white font-urbanist my-3 text-center"
          >
            200+
          </h3>
          <h3 class="text-xl font-normal text-white text-center">
            Dedicated AI experts
          </h3>
        </div>
      </div>

      <!-- Decorative Circles -->
      <!-- <div class="absolute top-0 right-0 opacity-10">
        <svg
          width="428"
          height="466"
          viewBox="0 0 428 466"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="473"
            cy="330"
            r="472"
            stroke="white"
            stroke-width="2"
          ></circle>
        </svg>
      </div> -->
      <!-- <div class="absolute bottom-0 left-[10%] opacity-10">
        <svg
          width="851"
          height="220"
          viewBox="0 0 851 220"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="425.5"
            cy="425.5"
            r="424.5"
            stroke="white"
            stroke-width="2"
          ></circle>
        </svg>
      </div> -->
      <!-- <div class="absolute top-0 left-0 opacity-10">
        <svg
          width="280"
          height="246"
          viewBox="0 0 280 246"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="-26.5"
            cy="-60.5"
            r="305.5"
            stroke="white"
            stroke-width="2"
          ></circle>
        </svg>
      </div> -->
      <div class="absolute top-0 left-0">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="288"
          height="187"
          viewBox="0 0 288 187"
          fill="none"
        >
          <path
            opacity="0.6"
            d="M-6.00009 77.3586C14.732 155.567 96.0211 201.874 175.564 180.788C255.107 159.702 302.783 79.2084 282.051 0.999952"
            stroke="#9A9A9A"
          />
        </svg>
      </div>
      <div class="absolute bottom-0 left-[50%]">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="315"
          height="137"
          viewBox="0 0 315 137"
          fill="none"
        >
          <path
            opacity="0.4"
            d="M313.975 150.186C313.975 67.7929 243.913 1 157.487 1C71.0618 1 1 67.7929 1 150.186"
            stroke="#9A9A9A"
          />
        </svg>
      </div>
      <div class="absolute top-0 right-0">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="300"
          height="190"
          viewBox="0 0 300 190"
          fill="none"
        >
          <path
            opacity="0.5"
            d="M5.38462 0.521899C-15.527 80.374 33.3583 162.348 114.573 183.617C195.788 204.885 278.578 157.394 299.489 77.5419"
            stroke="#9A9A9A"
          />
        </svg>
      </div>
      <!-- <div class="absolute top-0 left-[30%] opacity-10">
        <svg
          width="697"
          height="168"
          viewBox="0 0 697 168"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="348.5"
            cy="-180.5"
            r="347.5"
            stroke="white"
            stroke-width="2"
          ></circle>
        </svg>
      </div> -->
    </div>

    <!-- OUR PROCESS -->
    <section class="bg-landingGen py-16 lg:py-24 bg-cover">
      <div class="container">
        <div class="flex items-end justify-between mt-6 mb-3">
          <!-- Heading -->
          <div class="flex flex-col gap-3 w-full">

            <div class="text-md font-semibold text-[#656565]">OUR PROCESS</div>
        
              <div
                class="text-4xl md:gap-3 items-center font-bold text-black1 font-urbanist leading-snug tracking-[0.5px]"
              >
         
                <span class="text-gradient">Automate and Scale</span>
                Your Business With Us 
              </div>
           
          </div>
        </div>

        <!-- Consulting Cards -->
        <div
          id="consulting-cards"
          class="flex flex-col lg:flex-row justify-center bg-white mt-8"
        >
          <!-- Step 1 -->
          <div
            class="card w-full lg:w-1/3 p-6 border-2 border-transparent bg-zinc-50 rounded-md"
            style="border-radius: 12px;
background: linear-gradient(142deg, #FFF 0%, #E0FAFF 99.14%);"
          >
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-black2 font-light text-sm">Step 1</h3>
                <h3 class="text-black2 font-bold font-urbanist text-xl">
                  Evaluate
                </h3>
              </div>
              <!-- ArrowRight SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M29.4825 18.7501H6.25C5.91848 18.7501 5.60054 18.8818 5.36612 19.1162C5.1317 19.3507 5 19.6686 5 20.0001C5 20.3316 5.1317 20.6496 5.36612 20.884C5.60054 21.1184 5.91848 21.2501 6.25 21.2501H29.4825L20.365 30.3651C20.1303 30.5998 19.9984 30.9182 19.9984 31.2501C19.9984 31.5821 20.1303 31.9004 20.365 32.1351C20.5997 32.3698 20.9181 32.5017 21.25 32.5017C21.5819 32.5017 21.9003 32.3698 22.135 32.1351L33.385 20.8851C33.5014 20.769 33.5938 20.6311 33.6568 20.4792C33.7198 20.3273 33.7522 20.1645 33.7522 20.0001C33.7522 19.8357 33.7198 19.6729 33.6568 19.521C33.5938 19.3692 33.5014 19.2312 33.385 19.1151L22.135 7.86511C21.9003 7.6304 21.5819 7.49854 21.25 7.49854C20.9181 7.49854 20.5997 7.6304 20.365 7.86511C20.1303 8.09983 19.9984 8.41817 19.9984 8.75011C19.9984 9.08205 20.1303 9.4004 20.365 9.63511L29.4825 18.7501Z" fill="url(#paint0_linear_2_437)"/>
                <defs>
                  <linearGradient id="paint0_linear_2_437" x1="33.7522" y1="20.0001" x2="5" y2="20.0001" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF00E1"/>
                    <stop offset="1" stop-color="#000DFF"/>
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="grid grid-cols-2 gap-1 mt-4">
              <div class="p-3 bg-[#F7F7F7] h-36">
                <!-- AccordianArrow SVG -->
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-4">
                  Analyze your current business processes, data infrastructure, and Generative AI capabilities to identify strengths and gaps.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-4">
                  Pinpoint-tailored Generative AI use cases that promise maximum ROI and competitive advantage.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-4">
                  Conduct stakeholder interviews and system audits to uncover hidden challenges and opportunities.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-4">
                  Establish precise success metrics to measure the impact of Generative AI and guide project milestones.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div
            class="card w-full lg:w-1/3 p-6 border-2 border-transparent rounded-md"
            style="background: linear-gradient(142deg, #FFF 0%, #D4D6FF 99.14%);"
          >
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-black2 font-light text-sm">Step 2</h3>
                <h3 class="text-black2 font-bold font-urbanist text-xl">
                  Explore
                </h3>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M29.4825 18.7501H6.25C5.91848 18.7501 5.60054 18.8818 5.36612 19.1162C5.1317 19.3507 5 19.6686 5 20.0001C5 20.3316 5.1317 20.6496 5.36612 20.884C5.60054 21.1184 5.91848 21.2501 6.25 21.2501H29.4825L20.365 30.3651C20.1303 30.5998 19.9984 30.9182 19.9984 31.2501C19.9984 31.5821 20.1303 31.9004 20.365 32.1351C20.5997 32.3698 20.9181 32.5017 21.25 32.5017C21.5819 32.5017 21.9003 32.3698 22.135 32.1351L33.385 20.8851C33.5014 20.769 33.5938 20.6311 33.6568 20.4792C33.7198 20.3273 33.7522 20.1645 33.7522 20.0001C33.7522 19.8357 33.7198 19.6729 33.6568 19.521C33.5938 19.3692 33.5014 19.2312 33.385 19.1151L22.135 7.86511C21.9003 7.6304 21.5819 7.49854 21.25 7.49854C20.9181 7.49854 20.5997 7.6304 20.365 7.86511C20.1303 8.09983 19.9984 8.41817 19.9984 8.75011C19.9984 9.08205 20.1303 9.4004 20.365 9.63511L29.4825 18.7501Z" fill="url(#paint0_linear_2_461)"/>
                <defs>
                  <linearGradient id="paint0_linear_2_461" x1="33.7522" y1="20.0001" x2="5" y2="20.0001" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF00E1"/>
                    <stop offset="1" stop-color="#000DFF"/>
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="grid grid-cols-2 gap-1 mt-4">
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-2">
                  Develop functional prototypes that leverage a variety of advanced Generative AI models tailored to your specific needs.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-2">
                  Fine-tune LLMs and craft targeted prompts for optimal accuracy and relevance.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-2">
                  Create use-case-driven designs focusing on hyper-personalized user experiences and natural conversation flows.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-2">
                  Validate prototypes against business objectives to ensure alignment before full-scale deployment.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div
            class="card w-full lg:w-1/3 p-6 border-2 border-transparent rounded-md"
            style="background: linear-gradient(142deg, #FFF 0%, #FFDDFB 99.14%);"
          >
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-black2 font-light text-sm">Step 3</h3>
                <h3 class="text-black2 font-bold font-urbanist text-xl">
                  Execute
                </h3>
              </div>
              <!-- Refresh SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1166 4.11654C14.351 3.88246 14.6687 3.75098 14.9999 3.75098C15.3312 3.75098 15.6489 3.88246 15.8833 4.11654L19.2166 7.44988C19.3912 7.62469 19.5101 7.84732 19.5582 8.08965C19.6063 8.33198 19.5816 8.58314 19.4871 8.81142C19.3925 9.03969 19.2325 9.23483 19.0271 9.3722C18.8218 9.50956 18.5803 9.58299 18.3333 9.58321H14.9999C12.2372 9.58321 9.58773 10.6807 7.63422 12.6342C5.68072 14.5877 4.58325 17.2372 4.58325 19.9999C4.58325 22.7625 5.68072 25.4121 7.63422 27.3656C9.58773 29.3191 12.2372 30.4165 14.9999 30.4165H15.8333C16.1648 30.4165 16.4827 30.5482 16.7171 30.7827C16.9516 31.0171 17.0833 31.335 17.0833 31.6665C17.0833 31.9981 16.9516 32.316 16.7171 32.5504C16.4827 32.7848 16.1648 32.9165 15.8333 32.9165H14.9999C11.5742 32.9165 8.2888 31.5557 5.86646 29.1333C3.44411 26.711 2.08325 23.4256 2.08325 19.9999C2.08325 16.5742 3.44411 13.2888 5.86646 10.8664C8.2888 8.44407 11.5742 7.08321 14.9999 7.08321H15.3166L14.1166 5.88321C13.8825 5.64883 13.751 5.33113 13.751 4.99988C13.751 4.66863 13.8825 4.35092 14.1166 4.11654ZM22.9166 8.33321C22.9166 8.00169 23.0483 7.68375 23.2827 7.44933C23.5171 7.21491 23.8351 7.08321 24.1666 7.08321H24.9999C28.4256 7.08321 31.711 8.44407 34.1334 10.8664C36.5557 13.2888 37.9166 16.5742 37.9166 19.9999C37.9166 23.4256 36.5557 26.711 34.1334 29.1333C31.711 31.5557 28.4256 32.9165 24.9999 32.9165H24.6833L25.8833 34.1165C26.0061 34.231 26.1046 34.369 26.1729 34.5223C26.2412 34.6756 26.2779 34.8412 26.2809 35.009C26.2839 35.1768 26.253 35.3436 26.1901 35.4992C26.1273 35.6549 26.0337 35.7962 25.915 35.9149C25.7963 36.0336 25.6549 36.1272 25.4992 36.1901C25.3436 36.2529 25.1769 36.2838 25.0091 36.2809C24.8412 36.2779 24.6757 36.2412 24.5224 36.1728C24.369 36.1045 24.231 36.006 24.1166 35.8832L20.7833 32.5499C20.6087 32.3751 20.4898 32.1524 20.4416 31.9101C20.3935 31.6678 20.4183 31.4166 20.5128 31.1883C20.6073 30.9601 20.7673 30.7649 20.9727 30.6276C21.1781 30.4902 21.4195 30.4168 21.6666 30.4165H24.9999C27.7626 30.4165 30.4121 29.3191 32.3656 27.3656C34.3191 25.4121 35.4166 22.7625 35.4166 19.9999C35.4166 17.2372 34.3191 14.5877 32.3656 12.6342C30.4121 10.6807 27.7626 9.58321 24.9999 9.58321H24.1666C23.8351 9.58321 23.5171 9.45151 23.2827 9.21709C23.0483 8.98267 22.9166 8.66473 22.9166 8.33321Z" fill="url(#paint0_linear_2_485)"/>
                <defs>
                  <linearGradient id="paint0_linear_2_485" x1="37.9166" y1="20.016" x2="2.08325" y2="20.016" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF00E1"/>
                    <stop offset="1" stop-color="#000DFF"/>
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="grid grid-cols-2 gap-1 mt-4">
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-2">
                  Integrate Generative AI models seamlessly into your existing workflows, ensuring robust, enterprise-grade scalability.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-2">
                  Manage the full deployment lifecycle, from training and testing to launch, thereby minimizing disruptions and ensuring seamless operations.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-2">
                  Track key performance indicators in real time to monitor solution effectiveness and user impact.
                </p>
              </div>
              <div class="p-3 bg-[#F7F7F7] h-36">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M12.7392 1H1V19H17.4348V13" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.69568 9.57101L9.60873 13.8567L19.0001 2.71387" stroke="#72C89A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <p class="text-xs font-normal text-grey3 mt-2">
                  Continuously improve Generative AI outputs using iterative feedback and data-driven refinements in conjunction to the business KPIs.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Talk To Us button (mobile) -->
        <div class="md:hidden w-full flex items-center justify-center mt-4">
          <button
            type="button"
            class="relative px-4 py-2 text-white font-medium rounded-lg bg-white overflow-hidden group"
          >
            <span class="relative z-10 text-blue text-nowrap">Talk To Us</span>
            <div
              class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-lg p-[1px]"
            >
              <div class="h-full w-full bg-white rounded-lg"></div>
            </div>
          </button>
        </div>
      </div>
    </section>

    <script>
      // Cycle active consulting card every 3 seconds
      (() => {
        const cards = document.querySelectorAll("#consulting-cards > div.card");
        let activeIndex = 0;

        function updateCards() {
          cards.forEach((card, i) => {
            card.classList.remove("gradient-border", "rounded-md");
            card.classList.remove("bg-zinc-50");
            if (i === activeIndex) {
              card.classList.add("gradient-border", "rounded-md");
            }
            if (activeIndex === 0 && i === cards.length - 1) {
              cards[i].classList.add("bg-zinc-50");
            } else if (activeIndex === 1 && i === 0) {
              cards[i].classList.add("bg-zinc-50");
            } else if (activeIndex === 2 && i === 1) {
              cards[i].classList.add("bg-zinc-50");
            }
          });
        }

        updateCards();

        setInterval(() => {
          activeIndex = (activeIndex + 1) % cards.length;
          updateCards();
        }, 3000);
      })();
    </script>

  <!-- POWERED TECHNOLOGIES -->
<section class="bg-powered py-16 lg:py-24 bg-cover bg-no-repeat">
  <div class="container">
    <!-- Heading -->
    <div class="w-full flex flex-col gap-3 items-start">
      <div class="text-md font-semibold text-[#656565]">TECHNOLOGY WE USE</div>
      <h2 class="text-4xl font-bold text-black1 font-urbanist leading-snug tracking-[0.5px] w-full md:gap-3">
        Our Cutting-Edge 
        <span class="text-gradient">Technology Stack</span>
      </h2>
      <p class="capitalize mb-4 md:mb-0 text-base font-light text-grey1 mt-2 md:w-8/12 tracking-[0.25px] pr-5">
        With our cutting-edge technology stack, we tailor innovative AI solutions to match your specific business problems.
      </p>
    </div>

    <!-- Swiper Carousel -->
    <div class="swiper mySwiper mt-10 border-2 border-[#99899d] rounded-[30px]">
      <div class="swiper-wrapper">

        <!-- Slide 1: AI & ML Frameworks -->
        <div class="swiper-slide">
          <div class="flex flex-col w-full items-center gap-5 py-20 px-5">
            <div class="font-bold text-3xl text-center">AI & ML Frameworks</div>
            <div class="flex flex-wrap justify-center gap-6 mt-5 max-w-[1200px] mx-auto">
              <!-- Repeat these card blocks -->
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/tensorflow.png" alt="TensorFlow" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">TensorFlow</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pytorch.png" alt="PyTorch" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">PyTorch</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scikit.png" alt="Scikit-Learn" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Scikit-Learn</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/xgboost.png" alt="XGBoost" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">XGBoost</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/lightgbm.png" alt="LightGBM" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">LightGBM</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/onnix.png" alt="ONNIX" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">ONNIX</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2: LLMs & Gen AI -->
        <div class="swiper-slide">
          <div class="flex flex-col w-full items-center gap-5 py-20 px-5">
            <div class="font-bold text-3xl text-center">Large Language Models & Generative AI</div>
            <div class="flex flex-wrap justify-center gap-6 mt-5 max-w-[1200px] mx-auto">
              <!-- Use same layout -->
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gpt4.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">GPT-4</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gpt3-5.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">GPT-3.5</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/claude.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Claude</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/llama.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Llama</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mistral.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Mistral</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/falcon.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Falcon</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cohere.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Cohere</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/palm.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Palm</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/langchain.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">LangChain</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/llamaindex.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">LlamaIndex</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3: Conversational AI -->
        <div class="swiper-slide">
          <div class="flex flex-col w-full items-center gap-5 py-20 px-5">
            <div class="font-bold text-3xl text-center">Conversational AI & Chatbots</div>
            <div class="flex flex-wrap justify-center gap-6 mt-5 max-w-[1200px] mx-auto">
              <!-- Use same layout -->
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rasa.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Rasa</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dialogflow.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">DialogFlow</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/botpress.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Botpress</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/microsoftbot.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-sm font-medium text-black2">Microsoft Bot 
                  Framework</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twilio.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">twilio</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/whatsapp-apis.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Whatsapp APIs</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/assembly-ai.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">AssemblyAI</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/deppgram.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Deepgram</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/eleven-labs.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">ElevenLabs</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/llamaindex.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">LlamaIndex</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4: AI Integration & APIs -->
        <div class="swiper-slide">
          <div class="flex flex-col w-full items-center gap-5 py-20 px-5">
            <div class="font-bold text-3xl text-center">AI Integration & APIs</div>
            <div class="flex flex-wrap justify-center gap-6 mt-5 max-w-[1200px] mx-auto">
              <!-- Use same layout -->
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/fast-api.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">FastAPI</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/flask.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Flask</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/grpc.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">GRPC</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rest.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-sm font-medium text-black2">REST</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/graphql.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">GraphQL</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/langserve.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">LangServe</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/assembly-ai.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Postman</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/deppgram.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Swagger</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/eleven-labs.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Zapler</h3>
              </div>
              <div class="technology-edge w-[280px] rounded-full flex items-center gap-3 px-6 py-3 bg-white shadow-sm">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/eleven-labs.png" class="h-10 w-auto object-contain" />
                <h3 class="text-base md:text-xl font-medium text-black2">Make</h3>
              </div>
            </div>
          </div>
        </div>

      </div>
        <!-- Pagination Dots -->
  <div class="swiper-pagination mt-6 !static flex justify-center"></div>
    </div>


  </div>
</section>


    <!-- ASSISTED -->
    <div class="bg-white lg:py-28 py-12 bg-cover relative overflow-hidden">
      <img
        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/assied-circles.webp"
        alt="circles"
        class="lg:flex absolute bottom-0 left-[30%] h-[700px]"
      />
      <div class="container">
        <div class="flex items-end justify-between mt-6 mb-3">
          <div class="w-full lg:w-7/12">
            <!-- Heading -->
            <div class="w-full flex flex-wrap items-start">
              <h2
                class="text-4xl flex-wrap flex items-center md:text-medium font-bold text-black1 font-urbanist leading-snug tracking-[0.5px]"
              >
                GenAI-Enabled
                <span class="text-gradient w-full"
                  >&nbsp;Legacy System Modernization</span
                >
              </h2>
              <p
                class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-2 w-full tracking-[0.25px] pr-5"
              >
                Update and future-proof your outdated systems with AI-first
                modernization strategies from Intellivon.
              </p>
            </div>
          </div>
          <div class="hidden lg:flex">
            <!-- OutLineGradientButton -->
            <button
              class="relative px-4 py-2 text-white font-medium rounded-lg bg-white overflow-hidden group"
            >
              <span class="relative z-10 text-blue whitespace-nowrap"
                >Start Your Transformation Journey</span
              >
              <div
                class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-lg p-[1px]"
              >
                <div class="h-full w-full bg-white rounded-lg"></div>
              </div>
            </button>
          </div>
        </div>

        <div class="flex w-full items-center justify-start lg:hidden">
          <!-- OutLineGradientButton for smaller screens -->
          <button
            class="relative px-4 py-2 text-white font-medium rounded-lg bg-white overflow-hidden group"
          >
            <span class="relative z-10 text-blue whitespace-nowrap"
              >Start Your Transformation Journey</span
            >
            <div
              class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-lg p-[1px]"
            >
              <div class="h-full w-full bg-white rounded-lg"></div>
            </div>
          </button>
        </div>

        <div class="mt-16 grid grid-cols-1 lg:grid-cols-2 gap-5">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-5">
            <!-- Stat Box 1 -->
            <div class="common-whitebox2 p-6 rounded-lg">
              <h3 class="text-5xl font-normal font-urbanist text-gradient2">
                50<span class="text-2xl">%</span>
              </h3>
              <p
                class="text-xl font-medium text-black1 font-urbanist mt-8 pr-5"
              >
                Faster modernization cycle
              </p>
            </div>
            <!-- Stat Box 2 -->
            <div class="common-whitebox2 p-6 rounded-lg">
              <h3 class="text-5xl font-normal font-urbanist text-gradient2">
                30 - 40<span class="text-2xl">%</span>
              </h3>
              <p class="text-xl font-medium text-black1 font-urbanist mt-8">
                Lower engineering costs
              </p>
            </div>
            <!-- Stat Box 3 -->
            <div class="common-whitebox2 p-6 rounded-lg">
              <h3 class="text-5xl font-normal font-urbanist text-gradient2">
                80<span class="text-2xl">%</span>
              </h3>
              <p class="text-xl font-medium text-black1 font-urbanist mt-8">
                Fewer bugs and reworks
              </p>
            </div>
            <!-- Stat Box 4 -->
            <div class="common-whitebox2 p-6 rounded-lg">
              <h3 class="text-5xl font-normal font-urbanist text-gradient2">
                40<span class="text-2xl">%</span>
              </h3>
              <p
                class="text-xl font-medium text-black1 font-urbanist mt-8 pr-5"
              >
                Faster launch timelines
              </p>
            </div>
          </div>

          <!-- Testimonial Card -->
          <div
            class="common-whitebox2 px-6 pb-16 pt-20 rounded-lg flex h-fit relative w-full"
          >
            <div class="w-10 flex flex-col items-center">
              <!-- UpperQuotes SVG -->
              <svg
                width="40"
                height="40"
                viewBox="0 0 40 40"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_1_30632)">
                  <path
                    d="M23.125 22.5H33.75C34.0815 22.5 34.3995 22.3683 34.6339 22.1339C34.8683 21.8995 35 21.5815 35 21.25V11.25C35 10.9185 34.8683 10.6005 34.6339 10.3661C34.3995 10.1317 34.0815 10 33.75 10H24.375C24.0435 10 23.7255 10.1317 23.4911 10.3661C23.2567 10.6005 23.125 10.9185 23.125 11.25V25C23.125 26.6576 23.7835 28.2473 24.9556 29.4194C26.1277 30.5915 27.7174 31.25 29.375 31.25"
                    stroke="#0F1115"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M5 22.5H15.625C15.9565 22.5 16.2745 22.3683 16.5089 22.1339C16.7433 21.8995 16.875 21.5815 16.875 21.25V11.25C16.875 10.9185 16.7433 10.6005 16.5089 10.3661C16.2745 10.1317 15.9565 10 15.625 10H6.25C5.91848 10 5.60054 10.1317 5.36612 10.3661C5.1317 10.6005 5 10.9185 5 11.25V25C5 26.6576 5.65848 28.2473 6.83058 29.4194C8.00269 30.5915 9.5924 31.25 11.25 31.25"
                    stroke="#0F1115"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
                <defs>
                  <clipPath id="clip0_1_30632">
                    <rect
                      width="40"
                      height="40"
                      fill="white"
                      transform="matrix(-1 0 0 1 40 0)"
                    ></rect>
                  </clipPath>
                </defs>
              </svg>
              <div
                class="bg-gradient2 w-[2px] flex-grow"
                style="height: 120px"
              ></div>
              <!-- LowerQuotes SVG -->
              <svg
                width="40"
                height="40"
                viewBox="0 0 40 40"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="Testimony_rightQuote__AVJ_M"
              >
                <g clip-path="url(#clip0_1_30632)">
                  <path
                    d="M23.125 22.5H33.75C34.0815 22.5 34.3995 22.3683 34.6339 22.1339C34.8683 21.8995 35 21.5815 35 21.25V11.25C35 10.9185 34.8683 10.6005 34.6339 10.3661C34.3995 10.1317 34.0815 10 33.75 10H24.375C24.0435 10 23.7255 10.1317 23.4911 10.3661C23.2567 10.6005 23.125 10.9185 23.125 11.25V25C23.125 26.6576 23.7835 28.2473 24.9556 29.4194C26.1277 30.5915 27.7174 31.25 29.375 31.25"
                    stroke="#0F1115"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M5 22.5H15.625C15.9565 22.5 16.2745 22.3683 16.5089 22.1339C16.7433 21.8995 16.875 21.5815 16.875 21.25V11.25C16.875 10.9185 16.7433 10.6005 16.5089 10.3661C16.2745 10.1317 15.9565 10 15.625 10H6.25C5.91848 10 5.60054 10.1317 5.36612 10.3661C5.1317 10.6005 5 10.9185 5 11.25V25C5 26.6576 5.65848 28.2473 6.83058 29.4194C8.00269 30.5915 9.5924 31.25 11.25 31.25"
                    stroke="#0F1115"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
                <defs>
                  <clipPath id="clip0_1_30632">
                    <rect
                      width="40"
                      height="40"
                      fill="white"
                      transform="matrix(-1 0 0 1 40 0)"
                    ></rect>
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="pl-6 h-fit pt-4">
              <p
                class="font-normal text-black1 mt-5 text-base sm:text-lg md:text-xl"
              >
                Intellivon helped us migrate over a decade of legacy code in half
                the expected time. Their execution was flawless and ahead of
                schedule.
              </p>
              <p class="text-base font-semibold font-urbanist text-black1 mt-8">
                Chief Information Officer
              </p>
              <p class="text-sm font-normal mt-2 text-black1">
                Global Fintech Startup
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- OUR SOLUTIONS -->
    <div class="bg-[#f6f6f6]">
      <div class="container pt-14 pb-8 lg:pt-28 lg:pb-20">
        <!-- Heading -->
        <div class="w-full lg:w-6/12">
          <div class="w-full flex flex-wrap items-start">
            <h2
              class="text-4xl flex-wrap flex items-center md:text-medium font-bold text-black1 font-urbanist leading-snug tracking-[0.5px]"
            >
              Our AI Solutions
              <span class="text-gradient">Deliver Tangible Results</span>
            </h2>
            <p
              class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-2 w-full tracking-[0.25px] pr-5"
            >
              Tailored AI solutions that drive growth, enhance user experiences,
              and provide measurable results.
            </p>
          </div>
        </div>

        <!-- Solution Card 1 (direction right) -->
        <div
          class="bg-white blur-shadow rounded-lg mt-5 flex flex-col flex-wrap md:flex-row"
        >
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apued.webp"
            alt="AI-Enhanced UX Design"
            width="500"
            height="400"
            class="w-full p-4 md:p-0 md:w-1/2 pr-5 rounded-l-lg object-cover"
          />
          <div class="p-6 flex flex-col justify-between w-full md:w-1/2">
            <div class="w-full">
              <h3
                class="text-2xl font-bold leading-snug text-black2 w-full font-urbanist"
              >
                AI-Enhanced UX Design
              </h3>
              <p
                class="text-base font-normal text-grey3 leading-normal tracking-[0.25px] mt-5"
              >
                Know more about our ai-enhanced ux design
              </p>
            </div>
            <p
              class="text-base font-bold leading-normal text-blue tracking-[0.25px]"
            >
              Know More
            </p>
          </div>
        </div>

        <!-- Solution Card 2 (direction left) -->
        <div
          class="bg-white blur-shadow rounded-lg mt-5 flex flex-col flex-wrap md:flex-row-reverse"
        >
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aeed.webp"
            alt="GenAI-Driven Engineering"
            width="500"
            height="400"
            class="w-full p-4 md:p-0 md:w-1/2 pl-5 rounded-r-lg object-cover"
          />
          <div class="p-6 flex flex-col justify-between w-full md:w-1/2">
            <div class="w-full">
              <h3
                class="text-2xl font-bold leading-snug text-black2 w-full font-urbanist"
              >
                GenAI-Driven Engineering
              </h3>
              <p
                class="text-base font-normal text-grey3 leading-normal tracking-[0.25px] mt-5"
              >
                Know more about our genai-driven engineering
              </p>
            </div>
            <p
              class="text-base font-bold leading-normal text-blue tracking-[0.25px]"
            >
              Know More
            </p>
          </div>
        </div>

        <!-- Solution Card 3 (direction right) -->
        <div
          class="bg-white blur-shadow rounded-lg mt-5 flex flex-col flex-wrap md:flex-row"
        >
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/adbia.webp"
            alt="Business Intelligence & Predictive Analytics"
            width="500"
            height="400"
            class="w-full p-4 md:p-0 md:w-1/2 pr-5 rounded-l-lg object-cover"
          />
          <div class="p-6 flex flex-col justify-between w-full md:w-1/2">
            <div class="w-full">
              <h3
                class="text-2xl font-bold leading-snug text-black2 w-full font-urbanist"
              >
                Business Intelligence & Predictive Analytics
              </h3>
              <p
                class="text-base font-normal text-grey3 leading-normal tracking-[0.25px] mt-5"
              >
                Know more about our business intelligence & predictive analytics
              </p>
            </div>
            <p
              class="text-base font-bold leading-normal text-blue tracking-[0.25px]"
            >
              Know More
            </p>
          </div>
        </div>

        <!-- Solution Card 4 (direction left) -->
        <div
          class="bg-white blur-shadow rounded-lg mt-5 flex flex-col flex-wrap md:flex-row-reverse"
        >
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/apapo.webp"
            alt="AI-Powered Automation"
            width="500"
            height="400"
            class="w-full p-4 md:p-0 md:w-1/2 pl-5 rounded-r-lg object-cover"
          />
          <div class="p-6 flex flex-col justify-between w-full md:w-1/2">
            <div class="w-full">
              <h3
                class="text-2xl font-bold leading-snug text-black2 w-full font-urbanist"
              >
                AI-Powered Automation
              </h3>
              <p
                class="text-base font-normal text-grey3 leading-normal tracking-[0.25px] mt-5"
              >
                Know more about our ai-powered automation
              </p>
            </div>
            <p
              class="text-base font-bold leading-normal text-blue tracking-[0.25px]"
            >
              Know More
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- REVIEWS SLIDER -->

    <!-- Reviews Slider Section -->
    <div class="bg-powered py-24 bg-cover bg-no-repeat relative">
      <div class="container mx-auto px-4">
        <!-- Heading -->
        <div class="w-full max-w-7xl mx-auto">
          <div class="w-full flex flex-wrap items-start">
            <h2
              class="text-4xl flex-wrap flex items-center md:text-medium font-bold text-black1 font-urbanist leading-snug tracking-[0.5px] w-8/12"
            >
              Words of
              <span class="text-gradient pl-3">&nbsp;Happiness</span>
            </h2>
          </div>

          <!-- Slider -->
          <div class="relative w-full max-w-full mt-8 overflow-visible">
            <div class="swiper mySwiper overflow-visible relative">
              <div class="swiper-wrapper overflow-visible">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                  <div class="flex items-center justify-between">
                    <!-- Testimonial Card -->
                    <div
                      class="flex h-fit relative w-7/12 mb-24"
                      id="testimonial-1"
                    >
                      <!-- Quotes and vertical bar -->
                      <div
                        class="w-10 flex flex-col items-center mt-44 md:mt-0"
                      >
                        <!-- Upper Quotes SVG -->
                        <svg
                          width="40"
                          height="40"
                          viewBox="0 0 40 40"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g clip-path="url(#clip0_1_30632)">
                            <path
                              d="M23.125 22.5H33.75C34.0815 22.5 34.3995 22.3683 34.6339 22.1339C34.8683 21.8995 35 21.5815 35 21.25V11.25C35 10.9185 34.8683 10.6005 34.6339 10.3661C34.3995 10.1317 34.0815 10 33.75 10H24.375C24.0435 10 23.7255 10.1317 23.4911 10.3661C23.2567 10.6005 23.125 10.9185 23.125 11.25V25C23.125 26.6576 23.7835 28.2473 24.9556 29.4194C26.1277 30.5915 27.7174 31.25 29.375 31.25"
                              stroke="#0F1115"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                            <path
                              d="M5 22.5H15.625C15.9565 22.5 16.2745 22.3683 16.5089 22.1339C16.7433 21.8995 16.875 21.5815 16.875 21.25V11.25C16.875 10.9185 16.7433 10.6005 16.5089 10.3661C16.2745 10.1317 15.9565 10 15.625 10H6.25C5.91848 10 5.60054 10.1317 5.36612 10.3661C5.1317 10.6005 5 10.9185 5 11.25V25C5 26.6576 5.65848 28.2473 6.83058 29.4194C8.00269 30.5915 9.5924 31.25 11.25 31.25"
                              stroke="#0F1115"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1_30632">
                              <rect
                                width="40"
                                height="40"
                                fill="white"
                                transform="matrix(-1 0 0 1 40 0)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>

                        <div
                          class="bg-gradient2 w-[2px]"
                          style="height: 165px"
                        ></div>

                        <!-- Lower Quotes SVG -->
                        <svg
                          width="40"
                          height="40"
                          viewBox="0 0 40 40"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g clip-path="url(#clip0_1_30632)">
                            <path
                              d="M23.125 22.5H33.75C34.0815 22.5 34.3995 22.3683 34.6339 22.1339C34.8683 21.8995 35 21.5815 35 21.25V11.25C35 10.9185 34.8683 10.6005 34.6339 10.3661C34.3995 10.1317 34.0815 10 33.75 10H24.375C24.0435 10 23.7255 10.1317 23.4911 10.3661C23.2567 10.6005 23.125 10.9185 23.125 11.25V25C23.125 26.6576 23.7835 28.2473 24.9556 29.4194C26.1277 30.5915 27.7174 31.25 29.375 31.25"
                              stroke="#0F1115"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                            <path
                              d="M5 22.5H15.625C15.9565 22.5 16.2745 22.3683 16.5089 22.1339C16.7433 21.8995 16.875 21.5815 16.875 21.25V11.25C16.875 10.9185 16.7433 10.6005 16.5089 10.3661C16.2745 10.1317 15.9565 10 15.625 10H6.25C5.91848 10 5.60054 10.1317 5.36612 10.3661C5.1317 10.6005 5 10.9185 5 11.25V25C5 26.6576 5.65848 28.2473 6.83058 29.4194C8.00269 30.5915 9.5924 31.25 11.25 31.25"
                              stroke="#0F1115"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_1_30632">
                              <rect
                                width="40"
                                height="40"
                                fill="white"
                                transform="matrix(-1 0 0 1 40 0)"
                              ></rect>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>

                      <!-- Testimonial Text Content -->
                      <div class="pl-6 h-fit pt-4">
                        <div
                          class="md:hidden mb-12 flex w-full items-center relative"
                        >
                          <img
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/review.png"
                            alt="review"
                            class="h-28 w-28 z-30 relative"
                            width="112"
                            height="112"
                          />
                        </div>
                        <p
                          class="font-normal text-black1 text-xl tracking-[0.3px] leading-normal"
                        >
                          We are in the business of helping people with early
                          detection of hereditary cancer and reproductive
                          genetics. A big shout out to the team at Coditas who
                          has done a phenomenal job.
                        </p>
                        <p
                          class="text-xl md:text-2xl font-bold font-urbanist text-black1 mt-8"
                        >
                          Nitish Garg
                        </p>
                        <p class="text-base font-normal text-black1 mt-1">
                          Founder and CEO
                        </p>
                      </div>
                    </div>

                    <!-- Image on right for md+ screens -->
                    <div
                      class="md:flex hidden relative w-4/12 justify-center"
                      aria-hidden="true"
                    >
                      <img
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/review.png"
                        alt="review"
                        width="280"
                        height="100"
                        class="z-30 relative"
                      />
                    </div>
                  </div>

                  <!-- Swiper navigation buttons -->
                  <!-- <div
                    class="absolute left-[-40px] top-1/2 transform -translate-y-1/2 cursor-pointer z-20 swiper-button-prev"
                    aria-label="Previous testimonial"
                  > -->
                  <!-- Prev SVG -->
                  <!-- <svg
                      width="48"
                      height="48"
                      viewBox="0 0 48 48"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="24"
                        cy="24"
                        r="23.5"
                        transform="rotate(-180 24 24)"
                        stroke="url(#paint0_linear_1_30641)"
                      ></circle>
                      <path
                        d="M27.015 18.7614C27.1227 18.8896 27.1791 19.0281 27.1842 19.1768C27.1894 19.3255 27.1329 19.4589 27.015 19.5768L22.5765 24.0153L27.0304 28.4787C27.1381 28.58 27.1894 28.7143 27.1842 28.8816C27.1791 29.0489 27.1227 29.1864 27.015 29.2941C26.8868 29.4223 26.7509 29.4838 26.6073 29.4787C26.4637 29.4736 26.333 29.412 26.215 29.2941L21.4516 24.521C21.3747 24.4441 21.3179 24.3656 21.2814 24.2855C21.2448 24.2053 21.2266 24.1153 21.2266 24.0153C21.2266 23.9217 21.2448 23.8332 21.2814 23.7499C21.3179 23.6665 21.3747 23.5864 21.4516 23.5095L26.1996 18.7614C26.3176 18.6435 26.4509 18.5887 26.5996 18.597C26.7483 18.6053 26.8868 18.6601 27.015 18.7614Z"
                        fill="#555555"
                      ></path>
                      <defs>
                        <linearGradient
                          id="paint0_linear_1_30641"
                          x1="31.0873"
                          y1="48"
                          x2="-8.58194"
                          y2="39.348"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#AB00FF"></stop>
                          <stop offset="1" stop-color="#00C8EB"></stop>
                        </linearGradient>
                      </defs>
                    </svg> -->
                  <!-- </div> -->
                </div>

                <!-- Repeat slides for 5 items -->
              </div>

              <!-- <div
                class="absolute right-[-40px] top-1/2 transform -translate-y-1/2 cursor-pointer z-20 swiper-button-next"
                aria-label="Next testimonial"
                aria-label="Next testimonial"
              > -->
              <!-- Next SVG -->
              <!-- <svg
                  width="48"
                  height="48"
                  viewBox="0 0 48 48"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="24"
                    cy="24"
                    r="23.5"
                    stroke="url(#paint0_linear_1_30644)"
                  ></circle>
                  <path
                    d="M20.985 29.2386C20.8773 29.1104 20.8209 28.9719 20.8158 28.8232C20.8106 28.6745 20.8671 28.5411 20.985 28.4232L25.4235 23.9847L20.9696 19.5213C20.8619 19.42 20.8106 19.2857 20.8158 19.1184C20.8209 18.9511 20.8773 18.8136 20.985 18.7059C21.1132 18.5777 21.2491 18.5162 21.3927 18.5213C21.5363 18.5264 21.667 18.588 21.785 18.7059L26.5484 23.479C26.6253 23.5559 26.6821 23.6344 26.7186 23.7145C26.7552 23.7947 26.7734 23.8847 26.7734 23.9847C26.7734 24.0783 26.7552 24.1668 26.7186 24.2501C26.6821 24.3335 26.6253 24.4136 26.5484 24.4905L21.8004 29.2386C21.6824 29.3565 21.5491 29.4113 21.4004 29.403C21.2517 29.3947 21.1132 29.3399 20.985 29.2386Z"
                    fill="url(#paint1_linear_1_30644)"
                  ></path>
                  <defs>
                    <linearGradient
                      id="paint0_linear_1_30644"
                      x1="31.0872"
                      y1="48"
                      x2="-8.58194"
                      y2="39.348"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#AB00FF"></stop>
                      <stop offset="1" stop-color="#00C8EB"></stop>
                    </linearGradient>
                    <linearGradient
                      id="paint1_linear_1_30644"
                      x1="24.6741"
                      y1="29.4038"
                      x2="19.5885"
                      y2="28.7966"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#AB00FF"></stop>
                      <stop offset="1" stop-color="#00C8EB"></stop>
                    </linearGradient>
                  </defs>
                </svg> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- GET IN TOUCH -->
    <div class="counts-gradient py-28 relative overflow-hidden">
      <div
        class="container flex lg:flex-row flex-col items-center justify-between"
      >
        <h2
          class="text-4xl md:text-medium font-urbanist leading-normal font-bold text-white w-full lg:w-1/2"
        >
          Let's Start Your AI-Powered Transformation Journey
        </h2>
        <div
          class="w-full mt-12 lg:mt-0 lg:w-1/3 flex justify-between items-start py-6 px-8 rounded-2xl bg-gradient-innerdiv cursor-pointer"
        >
          <div>
            <h3 class="text-xl font-bold text-white">Contact Us Now</h3>
            <p class="text-base font-normal text-[#f4f4f4] mt-4">
              Talk to our team today and see how Intellivon can bring AI into your
              ecosystem.
            </p>
          </div>
          <svg
            width="24"
            height="20"
            viewBox="0 0 24 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="mt-1"
          >
            <path
              d="M1 10H23M23 10L14 1M23 10L14 19"
              stroke="#F4F4FA"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></path>
          </svg>
        </div>
      </div>

      <!-- Decorative SVG circles with low opacity -->
      <div class="hidden lg:flex absolute top-0 right-0 opacity-10">
        <svg
          width="428"
          height="466"
          viewBox="0 0 428 466"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="473"
            cy="330"
            r="472"
            stroke="white"
            stroke-width="2"
          ></circle>
        </svg>
      </div>
      <div class="hidden lg:flex absolute bottom-0 left-[10%] opacity-10">
        <svg
          width="851"
          height="220"
          viewBox="0 0 851 220"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="425.5"
            cy="425.5"
            r="424.5"
            stroke="white"
            stroke-width="2"
          ></circle>
        </svg>
      </div>
      <div class="hidden lg:flex absolute top-0 left-0 opacity-10">
        <svg
          width="280"
          height="246"
          viewBox="0 0 280 246"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="-26.5"
            cy="-60.5"
            r="305.5"
            stroke="white"
            stroke-width="2"
          ></circle>
        </svg>
      </div>
      <div class="hidden lg:flex absolute top-0 left-[30%] opacity-10">
        <svg
          width="697"
          height="168"
          viewBox="0 0 697 168"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="348.5"
            cy="-180.5"
            r="347.5"
            stroke="white"
            stroke-width="2"
          ></circle>
        </svg>
      </div>
    </div>

    <!-- OUR OFFICES -->
    <div>
      <div class="container flex flex-col md:flex-row items-center py-16">
        <!-- Left text content -->
        <div class="w-full md:w-1/3">
          <h2
            class="text-4xl font-bold text-black1 font-urbanist leading-snug tracking-[0.5px]"
          >
            Our <span class="text-gradient"> Offices</span>
          </h2>
          <div class="text-lg font-semibold text-black1 uppercase mt-5">
            Coming soon
          </div>
        </div>

        <!-- Right image content -->
        <div class="w-full mt-12 md:mt-0 md:w-2/3 relative">
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/map.png"
            alt="Map"
            class="w-full"
            width="500"
            height="500"
          />
        </div>
      </div>
    </div>
  

<!-- SWIPER SLIDER SCRIPTS Start-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    speed: 200, // 1 second transition between slides
    autoplay: {
      delay: 2000, // 4 seconds between slides
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }
  });
</script>
<!-- SWIPER SLIDER SCRIPTS End-->


<?php get_footer(); ?>