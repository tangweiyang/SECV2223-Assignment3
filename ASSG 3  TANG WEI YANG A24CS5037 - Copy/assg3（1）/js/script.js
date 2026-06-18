
document.addEventListener('DOMContentLoaded', () => {
    console.log("Portfolio Loaded Successfully");


    const currentPage = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll('nav ul li a');


    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.style.color = '#2196f3';
            link.style.borderBottom = '2px solid #2196f3';
        }
    });
});