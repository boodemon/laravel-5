var preview = {
	    showImagePreview   : function( file , id) {
		var item = $( '<li id="thumbs-'+ id + '"><a href="'+ id +'" class="color-red del-preview glyphicon glyphicon-off"></a></li>' ).prependTo( gallery.upload_preview );
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
	},

}

var gallery = {
	contain_id 		: 'gallery',
	upload_url 		: '',
	select_button 	: '',
	flash_swf_url	: "/assets/lib/plupload/js/Moxie.swf",
	upload_preview 	: '#' + this.contain_id + ' .preview',
	uploader : function(){
		 var uploader = new plupload.Uploader({
				runtimes: "html5,flash",
				url: this.upload_url,
				drop_element: this.contain_id,
				browse_button: this.select_button,
				container: this.contain_id,
				flash_swf_url: this.flash_swf_url,
				urlstream_upload: true
			 });
			 
		uploader.bind( "FilesAdded", this.handlePluploadFilesAdded );
        uploader.init();

	},
	
    handlePluploadFilesAdded : function ( uploader, files ) {
		for ( var i = 0 ; i < files.length ; i++ ) {
			preview.showImagePreview( files[ i ] ,'img-'+i);
		}
		preview.removeImagePreview();
    }
			
};	