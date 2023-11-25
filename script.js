// Search Box 

let searchbtn = document.querySelector('#Search-btn');
let searchclose = document.querySelector('#Search-close');
let searchbox = document.querySelector('.Search-box');
let sectionfirst = document.querySelector('#section-first')

searchbtn.onclick = function () {

    searchbox.classList.add('active');
    sectionfirst.classList.add('active');

}
searchclose.onclick = function () {

    sectionfirst.classList.remove('active');
    searchbox.classList.remove('active');
}


// Silder 

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1, // Number of slides per view
  spaceBetween: 10, // Space between each slide
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});


// Search bar
$(document).ready(function(){
  $("#Search-box-").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#products").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});