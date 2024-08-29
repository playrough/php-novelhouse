let btnSidebar = document.querySelector('.header-sidebar-btn');
let sidebar = document.querySelector('.sidebar');
let icon = document.querySelector('.sidebar-icon');

btnSidebar.addEventListener('click', function () {
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'scripts/sidebar_process.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.onload = function () {
		if (xhr.status >= 200 && xhr.status < 300) {
			var response = JSON.parse(xhr.responseText);
			if (response.success) {
				sidebar.classList.toggle('closed');
				if (sidebar.classList.contains('closed')) {
					icon.src = 'assets/icons/align-left.svg';
				} else {
					icon.src = 'assets/icons/align-right.svg';
				}
			} else {
				console.error('Có lỗi xảy ra khi cập nhật trạng thái sidebar.');
			}
		} else {
			console.error('Lỗi HTTP: ' + xhr.status);
		}
	};

	xhr.onerror = function () {
		console.error('Lỗi Ajax: Yêu cầu không thể được gửi.');
	};

	var status = 'status=toggle';
	xhr.send(status);
});
