document.querySelectorAll('ul li a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelectorAll('.section').forEach(section => section.classList.remove('active'));
        document.getElementById(this.dataset.target).classList.add('active');
    });
});

function navigateToNowShowing() {
    var nowShowingLink = document.querySelector('[data-target="now-showing-main"]');
    if (nowShowingLink) {
        nowShowingLink.click();
    }
}

function navigateToUpcomingMovies() {
    var upcomingMoviesLink = document.querySelector('[data-target="upcoming-movies-main"]');
    if (upcomingMoviesLink) {
        upcomingMoviesLink.click();
    }
}

function navigateToStreamingSoon() {
    var streamingSoonLink = document.querySelector('[data-target="streaming-soon-main"]');
    if (streamingSoonLink) {
        streamingSoonLink.click();
    }
}


//For slideshow
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 1000); // Change image every 2 seconds
}


//for menu color when click:

document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll("nav ul li a");

    navLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault();

            // Remove 'active' class from all links
            navLinks.forEach(function(item) {
                item.classList.remove("active");
            });

            // Add 'active' class to the clicked link
            link.classList.add("active");

            // Scroll to the target element if needed
            const target = link.getAttribute("data-target");
            if (target) {
                document.getElementById(target).scrollIntoView({
                    behavior: "smooth"
                });
            }
        });
    });
});
