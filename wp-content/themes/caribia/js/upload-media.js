jQuery(document).ready(function($) {
    function addUploadMediaButtonAndUpdateFieldOnClick(buttonId, fieldId) {
        $(document).on('click', buttonId, function(e) {
            var image = wp.media({
                title: 'Upload Image',
                multiple: false
            }).open().on('select', function(e){
                var uploaded_image = image.state().get('selection').first();
                document.getElementById(fieldId).value = uploaded_image.toJSON().url;
            });
        });
    }
    addUploadMediaButtonAndUpdateFieldOnClick('#upload-btn-top-image', 'widget-intro_widget-4-top_image_url');
    addUploadMediaButtonAndUpdateFieldOnClick('#upload-btn-bottom-image', 'widget-intro_widget-4-bottom_image_url');
});