const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.querySelector('.nav-links');

menuToggle.addEventListener('change', function() {
  if (this.checked) {
    navLinks.classList.add('open');
  } else {
    navLinks.classList.remove('open');
  }
});