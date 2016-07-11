jQuery(document).ready(function($) {
     $(document).on('click','#upload-btn',function(e) {
        var image = wp.media({
            title: 'Upload Image',
            multiple: false
        }).open().on('select', function(e){
            console.log('select was called');
            var uploaded_image = image.state().get('selection').first();
            console.log(uploaded_image);
            document.getElementById("widget-intro_widget-3-image_url").value = uploaded_image.toJSON().url;
        });
    });
});
