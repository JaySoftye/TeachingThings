
var mobileNavButton = document.getElementById("mobileNavButton");
var mobileMenu = document.getElementById("mobileMainNav");

  mobileNavButton.addEventListener("click", toggleMobileNav);

function toggleMobileNav() {
  mobileNavButton.classList.toggle("is-button-active");
  mobileMenu.classList.toggle("is-menu-active");
}

function toggle_visibility(id) {
  var e = document.getElementById(id);
    e.classList.toggle('contentActive');

      if(e.innerText == 'More Info')
        e.innerText = 'Show Less';
      else
        e.innerText = 'More Info';
}

function modal_visibility(id) {
  var e = document.getElementById(id);
    e.classList.toggle('is-active');
}

var elements = document.getElementsByClassName('noFormForYou');
var modal = document.getElementById('TeachingThingsContactForm');

var closeContactModal = function() {
  modal.classList.remove("is-active");
};

for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', closeContactModal, false);
}

document.getElementById("modalClose").addEventListener("click", function() {
  var modals = document.getElementsByClassName('modal');
  for (var i = 0; i < modals.length; i++) {
      modals[i].classList.remove("is-active");
  }
});

var jukebox = document.getElementById('jukebox');
window.addEventListener("scroll", function(){
  if(window.scrollY!=0){
    jukebox.classList.remove("is-removed");
  } else {
    jukebox.classList.add("is-removed");
  }
});
