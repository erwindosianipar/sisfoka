		</div>
	</div>

	<!-- Halaman di load dalam: {elapsed_time} detik -->

	<script src="<?= base_url('assets/js/style.js'); ?>"></script>
	<script src="<?= base_url('assets/js/lazysizes.min.js'); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			$('#summernote').summernote({
				prettifyHtml: false,
				toolbar: [
				['style', ['style']],
				['font', ['bold', 'underline', 'clear']],
				['fontname', ['fontname']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['table', ['table']],
				['insert', ['link', 'picture', 'video']],
				['view', ['fullscreen', 'codeview']],
				['highlight', ['highlight']]
				],
				callbacks: {
					onImageUpload: function(image) {
						uploadImage(image[0]);
					},
					onMediaDelete : function(target) {
						deleteImage(target[0].src);
					}
				}
			});

			function uploadImage(image) {
				var data = new FormData();
				data.append("image", image);
				$.ajax({
					url: "<?= site_url('admin/add/upload_image')?>",
					cache: false,
					contentType: false,
					processData: false,
					data: data,
					type: "POST",
					success: function(url) {
						$('#summernote').summernote("insertImage", url);
					},
					error: function(data) {
						console.log(data);
					}
				});
			}

			function deleteImage(src) {
				$.ajax({
					data: {src : src},
					type: "POST",
					url: "<?= base_url('admin/add/delete_image')?>",
					cache: false,
					success: function(response) {
						console.log(response);
					}
				});
			}

		});
	</script>
</body>
</html>