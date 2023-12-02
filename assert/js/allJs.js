 AOS.init();
 
var swiper = new Swiper(".mySwiper", {
slidesPerView: 1,
spaceBetween: 30,
loop: true,
pagination: {
el: ".swiper-pagination",
clickable: true,
},
navigation: {
nextEl: ".swiper-button-next",
prevEl: ".swiper-button-prev",
},
});


// Get the button
let mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}

function showSweetAlert() {
Swal.fire({
title: 'Donation Submitted!',
text: 'Thank you for your donation!',
icon: 'success',
confirmButtonText: 'OK'
});
}

function showSweetAlert1() {
Swal.fire({
title: 'Enquiry Submitted!',
text: 'We will get back to you soon!',
icon: 'success',
confirmButtonText: 'OK'
});
}