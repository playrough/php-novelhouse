let summaryBox = document.getElementById('book-summary-ells');
let moreBtn = document.getElementById('moreBtn');
let contentHeight = summaryBox.offsetHeight;

if (contentHeight <= 135) {
	moreBtn.style.display = 'none';
} else {
	summaryBox.classList.toggle('ells');
}

moreBtn.addEventListener('click', function (e) {
	summaryBox.classList.toggle('ells');
	if (e.target.innerText == 'Xem thêm') {
		e.target.innerText = 'Rút gọn';
	} else {
		e.target.innerText = 'Xem thêm';
	}
});
