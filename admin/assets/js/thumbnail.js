document.getElementById('cover_image').addEventListener('change', function (event) {
	var file = event.target.files[0];
	if (file) {
		var reader = new FileReader();
		reader.onload = function (e) {
			var thumbnailContainer = document.getElementById('thumbnail-container');
			thumbnailContainer.innerHTML = '';
			var imgElement = document.createElement('img');
			imgElement.src = e.target.result;
			imgElement.classList.add('thumbnail');
			thumbnailContainer.appendChild(imgElement);
		};
		reader.readAsDataURL(file);
	}
});
