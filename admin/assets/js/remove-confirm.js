let btnRemoveElements = document.querySelectorAll('.btn-remove');

btnRemoveElements.forEach(btnRemove => {
	btnRemove.addEventListener('click', e => {
		var answer = confirm('Bạn có chắc muốn xóa ?');
		if (!answer) {
			e.preventDefault();
		}
	});
});
