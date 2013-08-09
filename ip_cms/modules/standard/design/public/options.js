
var ipDesignOpenOptions = function(e) {
    e.preventDefault();
    $('.ipModuleDesign .ipsPreview .ipsFrame').attr('src', ip.baseUrl + '?ipDesignPreview=1');
    $('.ipModuleDesign .ipsPreview').show();

    $('.ipModuleDesign .ipsClosePreview').off().on('click', ipDesignCloseOptions);
}

var ipDesignCloseOptions = function(e) {
    e.preventDefault();
    $('.ipModuleDesign .ipsPreview').hide();
    $('.ipModuleDesign .ipsPreview .ipsFrame').attr('src', '');
}