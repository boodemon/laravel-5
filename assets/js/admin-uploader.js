var base_path = '/saimok/laravel-5';
var uploader = new plupload.Uploader({
	runtimes : 'html5,flash,silverlight,html4',
	browse_button : 'btn-select', // you can pass an id...
	container: document.getElementById('container'), // ... or DOM Element itself
	url : base_path + '/admin/upload/action',
	flash_swf_url : '/assets/lib/plupload/js/Moxie.swf',
	silverlight_xap_url : '/assets/lib/plupload/js/Moxie.xap',
	
	filters : {
		max_file_size : '10mb',
		mime_types: [
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Zip files", extensions : "zip"}
		]
	},
	init: {
		PostInit: function() {
			document.getElementById('btn-upload').onclick = function() {
				uploader.start();
				return false;
			};
		},	
		FilesAdded: function(up, files) {
			plupload.each(files, function(file) {
				preview.showImagePreview( file ,file.id);
			});
			preview.removeImagePreview();
		},

		UploadProgress: function(up, file) {
			console.log('File ID : '+file.id);
			document.getElementById('thumbs-'+file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
		},

		Error: function(up, err) {
			document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
		},
		UploadComplete: function(up, files) {
			window.location.reload(true);
			console.log('Upload Complete');
		}
	},
	multipart_params: {
		_token : $("#_token").val(),'btn-multiupload':''
	},
	
});
preview = {	
	showImagePreview   : function( file , id) {
		var item = $( '<li id="thumbs-'+ id + '"><b></b><a href="'+ id +'" class="color-red del-preview glyphicon glyphicon-off"></a></li>' ).prependTo( '#gallery .preview' );
		var image = $( new Image() ).appendTo(item);
		var preloader = new mOxie.Image();
		preloader.onload = function() {
			preloader.downsize( 100, 100 );
			image.prop({ "src": preloader.getAsDataURL(),'id':id,'class':'img-preview'} );
		};
		preloader.load( file.getSource() );
	},
			
	removeImagePreview	:	function (){
		$('.del-preview').on('click',function(e){
			e.preventDefault();
			var thumb  = $('#thumbs-' + $(this).attr('href'));
			thumb.remove();
		});
	}
}
uploader.init();
