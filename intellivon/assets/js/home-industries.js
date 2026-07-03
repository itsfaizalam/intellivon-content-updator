
const imageElement = document.querySelector('img[alt="industries"]');
const accordionHeaders = document.querySelectorAll('.accordion-header');

function setActiveAccordion(accordionItem) {
  accordionHeaders.forEach((header) => {
    const item = header.closest('.accordion-item');
    const content = item.querySelector('.accordion-content');
    const toggleIcon = header.querySelector('.accordion-toggle');
    const defaultText = header.querySelector('.default-text');
    const activeHeading = header.querySelector('.active-heading');

    if (item === accordionItem) {
      // Show active heading, hide default text
      defaultText.style.display = 'none';
      activeHeading.style.display = 'flex';

      // Expand content
      content.style.maxHeight = content.scrollHeight + 'px';
      toggleIcon.classList.add('rotate-0');

      // Add active class to header (optional for styling)
      header.classList.add('active');

      // Change image
      const newImgSrc = item.getAttribute('data-img');
      if (newImgSrc) {
        fadeImageChange(imageElement, newImgSrc);
      }
    } else {
      // Show default text, hide active heading
      defaultText.style.display = 'block';
      activeHeading.style.display = 'none';

      // Collapse content
      content.style.maxHeight = null;
      toggleIcon.classList.remove('rotate-0');

      header.classList.remove('active');
    }
  });
}

// Initial default open accordion - Healthcare (first one)
document.addEventListener('DOMContentLoaded', () => {
  const firstAccordion = document.querySelector('.accordion-item');
  if (firstAccordion) {
    setActiveAccordion(firstAccordion);
  }
});

// Event listeners
accordionHeaders.forEach((header) => {
  header.addEventListener('click', () => {
    const accordionItem = header.closest('.accordion-item');
    const content = accordionItem.querySelector('.accordion-content');
    const toggleIcon = header.querySelector('.accordion-toggle');

    if (content.style.maxHeight) {
      // Closing currently open accordion
      setActiveAccordion(null);

      fadeImageChange(imageElement, 'https://stratym.com/wp-content/themes/stratym/assets/images/industries.webp');
    } else {
      // Open clicked accordion
      setActiveAccordion(accordionItem);
    }
  });
});

function fadeImageChange(imgEl, newSrc) {
  imgEl.classList.add('fade-out');

  function onTransitionEnd(event) {
    if (event.propertyName === 'opacity' && imgEl.classList.contains('fade-out')) {
      imgEl.removeEventListener('transitionend', onTransitionEnd);
      imgEl.src = newSrc;

      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          imgEl.classList.remove('fade-out');
        });
      });
    }
  }

  imgEl.addEventListener('transitionend', onTransitionEnd);
}