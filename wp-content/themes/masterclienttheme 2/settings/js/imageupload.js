
var mediaUploader;
var currentSelBtn;

function onBtnNetrepUpload(e) {
	e.preventDefault();
	
	currentSelBtn = e.target;
	
	if(mediaUploader) {
		mediaUploader.open();
		return;
	}
	
	mediaUploader = wp.media.frames.file_frame = wp.media({
		title: 'Choose Image',
		button: {
			text: 'Choose Image'
		}, multiple: true });
	
	mediaUploader.on('select', function() {
		var attachments = mediaUploader.state().get('selection');
		
		// locate the correct input field
		const btnId = currentSelBtn.id;
		const fieldName = btnId.substring(4);
		
		const field = document.querySelector("input[name=" + fieldName + "]");
		
		const imageURLs = attachments.map(function(item) {
			const attachment = item.toJSON();
			
			return attachment.url;
		});
		
		field.value = imageURLs.join(",");
	});
	
	mediaUploader.open();
}

addEventListener("DOMContentLoaded", function() {
	const uploadBtns = document.querySelectorAll("button.netrep-upload");
	
	for(var index=0; index<uploadBtns.length; index++) {
		const uploadBtn = uploadBtns[index];
		
		uploadBtn.addEventListener('click', onBtnNetrepUpload);
	}
});
