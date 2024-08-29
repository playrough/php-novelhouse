const itemList = Array.from(document.querySelector('.showcase-bookshelf .row').children);
const paginationList = document.querySelector('.pagination-list');

function createPaginationItem(page, icon, itemsPerPage, additionalClass = '') {

	let itemHTML = `<li class="noselect pagination-item btn ${additionalClass}" onclick="changePage(${page},${itemsPerPage})">`;

	if (icon) {
		itemHTML += `<img src="assets/icons/${icon}"/>`;
	} else {
		itemHTML += `${page}`;
	}

	itemHTML += `</li>`;
	return itemHTML;

}

function renderPagination(currentPage, totalPages, itemsPerPage) {

	let paginationHTML = '';

	if (currentPage > 1) {
		paginationHTML += createPaginationItem(currentPage - 1, 'chevron-left.svg', itemsPerPage);
	}

	for (let i = 1; i <= totalPages; i++) {
		paginationHTML += createPaginationItem(i, null, itemsPerPage, i === currentPage ? 'active' : '');
	}

	if (currentPage < totalPages) {
		paginationHTML += createPaginationItem(currentPage + 1, 'chevron-right.svg', itemsPerPage);
	}

	paginationList.innerHTML = paginationHTML;
	
}

function renderItems(page, itemsPerPage) {

	if (itemList.length <= itemsPerPage) {
		itemList.forEach(item => {
			item.style.display = 'block';
		});
		return;
	}

	const startIndex = itemsPerPage * (page - 1);
	const endIndex = Math.min(startIndex + itemsPerPage - 1, itemList.length - 1);

	itemList.forEach(item => {
		item.style.display = 'none';
	});

	const itemsToDisplay = Array.from(itemList).slice(startIndex, endIndex + 1);

	itemsToDisplay.forEach(item => {
		item.style.display = 'block';
	});

	const totalPages = Math.ceil(itemList.length / itemsPerPage);
	renderPagination(page, totalPages, itemsPerPage);

}

function changePage(page, itemsPerPage) {
	renderItems(page, itemsPerPage);
}

function initializePagination(itemsPerPage) {
	renderItems(1, itemsPerPage);
}
