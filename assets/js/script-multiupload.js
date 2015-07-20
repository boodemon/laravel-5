var multiupload = function(){
	console.log('Multiple upload');
	if($('.multiupload').length > 0){
		$('.multiupload').each(function(i){
			var contain_id = $(this).attr('id');
			var upload_url = $(this).attr('upload-url');
			var dom = 	{
							uploader: $( "#" + contain_id ),
							uploads	: $( "#" + contain_id + " .preview" )
						};
						console.log('Multiple upload true [ID'+ contain_id +']');
			 var uploader = new plupload.Uploader({
					runtimes: "html5,flash",
					url: upload_url,
					drop_element: contain_id,
					browse_button: "btn-select",
					container: contain_id,
					flash_swf_url: "./asset/lib/plupload-2.1.2/js/Moxie.swf",
					urlstream_upload: true
			 });
			 
            uploader.bind( "PostInit", handlePluploadInit );
            uploader.bind( "FilesAdded", handlePluploadFilesAdded );
            uploader.init();
			
            function handlePluploadInit( uploader, params ) {

                console.log( "Initialization complete." );

                console.log( "Drag-drop supported:", !! uploader.features.dragdrop );

            }
			
            function handlePluploadInit( uploader, params ) {

                console.log( "Initialization complete." );

                console.log( "Drag-drop supported:", !! uploader.features.dragdrop );

            }
            function handlePluploadFilesAdded( uploader, files ) {

                console.log( "Files selected." );

                // Show the client-side preview using the loaded File.
                for ( var i = 0 ; i < files.length ; i++ ) {

                    showImagePreview( files[ i ] ,'img-'+i);

                }
				removeImagePreview();

            }
            function showImagePreview( file , id) {
                var item = $( '<li id="thumbs-'+ id + '"><a href="'+ id +'" class="color-red del-preview glyphicon glyphicon-off"></a></li>' ).prependTo( dom.uploads );
                var image = $( new Image() ).appendTo(item);
                var preloader = new mOxie.Image();
                preloader.onload = function() {
                    preloader.downsize( 100, 100 );
                    image.prop({ "src": preloader.getAsDataURL(),'id':id,'class':'img-preview'} );
                };
                preloader.load( file.getSource() );

            }
			
			function removeImagePreview(){
				$('.del-preview').on('click',function(e){
					e.preventDefault();
					var thumb  = $('#thumbs-' + $(this).attr('href'));
					thumb.remove();
				});
			}
		});
	}
};

var gallery = {
	contain_id 		: 'gallery',
	upload_url 		: '',
	select_button 	: '',
	flash_swf_url	: "./asset/lib/plupload-2.1.2/js/Moxie.swf",
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
		console.log( "Files selected." );
		for ( var i = 0 ; i < files.length ; i++ ) {
			this.showImagePreview( files[ i ] ,'img-'+i);
		}
		this.removeImagePreview();
    },
			
    showImagePreview   : function( file , id) {
		var item = $( '<li id="thumbs-'+ id + '"><a href="'+ id +'" class="color-red del-preview glyphicon glyphicon-off"></a></li>' ).prependTo( this.upload_preview );
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
};