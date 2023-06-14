window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    var navbarText = document.getElementById('navbar-text');
    if (window.scrollY > 0) {
      navbar.classList.add('scrolled');
      navbarText.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
      navbarText.classList.remove('scrolled');
    }
  });