const openBtn = document.getElementById("kycuBtn");
const modal = document.getElementById("loginModal");
const closeBtn = document.getElementById("closeLogin");

openBtn.addEventListener("click", () => {
  modal.style.display = "flex";
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});
document.addEventListener("DOMContentLoaded", () => { const searchButton = document.getElementById("search-flight-btn"); 
    searchButton.addEventListener("click", () => { alert("Kërkimi për fluturime është duke u kryer!"); }); });

    document.getElementById("whatsappButton").addEventListener("click", function() {
        const phoneNumber = "38346439492"; 
        const message = "Përshëndetje!"; 
        

        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
        
      
        window.open(whatsappUrl, "_blank");
    });

    document.querySelectorAll(".reserveButton").forEach(button => {
        button.addEventListener("click", function () {
            const phoneNumber = this.dataset.number;
            const message = "Dua të rezervoj këtë paketë!";
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, "_blank");
        });
    });
    
    const offerEndDate = new Date("2025-02-15T23:59:59"); 

    function updateTimer() {
        const now = new Date();
        const timeLeft = offerEndDate - now;
    
        if (timeLeft <= 0) {
            document.getElementById("offer-timer").innerHTML = "Oferta ka përfunduar!";
            clearInterval(timerInterval);
            return;
        }
    
        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
    
        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;
    }
    
    const timerInterval = setInterval(updateTimer, 1000);
    updateTimer();