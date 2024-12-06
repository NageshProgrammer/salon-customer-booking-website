function toggleOptions() {
    var options = document.getElementById("options");
    options.style.display = options.style.display === "none" ? "block" : "none";
  }
  
  function selectOption(option) {
    var select = document.querySelector(".dropdown-select");
    select.innerHTML = option;
    toggleOptions();
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    // Smooth scroll behavior for anchor links
    const scrollLinks = document.querySelectorAll('.scroll-link');
  
    scrollLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
  
        const targetId = link.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
  
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop,
            behavior: 'smooth'
          });
        }
      });
    });
  
    // Scroll down button functionality
    const scrollDownButton = document.getElementById('appointment-button');
    const appointmentSection = document.getElementById('appointment-section');
  
    if (scrollDownButton && appointmentSection) {
      scrollDownButton.addEventListener('click', () => {
        window.scrollTo({
          top: appointmentSection.offsetTop,
          behavior: 'smooth'
        });
      });
    }
  
    function toggleOptions() {
      const options = document.getElementById('options');
      options.style.display = options.style.display === 'block' ? 'none' : 'block';
    }
  
    function selectOption(option) {
      const dropdownSelect = document.querySelector('.dropdown-select');
      dropdownSelect.textContent = option;
      toggleOptions();
    }
  });