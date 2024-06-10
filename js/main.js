//Navigation bar effects on scroll
window.addEventListener("scroll", function(){
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

//Portfolio - Modal
const portofolioModals = document.querySelectorAll(".portofolio-model");
const imgCard = document.querySelectorAll(".img-card");
const portofolioCloseBtns = document.querySelectorAll(".portofolio-close-btn");

var portofolioModal = function (modalClick) {
    portofolioModals[modalClick].classList.add("active");
}

imgCard.forEach((imgCard, i) => {
    imgCard.addEventListener("click", () => {
        portofolioModal(i);
    });
});

portofolioCloseBtns.forEach((portofolioCloseBtn) => {
    portofolioCloseBtn.addEventListener("click", () => {
        portofolioModals.forEach((portofccoliomodalView) => {
            portofccoliomodalView.classList.remove("active");
        });
    });
});

//Website dark/Light theme
// const themeBtn = document.querySelector(".theme-btn");

// themeBtn.addEventListener("click", () => {
//     document.body.classList.toggle("dark-theme");
//     themeBtn.classList.toggle("sun");

//     localStorage.setItem("saved-theme", getCurrentTheme());
//     localStorage.setItem("saved-icon", getCurrentIcon());
// });

// const getCurrentTheme = () => document.body.classList.contains("dark-theme") ? "dark" : "light";
// const getCurrentIcon = () => themeBtn.classList.contains("sun") ? "sun" : "moon";

// const savedTheme = localStorage.getItem("saved-theme");
// const savedIcon = localStorage.getItem("saved-icon");

// if(savedTheme){
//     document.body.classList[savedTheme === "dark" ? "add" : "remove"]("dark-theme");
//     themeBtn.classList[savedIcon === "sun" ? "add" : "remove"] ("sun");
// }

// //Scroll to top button
// const scrollTopBtn = document.querySelector(".scrollToTop-btn");

// window.addEventListener("scroll", function(){
//     scrollTopBtn.classList.toggle("active", window.scrollY > 500);
// });

// scrollTopBtn.addEventListener("click", () => {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
// });

// //Navigation menu items active on page scroll
// window.addEventListener("scroll", () => {
//     const sections = document.querySelectorAll("section");
//     const scrollY = window.pageYOffset;

//     sections.forEach(current => {
//         let sectionHeight = current.offsetHeight;
//         let sectionTop = current.offsetTop - 0;
//         let id = current.getAttribute("id");

//         if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
//             document.querySelector(".nav-items a[href*=" + id + "]").classList.add("active");
//         }
//         else{
//             document.querySelector(".nav-items a[href*=" + id + "]").classList.remove("active");
//         }
//     };)
// });

//Responsive navigation menu toggle

//Scroll reveal animations 

//Common reveal options to create reveal animations

//Target elements, and specify options to create reveal animations 