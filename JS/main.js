
// Navbar Auto Hide
let navBar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function(a){
  a.addEventListener("click", function(){
    navCollapse.classList.remove("show");
  })
})





// Typed JS Part
var typed = new Typed('#typed', {
  strings: ['Website Development 🥰','Network Administration 😎','Data Analysis 🤩','Ethical Hacking 🧑‍💻','System Administration ❤️.'],
  typeSpeed: 50,
  backSpeed: 50,
  loop: true
});

// ##### Counter Design #####
document.addEventListener("DOMContentLoaded",() =>{
  function counter(id,start,end,duration){
      let obj = document.getElementById(id),
      current = start,
      range = end - start,
      increment = end > start ? 1 : -1,
      step = Math.abs(Math.floor(duration / range)),
      timer = setInterval(() =>{
          current += increment;
          obj.textContent = current;
          if(current == end){
              clearInterval(timer);
          }
      }, step);
  }
  counter("count1",0,100,10000);
  counter("count2",0,50,10000);
  counter("count3",0,20,10000);
  counter("count4",0,30,10000);
})


// ##### Slick Slider Design #####
$(document).ready(function() {
$('.customer-logos').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed:1800,
    arrows: false,
    dots:false,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});


// // Handling form submission
// document.getElementById('contactForm').addEventListener('submit', function (event) {
//   event.preventDefault();
//   const formData = new FormData(event.target);
//   const name = formData.get('name');
//   const email = formData.get('email');
//   const message = formData.get('message');

//   // Perform validation and send the data to the server or handle it as needed
//   // Example:
//   console.log(`Name: ${name}\nEmail: ${email}\nMessage: ${message}`);

//   // Clear form inputs after submission
//   event.target.reset();
// });