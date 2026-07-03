  
<?php /* Template Name: Homepage 1 Template */ ?>
<?php get_header(); ?>
<!-- Intellivon Menubar Start -->

<!-- Intellivon Menubar End -->





    <!-- BANNER (HTML + JS code) Start-->
    <section
    id="glow-section"
    class="relative px-10 md:px-20 xl:px-40 py-40 h-full w-full 
           bg-gradient-to-br from-[#0b1126] via-[#322368] to-[#0f173b]
           bg-no-repeat bg-cover bg-center"
    style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-bg.png'); overflow: visible;"

    >
      <div class="flex flex-col gap-10 lg:gap-0 xl:flex-row items-center xl:justify-between">
        <!-- Left text content -->
        <div class="w-full lg:w-5/12 text-left flex flex-col gap-5">
          <h1
            class="text-white font-bold font-urbanist text-4xl md:text-[80px] leading-[110%] lg:w-11/12 h1"
          >
            Building
            <span class="text-gradient-hero">Intelligent Solutions</span> for
            Tomorrow's Challenges
          </h1>
          <div
            class="text-white2 font-normal text-base md:text-xl mt-3 md:mt-5"
          >
            We design and develop custom AI solutions that transform how
            businesses operate, automating complex tasks and delivering insights
            with unprecedented accuracy.
          </div>
          <div class="mt-5">
            <button
              type="button"
              class="bg-[#2463eb] text-white rounded-full font-medium text-xl px-10 py-4 flex items-center justify-center"
            >
              See Demo
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="inline-block w-8 h-8 ml-2 font-bold"
                fill="none"
                viewBox="0 0 24 24"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M5 12h12" />
                <path d="M12 5l7 7-7 7" />
              </svg>
            </button>
          </div>

          <!-- Ratings -->
          <div
            class="w-full py-6 flex justify-center xl:justify-start items-center"
          >
            <div
              class="flex flex-col xl:flex-row items-center gap-3 xl:gap-0 xl:space-x-4"
            >
              <!-- Letter Circles -->
              <div class="flex items-center justify-center">
                <div
                  class="w-12 h-12 rounded-full bg-red-400 border-2 border-white flex items-center justify-center text-white font-medium text-lg shadow-md z-10"
                >
                  A
                </div>
                <div
                  class="w-12 h-12 rounded-full bg-blue border-2 border-white flex items-center justify-center text-white font-medium text-lg shadow-md -ml-3 z-20"
                >
                  B
                </div>
                <div
                  class="w-12 h-12 rounded-full bg-pink-400 border-2 border-white flex items-center justify-center text-white font-medium text-lg shadow-md -ml-3 z-30"
                >
                  C
                </div>
                <div
                  class="w-12 h-12 rounded-full bg-green-400 border-2 border-white flex items-center justify-center text-white font-medium text-lg shadow-md -ml-3 z-40"
                >
                  D
                </div>
              </div>

              <!-- Stars and Text -->
              <div
                class="flex flex-col xl:flex-row items-center gap-3 md:gap-0 xl:space-x-2"
              >
                <!-- SVG Stars -->
                <div class="flex space-x-1">
                  <!-- Repeat for 5 stars -->
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-yellow-400 fill-current"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.956a1 1 0 00.95.69h4.158c.969 0 1.371 1.24.588 1.81l-3.366 2.448a1 1 0 00-.364 1.118l1.287 3.956c.3.921-.755 1.688-1.54 1.118l-3.366-2.448a1 1 0 00-1.175 0L6.49 17.925c-.784.57-1.838-.197-1.539-1.118l1.287-3.956a1 1 0 00-.364-1.118L2.51 9.283c-.783-.57-.38-1.81.588-1.81h4.158a1 1 0 00.951-.69l1.286-3.956z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-yellow-400 fill-current"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.956a1 1 0 00.95.69h4.158c.969 0 1.371 1.24.588 1.81l-3.366 2.448a1 1 0 00-.364 1.118l1.287 3.956c.3.921-.755 1.688-1.54 1.118l-3.366-2.448a1 1 0 00-1.175 0L6.49 17.925c-.784.57-1.838-.197-1.539-1.118l1.287-3.956a1 1 0 00-.364-1.118L2.51 9.283c-.783-.57-.38-1.81.588-1.81h4.158a1 1 0 00.951-.69l1.286-3.956z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-yellow-400 fill-current"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.956a1 1 0 00.95.69h4.158c.969 0 1.371 1.24.588 1.81l-3.366 2.448a1 1 0 00-.364 1.118l1.287 3.956c.3.921-.755 1.688-1.54 1.118l-3.366-2.448a1 1 0 00-1.175 0L6.49 17.925c-.784.57-1.838-.197-1.539-1.118l1.287-3.956a1 1 0 00-.364-1.118L2.51 9.283c-.783-.57-.38-1.81.588-1.81h4.158a1 1 0 00.951-.69l1.286-3.956z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-yellow-400 fill-current"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.956a1 1 0 00.95.69h4.158c.969 0 1.371 1.24.588 1.81l-3.366 2.448a1 1 0 00-.364 1.118l1.287 3.956c.3.921-.755 1.688-1.54 1.118l-3.366-2.448a1 1 0 00-1.175 0L6.49 17.925c-.784.57-1.838-.197-1.539-1.118l1.287-3.956a1 1 0 00-.364-1.118L2.51 9.283c-.783-.57-.38-1.81.588-1.81h4.158a1 1 0 00.951-.69l1.286-3.956z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-yellow-400 fill-current"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.956a1 1 0 00.95.69h4.158c.969 0 1.371 1.24.588 1.81l-3.366 2.448a1 1 0 00-.364 1.118l1.287 3.956c.3.921-.755 1.688-1.54 1.118l-3.366-2.448a1 1 0 00-1.175 0L6.49 17.925c-.784.57-1.838-.197-1.539-1.118l1.287-3.956a1 1 0 00-.364-1.118L2.51 9.283c-.783-.57-.38-1.81.588-1.81h4.158a1 1 0 00.951-.69l1.286-3.956z"
                    />
                  </svg>
                </div>

                <!-- Text -->
                <div class="text-white/80 font-medium text-xl">
                  from 200+ clients
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right image content -->
        <!-- RIGHT PANEL (Live Demo Box) -->
        <div
          class="z-10 w-full lg:w-1/2 relative rounded-2xl bg-[rgba(15,23,43,0.6)] backdrop-blur-xl border-2 border-[#313a4b] p-6 md:p-8 flex flex-col h-full"
        >
          <!-- Live Demo badge -->
          <div
            class="absolute -top-5 -right-5 bg-[#2463eb] px-4 py-1 rounded-full text-white font-medium select-none z-10"
          >
            Live Demo
          </div>

          <div class="flex-grow">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
              <h2
                class="flex items-center gap-2 font-semibold text-white text-lg md:text-2xl"
              >
                <img
                  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/intellivon-logo-arrow.png"
                  height="42"
                  width="42"
                />
                Intellivon Dashboard
              </h2>
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
            <div id="content-agent" class="tab-content p-5 rounded-xl opacity-100">
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
            <div id="content-integration" class="tab-content hidden p-5 rounded-xl opacity-0">
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

          <!-- Footer -->
          <div
            class="mt-6 flex flex-col gap-3 md:gap-0 md:flex-row md:justify-between items-center text-gray-400 select-none"
          >
            <div class="flex items-center gap-2">
              <span
                class="w-3 h-3 rounded-full bg-green-500 inline-block"
              ></span>
              System Online
            </div>
            <button
              class="px-5 py-2 rounded-lg text-white font-semibold bg-gradient-to-r from-[rgba(124,59,175,0.3)] to-[rgba(230,28,66,0.3)] hover:from-[#3b6efb] hover:via-[#9e3efc] hover:to-[#bb33f5] transition-colors duration-300"
            >
              Request Demo
            </button>
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
          Object.keys(tabWrappers).forEach(k =>
            tabWrappers[k].classList.remove(...borderClasses[k].split(" "))
          );
          tabWrappers[key].classList.add(...borderClasses[key].split(" "));
        }, 300); // Match fade duration
      }
    
      Object.keys(tabs).forEach(key => {
        tabs[key].addEventListener("click", () => activateTab(key));
      });
    
      // Set default
      activateTab("agent");
    </script>
    <!-- BANNER (HTML + JS code) End -->










    <!-- OUR CLIENTS -->
    <section class="pt-16 pb-14 lg:pt-32 lg:pb-28 bg-[#f4f4fa]">
      <div class="container flex flex-wrap items-center">
        <!-- Left column: Heading -->
        <div class="w-full lg:w-6/12">
          <div class="w-full flex flex-wrap items-start">
            <div
              class="flex-wrap text-4xl flex items-center md:text-medium font-bold text-black1 font-urbanist leading-snug tracking-[0.5px] gap-1"
            >
              Transforming
              <span class="text-gradient">Your Business with AI</span>
            </div>
            <p
              class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-2 w-full tracking-[0.25px] pr-5 mb-12"
            >
              At Intellivon, your growth is our mission. Meaningful innovation
              starts by solving real business challenges. That’s why we deliver
              world-class AI services and enterprise-grade software solutions
              tailored specifically to your goals.
            </p>
            <p
              class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-6 w-full tracking-[0.25px] pr-5 mb-12"
            >
              Trusted by: RevCore | QuantEdge | FitNation | NeuroPulse
            </p>
          </div>
        </div>

        <!-- Right column: Image -->
        <div class="w-full lg:w-6/12">
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/transform_business.webp"
            alt="Transform Business"
            width="620"
            height="550"
            class="w-full lg:h-full lg:mb-12 xl:mb-0 object-cover object-center rounded-md transition-all duration-300"
          />
        </div>
      </div>

      <!-- Marquee logos -->
      <div
        class="mt-12 lg:mt-24 w-full overflow-hidden whitespace-nowrap relative"
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
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hyundai.webp"
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
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hyundai.webp"
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

    <!-- CONSULTING -->
    <section class="bg-landingGen py-16 lg:py-24 bg-cover">
      <div class="container">
        <div class="flex items-end justify-between mt-6 mb-3">
          <!-- Heading -->
          <div class="w-full">
            <div class="w-full flex flex-wrap items-start">
              <div
                class="text-4xl flex-wrap flex md:gap-3 items-center md:text-medium font-bold text-black1 font-urbanist leading-snug tracking-[0.5px]"
              >
                <div>Our Generative AI</div>
                <div class="text-gradient">Consulting Process</div>
              </div>
              <p
                class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-2 md:w-1/2 tracking-[0.25px] pr-5"
              >
                We work side-by-side with your team to build the right AI
                solutions that deliver tangible business outcomes.
              </p>
            </div>
          </div>
          <!-- Talk To Us button (hidden on mobile) -->
          <div class="hidden md:flex">
            <button
              type="button"
              class="relative px-4 py-2 text-white font-medium rounded-lg bg-white overflow-hidden group"
            >
              <span class="relative z-10 text-blue text-nowrap"
                >Talk To Us</span
              >
              <div
                class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-lg p-[1px]"
              >
                <div class="h-full w-full bg-white rounded-lg"></div>
              </div>
            </button>
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
          >
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-black2 font-light text-sm">Step 1</h3>
                <h3 class="text-black2 font-bold font-urbanist text-xl">
                  Evaluate
                </h3>
              </div>
              <!-- ArrowRight SVG -->
              <svg
                width="32"
                height="33"
                viewBox="0 0 32 33"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_668_43639)">
                  <path
                    d="M5 16.5H27M27 16.5L18 7.5M27 16.5L18 25.5"
                    stroke="#2C74D6"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_668_43639">
                    <rect
                      width="32"
                      height="32"
                      fill="white"
                      transform="translate(0 0.5)"
                    />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="grid grid-cols-2 gap-1 mt-4">
              <div class="p-3 bg-[#00000005] h-36">
                <!-- AccordianArrow SVG -->
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Assess your data maturity and AI readiness
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Identify areas with high ROI potential
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Conduct strategic audits to align AI with business KPIs
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Forecast cultural and operational impact of AI adoption
                </p>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div
            class="card w-full lg:w-1/3 p-6 border-2 border-transparent rounded-md"
          >
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-black2 font-light text-sm">Step 2</h3>
                <h3 class="text-black2 font-bold font-urbanist text-xl">
                  Explore
                </h3>
              </div>
              <svg
                width="32"
                height="33"
                viewBox="0 0 32 33"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_668_43639)">
                  <path
                    d="M5 16.5H27M27 16.5L18 7.5M27 16.5L18 25.5"
                    stroke="#2C74D6"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_668_43639">
                    <rect
                      width="32"
                      height="32"
                      fill="white"
                      transform="translate(0 0.5)"
                    />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="grid grid-cols-2 gap-1 mt-4">
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Prototype solutions with the latest GenAI models
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Fine-tune LLMs, design prompts, and build use-case strategies
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Target real-world applications like personalization, chatbots,
                  and analytics
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Collaborate with stakeholders to validate ideas before scaling
                </p>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div
            class="card w-full lg:w-1/3 p-6 border-2 border-transparent rounded-md"
          >
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-black2 font-light text-sm">Step 3</h3>
                <h3 class="text-black2 font-bold font-urbanist text-xl">
                  Execute
                </h3>
              </div>
              <!-- Refresh SVG -->
              <svg
                width="24"
                height="25"
                viewBox="0 0 24 25"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M17 8.50009H23M23 8.50009V2.50009M23 8.50009L19.465 4.96509C17.4178 2.91796 14.6461 1.76044 11.751 1.74359C8.8559 1.72675 6.07089 2.85192 4 4.87509M7 16.5001H1M1 16.5001V22.5001M1 16.5001L4.535 20.0351C6.58221 22.0822 9.35393 23.2397 12.249 23.2566C15.1441 23.2734 17.9291 22.1483 20 20.1251"
                  stroke="#2C74D6"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <div class="grid grid-cols-2 gap-1 mt-4">
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Deploy AI models seamlessly across workflows
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Optimize systems for scale, security, and reliability
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Monitor KPIs and iterate continuously
                </p>
              </div>
              <div class="p-3 bg-[#00000005] h-36">
                <svg
                  width="12"
                  height="8"
                  viewBox="0 0 12 8"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="inline-block"
                >
                  <path
                    d="M11 1L5 7L1 3"
                    stroke="#BEBEBE"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <p class="text-sm font-normal text-grey3 mt-4">
                  Train your team to use and expand AI adoption confidently
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
        <div class="w-full flex flex-wrap items-start">
          <h2
            class="text-4xl flex-wrap flex items-center md:text-medium font-bold text-black1 font-urbanist leading-snug tracking-[0.5px] w-full md:gap-3"
          >
            Powered By
            <span class="text-gradient">Cutting-Edge Technologies</span>
          </h2>
          <p
            class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-2 md:w-8/12 tracking-[0.25px] pr-5"
          >
            We work with top-tier technologies to engineer best-in-class AI
            products for businesses of all sizes:
          </p>
        </div>

        <!-- Technologies list -->
        <div class="flex flex-wrap w-full items-center gap-5 mt-5">
          <div
            class="technology-edge w-full lg:w-auto rounded-full flex items-center gap-3"
          >
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gpt.svg" alt="GPT" height="40" width="40" />
            <div>
              <h3 class="text-base md:text-xl font-bold text-black2">
                GPT (OpenAI): GPT-4, ChatGPT, DALL-E, Whisper
              </h3>
            </div>
          </div>

          <div
            class="technology-edge w-full lg:w-auto rounded-full flex items-center gap-3"
          >
            <img
              src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/llm.webp"
              alt="LLM Fine-Tuning"
              height="40"
              width="40"
            />
            <div>
              <h3 class="text-base md:text-xl font-bold text-black2">
                LLM Fine-Tuning
              </h3>
            </div>
          </div>

          <div
            class="technology-edge w-full lg:w-auto rounded-full flex items-center gap-3"
          >
            <img
              src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/agents&copilots.webp"
              alt="AI Agents and Copilots"
              height="40"
              width="40"
            />
            <div>
              <h3 class="text-base md:text-xl font-bold text-black2">
                AI Agents and Copilots
              </h3>
            </div>
          </div>

          <div
            class="technology-edge w-full lg:w-auto rounded-full flex items-center gap-3"
          >
            <img
              src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ml.webp"
              alt="Machine Learning Integration"
              height="40"
              width="40"
            />
            <div>
              <h3 class="text-base md:text-xl font-bold text-black2">
                Machine Learning Integration
              </h3>
            </div>
          </div>

          <div
            class="technology-edge w-full lg:w-auto rounded-full flex items-center gap-3"
          >
            <img
              src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aws-cloud.webp"
              alt="Aws Cloud"
              height="40"
              width="40"
            />
            <div>
              <h3 class="text-base md:text-xl font-bold text-black2">
                Aws Cloud
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- GEN AI SERVICES -->
    <div class="bg-white">
      <div
        class="container flex flex-col lg:flex-row items-center justify-between lg:py-28 py-16"
      >
        <!-- Left content -->
        <div class="w-full lg:w-5/12 pr-5">
          <div class="w-full flex flex-wrap items-start">
            <h2
              class="text-4xl flex-wrap flex items-center md:text-medium font-bold text-black1 font-urbanist leading-snug tracking-[0.5px] w-full"
            >
              Our GenAI
              <span class="text-gradient pl-3">Services</span>
            </h2>
            <p
              class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-2 w-full tracking-[0.25px] pr-5 mb-12"
            >
              Our expert GenAI consultants collaborate with you to create
              tailored AI solutions. Whether it's integrating AI with your data,
              building custom AI tools, automating tasks, or enhancing customer
              engagement with chatbots, we are here to help.
            </p>
          </div>
          <div class="mt-10 mb-4">
            <button
              type="button"
              class="relative px-4 py-2 text-white font-medium rounded-lg bg-white overflow-hidden group"
            >
              <span class="relative z-10 text-blue text-nowrap"
                >Let's Partner Up</span
              >
              <div
                class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-lg p-[1px]"
              >
                <div class="h-full w-full bg-white rounded-lg"></div>
              </div>
            </button>
          </div>
        </div>

        <!-- Right content: grid of service cards -->
        <div
          class="w-full lg:w-7/12 grid grid-cols-2 lg:grid-cols-3 gap-2 relative"
        >
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gradient-cricles.webp"
            alt="circles"
            class="absolute left-0 bottom-0 h-[700px]"
          />
          <div class="common-whitebox p-6">
            <h3 class="text-2xl font-normal font-urbanist text-gradient2">
              01
            </h3>
            <h3
              class="text-xl font-bold text-black2 font-urbanist mt-4 lg:mt-8 pr-5"
            >
              Generative AI Tools
            </h3>
            <p class="text-sm font-normal text-grey3 mt-3">
              Automate creativity and content generation with LLM-powered apps.
            </p>
          </div>
          <div class="common-whitebox p-6">
            <h3 class="text-2xl font-normal font-urbanist text-gradient2">
              02
            </h3>
            <h3
              class="text-xl font-bold text-black2 font-urbanist mt-4 lg:mt-8 pr-5"
            >
              Data + AI Integration
            </h3>
            <p class="text-sm font-normal text-grey3 mt-3">
              Connect data pipelines and models to generate actionable insights.
            </p>
          </div>
          <div class="common-whitebox p-6">
            <h3 class="text-2xl font-normal font-urbanist text-gradient2">
              03
            </h3>
            <h3
              class="text-xl font-bold text-black2 font-urbanist mt-4 lg:mt-8 pr-5"
            >
              Custom AI Engineering
            </h3>
            <p class="text-sm font-normal text-grey3 mt-3">
              Design and develop AI solutions tailored to your business logic.
            </p>
          </div>
          <div class="common-whitebox p-6">
            <h3 class="text-2xl font-normal font-urbanist text-gradient2">
              04
            </h3>
            <h3
              class="text-xl font-bold text-black2 font-urbanist mt-4 lg:mt-8 pr-5"
            >
              Autonomous AI Agents
            </h3>
            <p class="text-sm font-normal text-grey3 mt-3">
              Deploy agents that handle complex tasks and decision-making.
            </p>
          </div>
          <div class="common-whitebox p-6">
            <h3 class="text-2xl font-normal font-urbanist text-gradient2">
              05
            </h3>
            <h3
              class="text-xl font-bold text-black2 font-urbanist mt-4 lg:mt-8 pr-5"
            >
              Chatbots & Conversational AI
            </h3>
            <p class="text-sm font-normal text-grey3 mt-3">
              Deliver responsive, natural conversations that improve engagement.
            </p>
          </div>
          <div class="common-whitebox p-6">
            <h3 class="text-2xl font-normal font-urbanist text-gradient2">
              06
            </h3>
            <h3
              class="text-xl font-bold text-black2 font-urbanist mt-4 lg:mt-8 pr-5"
            >
              Knowledge Optimization
            </h3>
            <p class="text-sm font-normal text-grey3 mt-3">
              Use AI to index, retrieve, and optimize your organizational
              knowledge base.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- OUR CAPABILITIES -->
    <section class="bg-capabilities pt-24 w-full bg-cover">
      <div class="container">
        <div class="flex items-end justify-between mt-6 mb-3">
          <div class="w-full md:w-6/12">
            <div class="w-full flex flex-wrap items-start">
              <h2
                class="text-4xl flex-wrap gap-3 flex items-center md:text-medium font-bold text-black1 font-urbanist leading-snug tracking-[0.5px]"
              >
                <div>
                  Unlock the Future of AI with
                </div>
                <div class="text-gradient">Our Capabilities</div>
              </h2>
              <p
                class="mb-4 md:mb-0 text-base font-normal text-grey1 mt-2 w-full tracking-[0.25px] pr-5"
              >
                We are committed to helping you leverage AI and ML technologies
                for sustainable business growth:
              </p>
            </div>
          </div>

          <div class="hidden md:flex">
            <button
              type="button"
              class="relative px-4 py-2 text-white font-medium rounded-lg bg-white overflow-hidden group"
            >
              <span class="relative z-10 text-blue text-nowrap"
                >Know More About Our Capabilities</span
              >
              <div
                class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-lg p-[1px]"
              >
                <div class="h-full w-full bg-white rounded-lg"></div>
              </div>
            </button>
          </div>
        </div>

        <div class="flex md:hidden">
          <button
            type="button"
            class="relative px-4 py-2 text-white font-medium rounded-lg bg-white overflow-hidden group"
          >
            <span class="relative z-10 text-blue text-nowrap"
              >Know More About Our Capabilities</span
            >
            <div
              class="absolute inset-0 bg-gradient-to-l from-[#ab00ff] via-[#7000eb] to-[#00c8eb] rounded-lg p-[1px]"
            >
              <div class="h-full w-full bg-white rounded-lg"></div>
            </div>
          </button>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-5">
          <!-- Card 1 -->
          <div
            class="bg-white p-6 shadow-[0_24px_34px_0_rgba(0,0,0,.078)] relative z-20 rounded-md"
          >
            <!-- Capa1 SVG -->
            <svg
              width="36"
              height="36"
              viewBox="0 0 36 36"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g clip-path="url(#clip0_528_30578)">
                <path
                  d="M28.125 21.375L22.5 27L13.5 24.75L5.62501 19.125M28.125 21.375L22.5 16.875C19.8281 19.5652 16.4855 19.6734 14.0231 18.0998C13.8805 18.0097 13.76 17.8885 13.6705 17.7454C13.581 17.6023 13.5249 17.4409 13.5063 17.2732C13.4876 17.1055 13.507 16.9357 13.5628 16.7765C13.6187 16.6172 13.7097 16.4726 13.8291 16.3533L20.25 10.125H25.875M28.125 21.375L30.375 19.125M5.62501 19.125L1.74658 17.1858C1.48001 17.0522 1.2774 16.8182 1.18327 16.5352C1.08913 16.2523 1.11117 15.9436 1.24454 15.6769L4.83329 8.49656C4.89946 8.36439 4.99102 8.24656 5.10274 8.14979C5.21447 8.05302 5.34416 7.97921 5.48442 7.93259C5.62468 7.88597 5.77276 7.86744 5.92018 7.87807C6.0676 7.8887 6.21148 7.92827 6.34361 7.99453L10.2206 9.93234M5.62501 19.125L10.2206 9.93234M10.2206 9.93234L18 7.875L25.7794 9.93234M25.7794 9.93234L29.6564 7.99453C29.7885 7.92827 29.9324 7.8887 30.0798 7.87807C30.2273 7.86744 30.3753 7.88597 30.5156 7.93259C30.6559 7.97921 30.7856 8.05302 30.8973 8.14979C31.009 8.24656 31.1006 8.36439 31.1667 8.49656L34.7555 15.6769C34.8889 15.9436 34.9109 16.2523 34.8168 16.5352C34.7226 16.8182 34.52 17.0522 34.2535 17.1858L30.375 19.125M25.7794 9.93234L30.375 19.125M17.4459 30.375L11.5791 28.9083L7.87501 26.2617"
                  stroke="url(#paint0_linear_528_30578)"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </g>
              <defs>
                <linearGradient
                  id="paint0_linear_528_30578"
                  x1="1.12573"
                  y1="7.875"
                  x2="37.9867"
                  y2="15.6849"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
                <clipPath id="clip0_528_30578">
                  <rect width="36" height="36" fill="white" />
                </clipPath>
              </defs>
            </svg>
            <h3
              class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
            >
              AI/ML Strategy Consulting
            </h3>
            <p
              class="text-sm xl:text-base font-normal text-grey1 tracking-[0.5px]"
            >
              Expert guidance through AI implementation, R&D, and strategic
              planning.
            </p>
          </div>

          <!-- Card 2 -->
          <div
            class="bg-white p-6 shadow-[0_24px_34px_0_rgba(0,0,0,.078)] relative z-20 rounded-md"
          >
            <!-- Capa2 SVG -->
            <svg
              width="35"
              height="25"
              viewBox="0 0 35 25"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M30.6368 16.3168L27.5258 19.7407M3.5 18.625V4C3.5 3.40326 3.73705 2.83097 4.15901 2.40901C4.58097 1.98705 5.15326 1.75 5.75 1.75H26C26.5967 1.75 27.169 1.98705 27.591 2.40901C28.0129 2.83097 28.25 3.40326 28.25 4V10.0634M21.5 18.625H1.25V20.875C1.25 21.4717 1.48705 22.044 1.90901 22.466C2.33097 22.8879 2.90326 23.125 3.5 23.125H26M13.625 6.12585L11.375 8.93835L13.625 11.7509M18.125 6.12585L20.375 8.93835L18.125 11.7509M22.7722 15.3393L22.6473 12.7318C22.6414 12.608 22.6849 12.4869 22.7682 12.3952C22.8516 12.3034 22.968 12.2486 23.0917 12.2426L25.6993 12.1178C25.8229 12.1119 25.9438 12.1553 26.0355 12.2385L33.5754 19.0892C33.667 19.1726 33.7218 19.2889 33.7278 19.4126C33.7337 19.5364 33.6902 19.6574 33.607 19.7491L31.1261 22.4814C31.0427 22.5731 30.9264 22.6279 30.8027 22.6339C30.6789 22.6398 30.5579 22.5963 30.4662 22.513L22.9245 15.6624C22.833 15.5791 22.7782 15.4629 22.7722 15.3393Z"
                stroke="url(#paint0_linear_2565_34346)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2565_34346"
                  x1="1.25"
                  y1="1.75"
                  x2="36.6837"
                  y2="9.35514"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
              </defs>
            </svg>
            <h3
              class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
            >
              PoC & MVP Development
            </h3>
            <p
              class="text-sm xl:text-base font-normal text-grey1 tracking-[0.5px]"
            >
              Validate your AI app’s feasibility and develop essential MVP
              features for market validation.
            </p>
          </div>

          <!-- Card 3 -->
          <div
            class="bg-white p-6 shadow-[0_24px_34px_0_rgba(0,0,0,.078)] relative z-20 rounded-md"
          >
            <!-- Capa3 SVG -->
            <svg
              width="29"
              height="29"
              viewBox="0 0 29 29"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.625 4.875L24.125 9.375M26.375 15V26.25C26.375 26.5484 26.2565 26.8345 26.0455 27.0455C25.8345 27.2565 25.5484 27.375 25.25 27.375H2.75C2.45163 27.375 2.16548 27.2565 1.95451 27.0455C1.74353 26.8345 1.625 26.5484 1.625 26.25V3.75C1.625 3.45163 1.74353 3.16548 1.95451 2.95451C2.16548 2.74353 2.45163 2.625 2.75 2.625H14M14 19.5H9.5V15L23 1.5L27.5 6L14 19.5Z"
                stroke="url(#paint0_linear_2565_34369)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2565_34369"
                  x1="1.625"
                  y1="1.5"
                  x2="30.5773"
                  y2="5.58965"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
              </defs>
            </svg>
            <h3
              class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
            >
              Custom AI App Development
            </h3>
            <p
              class="text-sm xl:text-base font-normal text-grey1 tracking-[0.5px]"
            >
              Tailor-made AI-powered apps to fit your unique business needs.
            </p>
          </div>

          <!-- Card 4 -->
          <div
            class="bg-white p-6 shadow-[0_24px_34px_0_rgba(0,0,0,.078)] relative z-20 rounded-md"
          >
            <!-- Capa6 SVG -->
            <svg
              width="26"
              height="30"
              viewBox="0 0 26 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M16.375 1.5V9.375H24.25M16.375 1.5L24.25 9.375M16.375 1.5H2.875C2.57663 1.5 2.29048 1.61853 2.07951 1.82951C1.86853 2.04048 1.75 2.32663 1.75 2.625V27.375C1.75 27.6734 1.86853 27.9595 2.07951 28.1705C2.29048 28.3815 2.57663 28.5 2.875 28.5H23.125C23.4234 28.5 23.7095 28.3815 23.9205 28.1705C24.1315 27.9595 24.25 27.6734 24.25 27.375V9.375M16.375 15L19.75 18.375L16.375 21.75M9.625 15L6.25 18.375L9.625 21.75"
                stroke="url(#paint0_linear_2565_34465)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2565_34465"
                  x1="1.75"
                  y1="1.5"
                  x2="27.0773"
                  y2="4.48134"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
              </defs>
            </svg>
            <h3
              class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
            >
              Enterprise AI Development
            </h3>
            <p
              class="text-sm xl:text-base font-normal text-grey1 tracking-[0.5px]"
            >
              Streamline processes and drive innovation with enterprise-grade
              AI.
            </p>
          </div>

          <!-- Card 5 -->
          <div
            class="bg-white p-6 shadow-[0_24px_34px_0_rgba(0,0,0,.078)] relative z-20 rounded-md"
          >
            <!-- Capa5 SVG -->
            <svg
              width="30"
              height="31"
              viewBox="0 0 30 31"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M4.875 8C3.63236 8 2.625 9.00736 2.625 10.25V26C2.625 27.2426 3.63236 28.25 4.875 28.25H25.125C26.3676 28.25 27.375 27.2426 27.375 26V10.25C27.375 9.00736 26.3676 8 25.125 8H4.875ZM0.375 10.25C0.375 7.76472 2.38972 5.75 4.875 5.75H25.125C27.6103 5.75 29.625 7.76472 29.625 10.25V26C29.625 28.4853 27.6103 30.5 25.125 30.5H4.875C2.38972 30.5 0.375 28.4853 0.375 26V10.25Z"
                fill="url(#paint0_linear_2565_34155)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.9375 20.375C9.00552 20.375 8.25 21.1305 8.25 22.0625C8.25 22.9945 9.00552 23.75 9.9375 23.75H20.0625C20.9945 23.75 21.75 22.9945 21.75 22.0625C21.75 21.1305 20.9945 20.375 20.0625 20.375H9.9375ZM6 22.0625C6 19.8879 7.76288 18.125 9.9375 18.125H20.0625C22.2371 18.125 24 19.8879 24 22.0625C24 24.2371 22.2371 26 20.0625 26H9.9375C7.76288 26 6 24.2371 6 22.0625Z"
                fill="url(#paint1_linear_2565_34155)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M17.8125 18.125C18.4338 18.125 18.9375 18.6287 18.9375 19.25V24.875C18.9375 25.4963 18.4338 26 17.8125 26C17.1912 26 16.6875 25.4963 16.6875 24.875V19.25C16.6875 18.6287 17.1912 18.125 17.8125 18.125Z"
                fill="url(#paint2_linear_2565_34155)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12.1875 18.125C12.8088 18.125 13.3125 18.6287 13.3125 19.25V24.875C13.3125 25.4963 12.8088 26 12.1875 26C11.5662 26 11.0625 25.4963 11.0625 24.875V19.25C11.0625 18.6287 11.5662 18.125 12.1875 18.125Z"
                fill="url(#paint3_linear_2565_34155)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M15 0.125C15.6213 0.125 16.125 0.62868 16.125 1.25V6.875C16.125 7.49632 15.6213 8 15 8C14.3787 8 13.875 7.49632 13.875 6.875V1.25C13.875 0.62868 14.3787 0.125 15 0.125Z"
                fill="url(#paint4_linear_2565_34155)"
              />
              <path
                d="M8.8125 15.875C9.74448 15.875 10.5 15.1195 10.5 14.1875C10.5 13.2555 9.74448 12.5 8.8125 12.5C7.88052 12.5 7.125 13.2555 7.125 14.1875C7.125 15.1195 7.88052 15.875 8.8125 15.875Z"
                fill="url(#paint5_linear_2565_34155)"
              />
              <path
                d="M21.1875 15.875C22.1195 15.875 22.875 15.1195 22.875 14.1875C22.875 13.2555 22.1195 12.5 21.1875 12.5C20.2555 12.5 19.5 13.2555 19.5 14.1875C19.5 15.1195 20.2555 15.875 21.1875 15.875Z"
                fill="url(#paint6_linear_2565_34155)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2565_34155"
                  x1="0.375"
                  y1="0.125"
                  x2="33.1503"
                  y2="4.5832"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
                <linearGradient
                  id="paint1_linear_2565_34155"
                  x1="0.375"
                  y1="0.125"
                  x2="33.1503"
                  y2="4.5832"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
                <linearGradient
                  id="paint2_linear_2565_34155"
                  x1="0.375"
                  y1="0.125"
                  x2="33.1503"
                  y2="4.5832"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
                <linearGradient
                  id="paint3_linear_2565_34155"
                  x1="0.375"
                  y1="0.125"
                  x2="33.1503"
                  y2="4.5832"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
                <linearGradient
                  id="paint4_linear_2565_34155"
                  x1="0.375"
                  y1="0.125"
                  x2="33.1503"
                  y2="4.5832"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
                <linearGradient
                  id="paint5_linear_2565_34155"
                  x1="0.375"
                  y1="0.125"
                  x2="33.1503"
                  y2="4.5832"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
                <linearGradient
                  id="paint6_linear_2565_34155"
                  x1="0.375"
                  y1="0.125"
                  x2="33.1503"
                  y2="4.5832"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
              </defs>
            </svg>
            <h3
              class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
            >
              AI Agent Development
            </h3>
            <p
              class="text-sm xl:text-base font-normal text-grey1 tracking-[0.5px]"
            >
              Create intelligent AI agents to enhance customer support and
              automate tasks.
            </p>
          </div>

          <!-- Card 6 -->
          <div
            class="bg-white p-6 shadow-[0_24px_34px_0_rgba(0,0,0,.078)] relative z-20 rounded-md"
          >
            <!-- Capa7 SVG -->
            <svg
              width="26"
              height="32"
              viewBox="0 0 26 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M7.37499 30.625H18.625M15.5516 6.09143V12.1767L8.80156 19.1312V25.2164M8.80156 12.8414V19.5914M13.3016 25.2164V21.8002L15.5516 19.5914M6.06718 21.4844C4.7298 20.4396 3.64655 19.1054 2.89882 17.5819C2.15108 16.0584 1.75831 14.3853 1.74999 12.6883C1.71624 6.59078 6.63249 1.51562 12.7286 1.375C15.0911 1.31777 17.4116 2.00598 19.361 3.34197C21.3103 4.67797 22.7894 6.5939 23.5884 8.81793C24.3875 11.042 24.4658 13.4611 23.8124 15.7322C23.159 18.0033 21.807 20.0109 19.9483 21.4703C19.5383 21.7882 19.2061 22.1953 18.9768 22.6606C18.7475 23.126 18.6272 23.6375 18.625 24.1562V25C18.625 25.2984 18.5065 25.5845 18.2955 25.7955C18.0845 26.0065 17.7984 26.125 17.5 26.125H8.49999C8.20162 26.125 7.91547 26.0065 7.70449 25.7955C7.49352 25.5845 7.37499 25.2984 7.37499 25V24.1562C7.37445 23.6408 7.25638 23.1322 7.02976 22.6692C6.80314 22.2062 6.47394 21.801 6.06718 21.4844ZM18.9266 17.9039C18.9266 16.9719 18.171 16.2164 17.2391 16.2164C16.3071 16.2164 15.5516 16.9719 15.5516 17.9039C15.5516 18.8359 16.3071 19.5914 17.2391 19.5914C18.171 19.5914 18.9266 18.8359 18.9266 17.9039ZM9.92656 11.1539C9.92656 10.2219 9.17104 9.46643 8.23906 9.46643C7.30708 9.46643 6.55156 10.2219 6.55156 11.1539C6.55156 12.0859 7.30708 12.8414 8.23906 12.8414C9.17104 12.8414 9.92656 12.0859 9.92656 11.1539Z"
                stroke="url(#paint0_linear_2565_39983)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2565_39983"
                  x1="1.74982"
                  y1="1.3717"
                  x2="27.1298"
                  y2="4.12926"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
              </defs>
            </svg>
            <h3
              class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
            >
              LLM Optimization
            </h3>
            <p
              class="text-sm xl:text-base font-normal text-grey1 tracking-[0.5px]"
            >
              Fine-tune language models for better performance in specialized
              fields.
            </p>
          </div>

          <!-- Card 7 -->
          <div
            class="bg-white p-6 shadow-[0_24px_34px_0_rgba(0,0,0,.078)] relative z-20 rounded-md"
          >
            <!-- Capa8 SVG -->
            <svg
              width="32"
              height="30"
              viewBox="0 0 32 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.9516 21.75C11.6496 23.7244 12.9428 25.4339 14.6529 26.6427C16.3629 27.8516 18.4058 28.5005 20.5 28.5H29.5C29.7984 28.5 30.0845 28.3815 30.2955 28.1705C30.5065 27.9595 30.625 27.6734 30.625 27.375V18.375C30.6249 15.7857 29.6328 13.2947 27.8526 11.4144C26.0725 9.53403 23.6395 8.40716 21.0541 8.26547M11.5 21.75H2.5C2.20163 21.75 1.91548 21.6315 1.7045 21.4205C1.49353 21.2095 1.375 20.9234 1.375 20.625V11.625C1.375 8.93968 2.44174 6.36435 4.34054 4.46554C6.23935 2.56674 8.81468 1.5 11.5 1.5C14.1853 1.5 16.7606 2.56674 18.6595 4.46554C20.5583 6.36435 21.625 8.93968 21.625 11.625C21.625 14.3103 20.5583 16.8856 18.6595 18.7845C16.7606 20.6833 14.1853 21.75 11.5 21.75Z"
                stroke="url(#paint0_linear_2565_34352)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2565_34352"
                  x1="1.375"
                  y1="1.5"
                  x2="33.9929"
                  y2="6.49139"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
              </defs>
            </svg>
            <h3
              class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
            >
              Generative AI Systems
            </h3>
            <p
              class="text-sm xl:text-base font-normal text-grey1 tracking-[0.5px]"
            >
              Harness powerful LLMs for advanced content generation and virtual
              assistants.
            </p>
          </div>

          <!-- Card 8 -->
          <div
            class="bg-white p-6 shadow-[0_24px_34px_0_rgba(0,0,0,.078)] relative z-20 rounded-md"
          >
            <!-- Capa9 SVG -->
            <svg
              width="32"
              height="28"
              viewBox="0 0 32 28"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M23.473 28C22.9118 28 22.4279 27.8018 22.0212 27.4053C21.6145 27.0088 21.4112 26.537 21.4112 25.9898V23.0974H17.0309C16.4697 23.0974 15.9858 22.8992 15.5791 22.5027C15.1725 22.1062 14.9691 21.6344 14.9691 21.0872V6.9025H10.6056V9.88719C10.6056 10.4344 10.4023 10.9062 9.99564 11.3027C9.58899 11.6992 9.10506 11.8974 8.54386 11.8974H2.06175C1.50054 11.8974 1.01662 11.6992 0.609971 11.3027C0.203324 10.9062 0 10.4344 0 9.88719V2.01021C0 1.46303 0.203324 0.991204 0.609971 0.594723C1.01662 0.198242 1.50054 0 2.06175 0H8.54386C9.10506 0 9.58899 0.198242 9.99564 0.594723C10.4023 0.991204 10.6056 1.46303 10.6056 2.01021V4.89229H21.4112V2.01021C21.4112 1.46303 21.6145 0.991204 22.0212 0.594723C22.4279 0.198242 22.9118 0 23.473 0H29.9382C30.4995 0 30.9834 0.198242 31.39 0.594723C31.7967 0.991204 32 1.46303 32 2.01021V9.88719C32 10.4344 31.7967 10.9062 31.39 11.3027C30.9834 11.6992 30.4995 11.8974 29.9382 11.8974H23.473C22.9118 11.8974 22.4279 11.6992 22.0212 11.3027C21.6145 10.9062 21.4112 10.4344 21.4112 9.88719V6.9025H17.0309V21.0872H21.4112V18.1025C21.4112 17.5607 21.6145 17.0902 22.0212 16.691C22.4279 16.2919 22.9118 16.0923 23.473 16.0923H29.9382C30.4995 16.0923 30.9834 16.2919 31.39 16.691C31.7967 17.0902 32 17.5607 32 18.1025V25.9898C32 26.537 31.7967 27.0088 31.39 27.4053C30.9834 27.8018 30.4995 28 29.9382 28H23.473ZM23.473 9.88719H29.9382V2.01021H23.473V9.88719ZM23.473 25.9898H29.9382V18.1025H23.473V25.9898ZM2.06175 9.88719H8.54386V2.01021H2.06175V9.88719Z"
                fill="url(#paint0_linear_2565_34344)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2565_34344"
                  x1="0"
                  y1="0"
                  x2="35.5926"
                  y2="5.74586"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FF174F" />
                  <stop offset="1" stop-color="#5B0FFE" />
                </linearGradient>
              </defs>
            </svg>
            <h3
              class="text-base xl:text-xl font-bold text-black2 leading-normal mt-8 mb-4"
            >
              Data Engineering AI
            </h3>
            <p
              class="text-sm xl:text-base font-normal text-grey1 tracking-[0.5px]"
            >
              Optimize your data lifecycle for machine learning model training
              and success.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- HOME COUNTS -->
    <div
      class="counts-gradient lg:py-28 py-16 relative max-w-full overflow-hidden"
    >
      <div
        class="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"
      >
        <!-- Count Item 1 -->
        <div class="flex flex-col items-center">
          <!-- Pencil Icon SVG -->
          <svg
            width="48"
            height="48"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_668_43872)">
              <path
                d="M39 7.5H30C29.1716 7.5 28.5 8.17157 28.5 9V39C28.5 39.8284 29.1716 40.5 30 40.5H39C39.8284 40.5 40.5 39.8284 40.5 39V9C40.5 8.17157 39.8284 7.5 39 7.5Z"
                stroke="white"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M28.5 16.5H34.5"
                stroke="white"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M28.5 24H34.5"
                stroke="white"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M28.5 31.5H34.5"
                stroke="white"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M7.5 12L13.5 6L19.5 12V39C19.5 39.3978 19.342 39.7794 19.0607 40.0607C18.7794 40.342 18.3978 40.5 18 40.5H9C8.60218 40.5 8.22064 40.342 7.93934 40.0607C7.65804 39.7794 7.5 39.3978 7.5 39V12Z"
                stroke="white"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M13.5 13.5V34.5"
                stroke="white"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M19.5 13.5H7.5"
                stroke="white"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M19.5 34.5H7.5"
                stroke="white"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
            <defs>
              <clipPath id="clip0_668_43872">
                <rect width="48" height="48" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <h3
            class="text-medium font-bold text-white font-urbanist my-3 text-center"
          >
            500+
          </h3>
          <h3 class="text-xl font-normal text-white text-center">
            Solutions engineered and delivered across industries
          </h3>
        </div>

        <!-- Count Item 2 -->
        <div class="flex flex-col items-center">
          <!-- Customer Icon SVG -->
          <svg
            width="48"
            height="48"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_668_43880)">
              <path
                d="M45 27C43.953 25.6018 42.5944 24.4671 41.032 23.6859C39.4697 22.9047 37.7467 22.4987 36 22.5C37.1221 22.4994 38.2215 22.1842 39.1734 21.5902C40.1254 20.9962 40.8916 20.1471 41.3852 19.1394C41.8789 18.1317 42.08 17.0059 41.9658 15.8896C41.8517 14.7734 41.4268 13.7115 40.7395 12.8246C40.0521 11.9377 39.1298 11.2613 38.0774 10.8722C37.0249 10.4832 35.8844 10.397 34.7855 10.6236C33.6865 10.8502 32.6731 11.3803 31.8603 12.1539C31.0476 12.9275 30.468 13.9136 30.1875 15M3 27C4.04699 25.6018 5.40562 24.4671 6.96795 23.6859C8.53029 22.9047 10.2533 22.4987 12 22.5C10.8779 22.4994 9.7785 22.1842 8.82657 21.5902C7.87464 20.9962 7.10836 20.1471 6.61475 19.1394C6.12115 18.1317 5.92 17.0059 6.03415 15.8896C6.14831 14.7734 6.57318 13.7115 7.26053 12.8246C7.94788 11.9377 8.87016 11.2613 9.92263 10.8722C10.9751 10.4832 12.1156 10.397 13.2145 10.6236C14.3135 10.8502 15.3269 11.3803 16.1397 12.1539C16.9524 12.9275 17.532 13.9136 17.8125 15M24 34.5C28.1421 34.5 31.5 31.1421 31.5 27C31.5 22.8579 28.1421 19.5 24 19.5C19.8579 19.5 16.5 22.8579 16.5 27C16.5 31.1421 19.8579 34.5 24 34.5ZM24 34.5C21.879 34.5 19.7948 35.0535 17.9533 36.1058C16.1118 37.1581 14.5768 38.6727 13.5 40.5M24 34.5C26.121 34.5 28.2052 35.0535 30.0467 36.1058C31.8882 37.1581 33.4232 38.6727 34.5 40.5"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
            <defs>
              <clipPath id="clip0_668_43880">
                <rect width="48" height="48" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <h3
            class="text-medium font-bold text-white font-urbanist my-3 text-center"
          >
            200+
          </h3>
          <h3 class="text-xl font-normal text-white text-center">
            Global clients ranging from startups to Fortune 500s
          </h3>
        </div>

        <!-- Count Item 3 -->
        <div class="flex flex-col items-center">
          <!-- Globe Icon SVG -->
          <svg
            width="48"
            height="48"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M24 4.875C20.2174 4.875 16.5198 5.99666 13.3747 8.09814C10.2296 10.1996 7.77832 13.1865 6.3308 16.6812C4.88327 20.1758 4.50453 24.0212 5.24247 27.7311C5.98042 31.441 7.8019 34.8487 10.4766 37.5234C13.1513 40.1981 16.559 42.0196 20.2689 42.7575C23.9788 43.4955 27.8242 43.1167 31.3188 41.6692C34.8134 40.2217 37.8004 37.7704 39.9019 34.6253C42.0033 31.4802 43.125 27.7826 43.125 24C43.119 18.9296 41.1022 14.0685 37.5168 10.4832C33.9315 6.89782 29.0704 4.88095 24 4.875ZM24 7.125C27.3389 7.12152 30.603 8.1138 33.375 9.975V13.875C33.3754 13.965 33.3435 14.0522 33.285 14.1206L29.1281 18.9375C29.0683 19.0073 28.9849 19.0527 28.8937 19.065L22.9931 19.875C22.8978 19.888 22.8011 19.8638 22.7231 19.8075L22.6781 19.7775L18.9844 17.3606C18.6984 17.1585 18.3748 17.0157 18.0328 16.9405C17.6907 16.8654 17.3371 16.8594 16.9927 16.923C16.6483 16.9866 16.3202 17.1185 16.0275 17.3108C15.7349 17.5032 15.4837 17.7522 15.2887 18.0431L11.3512 23.9119C11.0646 24.3396 10.9106 24.8426 10.9087 25.3575L10.875 32.1469C10.8747 32.2086 10.8591 32.2694 10.8297 32.3237C10.8002 32.378 10.7578 32.4242 10.7062 32.4581L9.76874 33.0713C8.14252 30.5203 7.23196 27.5791 7.13237 24.5555C7.03278 21.532 7.74782 18.5372 9.20265 15.8848C10.6575 13.2324 12.7986 11.0198 15.4019 9.4787C18.0051 7.93762 20.9748 7.12468 24 7.125ZM11.115 34.8844L11.9456 34.3406C12.3066 34.1024 12.6032 33.7787 12.809 33.3983C13.0147 33.0179 13.1233 32.5925 13.125 32.16L13.1644 25.3669C13.1649 25.2936 13.1864 25.2221 13.2262 25.1606L17.1637 19.2919C17.1917 19.2498 17.2279 19.2139 17.2701 19.1862C17.3123 19.1585 17.3597 19.1396 17.4094 19.1306C17.4588 19.1219 17.5096 19.1232 17.5585 19.1345C17.6075 19.1458 17.6537 19.1668 17.6944 19.1962L17.7394 19.2262L21.4331 21.6431C21.9768 22.0294 22.6476 22.1931 23.3081 22.1006L29.2087 21.3019C29.8447 21.2157 30.427 20.8995 30.8456 20.4131L35.0025 15.5831C35.4068 15.1061 35.6276 14.5003 35.625 13.875V11.7787C37.999 14.0329 39.6653 16.9296 40.4205 20.115C41.1756 23.3005 40.9869 26.6369 39.8775 29.7169L36.4275 26.5631C36.0588 26.2258 35.6014 26.0007 35.1092 25.9143C34.6169 25.828 34.1103 25.8839 33.6487 26.0756L27.9375 28.4494C27.5198 28.6251 27.1542 28.9051 26.8758 29.2626C26.5974 29.6202 26.4155 30.0432 26.3475 30.4912L25.9012 33.5269C25.8072 34.1661 25.9522 34.8176 26.3085 35.3566C26.6649 35.8956 27.2075 36.2842 27.8325 36.4481L31.8562 37.5C31.9207 37.518 31.9794 37.5522 32.0269 37.5994L32.8106 38.3831C29.374 40.4926 25.2948 41.2997 21.3139 40.6577C17.3329 40.0157 13.7142 37.9673 11.115 34.8844ZM34.6687 37.065L33.6206 36.0131C33.291 35.6831 32.8794 35.4469 32.4281 35.3288L28.4044 34.2731C28.315 34.2496 28.2374 34.194 28.1865 34.1168C28.1357 34.0396 28.1151 33.9464 28.1287 33.855L28.5769 30.8194C28.5861 30.7552 28.6119 30.6945 28.6517 30.6432C28.6915 30.5919 28.7439 30.5518 28.8037 30.5269L34.5131 28.1531C34.5791 28.1256 34.6516 28.1175 34.722 28.1298C34.7924 28.1421 34.8579 28.1742 34.9106 28.2225L38.9156 31.8862C37.8569 33.8767 36.4133 35.637 34.6687 37.065Z"
              fill="white"
            />
          </svg>
          <h3
            class="text-medium font-bold text-white font-urbanist my-3 text-center"
          >
            50 M+
          </h3>
          <h3 class="text-xl font-normal text-white text-center">
            Users impacted by our solutions
          </h3>
        </div>

        <!-- Count Item 4 -->
        <div class="flex flex-col items-center">
          <!-- Devices Icon SVG -->
          <svg
            width="48"
            height="48"
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_668_43896)">
              <path
                d="M24 39H16.5M30 33H7.5C6.70435 33 5.94129 32.6839 5.37868 32.1213C4.81607 31.5587 4.5 30.7956 4.5 30V12C4.5 11.2044 4.81607 10.4413 5.37868 9.87868C5.94129 9.31607 6.70435 9 7.5 9H34.5C35.2956 9 36.0587 9.31607 36.6213 9.87868C37.1839 10.4413 37.5 11.2044 37.5 12V15M36 21H39M45 18V36C45 37.6569 43.6569 39 42 39H33C31.3431 39 30 37.6569 30 36V18C30 16.3431 31.3431 15 33 15H42C43.6569 15 45 16.3431 45 18Z"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
            <defs>
              <clipPath id="clip0_668_43896">
                <rect width="48" height="48" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <h3
            class="text-medium font-bold text-white font-urbanist my-3 text-center"
          >
            10+
          </h3>
          <h3 class="text-xl font-normal text-white text-center">
            Years Trusted delivery partner in AI, product, and digital
            consulting
          </h3>
        </div>
      </div>

      <!-- Decorative Circles -->
      <div class="absolute top-0 right-0 opacity-10">
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
      <div class="absolute bottom-0 left-[10%] opacity-10">
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
      <div class="absolute top-0 left-0 opacity-10">
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
      <div class="absolute top-0 left-[30%] opacity-10">
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
                  <div
                    class="absolute left-[-40px] top-1/2 transform -translate-y-1/2 cursor-pointer z-20 swiper-button-prev"
                    aria-label="Previous testimonial"
                  >
                    <!-- Prev SVG -->
                    <svg
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
                    </svg>
                  </div>
                </div>

                <!-- Repeat slides for 5 items -->
              </div>

              <div
                class="absolute right-[-40px] top-1/2 transform -translate-y-1/2 cursor-pointer z-20 swiper-button-next" aria-label="Next testimonial"
                aria-label="Next testimonial"
              >
                <!-- Next SVG -->
                <svg
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
                </svg>
              </div>
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
    <!-- Our Offices Section -->
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





   <?php get_footer(); ?>