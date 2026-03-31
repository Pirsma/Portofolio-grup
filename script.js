const bars = document.querySelectorAll(".bar span");

window.addEventListener("scroll", () => {

bars.forEach(bar => {

const rect = bar.getBoundingClientRect();

if(rect.top < window.innerHeight){

bar.style.width = bar.dataset.width;

}

});

});