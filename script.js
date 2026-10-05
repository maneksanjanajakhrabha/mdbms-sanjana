function toggleMenu() {
    document.getElementById("navMenu").classList.toggle("show");
}

function bookNow() {
    alert("Thank you! Your appointment request has been received.");
}

// Navbar active link
const links = document.querySelectorAll("nav a");

links.forEach(link => {
    link.addEventListener("click", function () {
        links.forEach(item => item.classList.remove("active"));
        this.classList.add("active");
    });
});

