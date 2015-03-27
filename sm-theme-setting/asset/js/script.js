var upload_image_button=false;
jQuery(document).ready(function() {
    jQuery('.upload_image_button').click(function() {
        upload_image_button =true;
        formfieldID=jQuery(this).prev().attr("id");
     formfield = jQuery("#"+formfieldID).attr('name');
     tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
        if(upload_image_button==true){
                var oldFunc = window.send_to_editor;
                window.send_to_editor = function(html) {

                imgurl = jQuery('img', html).attr('src');
                jQuery("#"+formfieldID).val(imgurl);
                 tb_remove();
                window.send_to_editor = oldFunc;
                }
            }
                upload_image_button=false;
    });
});
function openTab(tabId) {
    	jQuery('.display_tabs').hide();
    	jQuery('#display_tab_'+tabId).show();
    	jQuery('.nav-tab-wrapper a').removeClass('nav-tab-active');
    	jQuery('.tab_'+tabId).addClass('nav-tab-active');
}