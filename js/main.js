// disable button(s) until page fully loaded
document.getElementById("dropdown-season-order").disabled = true;

// After page is loaded, allow interactivity
window.onload = function() {
  // initialize navbar hover effects
  init_navbar();

  // run scripts on episode page
  var episodePage = document.getElementsByClassName("page-episode");
  if (episodePage.length>0){
    // Listen for transcript button click
    set_transcript_button();
    // Add button to go back to top
    window.onscroll = function() {scrollFunction()};
  }

  // run scripts on season page
  var seasonsPage = document.getElementsByClassName("page-seasons");
  if (seasonsPage.length>0){
    // Listen for order button click
    set_season_order_button();
  }

  // run scripts specific to Home and Episode pages
  var homePage = document.getElementsByClassName("home");
  if (homePage.length>0 || episodePage.length>0){
    // resize iframe as needed
    set_iframe_size()
    window.onresize = function(){
      set_iframe_size();
    }
  }

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

function set_iframe_size(){
  var width = document.getElementById('episode-primary').offsetWidth;
  var iframe = document.querySelector('.episode-primary iframe');
  var episodePage = document.getElementsByClassName("page-episode");
  if (episodePage.length>0 && screen.width <= 640){
    iframe.style.height = "300px";
  }
  else {
    iframe.style.height = width + "px";
  }
}

function set_transcript_button(){
  var btn = document.getElementById("transcript-button-click");
  var transcript = document.getElementById("transcript-container");
  btn.addEventListener("click",function(){
    // console.log('button clicked'); // debug
    transcript.classList.remove("hidden");
    transcript.classList.add("shown");
    btn.classList.add("active");
    btn.setAttribute("title","");
    btn.style.cursor = "context-menu";
    btn.tabIndex = "-1";
  });
}

function scrollFunction() {
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        document.getElementById("btn-top").style.display = "block";
    } else {
        document.getElementById("btn-top").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// On season order selection, set appropriate class
function set_season_order_button(){
  document.getElementById("dropdown-season-order").disabled = false;
  var select = document.getElementById("dropdown-season-order");
  var seasons = document.getElementById("seasons-list");
  select.addEventListener("change", function(){
    var order = this.value;
    switch (order) {
      case "oldest":
        seasons.classList.remove("newest-first");
        seasons.classList.add("oldest-first");
        break;
      case "newest":
        seasons.classList.remove("oldest-first");
        seasons.classList.add("newest-first");
        break;
    }
  });
}
