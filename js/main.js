window.onload = function() {
  // initialize navbar hover effects
  init_navbar();

  // Listen for transcript button click
  set_transcript_button();

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
  iframe.style.height = width + "px";
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
