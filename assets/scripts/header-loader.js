document.addEventListener('DOMContentLoaded', () => {
    const headerElement = document.getElementById('dynamic-header');

    if (headerImages && headerImages.length > 0) {
        let currentIndex = 0;

        // Apply the first background image
        headerElement.style.backgroundImage = `url(${headerImages[currentIndex]})`;
        headerElement.style.backgroundRepeat = 'no-repeat';
        headerElement.style.backgroundSize = 'cover';
        headerElement.style.backgroundPosition = 'center';

        // Optional: Cycle through images (example with interval)
        setInterval(() => {
            currentIndex = (currentIndex + 1) % headerImages.length;
            headerElement.style.backgroundImage = `url(${headerImages[currentIndex]})`;
        }, 5000); // Change image every 5 seconds
    } else {
        console.error('No images found for the header.');
    }
});
