
document.addEventListener('DOMContentLoaded', function () {
    // Star rating functionality
    const stars = document.querySelectorAll('#stars .star');
    window.selectedRating = 0;  // Move selectedRating to the global scope

    stars.forEach(star => {
        star.addEventListener('click', () => {
            window.selectedRating = star.getAttribute('data-value');  // Use window.selectedRating
            stars.forEach(s => {
                s.classList.remove('checked');
            });
            for (let i = 0; i < window.selectedRating; i++) {
                stars[i].classList.add('checked');
            }
        });
    });
});

function closePopupTrailer() {
    var popupInfo = document.querySelector('.popupINFO');
    var popupTrailer = document.querySelector('.popupTrailer');

    if (popupInfo) {
        var video = popupInfo.querySelector('video');
        popupInfo.style.display = 'none';
        video.pause();
    }

    if (popupTrailer) {
        var video = popupTrailer.querySelector('video');
        popupTrailer.style.display = 'none';
        video.pause();
    }

}

function stopVideo() {
    var video = document.getElementById('trailerVideo');
    video.pause();
}

function submitComment() {
    const comment = document.getElementById('comment').value;

    if (comment.trim() === '') {
        alert('Please write a review before submitting.');
        return;
    }

    if (window.selectedRating === 0) {
        alert('Please select a rating before submitting.');
        return;
    }

    const reviewSection = document.querySelector('.review-section');
    const newReview = document.createElement('div');
    newReview.className = 'review';

    const username = document.createElement('p');
    username.innerHTML = `<strong>@username</strong> just now`;

    const reviewText = document.createElement('p');
    reviewText.textContent = comment;

    const reviewRating = document.createElement('div');
    reviewRating.className = 'rating';
    reviewRating.innerHTML = '<span>' + '★'.repeat(window.selectedRating) + '☆'.repeat(5 - window.selectedRating) + '</span>';

    newReview.appendChild(username);
    newReview.appendChild(reviewText);
    newReview.appendChild(reviewRating);

    reviewSection.appendChild(newReview);

    // Clear the comment box and reset the rating
    document.getElementById('comment').value = '';
    const stars = document.querySelectorAll('#stars .star');
    stars.forEach(star => star.classList.remove('checked'));
    window.selectedRating = 0;
}






