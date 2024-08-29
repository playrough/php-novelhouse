// set background carousel
function setBackgroundCarousel(img) {
	const relativeImgSrc = img.src.replace(window.location.origin, '');
	document.querySelector('.carousel-pictures').style.backgroundImage = `url(${relativeImgSrc})`;
}

// Onclick to change image
function handleClick(img) {
	const index = parseInt(img.dataset.index);
	const position = parseInt(img.dataset.position);
	const img0 = document.querySelector('.carousel-pictures img[data-index="0"]');
	const img1 = document.querySelector('.carousel-pictures img[data-index="1"]');
	const img2 = document.querySelector('.carousel-pictures img[data-index="2"]');

	if (index === 1) {
		[img2.dataset.index, img0.dataset.index] = ['1', '2'];
	} else if (index === 2) {
		[img1.dataset.index, img0.dataset.index] = ['2', '1'];
	}

	img.dataset.index = '0';
	setBackgroundCarousel(img);

	document.querySelectorAll('.carousel-desc-item').forEach((desc, i) => {
		desc.classList.toggle('on', i === position);
	});
}

// Automatically change image
function autoClick() {
	const imgLeft = document.querySelector('.carousel-pictures img[data-index="1"]');
	handleClick(imgLeft);
}

let intervalId;
let setTimeoutId;

function slideCarousel() {
	// Automatically change images every 6 seconds
	const startAutoSlide = () => (intervalId = setInterval(autoClick, 6 * 1000));

	// Clear interval and setTimeout
	const stopAutoSlide = () => clearInterval(intervalId) || clearTimeout(setTimeoutId);

	// Add event listener onclick for every image
	const listImg = document.querySelectorAll('.carousel-pictures img[data-index]');

	listImg.forEach(img => {
		img.addEventListener('click', () => {
			handleClick(img);

			// When user clicks on the image, the automatically function will be removed
			stopAutoSlide();

			// Start the new automatically function after 2 seconds
			setTimeoutId = setTimeout(startAutoSlide, 2 * 1000);
		});
	});

	setBackgroundCarousel(listImg[0]);
	startAutoSlide();
}

slideCarousel();
