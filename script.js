// ANIMASI SKILL BAR (FIX DESKTOP)
const bars = document.querySelectorAll(".bar span");

function showBars() {
  bars.forEach(bar => {
    const rect = bar.getBoundingClientRect();

    if(rect.top < window.innerHeight - 50){
      bar.style.width = bar.dataset.width;
    }
  });
}

// jalan saat load
window.addEventListener("load", showBars);

// jalan saat scroll
window.addEventListener("scroll", showBars);


// FORM
document.getElementById("contactForm").addEventListener("submit", function(e){
  e.preventDefault();
  alert("Pesan berhasil dikirim! (Simulasi)");
  this.reset();
});
