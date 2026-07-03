// Toggle Sidebar
function toggleSidebar() {
    document.querySelector(".sidebar").classList.toggle("open");
  }
  
  // Scroll effect on header
  window.addEventListener("scroll", () => {
    const header = document.querySelector(".header-wrapper");
    if (window.scrollY > 700) {
      header?.classList.add("bg-white", "border-zinc-200", "scrolled");
    } else {
      header?.classList.remove("bg-white", "border-zinc-200", "scrolled");
    }
  });
  