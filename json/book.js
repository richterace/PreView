function showPopup(imageSrc, title, videoSrc, description, mainCast, director, writer, producer, releasedBy) {
    const videoElement = document.querySelector('.popupTrailer .video-container video');
    const videoSource = videoElement.querySelector('source');

    videoSource.src = videoSrc;
    videoElement.load(); // Reload the video
    videoElement.play(); // Start playing the video

    document.querySelector('.popupTrailer .content h1').innerText = title;
    document.querySelector('.popupTrailer .description').innerText = description;
    document.querySelector('.popupTrailer .credits').innerHTML = `
        <p><strong>Main Cast:</strong> ${mainCast}</p>
        <p><strong>Director:</strong> ${director}</p>
        <p><strong>Writer:</strong> ${writer}</p>
        <p><strong>Film Producer:</strong> ${producer}</p>
        <p><strong>Released by:</strong> ${releasedBy}</p>
    `;
    document.querySelector('.popupTrailer').style.display = 'block';

    // Store the imageSrc and title in data attributes
    document.querySelector('.buy-tickets-btn').dataset.imageSrc = imageSrc;
    document.querySelector('.buy-tickets-btn').dataset.title = title;
    document.getElementById('movieTitleInput').value = title;
}

function showMovieInfo(imageSrc, title, videoSrc, description, mainCast, director, writer, producer, releasedBy, details, tags) {
    const videoElement = document.querySelector('.popupINFO .video-container video');
    const videoSource = videoElement.querySelector('source');

    videoSource.src = videoSrc;
    videoElement.load(); // Reload the video
    videoElement.play(); // Start playing the video

    document.querySelector('.popupINFO .content h1').innerText = title;
    document.querySelector('.popupINFO .details').innerText = details;
    document.querySelector('.popupINFO .description').innerText = description;
    document.querySelector('.popupINFO .credits').innerHTML = `
        <p><strong>Main Cast:</strong> ${mainCast}</p>
        <p><strong>Director:</strong> ${director}</p>
        <p><strong>Writer:</strong> ${writer}</p>
        <p><strong>Film Producer:</strong> ${producer}</p>
        <p><strong>Released by:</strong> ${releasedBy}</p>
    `;

    const tagsContainer = document.querySelector('.popupINFO .tags');
    tagsContainer.innerHTML = '';
    tags.forEach(tag => {
        const tagElement = document.createElement('span');
        tagElement.innerText = tag;
        tagsContainer.appendChild(tagElement);
    });

    document.querySelector('.popupINFO').style.display = 'block';

    // Store the imageSrc and title in data attributes
    document.querySelector('.buy-tickets-btn').dataset.imageSrc = imageSrc;
    document.querySelector('.buy-tickets-btn').dataset.title = title;
}

function closeForm() {
    document.querySelector('.container').style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function () {
    const seats = document.querySelectorAll('.seat');

    seats.forEach(seat => {
        seat.addEventListener('click', function () {
            this.classList.toggle('clicked');
        });
    });
});





const seat_number = new Set();
const pricePerSeat = 400; // Example price per seat in PHP

function toggleSeat(seatElement) {
    const seatId = seatElement.id;
    console.log('Toggling seat:', seatId);

    if (seat_number.has(seatId)) {
        seat_number.delete(seatId);
        seatElement.classList.remove('selected');
    } else {
        seat_number.add(seatId);
        seatElement.classList.add('selected');
    }

    updateSelectedSeats();
    updateTotalPrice();
}

function updateSelectedSeats() {
    const selectedSeats = Array.from(seat_number).join(',');
    document.getElementById('selected-seats').innerText = selectedSeats || 'None';
    document.getElementById('seat_number').value = selectedSeats;
}

function updateTotalPrice() {
    const totalPrice = seat_number.size * pricePerSeat;
    document.getElementById('total_price_display').innerHTML = '&#8369;' + totalPrice.toFixed(2);
    document.getElementById('total_price').value = totalPrice.toFixed(2);
}

document.addEventListener('DOMContentLoaded', function () {
    const buyTicketsBtn = document.querySelector('.buy-tickets-btn');
    const popupTrailer = document.querySelector('.popupTrailer');
    const popupContainer = document.getElementById('popupContainer');
    const popupImage = document.getElementById('popupImage');
    const popupImage2 = document.getElementById('popupImage2');
    const popupTitle = document.querySelector('#popupContainer h2');

    buyTicketsBtn.addEventListener('click', function () {
        const imageSrc = this.dataset.imageSrc;
        const title = this.dataset.title;

        popupTrailer.style.display = 'none';
        popupContainer.style.display = 'block';

        popupImage.src = imageSrc;
        popupImage2.src = imageSrc;
        popupTitle.innerText = title;
    });

    window.closeForm = function () {
        popupContainer.style.display = 'none';
    };
});

// Initial state for popupContainer to be hidden
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('popupContainer').style.display = 'none';
});


// animation intro-bg
let currentIndex = 0;
const slides = document.querySelectorAll('.intro-bg');

function showNextSlide() {
    slides[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add('active');
}

setInterval(showNextSlide, 6000);