window.onload = function() {
  init_navbar(); // initialize navbar hover effects
  set_iframe_size(); // resize iframe as needed
};

function init_navbar(){
  document.getElementById("nav-listen").addEventListener("mouseenter", navListenActive);
  document.getElementById("nav-listen").addEventListener("mouseleave", navListenInactive);
  document.getElementById("nav-about").addEventListener("mouseenter", navAboutActive);
  document.getElementById("nav-about").addEventListener("mouseleave", navAboutInactive);

  function navListenActive(){
    document.getElementById("nav-listen").classList.add("nav-item-active");
    document.getElementById("nav-about").classList.add("nav-item-minimized");
  }
  function navListenInactive(){
    document.getElementById("nav-listen").classList.remove("nav-item-active");
    document.getElementById("nav-about").classList.remove("nav-item-minimized");
  }
  function navAboutActive(){
    document.getElementById("nav-about").classList.add("nav-item-active");
    document.getElementById("nav-listen").classList.add("nav-item-minimized");
  }
  function navAboutInactive(){
    document.getElementById("nav-about").classList.remove("nav-item-active");
    document.getElementById("nav-listen").classList.remove("nav-item-minimized");
  }
}
