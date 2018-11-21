// disable button(s) until page fully loaded
var button1 = document.getElementById("dropdown-season-order");
if(button1){
  button1.disabled = true;
}

// Initilize scroll detection
var lastScrollPos = window.pageYOffset || document.documentElement.scrollTop;

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
  var episode = document.querySelector(".episode-container");
  btn.addEventListener("click",function(){
    // console.log('button clicked'); // debug
    transcript.classList.remove("hidden");
    transcript.classList.add("shown");
    btn.classList.add("active");
    btn.setAttribute("title","");
    btn.style.cursor = "context-menu";
    btn.tabIndex = "-1";
    episode.classList.add("transcript-shown");
  });
}

// On episode page, trigger events on scroll
function scrollFunction() {

  // show back-to-top button
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    document.getElementById("btn-top").style.display = "block";
  } else {
    document.getElementById("btn-top").style.display = "none";
  }

  // add classes for sticky sidebar upon scroll for certain screens
  var scrollIndicatorElement = document.querySelector(".episode-container");
  if (document.body.scrollTop > 1450 || document.documentElement.scrollTop > 1450) {
    scrollIndicatorElement.classList.add("scrolled-far-down");
    var pos = window.pageYOffset || document.documentElement.scrollTop;
    if (lastScrollPos < 1600 && pos >= 1600){
      // scrolling down
      scrollIndicatorElement.classList.remove("scrolled-hide");
      scrollIndicatorElement.classList.add("scrolled-show");
    }
    else if (lastScrollPos >= 1600 && pos <= 1600){
      // scrolling up
      scrollIndicatorElement.classList.remove("scrolled-show");
      scrollIndicatorElement.classList.add("scrolled-hide");
    }
    // update scroll position
    lastScrollPos = pos <= 0 ? 0 : pos; // For Mobile or negative scrolling;
    // detect if close to the bottom footer
    // var distance = scrollBottom();
    var player = document.querySelector(".episode-player-container");
    var distance = getDistanceFromBottom(player);
     console.log(distance); // debug
    if (distance < 100){
      scrollIndicatorElement.classList.add("scrolled-near-bottom");
    } else {
      scrollIndicatorElement.classList.remove("scrolled-near-bottom");
    }
  }
  else {
    scrollIndicatorElement.classList.remove("scrolled-far-down");
    scrollIndicatorElement.classList.remove("scrolled-hide");
    scrollIndicatorElement.classList.remove("scrolled-show");
  }

}

// Find distance between bottom of player and bottom of document
function getDistanceFromBottom(element){
  var distance = Math.max( scrollBottom() + window.innerHeight - element.offsetTop - element.offsetHeight, 0 );
  return distance;
}

// Find distance from bottom of document
function scrollBottom(){
  var distance = Math.max(getDocumentHeight() - window.innerHeight - window.pageYOffset, 0);
  return distance;
}

// Get document height
function getDocumentHeight(){
  var body = document.body,
    html = document.documentElement;
  var height = Math.max( body.scrollHeight, body.offsetHeight,
    html.clientHeight, html.scrollHeight, html.offsetHeight );
  return height;
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
