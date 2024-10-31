jQuery( document ).ready(function() {
	
    if(CF7PDF_DATA.CF7PDF_array_multipdf=='attach_custom_pdf' || CF7PDF_DATA.CF7PDF_array_multipdf=='boths_pdf'){
    	jQuery("#ifYess").show();
    }
    jQuery("input[name='attach_pdf']").change(function () {
    	if (jQuery("#attachss_custom_pdf").is(":checked")) {
            jQuery("#ifYess").show();
        } else if(jQuery("#both_pdf").is(":checked")) {
            jQuery("#ifYess").show();
        }else{
        	jQuery("#ifYess").hide();
        }
    });
});