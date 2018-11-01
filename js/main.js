window.onload = function() {
  // initialize navbar hover effects
  init_navbar();

  var episodePage = document.getElementsByClassName("page-episode");
  if (episodePage.length>0){
    // Listen for transcript button click
    set_transcript_button();
    // Add button to go back to top
    window.onscroll = function() {scrollFunction()};
    console.log("test");
  }

  // resize iframe as needed
  set_iframe_size()
  window.onresize = function(){
    set_iframe_size();
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
